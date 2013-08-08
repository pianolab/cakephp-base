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
    
    <?php echo $this->element('layouts/menu_sidebar'); ?>
    
    <?php echo $this->fetch('content'); ?>
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