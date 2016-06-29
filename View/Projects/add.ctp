<article class="card shadow-1">
<?php echo $this->Form->create('Project'); ?>
    <fieldset>
      <legend>Add Project</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Nombre del Proyecto</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Nombre del Proyecto')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Cliente</label>
			          <?php echo $this->Form->input('client_id',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Tipo</label>
			          <?php echo $this->Form->input('type',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','options'=>array('0'=>'Seleccionar','Desarrollo'=>'Desarrollo','Diseño'=>'Diseño'), 'required'=>true)); ?>
			        </div>
				</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Fecha de inicio</label>
			          <?php echo $this->Form->input('init_date',array("div"=>false,"type"=>"text","label"=>false, "class"=>"form-control date","placeholder"=>"Fecha de Inicio", "required"=>true, "id"=>"start")); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Fecha de entrega</label>
			          <?php echo $this->Form->input('end_date',array("div"=>false,"type"=>"text","label"=>false, "class"=>"form-control date","placeholder"=>"Fecha de entrega", "required"=>true, "id"=>"end")); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>URL de ASANA</label>
			          <?php echo $this->Form->input('asana_url',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Ingrese URL','required'=>true)); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Lider de Proyecto</label>
			          <?php echo $this->Form->input('personal_id',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true,'options'=>$lideres)); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Status</label>
			          <?php echo $this->Form->input('status',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true,'options'=>array('0'=>'Seleccionar','Listo'=>'Listo','En Desarrollo'=>'En Desarrollo','En Diseño'=>'En Diseño','Aprobado'=>'Aprobado','Pausado'=>'Pausado','Rechazado'=>'Rechazado','Bugs Fixing'=>'Bugs Fixing'))); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Precio</label>
			          <?php echo $this->Form->input('price',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Agregue el precio del proyecto', 'required'=>true)); ?>
			        </div>
				</div>

	      		<div class="col-md-12">
			        <div class="form-group">
			          <label>Descripcion</label>
			          <?php echo $this->Form->input('description',array('type'=>'textarea','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Agregue una descripcion')); ?>
			        </div>
	      		</div>

				


<!-- 	      <div id="content_imgs"></div> -->

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Projects';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$('.date').datetimepicker({
	   	format:'YYYY-MM-DD',
	   	showTodayButton:true
 	});

 	$('#start').datetimepicker();

	$('#end').datetimepicker({
	    useCurrent: false //Important! See issue #1075
	});

	$("#start").on("dp.change", function (e) {
	    $('#end').data("DateTimePicker").minDate(e.date);
	});

	$("#end").on("dp.change", function (e) {
	 	$('#start').data("DateTimePicker").maxDate(e.date);
	});

</script>
