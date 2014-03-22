<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
App::uses('BlowfishPasswordHasher','Controller/Component/Auth');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 */
class AppController extends Controller {

  public $components = array(
    'Session',
    'Paginator',
    'DebugKit.Toolbar',
    'Auth' => array(
	 'loginAction' => array(
	    'controller' => 'ofertas',
	    'action' => 'home',
	 ),
	 'loginRedirect' => array(
	    'controller' => 'usuarios',
	    'action' => 'index',
	 ),
	'logoutRedirect' => array(
	    'controller' => 'ofertas',
	    'action' => 'home',
	 ),
	 'authenticate' => array(
	    'Form' => array(
	       'userModel' => 'Usuario',
	       'fields' => array('username' => 'email'),
	       'passwordHasher' => array('className' => 'Blowfish'),
	       'recursive' => -1,
	       'contain' => array('Alumno'),
	       'scope' => array(
		  'Usuario.activo' => true,
	       )
	    )
	 )
    )
    
  );

  public $helpers = array(
    'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
    'Form' => array('className' => 'BoostCake.BoostCakeForm'),
    'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
  );
  
}
