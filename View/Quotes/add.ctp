<article class="card shadow-1">
<?php echo $this->Form->create('Quote');?>
    <fieldset>
      <legend>Add Quote</legend>
      <div class="margenesHorizontales">

      			<div class="col-md-6">
			        <div class="form-group">
			          <label>Author</label>
			          <?php echo $this->Form->input('author',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Author', 'required'=>true)); ?>
			        </div>
				</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Text</label>
			          <?php echo $this->Form->input('text',array('type'=> 'textarea','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'The text here...')); ?>
			        </div>
	      		</div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Text</label>
                <?php echo $this->Form->input('text_esp',array('type'=> 'textarea','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'The spanish text here...')); ?>
              </div>
            </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Quotes';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>