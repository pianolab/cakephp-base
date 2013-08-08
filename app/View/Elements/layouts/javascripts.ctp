<script type="text/javascript">
  var base_url = "<?php echo Router::url('/', true) ?>";
  var base_path = "<?php echo Router::url('/') ?>";
</script>
<?php echo $this->Html->script(array(
  'vendors/jquery/jquery.min',

  'vendors/bootstrap/bootstrap.min',

  'vendors/validate/jquery.validate.min',
  'vendors/validate/jquery.validate.init',

  'vendors/chosen/chosen.jquery',
  'vendors/chosen/chosen.jquery.init',

  'vendors/meio.mask/jquery.meio.mask.min',
  'vendors/meio.mask/jquery.meio.mask.init',
  
  'vendors/bootstrap-datepicker/bootstrap-datepicker',
  'vendors/bootstrap-datepicker/bootstrap-datepicker.init',
)); ?>
<?php echo $this->fetch('script'); ?>