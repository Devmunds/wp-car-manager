<h2>
    <?php _e( 'Anúncios', 'wp-car-manager' ); ?><!--Upadate by Reteck-->
</h2>
<p id="count-anuncios-add"><?php printf( __('Anúncios cadastrados: %s','wp-car-manager'),  count_user_posts(get_current_user_id(), 'wpcm_vehicle')); ?></p>