<ul class="sf-menu">

			<li><a href="<?=site_url('')?>">Home</a></li>

			<li><a href="<?=site_url('clientes/listar')?>">Clientes</a>
				<ul>
					<li><a href="<?=site_url('clientes/listar')?>">Listar</a></li>
					<li><a href="<?=site_url('clientes/agregar')?>">Agregar</a></li>
				</ul>
			</li>

			<li><a href="<?=site_url('comisiones/listar')?>">Comisiones y Ganancias</a>
				<ul>
					<li><a href="<?=site_url('comisiones/listar')?>">Listar</a></li>
					<li><a href="<?=site_url('comisiones/agregar')?>">Agregar</a></li>
				</ul>
			</li>

			<li><a href="<?=site_url('gastos')?>">Gastos</a></li>


			<? if ( $this->dx_auth->is_logged_in()) { ?>
			<li><a href="<?=site_url('backend')?>">Admin</a></li>

			<li><a href="<?=site_url('auth/logout')?>">[ Salir ]</a></li>
			<? } ?>
			
</ul>
