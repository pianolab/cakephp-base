<?php
/**
 *
 * @class Flash Helper
 *
 * Allows you to show alert messages to user setting a flashSession or passing aroung the html easily
 *
 * developed by @wfsneto
 *
 * HOW TO;
 * 
 * With session:
 * 
 * App Controller:
 * public $helpers = array('Flash');
 * 
 * Controller:
 *  $this->Flash->setFlash('warning', 'Some another message');
 *
 * or:
 *
 *  $this->Flash->warning('Some another message'); 
 *  $this->Flash->success('Some another message'); 
 *  $this->Flash->error('Some another message'); 
 *  $this->Flash->info('Some another message'); 
 * 
 * Views:
 * 
 * <?php echo $this->Flash->flash(); ?> Will get the session adm.alert, site.alert or auth
 * 
 * or:
 * 
 * <?php echo $this->Flash->flash(array('warning', 'Some another message')); ?>
 * 
 * or:
 * 
 * <?php echo $this->Flash->warning('Some another message'); ?>
 * <?php echo $this->Flash->success('Some another message'); ?>
 * <?php echo $this->Flash->error('Some another message'); ?>
 * <?php echo $this->Flash->info('Some another message'); ?>
 * 
 */

class FlashHelper extends HtmlHelper
{
  public function flash($message = null)
  {
    $flash = ($message) ? $message : $this->getFlash('site.alert');
    
    if ($message):
      $flash = $message;
    elseif ($login = $this->getFlash('auth')):
      $flash = $login;
    elseif ($adm = $this->getFlash('adm.alert')):
      $flash = $adm;
    elseif ($alert = $this->getFlash('site.alert')):
      $flash = $alert;
    endif;
    
    if ($flash):
      return $this->output($this->show($flash));
    endif;
  }

  public function getFlash($key = null)
  {
    $message = CakeSession::read($key);
    CakeSession::delete($key);
    return $message;
  }
  
  private function show($message)
  {
    if (is_array($message[1])):
      $html_message = implode("<br />", $message[1]);
    else:
      if (!is_array($message)):
        $message = array('warning', $message);
      endif;
      $html_message = $message[1];
    endif;
    
    $message[0] = (empty($message[0])) ? 'warning' : $message[0];
    $title = str_replace(
      array('warning','success','error','info'), 
      array('Atenção!','Sucesso!','Erro!','Informação!'), 
      $message[0]
    );

    $view = new View();
    return $view->element('layouts/flash', array(
      'type' => $message[0],
      'title' => $title,
      'message' => $html_message,
    ));
  }
  
  /**
   * Shortcuts
   */
  public function info($message = null, $title = null) { return $this->flash(array('info', $message, $title)); }
  public function error($message = null, $title = null) { return $this->flash(array('error', $message, $title));  }
  public function success($message = null, $title = null) { return $this->flash(array('success', $message, $title)); }
  public function warning($message = null, $title = null) { return $this->flash(array('warning', $message, $title)); }
  
}