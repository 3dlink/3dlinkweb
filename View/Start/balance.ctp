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
<?php
$mes_hoy = date("m");
$year_hoy = date("y");
?>

<form id="pipigrande" class="right" role="search" method="get">
   <div class="input-group" style="float:left;">
      <select id='filtro'  name="filtro">
        <option value=''>Select month</option>
        <option value='01'>January</option>
        <option value='02'>February</option>
        <option value='03'>March</option>
        <option value='04'>April</option>
        <option value='05'>May</option>
        <option value='06'>June</option>
        <option value='07'>July</option>
        <option value='08'>August</option>
        <option value='09'>September</option>
        <option value='10'>October</option>
        <option value='11'>November</option>
        <option value='12'>December</option>
      </select>
    </div>
    <div class="input-group" style="float:left;">
      <select id='year-fil'  name="year-fil">
        <option value=''>Select year</option>
        <option value='2016'>2016</option>
      </select>
    </div>  
</form>

<div style="clear: both;"></div>

      <article class="card shadow-1">
          <fieldset>
            <legend style="float:left;width:50%;">Accumulated balance until 
              <?php if($mes_hoy=='01'){ echo 'january';}
                    if($mes_hoy=='02'){ echo 'february';}
                    if($mes_hoy=='03'){ echo 'march';}
                    if($mes_hoy=='04'){ echo 'april';}
                    if($mes_hoy=='05'){ echo 'may';}
                    if($mes_hoy=='06'){ echo 'june';}
                    if($mes_hoy=='07'){ echo 'july';}
                    if($mes_hoy=='08'){ echo 'august';}
                    if($mes_hoy=='09'){ echo 'september';}
                    if($mes_hoy=='10'){ echo 'october';}
                    if($mes_hoy=='11'){ echo 'november';}
                    if($mes_hoy=='12'){ echo 'december';}
              ?>:</legend>

            <legend style="float:right;width:50%;"><?php 
            if($result_acum>0){ echo '<span style="color:green;">'; echo $result_acum; echo'</span>'; }
            else{echo '<span style="color:red;">'; echo $result_acum; echo'</span>';} ?> </legend>

          </fieldset>

          <fieldset>
            <legend style="float:left;width:50%;">
              <?php if($mes_hoy=='01'){ echo 'January';}
                    if($mes_hoy=='02'){ echo 'February';}
                    if($mes_hoy=='03'){ echo 'March';}
                    if($mes_hoy=='04'){ echo 'April';}
                    if($mes_hoy=='05'){ echo 'May';}
                    if($mes_hoy=='06'){ echo 'June';}
                    if($mes_hoy=='07'){ echo 'July';}
                    if($mes_hoy=='08'){ echo 'August';}
                    if($mes_hoy=='09'){ echo 'September';}
                    if($mes_hoy=='10'){ echo 'October';}
                    if($mes_hoy=='11'){ echo 'November';}
                    if($mes_hoy=='12'){ echo 'December';}
              ?> balance:</legend>
            
            <legend style="float:right;width:50%;"><?php 
            if($result_mes>0){ echo '<span style="color:green;">'; echo $result_mes; echo'</span>'; }
            else{echo '<span style="color:red;">'; echo $result_mes; echo'</span>';} ?> </legend>

          </fieldset>
          
          <fieldset>
            <legend style="float:left;width:50%;">Total balance:</legend>

            <legend style="float:right;width:50%;"><?php 
            if($result>0){ echo '<span style="color:green;">'; echo $result; echo'</span>'; }
            else{echo '<span style="color:red;">'; echo $result; echo'</span>';} ?> </legend>

          </fieldset>          
      </article>

      <article class="card shadow-1" style="float: left;width: 50%;">
          <fieldset>
            <legend style="float:left;width:50%;"> 
              <?php if($mes_hoy=='01'){ echo 'January';}
                    if($mes_hoy=='02'){ echo 'February';}
                    if($mes_hoy=='03'){ echo 'March';}
                    if($mes_hoy=='04'){ echo 'April';}
                    if($mes_hoy=='05'){ echo 'May';}
                    if($mes_hoy=='06'){ echo 'June';}
                    if($mes_hoy=='07'){ echo 'July';}
                    if($mes_hoy=='08'){ echo 'August';}
                    if($mes_hoy=='09'){ echo 'September';}
                    if($mes_hoy=='10'){ echo 'October';}
                    if($mes_hoy=='11'){ echo 'November';}
                    if($mes_hoy=='12'){ echo 'December';}
              ?> expenses:</legend>

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
                  <th>Date</th>
                  <th>Concept</th>
                  <th>Amount</th>
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
            <legend style="float:left;width:50%;">
              <?php if($mes_hoy=='01'){ echo 'January';}
                    if($mes_hoy=='02'){ echo 'February';}
                    if($mes_hoy=='03'){ echo 'March';}
                    if($mes_hoy=='04'){ echo 'April';}
                    if($mes_hoy=='05'){ echo 'May';}
                    if($mes_hoy=='06'){ echo 'June';}
                    if($mes_hoy=='07'){ echo 'July';}
                    if($mes_hoy=='08'){ echo 'August';}
                    if($mes_hoy=='09'){ echo 'September';}
                    if($mes_hoy=='10'){ echo 'October';}
                    if($mes_hoy=='11'){ echo 'November';}
                    if($mes_hoy=='12'){ echo 'December';}
              ?> incomes:</legend>

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
                  <th>Date</th>
                  <th>Concept</th>
                  <th>Amount</th>
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