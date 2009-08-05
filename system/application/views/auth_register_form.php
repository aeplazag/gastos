<?php
$username = array(
	'name'	=> 'username',
	'id'	=> 'username',
	'size'	=> 30,
	'value' =>  set_value('username')
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'value' => set_value('password')
);

$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'size'	=> 30,
	'value' => set_value('confirm_password')
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'maxlength'	=> 80,
	'size'	=> 30,
	'value'	=> set_value('email')
);

$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha'
);
?>

<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">
	<h2>Registro de Usuarios</h2>

		<fieldset><legend>Por favor complete el siguiente formulario para registrarse como nuevo usuario</legend>
		<?php echo form_open($this->uri->uri_string())?>
		<dl>
			<dt><?php echo form_label('Nombre de Usuario', $username['id']);?></dt>
			<dd>
				<?php echo form_input($username)?>
				<?php echo form_error($username['name']); ?>
			</dd>
			
			<dt><?php echo form_label('Clave', $password['id']);?></dt>
			<dd>
				<?php echo form_password($password)?>
				<?php echo form_error($password['name']); ?>
			</dd>
			
			<dt><?php echo form_label('Confirme Clave', $confirm_password['id']);?></dt>
			<dd>
				<?php echo form_password($confirm_password);?>
				<?php echo form_error($confirm_password['name']); ?>
			</dd>
			
			<dt><?php echo form_label('Direccion de Email', $email['id']);?></dt>
			<dd>
				<?php echo form_input($email);?>
				<?php echo form_error($email['name']); ?>
			</dd>
			
			<?php if ($this->dx_auth->captcha_registration): ?>
				<dt>Ingrese el codigo tal cual aparece. No hay 0 (ceros)</dt>
				<dd><?php echo $this->dx_auth->get_captcha_image(); ?></dd>
				<dt><?php echo form_label('Codigo de Confirmacion', $captcha['id']);?></dt>
				<dd>
					<?php echo form_input($captcha);?>
					<?php echo form_error($captcha['name']); ?>
				</dd>
			<?php endif; ?>
			
			<dd><?php echo form_submit('register','Registrarse');?></dd>
		</dl>
		
		<?php echo form_close()?>
		</fieldset>
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>