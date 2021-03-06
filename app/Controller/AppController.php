<?php

App::uses('Controller', 'Controller');
App::import('Model', 'ActiveRecordModel');

class AppController extends Controller 
{
  /**
   * Set variables from controller to view
   *
   * @var array
   */
  public $arrView = array();

  /**
   * Default components
   *
   * @var array
   */
  public $components = array('Auth', 'Session', 'Flash');

  /**
   * Default helper
   * 
   * @var array
   */
  public $helpers = array('Html', 'Form', 'Session', 'Flash');

  public function beforeFilter()
  {
    parent::beforeFilter();
    $this->activeRecordConfig();
    if ($this->name != 'CakeError') {
      $this->authConfig();
    }
  }

  public function beforeRender()
  {
    parent::beforeRender();
    if ($this->name != 'CakeError') {
      $this->setTitleForLayout();
      $this->preloader();
    } # endif;
  } # endfunction;

  public function activeRecordConfig()
  {
    ActiveRecord\Config::initialize( function($cfg)
    {
      require_once APP . 'Config' . DS . 'database.php';
      $dbConfig = new DATABASE_CONFIG();
      
      $cfg->set_model_directory(APP . 'Model');
      $cfg->set_connections(array('development' => 'mysql://' . $dbConfig->default['login'] . ':' . $dbConfig->default['password'] . '@' . $dbConfig->default['host'] . '/' . $dbConfig->default['database'] . ';charset=utf8'));
    });
  }

  /**
   * Set title of current page
   */
  public function setTitleForLayout()
  {
    $title = ($this->titleForLayout) ? ($this->titleForLayout . ' » ') : null;
    $this->arrView['title_for_layout'] = $title . 'Cooperativa 24h';
  } # endfunction;

  /**
   * Loads the variables that are used in every application
   */
  public function preloader()
  {
    /**
     * Set the variables coming from self::arrView to the views
     * If want use don't remove next line
     */
    foreach ($this->arrView as $key => $value) { $this->set($key, $value); } # endforeach
  } # endfunction;

  public function authConfig() 
  {
    $this->Auth->authError = 'É necessário está logado para acessar essa área.';
    $this->Auth->loginError = 'E-mail e/ou senha estão errados';

    $this->Auth->loginRedirect = '/';
    $this->Auth->logoutRedirect = '/login';
    $this->Auth->authenticate = array(
      'Form',
      'all' => array('userModel' => 'User'),
    );

    if($this->Auth->loggedIn()) $this->arrView['logged'] = $this->Auth->user();
  } # endfunction;

}