<?php
App::uses('AppController', 'Controller');
/**
 * Exams Controller
 *
 * @property Exam $Exam
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ExamsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function new_exam() {
		if($this->request->is('post')) {
			$this->request->data['Exam']['ending_at'] = 0;
			$this->request->data['Exam']['password'] = $this->random_string(8, 1, 1, 1);
			$this->Exam->save($this->request->data);
			$this->Session->setFlash(__('Exam Created. Now add some question to it.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'questions', 'action' => 'add_question', $this->Exam->id));
		}
	}

	public function exam_all_data($exam_id = null) {
		if (!$this->Exam->exists($exam_id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}

		$this->Exam->recursive = 1;
		$data = $this->Exam->find('first', array(
				'conditions' => array(
					'Exam.id' => $exam_id,
				),
			)
		);
		AuthComponent::_setTrace($data);
		return $data;
	}

	public function start_quiz ($exam_id) {
		$exam_details = $this->exam_all_data($exam_id);
		$this->set(compact('exam_details'));
	}

	public function authenticate_student($exam_id) {
		$this->autoRender = false;
		$this->autoLayout = false;
		header('Content-Type: application/json');

		if($this->request->is('post')) {
			$from = $this->request->data['roll'];
			$from_name = $this->request->data['pass'];
			if (!$this->Exam->exists($exam_id)) {
				die(json_encode(array('success' => false, 'msg' => 'Invalid Quiz')));
			}

			$this->Exam->recursive = 1;
			$data = $this->Exam->find('all', array(
					'conditions' => array(
						'Exam.id' => $exam_id,
					),
				)
			);
			if(1) {
				die(json_encode(array('success' => true, 'msg' => 'Your message has been sent successfully. We\'ll get to it soon.')));
			} else die(json_encode(array('success' => false, 'msg' => 'Something bad happened!!! Please, try again.' )));
		} else die(json_encode(array('success' => false, 'msg' => 'Invalid Request')));
	}

}
