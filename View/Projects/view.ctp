<article class="card shadow-1">
  <fieldset>
      <legend>Cargo<?php echo ': '; if (!empty($project)) { echo '<small>'.$project['Project']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Nombre: </label>
                <?php echo h($project['Project']['name'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Cliente:</label>
                <?php echo h($project['Client']['company_name'])?>
                </select>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Fecha de Inicio:</label>
                <?php echo h($project['Project']['init_date'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Fecha de Entrega:</label>
                <?php echo h($project['Project']['end_date'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Lider de Proyecto:</label>
                <?php echo h($project['Personal']['name'])?>
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
                <label>Asana URL:</label>
                <a href="<?php echo h($project['Project']['asana_url'])?>" target='_blank'><?php echo h($project['Project']['asana_url'])?></a> 
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Tipo:</label>
                <?php echo h($project['Project']['type'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Precio:</label>
                <?php echo h($project['Project']['price'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>    	
      	<div>
      		<div class="col-md-12">
      			<div class="form-group">
                <label>Descripción:</label>
                <p><?php echo nl2br($project['Project']['description'])?></p>
                
			</div>
      		</div>
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'projects';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
				</div>
      	</div>    
</div>          
    </fieldset>  
</article>

