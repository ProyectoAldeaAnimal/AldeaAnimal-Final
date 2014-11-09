<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {


		function inicializarAuth(){

				$this->Auth->loginError = 'El nombre de usuario y/o la contraseña no son correctos. Por favor, inténtalo otra vez';
				$this->Auth->authError = 'Para entrar en la zona privada tienes que autenticarte';

				$this->Session->write('Auth.redirect', null);
		} // fin de function inicializarAuth
		 public $components = array(
        'Session',
        /* add Auth component and set  the urls that will be loaded after the login and logout actions is performed */
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'PaginaPrincipalClientes'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'home'),
            'authorize' => array('Controller') // Added this line

        )
    );

    public function beforeFilter() {
        /* set actions that will not require login */
        $this->Auth->allow('index','display', 'view', 'home');
    }
}
