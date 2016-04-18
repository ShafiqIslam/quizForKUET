<?php
App::uses('AppController', 'Controller');
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
		if($this->request->is('post')) {
			$this->request->data['Question']['exam_id'] = $id;
			$this->Question->save($this->request->data);
			$this->Session->setFlash(__('Question Added.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'questions', 'action' => 'add_question', $id));
		}
	}

	public function edit_question ($id) {
		if($this->request->is('post')) {
			$this->Question->id = $id;
			$this->Question->save($this->request->data);
			$this->Session->setFlash(__('Question Updated.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'questions', 'action' => 'edit_question', $id));
		} else {
			$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
			$this->request->data = $this->Question->find('first', $options);
		}
	}
}
