<article class="card shadow-1">
  <fieldset>
      <legend>Cargo<?php echo ': '; if (!empty($client)) { echo '<small>'.$client['Client']['company_name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Client name: </label>
                <?php echo h($client['Client']['company_name'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Country:</label>
                <?php echo h($client['Client']['country'])?>
                </select>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Phone number:</label>
                <?php echo h($client['Client']['phone'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Email:</label>
                <?php echo h($client['Client']['email'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Client type:</label>
                <?php echo h($client['Client']['type'])?>
			      </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Contact person:</label>
                <?php echo h($client['Client']['manager'])?>
            </div>
          </div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-12">
      			<div class="form-group">
                <label>Observations:</label>
                <p><?php echo nl2br($client['Client']['observation'])?></p>
                
			      </div>
      		</div>
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'clients';" title="regresar" value = "Back" style="width: 79px;">
                  <input type = "button" class="btn btn-primary" onclick="window.open(WEBROOT+'clients/imprimir/<?php echo $client['Client']['id']; ?>', '_blank')" title="Click para imprimir" value = "Print" style="width: 79px;">  
				  </div>
      	</div>    
</div>          
    </fieldset>  
</article>
