<?php
App::uses('AppController', 'Controller');
App::uses('ExamsController', 'Controller');
/**
 * Questions Controller
 *
 * @property Question $Question
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class QuestionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function add_question ($id) {
		$logged = $this->Session->read('logged');
		if(empty($logged)) {
			return $this->redirect(array('controller'=>'pages', 'action' => 'display', 'home'));
		}

		if($this->request->is('post')) {
			$this->request->data['Question']['exam_id'] = $id;
			$this->Question->save($this->request->data);
			$this->Session->setFlash(__('Question Added.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'questions', 'action' => 'add_question', $id));
		}

		$exam = new ExamsController();
		$exam_details = $exam->exam_all_data($id);
		$this->set(compact('exam_details'));
	}

	public function edit_question ($id) {
		$logged = $this->Session->read('logged');
		if(empty($logged)) {
			return $this->redirect(array('controller'=>'pages', 'action' => 'display', 'home'));
		}

		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid Question'));
		}
		$post = 0;
		if($this->request->is('post')) {
			$this->Question->id = $id;
			$this->Question->save($this->request->data);
			$this->Session->setFlash(__('Question Updated.'), 'default', array('class' => 'success'));
			$post = 1;
		} else {
			$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
			$this->request->data = $this->Question->find('first', $options);
		}

		$exam = new ExamsController();
		$exam_details = $exam->exam_all_data($this->request->data['Question']['exam_id']);
		$this->set(compact('exam_details'));

		if($post) {
			return $this->redirect(array('action' => 'add_question', $this->request->data['Question']['exam_id']));
		}
	}

	public function delete_question ($id) {
		$logged = $this->Session->read('logged');
		if(empty($logged)) {
			return $this->redirect(array('controller'=>'pages', 'action' => 'display', 'home'));
		}
		
		$this->Question->id = $id;
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid Question'));
		}
		$this->Question->recursive = -1;
		$question_data = $this->Question->findById($id);

		$this->request->allowMethod('post', 'delete');
		if ($this->Question->delete()) {
			$this->Session->setFlash(__('Question Deleted.'), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('Question can\'t be deleted right now.'), 'default', array('class' => 'error'));
		}
		return $this->redirect(array('action' => 'add_question', $question_data['Question']['exam_id']));
	}
}
