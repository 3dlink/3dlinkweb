<article class="card shadow-1">
  <?php //debug($project['Personal']); ?>
  <fieldset>
      <legend>Project<?php echo ': '; if (!empty($project)) { echo '<small>'.$project['Project']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Name: </label>
                <?php echo h($project['Project']['name'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Client:</label>
                <?php echo h($project['Client']['company_name'])?>
                </select>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Start date:</label>
                <?php echo h($project['Project']['init_date'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Completion date:</label>
                <?php echo h($project['Project']['end_date'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Project leader:</label>
              
             <?php echo h($project['Personal']['name']); ?>
            </div>
              
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Programmers assigned:</label>

        <table class="table table-striped">


                <?php 
                foreach ($project['Personal'] as $item): ?>
                <?php if(is_array($item)){ ?>
          <tr>
             <td><?php echo h($item['name']); ?>&nbsp;</td>
          </tr>
                <?php }
                endforeach; 
              ?>
        </table>
        
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Price:</label>
                <?php echo h($project['Project']['price'])?>
           </div>
          </div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Project cost:</label>
                <table>
                  
                    <tr>
                     <td><?php echo h($sumatotaldelsalariodemierdade3dlink); ?>&nbsp;</td>
                    </tr>
                </table>
            </div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
        <div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Asana's URL:</label>
                <a href="<?php echo h($project['Project']['asana_url'])?>" target='_blank'><?php echo h($project['Project']['asana_url'])?></a> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Status:</label>
                <?php echo h($project['Project']['status'])?>
            </div>
          </div>
          <div style="clear:both;"></div>
        </div>
      	<div>
          <div class="col-md-6">
            <div class="form-group">
            <label>Type:</label>
                <?php echo h($project['Project']['type'])?>
            </div>
          </div>
      		
          <div class="col-md-6">
            <div class="form-group">
        <label>Currency:</label>
                <?php echo h($project['Project']['currency'])?>
      </div>
          </div>
      		<div style="clear:both;"></div>
      	</div>    	
      	<div>
      		<div class="col-md-12">
      			<div class="form-group">
                <label>Description:</label>
                <p><?php echo nl2br($project['Project']['description'])?></p>
                
			</div>
      		</div>
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'projects';" title="regresar" value = "Back" style="width: 79px;">

                  <input type = "button" class="btn btn-primary" onclick="window.open(WEBROOT+'projects/imprimir/<?php echo $project['Project']['id']; ?>','_blank')" title="Click para imprimir" value = "Print" style="width: 79px;"> 	  
				</div>
      	</div>    
</div>          
    </fieldset>  
</article>

