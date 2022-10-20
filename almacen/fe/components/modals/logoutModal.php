<?php
$b = ( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) ? "localhost/" : "";
?>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="logoutModalLabel">¿Listo para salir?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Seleccione "Cerrar sesión" si está listo para finalizar su sesión actual.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Anular</button>
				<a class="btn btn-primary" href="//<?= $b ?>grenyaobrador.es/almacen/fe/components/pages/logout.php">Cerrar sesión</a>
			</div>
		</div>
	</div>
</div>
