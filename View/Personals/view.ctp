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
          <div class="col-md-6">
            <div class="form-group">
                <label>Rif: </label>
                <?php echo h($personal['Personal']['rif'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Telefono:</label>
                <?php echo h($personal['Personal']['phone'])?>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        <label>Email Corporativo: </label>
                <?php echo h($personal['Personal']['email_company'])?>
      </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        <label>Email Personal:</label>
                <?php echo h($personal['Personal']['email_personal'])?>
                </select>
      </div>
          </div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Cargo:</label>
                <?php echo h($personal['Cargo']['name'])?>
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
          <div class="col-md-6">
            <div class="form-group">
                <label>Trabajo en 3DLinkweb:</label>
                <?php echo h($personal['Personal']['job'])?>
            </div>
          </div>
          <div style="clear:both;"></div>
        </div>
      	<div>
          <div class="col-md-12">
            <div class="form-group">
                <label>Biografia:</label>
                <p><?php echo nl2br($personal['Personal']['bio'])?></p>
                
            </div>
          </div>
      		<div class="col-md-12">
      			<div class="form-group">
                <label>Observaciones:</label>
                <p><?php echo nl2br($personal['Personal']['observations'])?></p>
                
			      </div>
      		</div>
          <div style="clear:both;"></div>


          <div id="content_imgs"></div>

          <div class="col-md-12">
              <div class="form-group">
                <label>Imagen actual</label>
                <div id="imagenes_content">
                  <div id="img_edit" class="img_edit">
                    <img src="<?php echo $this->webroot.'files/'.$personal['Personal']['photo']; ?>" style="width:25%;">
                  </div>
                </div>
              </div>
          </div>

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

                  <input type = "button" class="btn btn-primary" onclick="window.open(WEBROOT+'personals/imprimir/<?php echo $personal['Personal']['id']; ?>','_blank')" title="Click para imprimir" value = "Imprimir" style="width: 79px;">	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>

