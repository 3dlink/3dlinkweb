<article class="card shadow-1">
  <fieldset>
      <legend>Egreso # <?php if (!empty($egreso)) { echo '<small>'.$egreso['Egreso']['id'].'</small>'; }?> :</legend>
      <div class="margenesHorizontales">           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Fecha de Inicio:</label>
                <?php echo h($egreso['Egreso']['egr_date'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Concepto:</label>
                <?php echo h($egreso['Egreso']['concepto'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Monto:</label>
                <?php echo h($egreso['Egreso']['monto'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      	
      	<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'egresos';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
				</div>
      	</div>    
</div>          
    </fieldset>  
</article>

