<?php 
	$this->layout = 'front';
?>
<!-- <h2>Hey</h2> -->
<?php /*echo $this->Html->link(__('click me'), array('controller' => 'ofertas', 'action' => 'index'), array(
	'class' => 'btn btn-primary',
))*/?>

<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-8'>
			<div class='jumbotron'>
				<?php echo $this->Html->tag('h1', __('Bienvenido')); ?>
				<?php echo $this->Html->tag('p', __('Descripcion del servicio...')); ?>
				<?php echo $this->Html->link( __('Explorar >>'), '#'); ?>
			</div>
			<div>
			<?php 
				foreach ($ofertas as $oferta) {
					echo $this->element('Ofertas/teaser', array('oferta' => $oferta));
				}
			?>
			</div>
		</div>
		<div class='col-md-4'>
			<?php echo $this->element('Users/login'); ?>
		</div>
	</div>
</div>
