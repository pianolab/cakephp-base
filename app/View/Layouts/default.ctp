<!DOCTYPE html>
<html data-ng-app="cooperativa">
<head>
  <title><?php echo $title_for_layout; ?></title>
  <?php echo $this->Html->css('application'); ?>
  <?php echo $this->fetch('css'); ?>
</head>
<body>

<div class="container-fluid">
  <div class="row-fluid">
    <?php echo $this->Flash->flash() ?>
    
    <div class="span3">
      <?php echo $this->element('layouts/menu_sidebar'); ?>
    </div><!--/span-->
    
    <div class="span9">
      <h1>CakePHP Base</h1>
      <?php echo $this->fetch('content'); ?>
    </div><!--/span-->
  </div><!--/row-->

  <hr>

  <footer>
    <p>&copy; Pianolab 2013</p>
  </footer>
</div><!--/.fluid-container-->

<?php echo $this->element('layouts/javascripts'); ?>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>