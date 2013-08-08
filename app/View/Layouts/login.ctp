<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title_for_layout; ?></title>
  <?php echo $this->Html->css('application'); ?>
  <?php echo $this->fetch('css'); ?>
  <style type="text/css">
    body {padding-top: 40px;padding-bottom: 40px;background-color: #f5f5f5;}
    .form-signin {max-width: 300px;padding: 19px 29px 29px;margin: 0 auto 20px; background-color: #fff; border: 1px solid #e5e5e5; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05); -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05); box-shadow: 0 1px 2px rgba(0,0,0,.05);}
    .form-signin .form-signin-heading,.form-signin .checkbox {margin-bottom: 10px;}
    .form-signin input[type="email"],.form-signin input[type="password"] {font-size: 16px;height: auto;margin-bottom: 15px;padding: 7px 9px;} 
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="container">
        <?php echo $this->Flash->flash() ?>
        
        <?php # init form
        echo $this->Form->create('User', array('class' => 'form-signin')); ?>

        <h2 class="form-signin-heading">Autenticação</h2>

        <?php $field_name = 'username';
        echo $this->Form->input($field_name, array(
          'type' => 'email',
          'label' => false,
          'class' => 'input-block-level',
          'placeholder' => 'email',
          'required' => 'required',
        )) ?>

        <?php $field_name = 'password';
        echo $this->Form->input($field_name, array(
          'label' => false,
          'class' => 'input-block-level',
          'placeholder' => 'Senha',
        )) ?>

        <?php # close form
        echo $this->Form->end(array('label' => 'Entrar', 'class' => 'btn btn-large btn-primary')); ?>
      </div> <!-- /container -->
    </div><!--/span-->
  </div><!--/row-->
</div><!--/.fluid-container-->
</body>
</html>