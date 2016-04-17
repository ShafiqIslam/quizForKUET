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

}
