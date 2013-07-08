<?php

App::uses('Controller', 'Controller');
App::import('Model', 'ActiveRecordModel');

class AppController extends Controller 
{
  public function beforeFilter()
  {
    parent::beforeFilter();
    $this->activeRecordConfig();
  }

  public function activeRecordConfig()
  {
    ActiveRecord\Config::initialize( function($cfg)
    {
      require_once APP . 'Config' . DS . 'database.php';
      $dbConfig = new DATABASE_CONFIG();
      
      $cfg->set_model_directory(APP . 'Model');
      $cfg->set_connections(array('development' => 'mysql://' . $dbConfig->default['login'] . ':' . $dbConfig->default['password'] . '@' . $dbConfig->default['host'] . '/' . $dbConfig->default['database']));
    });
  }
}