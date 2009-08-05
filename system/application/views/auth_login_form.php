<?php
$username = array(
	'name'	=> 'username',
	'id'	=> 'username',
	'size'	=> 30,
	'value' => set_value('username')
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30
);

$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0'
);

$confirmation_code = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8
);
?>

<?
	include("inc_cabecera.php");
?>

		<div class="grid_12" id="cuerpo">
		<h2>Ingreso de Usuarios</h2>
		
		<fieldset><legend>Por favor ingrese su usuario y clave para acceder al sistema</legend>
		<?php echo form_open($this->uri->uri_string())?>
		
		<?php 
			$error = trim($this->dx_auth->get_auth_error());
			echo (strlen($error) > 0) ? "<p class='ui-state-error'>$error</p>" : "";
			//echo '<p class="ui-state-error">'.$this->dx_auth->get_auth_error().'</p>';
		?>
		<dl>	
			<dt><?php echo form_label('Usuario', $username['id']);?></dt>
			<dd>
				<?php echo form_input($username)?>
				<?php echo form_error($username['name']); ?>
			</dd>
			
			<dt><?php echo form_label('Clave', $password['id']);?></dt>
				<dd>
					<?php echo form_password($password)?>
					<?php echo form_error($password['name']); ?>
				</dd>
				
				<?php if ($show_captcha): ?>
					<dt>Ingrese el codigo tal cual aparece. No hay 0 (ceros)</dt>
						<dd><?php echo $this->dx_auth->get_captcha_image(); ?></dd>
					<dt><?php echo form_label('Codigo de Confirmacion', $confirmation_code['id']);?></dt>
					<dd>
						<?php echo form_input($confirmation_code);?>
						<?php echo form_error($confirmation_code['name']); ?>
					</dd>
				<?php endif; ?>
				
			<dd>
				<?php echo form_checkbox($remember);?> <?php echo form_label('Recordarme', $remember['id']);?> 
				<?php echo anchor($this->dx_auth->forgot_password_uri, 'Olvide mi Clave');?> 
				<?php
					if ($this->dx_auth->allow_registration) {
						echo '<br />'.anchor($this->dx_auth->register_uri, 'Registrarme');
					};
				?>
			</dd>

			<dd><?php echo form_submit('login','Ingresar');?></dd>
		</dl>
		<?php echo form_close()?>
		</fieldset>

	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>
	
<?
	include("inc_pie.php");
?>