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
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Monto</label>
						<?php echo $this->Form->input('monto',array('div'=>false,'required'=>true,'label'=>false,'class'=>'form-control','required'=>true, 'min'=>'1', 'error' => true)); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Método de Pago</label><br/>
						<?php echo $this->Form->radio('metodo_pago', array('paypal' => '<img class="logo-pago" src="'.$this->webroot.'img/logo-paypal.png">', 'mercadopago' => '<img class="logo-pago" src="'.$this->webroot.'img/logo-mercadopago.png">', '123pago' => '<img class="logo-pago" src="'.$this->webroot.'img/logo-123pago.png">') , array('div'=>false,'label'=>false, 'value'=>'paypal','class'=>'','required'=>true, 'legend' => false, 'style' => 'margin-right: 1%; margin-left:2%;', 'error' => true)); ?>
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
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Teléfono</label>
						<?php echo $this->Form->input('telefono',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'0000-0000000','required'=>true, 'error' => true)); ?>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#PaymentIndexForm').submit(function (e){
			var error = '<div class="error_message">';
			var isValid = true;

			$('.error_message').remove();

			if (!$('#PaymentNombreEmpresa').val() != '') {
				$('#PaymentNombreEmpresa').after(error+'Debe llenar este campo'+'</div>');
				isValid = false;
			}

			if ($('#PaymentRif').val()!= '') {
				var pat = /^[VvjJ][-]\d{9}$/;
				if (!pat.test($('#PaymentRif').val())) {
					$('#PaymentRif').after(error+'Debe colocar un rif con el formato J-000000000'+'</div>');
					isValid = false;
				}
			}else{
				$('#PaymentRif').after(error+'Debe llenar este campo'+'</div>');
				isValid = false;
			}

				if ( $('#PaymentMonto').val() != '') {
					if (parseInt($('#PaymentMonto').val()) <= 0) {
						$('#PaymentMonto').after(error+'El monto debe ser mayor que 0'+'</div>');
						isValid = false;
					}

					if (parseInt($('#PaymentMonto').val()) > 999999) {
						$('#PaymentMonto').after(error+'El monto debe ser menor que 999999'+'</div>');
						isValid = false;
					}
				}else{
					$('#PaymentMonto').after(error+'Debe llenar este campo con un monto válido'+'</div>');
					isValid = false;
				}

			if (!$('#PaymentDescripcion').val() != '') {
				$('#PaymentDescripcion').after(error+'Debe llenar este campo'+'</div>');
				isValid = false;
			}

			if (!$('#PaymentResponsable').val() != '') {
				$('#PaymentResponsable').after(error+'Debe llenar este campo'+'</div>');
				isValid = false;
			}

			if ($('#PaymentCorreo').val()!= '') {
				var pat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				if (!pat.test($('#PaymentCorreo').val())) {
					$('#PaymentCorreo').after(error+'Debe colocar un correo válido'+'</div>');
					isValid = false;
				}
			}else{
				$('#PaymentCorreo').after(error+'Debe llenar este campo'+'</div>');
				isValid = false;
			}

			if ($('#PaymentTelefono').val()!= '') {
				var pat = /^\d{4}[-]\d{7}$/;
				if (!pat.test($('#PaymentTelefono').val())) {
					$('#PaymentTelefono').after(error+'El teléfono debe contener un código de área de 4 dígitos seguido de un guión (-) y 7 dígitos'+'</div>');
					isValid = false;
				}
			}else{
				$('#PaymentTelefono').after(error+'Debe llenar este campo'+'</div>');
				isValid = false;
			}

			if (!isValid){
				e.preventDefault();
			}
	});
});
</script>
