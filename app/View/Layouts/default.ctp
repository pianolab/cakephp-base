<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title_for_layout; ?></title>
  <?php echo $this->Html->css('application'); ?>
  <?php echo $this->fetch('css'); ?>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="brand">Cake Base</a>
      <div class="nav-collapse collapse">
        <p class="navbar-text pull-right">
          Logged in as <a class="navbar-link" href="#">Username</a>
        </p>
        <ul class="nav">
          <li class="active"><?php echo $this->Html->link('Home', '/') ?></li>
          <li><?php echo $this->Html->link('Contact', '#contact') ?></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Sidebar</li>
          <li class="active"><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div><!--/.well -->
    </div><!--/span-->
    <?php echo $this->fetch('content'); ?>
  </div><!--/row-->

  <hr>

  <footer>
    <p>&copy; Pianolab 2013</p>
  </footer>
</div><!--/.fluid-container-->

<?php echo $this->Html->script('application'); ?>
<?php echo $this->fetch('script'); ?>
<?php echo $this->element('sql_dump'); ?>  
</body>
</html>