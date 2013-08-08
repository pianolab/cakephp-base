<div class="span3">
  <?php echo $this->Html->image('logo.png') ?>
  <br clear="all" /><br clear="all" />
    
  <div class="well sidebar-nav">
    <ul class="nav nav-list">
      <li class="nav-header">Plantões</li>
      <li><?php echo $this->Html->link('adicionar', '/duties/add') ?></li>
      <li><?php echo $this->Html->link('ver todos', '/duties') ?></li>
      
      <li class="nav-header">Cooperados</li>
      <li><?php echo $this->Html->link('adicionar', '/cooperators/add') ?></li>
      <li><?php echo $this->Html->link('ver todos', '/cooperators') ?></li>
      
      <li class="nav-header">Hospitais</li>
      <li><?php echo $this->Html->link('adicionar', '/hospitals/add') ?></li>
      <li><?php echo $this->Html->link('ver todos', '/hospitals') ?></li>
      
      <li class="nav-header">Mural de aviso</li>
      <li><?php echo $this->Html->link('adicionar', '/messages/add') ?></li>
      <li><?php echo $this->Html->link('ver todos', '/messages') ?></li>
      
      <li class="nav-header">Valores de plantões</li>
      <li><?php echo $this->Html->link('adicionar', '/shifts/add') ?></li>
      <li><?php echo $this->Html->link('ver todos', '/shifts') ?></li>

      <li class="nav-header"></li>
      <li><?php echo $this->Html->link('sair', '/logout') ?></li>
    </ul>
  </div><!--/.well -->
</div><!--/span-->