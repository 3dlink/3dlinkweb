<article class="card shadow-1">
<?php echo $this->Form->create('Cargo'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Edit Job</legend>
      <div class="margenesHorizontales">

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Job</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Cargo','required'=>true)); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Salary</label>
			          <?php echo $this->Form->input('salary',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true, 'min'=>'0')); ?>
			        </div>
				</div>

<!-- 	      <div id="content_imgs"></div> -->

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Cargos';" title="regresar" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	// $("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
	// 	success:function(data){
	// 		$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Team][photo]">');
	//   }
	// });

</script>