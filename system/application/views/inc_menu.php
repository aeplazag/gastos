<ul class="sf-menu">

			<li><a href="<?=site_url('')?>">Home</a></li>

			<li><a href="<?=site_url('clientes/listar')?>">Clientes</a>
				<ul>
					<li class="current"><a href="<?=site_url('clientes/listar')?>">Listar</a></li>
					<li class="current"><a href="<?=site_url('clientes/agregar')?>">Agregar</a></li>
				</ul>
			</li>

			<li><a href="<?=site_url('facturas')?>">Facturas</a></li>

			<li><a href="<?=site_url('gastos')?>">Gastos</a></li>


			<? if ( $this->dx_auth->is_logged_in()) { ?>
			<li><a href="<?=site_url('backend')?>">Admin</a></li>

			<li><a href="<?=site_url('auth/logout')?>">[ Salir ]</a></li>
			<? } ?>
			
</ul>
