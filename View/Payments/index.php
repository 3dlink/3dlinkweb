<header class="container-fluid paymentHeader">
	<section class="payment">
		<div class="logo-holder">
			<img class="" src="<?php echo $this->webroot;?>img/Logo-Home.png">
		</div>
	</section>
</header>

<section class="paymentForm container">
	<article class="card shadow-1">
		<?php echo $this->Form->create('Payment', ['url' => ['action' => 'pay']]); ?>
		<fieldset>
			<legend>Pago</legend>
			<div class="margenesHorizontales">

				<div class="col-md-6">
					<div class="form-group">
						<label>Empresa</label>
						<?php echo $this->Form->input('nombre_empresa',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'3Dlink','required'=>true, 'error' => true)); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>RIF</label>
						<?php echo $this->Form->input('rif',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'J-000000000','required'=>true, 'error' => true)); ?>
						<?php echo $this->Session->flash('rif'); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Monto</label>
						<?php echo $this->Form->input('monto',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true, 'min'=>'0', 'error' => true)); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Método de Pago</label><br/>
						<?php echo $this->Form->radio('metodo_pago', array('paypal' => '<img class="logo-pago" src="'.$this->webroot.'img/logo-paypal.png">', 'mercadopago' => '<img class="logo-pago" src="'.$this->webroot.'img/logo-mercadopago.png">', '123pago' => '<img class="logo-pago" src="'.$this->webroot.'img/logo-123pago.png">') , array('div'=>false,'label'=>false,'class'=>'','required'=>true, 'legend' => false, 'separator' =>'<br/>', 'style' => 'margin-right: 1%; margin-left:2%;', 'error' => true)); ?>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label>Trabajo / Descripción</label>
						<?php echo $this->Form->input('descripcion',array('type'=> 'textarea', 'div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'...', 'required'=>true, 'maxlength'=> '1000', 'cols' => '10', 'rows' => '3', 'error' => true)); ?>
					</div>
				</div>

				<div class="col-md-12" style="padding-right: 45px;">
					<div class="form-group pd-50">
						<label>Responsable</label>
						<?php echo $this->Form->input('responsable',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Jane Doe','required'=>true, 'error' => true)); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Correo</label>
						<?php echo $this->Form->input('correo',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'hello@example.com','required'=>true, 'error' => true)); ?>
						<?php echo $this->Session->flash('correo'); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Teléfono</label>
						<?php echo $this->Form->input('telefono',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'0000-0000000','required'=>true, 'error' => true)); ?>
						<?php echo $this->Session->flash('telefono'); ?>
					</div>
				</div>

				

				<div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
					<button type="submit" class="btn btn-primary">
						Pagar
					</button>
				</div>
			</div>
		</fieldset>
		<?php echo $this->Form->end(); ?>  
	</article>
</section>

<footer class="clearfix">
	<section class="footer">
		<div class="social-net" style="float:left;">
			<div class="right resp-opt">
				<img onclick="window.open('https://www.facebook.com/3dlinkVzla');" src="<?php echo $this->webroot;?>img/facebook-ico.png">
				<img onclick="window.open('https://www.instagram.com/3dlinkvzla/');" src="<?php echo $this->webroot;?>img/instagram-ico.png" style="padding-left: 10px;">
			</div>
		</div>
		<div class="copyright" style="float:left;">
			<p class="right">All rights reserved, 3D Link. 2016</p>
		</div>

	</section>
</footer>
