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
		$logged = $this->Session->read('logged');
		if(empty($logged)) {
			return $this->redirect(array('controller'=>'pages', 'action' => 'display', 'home'));
		}

		if($this->request->is('post')) {
			$this->request->data['Exam']['teacher_id'] = $logged['id'];
			$time = new DateTime($this->request->data['Exam']['starting_at']);
			$time->add(new DateInterval('PT' . $this->request->data['Exam']['time'] . 'M'));
			$this->request->data['Exam']['ending_at'] = $time->format('Y-m-d H:i:s');
			$this->request->data['Exam']['password'] = $this->random_string(8, 1, 1, 1);
			$this->Exam->save($this->request->data);
			$this->Session->setFlash(__('Exam Created. Now add some question to it.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'questions', 'action' => 'add_question', $this->Exam->id));
		}
	}

	public function update_exam($id) {
		$this->Exam->id = $id;
		if (!$this->Exam->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}

		if($this->request->is('post')) {
			$this->Exam->save($this->request->data);
			$this->Session->setFlash(__('Exam Updated.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'exams', 'action' => 'update_exam', $id));
		} else {
			$options = array('conditions' => array('Exam.' . $this->Exam->primaryKey => $id));
			$this->request->data = $this->Exam->find('first', $options);
		}
	}

	public function delete_exam($id) {
		$this->Exam->id = $id;
		if (!$this->Exam->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Exam->delete()) {
			$this->Session->setFlash(__('Exam Deleted.'), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('Exam can\'t be deleted right now.'), 'default', array('class' => 'error'));
		}
		return $this->redirect(array('controller'=>'teachers', 'action' => 'my_quiz'));
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
		#AuthComponent::_setTrace($data);
		return $data;
	}

	public function start_quiz ($exam_id) {
		$exam_details = $this->exam_all_data($exam_id);
		$this->set(compact('exam_details'));
	}

	public function results($id){
		$exam_details = $this->exam_all_data($id);
		$this->set(compact('exam_details'));
	}

	public function authenticate_student($exam_id) {
		$this->autoRender = false;
		$this->autoLayout = false;
		header('Content-Type: application/json');

		if($this->request->is('post')) {
			$roll = $this->request->data['roll'];
			$pass = $this->request->data['pass'];
			if (!$this->Exam->exists($exam_id)) {
				die(json_encode(array('success' => false, 'msg' => 'Invalid Quiz')));
			}

			$this->Exam->recursive = 1;
			$data = $this->Exam->find('all', array(
					'conditions' => array(
						'Exam.id' => $exam_id,
						'Student.roll' => $roll,
						'Exam.password' => AuthComponent::password($pass)
					),
				)
			);
			if(!empty($data)) {
				die(json_encode(array('success' => true, 'msg' => 'Authentication Successful. You can start now. Good luck.')));
			} else die(json_encode(array('success' => false, 'msg' => 'Authentication Error!!! Please, try again.' )));
		} else die(json_encode(array('success' => false, 'msg' => 'Invalid Request')));
	}

}
