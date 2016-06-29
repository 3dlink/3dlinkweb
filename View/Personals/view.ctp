<article class="card shadow-1">
  <fieldset>
      <legend>Cargo<?php echo ': '; if (!empty($personal)) { echo '<small>'.$personal['Personal']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Nombre: </label>
                <?php echo h($personal['Personal']['name'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>CI:</label>
                <?php echo h($personal['Personal']['ci'])?>
                </select>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Cargo:</label>
                <?php echo h($personal['Personal']['position'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Numero de cuenta:</label>
                <?php echo h($personal['Personal']['account_number'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Tipo de cuenta:</label>
                <?php echo h($personal['Personal']['account_type'])?>
			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Banco:</label>
                <?php echo h($personal['Personal']['bank'])?>
			</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-12">
      			<div class="form-group">
                <label>Observaciones:</label>
                <p><?php echo nl2br($personal['Personal']['observations'])?></p>
                
			      </div>
      		</div>
          <div style="clear:both;"></div>

          <div class="margenesHorizontales">
            <label>Proyectos:</label>
              <table class="table table-striped">
                <tr>
                  <th>Nombre</th>
                  <th>Status</th>
                  <th></th>
                </th>

                <?php foreach ($personal['Project'] as $item): ?>
          <tr>
             <td><?php echo h($item['name']); ?>&nbsp;</td>
             <td><?php echo h($item['status']); ?>&nbsp;</td>

                    <td>
                        <div style="display: block; width: 80px; margin: 0 auto;">
                          <?php if($this->UserAuth->getGroupId() == 1){ ?>
                            <a href="<?php echo $this->webroot;?>projects/view/<?php echo $item['id'];?>" title="Ver Detalles" class="menuTable">
                              <span class="glyphicon glyphicon-eye-open"></span></a>
                          <?php } ?>
                        </div>                  
                    </td>

          </tr>
                <?php endforeach; ?>
              </table>
            </div> 
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'personals';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>

