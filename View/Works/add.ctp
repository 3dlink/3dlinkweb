<article class="card shadow-1">
<?php echo $this->Form->create('Work'); ?>
    <fieldset>
      <legend>Add Work</legend>
      <div class="margenesHorizontales">

		  <div class="col-md-6">
		        <div class="form-group">
		          <label>Name</label>
		          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
		        </div>
	      </div>

		  <div class="col-md-6">
		        <div class="form-group">
		          <label>Type</label>
		          <?php echo $this->Form->input("type" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array(
								array("value"=>"Design", "name"=> "Design"),
								array("value"=>"Development", "name"=> "Development")
								)));?>
		        </div>
	      </div>

			  <div class="col-md-6">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Description')); ?>
			        </div>
		      </div>

			  <div class="col-md-6">
			        <div class="form-group">
			          <label>URL (only for development)</label>
			          <?php echo $this->Form->input('url',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'URL')); ?>
			        </div>
		      </div>
<div class="col-md-12">

			<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Image 1</label>
	        <div  class="dropzone"  id ="img1"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>

			<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Image 2</label>
	        <div  class="dropzone"  id ="img2"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>

</div>
<div class="col-md-12">
			<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Image 3</label>
	        <div  class="dropzone"  id ="img3"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>

			<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Image 4</label>
	        <div  class="dropzone"  id ="img4"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>
</div>
	      <div id="content_img1"></div>
	      <div id="content_img2"></div>
	      <div id="content_img3"></div>
	      <div id="content_img4"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'works';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>
    </fieldset>
</article>


<script type="text/javascript">

$("#img1").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',maxFiles: 1, acceptedFiles: "image/jpeg,image/png,image/gif",
	success:function(data){
		$('#content_img1').append('<input type="hidden" value='+data.xhr.response+' name="data[Work][img1]">');
  }
});

$("#img2").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',maxFiles: 1, acceptedFiles: "image/jpeg,image/png,image/gif",
	success:function(data){
		$('#content_img2').append('<input type="hidden" value='+data.xhr.response+' name="data[Work][img2]">');
  }
});

$("#img3").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',maxFiles: 1, acceptedFiles: "image/jpeg,image/png,image/gif",
	success:function(data){
		$('#content_img3').append('<input type="hidden" value='+data.xhr.response+' name="data[Work][img3]">');
  }
});

$("#img4").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',maxFiles: 1, acceptedFiles: "image/jpeg,image/png,image/gif",
	success:function(data){
		$('#content_img4').append('<input type="hidden" value='+data.xhr.response+' name="data[Work][img4]">');
  }
});

</script>
