<?php
App::uses('AppModel', 'Model');
/**
 * Question Model
 *
 * @property Exam $Exam
 */
class Question extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Exam' => array(
			'className' => 'Exam',
			'foreignKey' => 'exam_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => true
		)
	);
}
