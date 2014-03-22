<?php
App::uses('AppModel', 'Model');
/**
 * Oferta Model
 *
 * @property Empresa $Empresa
 * @property Foco $Foco
 */
class Oferta extends AppModel {

   public $useTable = 'ofertas';
   public $primaryKey = 'ppk-in-ofertas';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'activa' => array(
			'boolean' => array(
				'rule' => array('boolean'),
			),
		),
		'vacantes' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'fecha_limite' => array(
			'date' => array(
				'rule' => array('date'),
			),
		),
		'empresa_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Empresa'
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Foco'
	);

	public function ultimas(){
	 
	 return $this->find('all', array(
	    'conditions' => array("{$this->alias}.activa" => '1'),
	    'order' => array("{$this->alias}.created" => 'desc'),
	    'limit' => 5
	    )
	 );
	    
	}
}
