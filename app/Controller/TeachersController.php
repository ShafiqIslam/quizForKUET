<?php
App::uses('AppController', 'Controller');
/**
 * Teachers Controller
 *
 * @property Teacher $Teacher
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TeachersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	public function signup() {
		$this->autoLayout = false;
		$this->autoRender = false;
		header('Content-Type: application/json');

		if(!$this->request->is('post')) {
			return $this->redirect(array('controller'=>'pages', 'action' => 'display', "home"));
		}

		$this->request->data['Teacher']['password'] = $this->Auth->password($this->request->data['Teacher']['password']);
		$this->Teacher->save($this->request->data);

		if($this->Teacher->save($this->request->data)) {
			$data['is_logged'] = 1;
			$data['id'] = $this->Teacher->id;
			$data['name_with_des'] = $this->request->data['Teacher']['designation'] . " " . $this->request->data['Teacher']['name'];
			$this->Session->write('logged', $data);
			$this->Session->setFlash(__('Welcome to our community.'), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('Something is terribly wrong. Please, try again.'), 'default', array('class' => 'error'));
		}
		return $this->redirect(array('controller'=>'pages', 'action' => 'display', "home"));
	}

	public function logout() {
		$this->Session->delete('logged');
		return $this->redirect(array('controller'=>'pages', 'action' => 'display', "home"));
	}

	public function login() {
		$logged = $this->Session->read('logged');
		if(!empty($logged)) {
			return $this->redirect( Router::url( $this->referer(), true ) );
		}

		if($this->request->is('post')) {
			$options = array(
				'conditions' => array(
					'Teacher.email' => $this->request->data['Teacher']['email'],
					'Teacher.password' => $this->Auth->password($this->request->data['Teacher']['password'])
				)
			);
			$teacher = $this->Teacher->find('first', $options);
			if(empty($teacher)) {
				$this->Session->setFlash(__('Authentication unsuccessful. Please, try again.'), 'default', array('class' => 'error'));
			} else {
				$data['is_logged'] = 1;
				$data['id'] = $teacher['Teacher']['id'];
				$data['name_with_des'] = $teacher['Teacher']['designation'] . " " . $teacher['Teacher']['name'];
				$this->Session->write('logged', $data);
				$this->Session->setFlash(__('Authentication successful.'), 'default', array('class' => 'success'));
				return $this->redirect( Router::url( $this->referer(), true ) );
			}
		}
	}
	
}
