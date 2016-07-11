<style type="text/css">
legend {
  margin-bottom: 0px;
}
article {
  margin-top: 40px!important;
}
</style>

<div class="balance index">
 <!--List  Open-->


<form id="pipigrande" class="right" role="search" method="get">
   <div class="input-group" style="float:left;">
      <select id='filtro'  name="filtro">
        <option value=''>Seleccione mes</option>
        <option value='01'>enero</option>
        <option value='02'>febrero</option>
        <option value='03'>marzo</option>
        <option value='04'>abril</option>
        <option value='05'>mayo</option>
        <option value='06'>junio</option>
        <option value='07'>julio</option>
        <option value='08'>agosto</option>
        <option value='09'>septiembre</option>
        <option value='10'>octubre</option>
        <option value='11'>noviembre</option>
        <option value='12'>diciembre</option>
      </select>
    </div>
    <div class="input-group" style="float:left;">
      <select id='year-fil'  name="year-fil">
        <option value=''>Seleccione año</option>
        <option value='2016'>2016</option>
      </select>
    </div>  
</form>

<div style="clear: both;"></div>

      <article class="card shadow-1">
          <fieldset>
            <legend style="float:left;width:50%;">Balance Acumulado:</legend>

            <legend style="float:right;width:50%;"><?php 
            if($result_acum>0){ echo '<span style="color:green;">'; echo $result_acum; echo'</span>'; }
            else{echo '<span style="color:red;">'; echo $result_acum; echo'</span>';} ?> </legend>

          </fieldset>

          <fieldset>
            <legend style="float:left;width:50%;">Balance del mes:</legend>
            
            <legend style="float:right;width:50%;"><?php 
            if($result_mes>0){ echo '<span style="color:green;">'; echo $result_mes; echo'</span>'; }
            else{echo '<span style="color:red;">'; echo $result_mes; echo'</span>';} ?> </legend>

          </fieldset>
          
          <fieldset>
            <legend style="float:left;width:50%;">Balance Total:</legend>

            <legend style="float:right;width:50%;"><?php 
            if($result>0){ echo '<span style="color:green;">'; echo $result; echo'</span>'; }
            else{echo '<span style="color:red;">'; echo $result; echo'</span>';} ?> </legend>

          </fieldset>          
      </article>

      <article class="card shadow-1" style="float: left;width: 50%;">
          <fieldset>
            <legend style="float:left;width:50%;">Egresos</legend>

            <legend style="float:right;width:50%;">Total: <?php echo '<span style="color:red;"> -'; echo $total_eg; echo'</span>'?> </legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
                  <form class="right" role="search" method="get">
                   <div class="input-group">
                    </div>  
                  </form>            
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Fecha</th>
                  <th>Concepto</th>
                  <th>Monto</th>
                  <th></th>
                </th>
                
                <?php foreach ($search_eg as $item): ?>
          <tr>
                      <td><?php echo h($item['Egreso']['egr_date']); ?>&nbsp;</td>
                      <td><?php echo h($item['Egreso']['concepto']); ?>&nbsp;</td>
                      <td><?php echo h($item['Egreso']['monto']); ?>&nbsp;</td>
          </tr>
                <?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>

      <article class="card shadow-1" style="float: left;width: 50%;">
          <fieldset>
            <legend style="float:left;width:50%;">Ingresos</legend>

            <legend style="float:right;width:50%;">Total: <?php echo '<span style="color:green;">'; echo $total_in; echo'</span>'?> </legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
                  <form class="right" role="search" method="get">
                   <div class="input-group">
                    </div>  
                  </form>            
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Fecha</th>
                  <th>Concepto</th>
                  <th>Monto</th>
                  <th></th>
                </th>
                
                <?php foreach ($search_in as $item): ?>
          <tr>
                      <td><?php echo h($item['Ingreso']['ing_date']); ?>&nbsp;</td>
                      <td><?php echo h($item['Ingreso']['concepto']); ?>&nbsp;</td>
                      <td><?php echo h($item['Ingreso']['monto']); ?>&nbsp;</td>
                   <!--  -->
          </tr>
                <?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>

</div>  

<script type="text/javascript">

  $('#year-fil').change(function(){
    $('#pipigrande').submit();
  })

</script>