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

	public function add_question () {
		if($this->request->is('post')) {
			$this->Question->save($this->request->data);
			$this->Session->setFlash(__('Question Added. Now assign some students to this quiz.'), 'default', array('class' => 'success'));
			return $this->redirect(array('controller'=>'students', 'action' => 'add_students', $this->Exam->id));
		}
	}

}
