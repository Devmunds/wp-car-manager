<!--Modified By Reteck-->
<div class="rtk-col-md-2 rtk-col-sm-4 rtk-col-xs-6">
    <div class="wpcm-listings-item<?php echo( $vehicle->is_featured() ? " wpcm-listings-item-featured" : "" ); ?>">
        <a target="_blank" href="<?php echo $url; ?>" title="<?php echo  $vehicle->get_title();?>">
            <?php do_action( 'wpcm_vehicle_listings_item_start', $vehicle ); ?>
            <div class="wpcm-listings-item-image-wrapper">
                <?php do_action( 'wpcm_vehicle_listings_item_image_start', $vehicle ); ?>
                <?php echo $image; ?>
                <?php do_action( 'wpcm_vehicle_listings_item_image_end', $vehicle ); ?>
            </div>
            <div class="wpcm-listings-item-description">
                <?php do_action( 'wpcm_vehicle_listings_item_description_start', $vehicle ); ?>
                <h3><?php echo  $vehicle->get_title();?></h3>
                <?php do_action( 'wpcm_vehicle_listings_item_description_end', $vehicle ); ?>
            </div>
            <div class="wpcm-listings-item-meta">
                <?php do_action( 'wpcm_vehicle_listings_item_meta_start', $vehicle ); ?>              
                    <label><?php echo $vehicle->get_anomodelo() . " - " . $vehicle->get_color() . " - " . $vehicle->get_fuel_type();?></label><br/>
                    <span><?php echo "R$ " . number_format($vehicle->get_price(), 2, ',', '.') ; ?></span>         
                <?php do_action( 'wpcm_vehicle_listings_item_meta_end', $vehicle ); ?>
            </div>
            <?php do_action( 'wpcm_vehicle_listings_item_end', $vehicle ); ?>
        </a>
</div>
</div>
