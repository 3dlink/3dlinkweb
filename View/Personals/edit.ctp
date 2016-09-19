<article class="card shadow-1">
<?php echo $this->Form->create('Personal'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Edit Staff</legend>
      <div class="margenesHorizontales">
				<div class="col-md-6">
			        <div class="form-group">
			          <label>Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>CI</label>
			          <?php echo $this->Form->input('ci',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Identification number')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Rif</label>
			          <?php echo $this->Form->input('rif',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Rif')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Phone number</label>
			          <?php echo $this->Form->input('phone',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Phone number')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Corporate email</label>
			          <?php echo $this->Form->input('email_company',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Corporate email')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Personal email</label>
			          <?php echo $this->Form->input('email_personal',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Personal email')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Account number</label>
			          <?php echo $this->Form->input('account_number',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Account number')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Account type</label>
			          <?php echo $this->Form->input('account_type',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Account type')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Bank</label>
			          <?php echo $this->Form->input('bank',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Bank')); ?>
			        </div>
	      		</div>


	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Job</label>
			          <?php echo $this->Form->input('cargo_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Job', 'required'=>true,'options'=>$listac)); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Position</label>
			          <?php echo $this->Form->input('job',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Position', 'maxlength'=>'76','required'=>true)); ?>
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
			          <label>Biography (spanish)</label>
			          <?php echo $this->Form->input('bio_esp',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Biography spanish', 'required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Observations</label>
			          <?php echo $this->Form->input('observations',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Add your observations')); ?>
			        </div>
				</div>

				<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        <label>Photo</label>
	        <div  class="dropzone"  id ="photo"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file" />
            </div>
	        </div>
	      </div>


	      <div id="content_imgs"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Personals';" title="regresar" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Personal][photo]">');
	  }
	});

</script>
