<?php
App::uses('AppController', 'Controller');
App::uses('ExamsController', 'Controller');
/**
 * Students Controller
 *
 * @property Student $Student
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function add_students ($exam_id) {
		$exam = new ExamsController();
		$exam_details = $exam->exam_all_data($this->request->data['Student']['exam_id']);
		$this->set(compact('exam_details'));

		if($this->request->is('post')) {
			AuthComponent::_setTrace($this->request->data);

			$mail = $this->request->data['Student']['email'];
			$roll = $this->request->data['Student']['roll'];
			if($this->_send_mail_to_student($mail, $roll, $exam_details)) {
				$this->Student->save($this->request->data);
			}
		}
	}

	private function _send_mail_to_student($mail, $roll, $exam_details) {
		$login_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "admin";
		$subject = "Invitation for Online Quiz";
		$body = "";

		$body .= '<html>';
		$body .= '  <body>';
		$body .= '      <div style="width: 700px; margin:0 auto; border: 2px solid #ededed; border-radius: 7px;">';
		$body .= '          <div style="padding: 20px;">';
		$body .= '              <strong style="font-size: 20px;">Hello, ' . $roll . ' </strong>';
		$body .= '              <br><br>';
		$body .= '';
		$body .= '              <p style="font-size: 15px;">Your password is: <strong>' .  $exam_details . '</strong> .</p>';
		$body .= '              <a style="font-size: 15px;" href="' . $login_link . '">Follow This Link</a>';
		$body .= '              <br><br>';
		$body .= '              <p style="font-size: 15px;">If you don\'t know anything about this email. Please just ignore it.';
		$body .= '              <br><br><br>';
		$body .= '              <p style="font-size: 20px;">Cordially,<br/>';
		$body .= '              <strong style="font-size: 17px;">Online Quiz(KUET) Team</strong>';
		$body .= '              <br><br>';
		$body .= '              <img src="' . $this->webroot . 'img/logo_2.png" alt="Logo" />';
		$body .= '              <br><br>';
		$body .= '          </div>';
		$body .= '      </div>';
		$body .= '  </body>';
		$body .= '</html>';

		$plain_body = "Your password is: $exam_details. ";
		$plain_body .= "<a target=\"_blank\" href=\"$login_link\">Login now</a>";

		if($this->send_mail($mail, $roll, $subject, $body, $plain_body)) {
			return true;
		} else {
			return false;
		}
	}
}
