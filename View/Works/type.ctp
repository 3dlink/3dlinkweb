<div class="Works index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Works</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                    <!-- <input type="text" class="form-control" placeholder="Buscar Works..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span> -->
	                  </div>  
									</form>            
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <button class="btn btn-danger cancelBtn hidden" type="button">Cancel</button>
                  <button class="btn btn-success saveBtn hidden" type="button">Save</button>
                  <button class="btn btn-warning orderBtn" type="button">Edit Order</button>
                  <button onclick="window.location.href=WEBROOT+'works/add';" class="btn btn-primary">Add Work</button>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Order</th>
                  <th></th>
                </th>

                <?php foreach ($works as $work): ?>
									<tr>
                    <td><?php echo h($work['Work']['name']); ?>&nbsp;</td>
					<td><?php echo h($work['Work']['type']); ?>&nbsp;</td>
          <td class="order" binded="<?php echo h($work['Work']['orden']); ?>"><?php echo h($work['Work']['orden']); ?>&nbsp;</td>

          <td class="hidden inputOrder" > 
                  <select id="w<?php echo h($work['Work']['id']);?>" bind="<?php echo h($work['Work']['orden']); ?>">

                  <?php 
                    $o = h($work['Work']['orden']);
                    for($i = 1; $i <= $qty; $i++){
                      if ($i == $o){
                        echo '<option value='.$i.' selected>'.$i.'</option>';
                      }else{
                        echo '<option value='.$i.'>'.$i.'</option>';
                      }
                  } ?>
                </td>

	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
  	                      <a href="<?php echo $this->webroot;?>works/edit/<?php echo $work['Work']['id'];?>" title="Editar Work" class="menuTable">
  	                        <span class="glyphicon glyphicon-pencil"></span>
  	                      </a>
  	                      <a href="<?php echo $this->webroot;?>works/delete/<?php echo $work['Work']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar la Work?&quot;)) { return true; } return false;" class="menuTable">
  	                        <span class="glyphicon glyphicon-remove"></span></a>
                        <?php } ?>
	                    </div>                  
	                  </td>
									</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>
<p>
<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} Works de {:count} en total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>

<?php echo $this->Form->create(false, array(
  'url' => array('controller' => 'works', 'action' => 'order/'.$type)));

  for ($i = 1; $i <= $qty; $i++){
    echo $this->Form->input('id'.$i, array('div' => false, 'class' => 'hidden', 'label' => false));
    echo $this->Form->input('order'.$i, array('div' => false, 'class' => 'hidden', 'label' => false));
  }
  
  echo $this->Form->submit('', array('class' => 'hidden formSendBtn', 'div' => false));
  echo $this->Form->end(); ?>

<script type="text/javascript">
  $(document).ready(function(){
    var init =[];

    $('select').each(function(){
      var elem = {};
      elem.order = $(this).val();

      init.push(elem);
    });

    $('.orderBtn').click(function(){
      $('.inputOrder, .saveBtn, .cancelBtn').removeClass('hidden');
      $('.order, .orderBtn').addClass('hidden');
    });

    $('.cancelBtn').click(function(){

      var i = 0;

      $('select').each(function(){
        var binded = $('td[binded="'+(i+1)+'"]');
        binded.text(init[i].order);
        $(this).val(init[i].order);
        i++;
      });

      $('.order, .orderBtn').removeClass('hidden');
      $('.inputOrder, .saveBtn, .cancelBtn').addClass('hidden');
    });


    $('.saveBtn').click(function(){

      var selections= [];

      $('select').each(function(){
        selections.push($(this).val());
      });

      if (hasDuplicates(selections)) {
        alert('There can´t be two images with the same order');
      } else{

        var formData = [];

        $('select').each(function(){
          var elem = {};
          var id = $(this).attr('id');
          var bind = id.replace('w','');

          elem.id = bind;
          elem.order = $(this).val();

          formData.push(elem);
        });

        for (var i = 1; i <= formData.length; i++) {
          var id = formData[i-1].id;
          var order = formData[i-1].order;

          var s1 = '#id'+i;
          var s2 = '#order'+i;

          $(s1).val(parseInt(id));
          $(s2).val(parseInt(order));

          /*console.log($(s1).val());
          console.log($(s2).val());*/
        }

        $('.order, .orderBtn').removeClass('hidden');
        $('.inputOrder, .saveBtn, .cancelBtn').addClass('hidden');

        $('.formSendBtn').click();
      }
    });

    function hasDuplicates(array) {
      return (new Set(array)).size !== array.length;
    }

    $('select').on('change', function(){
      var bind = $(this).attr('bind');
      var binded = $('td[binded="'+bind+'"]');

      binded.text($(this).val());
    });

  });

</script>