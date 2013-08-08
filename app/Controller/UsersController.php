<?php

class UsersController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
  public $name = 'Users';

  /**
   * Set title for layout
   *
   * @var string
   */
  public $titleForLayout = 'Autenticação';

/**
 * This controller does not use a model
 *
 * @var array
 */
  public $uses = array();

  public function login()
  {
    $this->layout = 'login';

    if ($this->request->is('post')) {
      if ($this->Auth->login()) {
        $this->redirect($this->Auth->redirect());
      } # endif
      else {
        $this->Flash->error('Login e/ou senha estão errados');
      } # endelse
    } # endif
  } # endlogin

  public function logout() 
  {
    $this->redirect($this->Auth->logout());
  } # endlogout
}
