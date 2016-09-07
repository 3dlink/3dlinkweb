<article class="card shadow-1">
<?php echo $this->Form->create('Team'); ?>
    <fieldset>
      <legend>Add Member</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Job</label>
			          <?php echo $this->Form->input('job',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Cargo', 'maxlength'=>'76','required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Biography</label>
			          <?php echo $this->Form->input('bio',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Biography', 'required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Biography</label>
			          <?php echo $this->Form->input('bio_esp',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Biography spanish', 'required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Photo</label>
	        <div  class="dropzone"  id ="photo"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file" />
            </div>
	        </div>
	      </div>

	      <div id="content_imgs"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Teams';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Team][photo]">');
	  }
	});

</script>
