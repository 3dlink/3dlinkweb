<article class="card shadow-1">
<?php echo $this->Form->create('Project'); ?>
    <fieldset>
      <legend>Add Project</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Project name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Project name')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Client</label>
			          <?php echo $this->Form->input('client_id',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Type</label>
			          <?php echo $this->Form->input('type',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','options'=>array('0'=>'Select','Desarrollo'=>'Desarrollo','Diseño'=>'Diseño','Desarrollo y Diseño'=>'Desarrollo y Diseño','Extra (SEO, Social Media, Marketing)'=>'Extra (SEO, Social Media, Marketing)','Todos los servicios'=>'Todos los servicios'), 'required'=>true)); ?>
			        </div>
				</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Start date</label>
			          <?php echo $this->Form->input('init_date',array("div"=>false,"type"=>"text","label"=>false, "class"=>"form-control date","placeholder"=>"Start date", "required"=>true, "id"=>"start")); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Completion date</label>
			          <?php echo $this->Form->input('end_date',array("div"=>false,"type"=>"text","label"=>false, "class"=>"form-control date","placeholder"=>"Completion date", "required"=>true, "id"=>"end")); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>ASANA's URL</label>
			          <?php echo $this->Form->input('asana_url',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Enter URL','required'=>true)); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Project leader</label>
			          <?php echo $this->Form->input('personal_id',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true,'options'=>$lideres)); ?>
			        </div>
				</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Programmers assigned</label>
			          <?php echo $this->Form->input('Personal',array('div'=>false,'required'=>true,'multiple'=>true,'label'=>false,'class'=>'form-control','required'=>true,'type'=>'select','id'=>'select_devs','options'=>$programadores)); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Status</label>
			          <?php echo $this->Form->input('status',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true,'options'=>array('0'=>'Select','Listo'=>'Listo','En Desarrollo'=>'En Desarrollo','En Diseño'=>'En Diseño','Aprobado'=>'Aprobado','Pausado'=>'Pausado','Rechazado'=>'Rechazado','Bugs Fixing'=>'Bugs Fixing'))); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Price</label>
			          <?php echo $this->Form->input('price',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Enter the project price', 'required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Currency</label>
			          <?php echo $this->Form->input('currency',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true,'options'=>array('0'=>'Select','VEF (Bs)'=>'VEF (Bs)','USD ($)'=>'USD ($)','EUR (€)'=>'EUR (€)','GBP (£)'=>'GBP (£)'))); ?>
			        </div>
				</div>

	      		<div class="col-md-12">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('type'=>'textarea','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Add a description')); ?>
			        </div>
	      		</div>

				


<!-- 	      <div id="content_imgs"></div> -->

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Projects';" title="regresar" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
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

    $('#select_devs').multipleSelect();


</script>
