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
		$exam_details = $exam->exam_all_data($exam_id);
		$this->set(compact('exam_details'));

		if($this->request->is('post')) {
			$this->request->data['Student']['exam_id'] = $exam_id;
			$mail = $this->request->data['Student']['email'];
			$roll = $this->request->data['Student']['roll'];
			$mobile = str_replace('-', '', str_replace('+880 ', '0', $this->request->data['Student']['mobile']));
			$this->request->data['Student']['mobile'] = $mobile;

			$this->_send_mail_to_student($mail, $roll, $exam_details);

			$quiz_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "exams/start_quiz/" . $exam_details['Exam']['id'];
			$text = "";
			$text .= "Join the quiz on " . $exam_details['Exam']['subject'] . '. By: ' . $exam_details['Teacher']['name'] . 'Time: ' . date_format(date_create($exam_details['Exam']['starting_at']),'d M, H:i');
			//$text .= $quiz_link;
			//$text .= ' . Password: ' .  $exam_details['Exam']['password'] . '.';
			//$sms_sent = $this->send_sms($mobile, $text);
			$notify_error = 0;
			/*if(empty($sms_sent['success'])) {
				$notify_error = 1;
			}*/

			if($this->Student->save($this->request->data)) {
				if(!$notify_error) {
					$this->Session->setFlash(__('Student Added and notified.'), 'default', array('class' => 'success'));
				} else {
					$this->Session->setFlash(__('Student Added but could not be notified.'), 'default', array('class' => 'error'));
				}
			} else {
				$this->Session->setFlash(__('Student could not be added.'), 'default', array('class' => 'error'));
			}
			return $this->redirect(array('controller'=>'students', 'action' => 'add_students', $exam_id));
		}
	}

	public function delete_student ($id) {
		$this->Student->id = $id;
		if (!$this->Student->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		$this->Student->recursive = -1;
		$student_data = $this->Student->findById($id);

		$this->request->allowMethod('post', 'delete');
		if ($this->Student->delete()) {
			$this->Session->setFlash(__('Student Deleted.'), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('Student can\'t be deleted right now.'), 'default', array('class' => 'error'));
		}
		return $this->redirect(array('action' => 'add_students', $student_data['Student']['exam_id']));
	}

	private function _send_mail_to_student($mail, $roll, $exam_details) {
		$login_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "exams/start_quiz/" . $exam_details['Exam']['id'];
		$subject = "Invitation for Online Quiz";
		$body = "";

		$body .= '<html>';
		$body .= '  <body>';
		$body .= '      <div style="width: 700px; margin:0 auto; border: 2px solid #ededed; border-radius: 7px;">';
		$body .= '          <div style="padding: 20px;">';
		$body .= '              <strong style="font-size: 20px;">Hello, ' . $roll . ' </strong>';
		$body .= '              <br><br>';
		$body .= '				You have been invited to join the quiz on ' . $exam_details['Exam']['subject'] . '. By: ' . $exam_details['Teacher']['name'] . 'The quiz will start at ' . date_format(date_create($exam_details['Exam']['starting_at']),'d M, H:i');
		$body .= '              <p style="font-size: 15px;">Use this password for authentication: <strong>' .  $exam_details['Exam']['password'] . '</strong> .</p>';
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

		$plain_body = "";
		$plain_body .= 'You have been invited to join the quiz on ' . $exam_details['Exam']['subject'] . '. By: ' . $exam_details['Teacher']['name'] . 'The quiz will start at ' . date_format(date_create($exam_details['Exam']['starting_at']),'d M, H:i');
		$plain_body .= 'Use this password for authentication: ' .  $exam_details['Exam']['password'] . '.';
		$plain_body .= '<a href="' . $login_link . '">Follow This Link</a>';

		if($this->send_mail($mail, $roll, $subject, $body, $plain_body)) {
			return true;
		} else {
			return false;
		}
	}
}
