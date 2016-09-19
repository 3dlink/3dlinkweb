<article class="card shadow-1">
<?php echo $this->Form->create('Client'); ?>
    <fieldset>
      <legend>Add Client</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Client name</label>
			          <?php echo $this->Form->input('company_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Client name')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Country')); ?>
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
			          <label>Email</label>
			          <?php echo $this->Form->input('email',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Email')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Contact person</label>
			          <?php echo $this->Form->input('manager',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Contact person')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Type</label>
			          <?php echo $this->Form->input('type',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Type','options'=>array('0'=>'Select','Persona'=>'Person','Empresa'=>'Company'), 'required'=>true)); ?>
			        </div>
	      		</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Observations</label>
			          <?php echo $this->Form->input('observation',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Add your observations', 'required'=>true)); ?>
			        </div>
				</div>


<!-- 	      <div id="content_imgs"></div> -->

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Clients';" title="regresar" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

</script>
