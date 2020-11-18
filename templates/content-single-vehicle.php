<?php
/*Update by Reteck*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

do_action( 'wpcm_before_single_vehicle', $vehicle );

?>
<div class="wpcm-vehicle" itemscope itemtype="https://schema.org/Vehicle">
	<div class="clr container res-container">
		<!--Vehicle galeria-->
		<div class="wpcm-wrap-galeria">
			<?php
				do_action( 'wpcm_before_vehicle_summary', $vehicle ); // Galeria de Imagens
			?>
		</div>
		<div class="dms-flex-container"> 
			<div class="dms-flex-title">
				<div class="wpcm-rtk-header wpcm-rtk-box">
					<h2><?php echo  $vehicle->get_title(); ?></h2>
					<span><i>R$ </i><?php echo number_format($vehicle->get_price(), 2, ',', '.') ; ?></span>		 
				</div>
			</div>
			<div class="dms-flex-contact">
				<div class="wpcm-rtk-box">
					<?php do_action( 'wpcm_vehicle_summary_contact', $vehicle );?>
				</div>	
			</div>
			<div class="dms-flex-description dms-flex-item-1">
				<!--Decrição do Veículo-->
				<div class="wpcm-rtk-decription wpcm-rtk-box">
					<?php do_action('wpcm_vehicle_content_content', $vehicle); ?>
				</div>	
			</div>
			<div class="dms-flex-detalhes-vehicle dms-flex-item-2">
				<!--Detalhes do Vehiculo-->
				<div class="wpcm-rtk-detalhes-vehicle wpcm-rtk-box">
					<?php do_action( 'wpcm_vehicle_content', $vehicle ); ?>
				</div>
			</div>
			<div class="dms-flex-itens-vehicle dms-flex-item-3">
				<!--Itens of Vehicle-->
				<?php $features = $vehicle->get_features(); if ( count( $features ) > 0 ) : ?>
					<div class="wpcm-rtk-itens-vehicle wpcm-rtk-box">
						<?php do_action( 'wpcm_vehicle_content_features', $vehicle ); ?>
					</div>
				<?php endif;  ?>	
			</div>
		</div>
	</div>
	<!--meta tag for ?-->
	<meta itemprop="url" content="<?php echo the_permalink(); ?>"/>
</div>
<?php do_action( 'wpcm_after_single_vehicle', $vehicle ); ?>