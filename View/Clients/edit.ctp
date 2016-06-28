<!-- <div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('country');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('type');
		echo $this->Form->input('observation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->


<article class="card shadow-1">
<?php echo $this->Form->create('Client'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Add Cliente</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Nombre del Cliente</label>
			          <?php echo $this->Form->input('company_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Nombre del Cliente')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Pais</label>
			          <?php echo $this->Form->input('country',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Pais')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Telefono</label>
			          <?php echo $this->Form->input('phone',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Telefono')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Email</label>
			          <?php echo $this->Form->input('email',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Email')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Tipo</label>
			          <?php echo $this->Form->input('type',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Tipo','options'=>array('0'=>'Seleccionar','Diseño'=>'Diseño','Desarrollo'=>'Desarrollo'), 'required'=>true)); ?>
			        </div>
	      		</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Observaciones</label>
			          <?php echo $this->Form->input('observation',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Agregue sus Observaciones', 'required'=>true)); ?>
			        </div>
				</div>


<!-- 	      <div id="content_imgs"></div> -->

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Clients';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

</script>
