<h2>
    <?php _e( 'Meu perfil', 'wp-car-manager' ); ?>
    <a href="javascript:;" class="wpcm-button wpcm-button-dashboard-profile-edit"><?php _e( 'Edit', 'wp-car-manager' ); ?></a>
</h2>
<p>
        <?php
			$user = wp_get_current_user();
			printf( __( 'Você está conectado como: <strong>%s</strong>.', 'wp-car-manager' ), $user->user_login );
		?>
</p>

