<?php
App::uses('AppModel', 'Model');
/**
 * Payment Model
 *
 */
class Payment extends AppModel {
	public $validate = array(
		'correo' => array(
			'rule' => 'email',
			'message' => 'El correo debe tener un formato válido'
			),
		'telefono' => array(
			'rule' => '/\d{4}[-]\d{8}/',
			'message' => 'El teléfono debe contener un código de área de 4 dígitos seguido de un guión (-) y 8 dígitos'
			),
		'rif' => array(
			'rule' => '/[VvjJ][-]\d{9}/',
			'message' => 'Debe colocar un rif con el formato @-000000000'
			)
		);
}
