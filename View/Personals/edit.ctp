<article class="card shadow-1">
<?php echo $this->Form->create('Personal'); echo $this->Form->input('id');?>
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
			          <label>CI</label>
			          <?php echo $this->Form->input('ci',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Cedula de Identidad')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Numero de Cuenta</label>
			          <?php echo $this->Form->input('account_number',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Numero de Cuenta')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Tipo de Cuenta</label>
			          <?php echo $this->Form->input('account_type',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Tipo de Cuenta')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Banco</label>
			          <?php echo $this->Form->input('bank',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Banco')); ?>
			        </div>
	      		</div>


	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Cargo</label>
			          <?php echo $this->Form->input('position',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Cargo','options'=>array('0'=>'Seleccionar','Desarrollador Carga Media'=>'Desarrollador Carga Media','Desarrollador Carga Completa'=>'Desarrollador Carga Completa','Lider de Proyecto'=>'Lider de Proyecto','Ejecutivo'=>'Ejecutivo','Diseñador'=>'Diseñador','Marketing'=>'Marketing','Vendedor'=>'Vendedor','QA'=>'QA'), 'required'=>true)); ?>
			        </div>
	      		</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Observaciones</label>
			          <?php echo $this->Form->input('observations',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Agregue sus Observaciones', 'required'=>true)); ?>
			        </div>
				</div>


<!-- 	      <div id="content_imgs"></div> -->

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

	// $("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
	// 	success:function(data){
	// 		$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Team][photo]">');
	//   }
	// });

</script>
