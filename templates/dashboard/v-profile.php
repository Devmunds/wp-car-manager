<div class="wpcm-wrap-page-iner-dashboard">
    <div class="wpcm-dashboard">
        <?php do_action( 'wpcm_before_profile' ); ?>

        <div class="wpcm-dashboard-profile">
            <?php
            /**
            * wpcm_dashboard_profile hook
            */
                do_action( 'wpcm_dashboard_profile' );
            ?>
        </div>                                                                                                                   

        <?php do_action( 'wpcm_after_profile' ); ?>
    </div>
</div>