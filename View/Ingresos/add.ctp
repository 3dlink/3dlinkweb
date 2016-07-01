<article class="card shadow-1">
<?php echo $this->Form->create('Ingreso'); ?>
    <fieldset>
      <legend>Add Ingreso</legend>
      <div class="margenesHorizontales">

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Fecha</label>
			          <?php echo $this->Form->input('ing_date',array("div"=>false,"type"=>"text","label"=>false, "class"=>"form-control date","placeholder"=>"Fecha del ingreso", "required"=>true, "id"=>"start")); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Concepto</label>
			          <?php echo $this->Form->input('concepto',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Concepto')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Monto</label>
			          <?php echo $this->Form->input('monto',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true, 'min'=>'0')); ?>
			        </div>
				</div>

<!-- 	      <div id="content_imgs"></div> -->

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'ingresos';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
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
