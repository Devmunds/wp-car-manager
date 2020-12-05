<?php 
    //variables
    $wpcm_vehicles  =   count_user_posts(get_current_user_id(),'wpcm_vehicle');
    $max_post           =   count_user_posts(get_current_user_id());
    $maxposts           =   get_user_meta(get_current_user_id(), 'userMeta_max_posts', true);
    $max_photos       =   get_user_meta(get_current_user_id(), 'userMeta_max_photos_upload', true);
                
 ?>

<div class="wpcm-wrap-page-iner-dashboard">
    <h2>Dashboard</h2>
    <div class="wpcm-wrap-painel">
        <div class="wpcm-wrap-item">
            <div class="wpcm-painel-item wpcm-painel-item-01"> 
                <span><?php echo $max_post; ?></span>
                <h3>Anúncios<br/>cadastrados<h3>
            </div>
        </div>
        <div class="wpcm-wrap-item">
            <div class="wpcm-painel-item wpcm-painel-item-02"> 
                <span><?php echo $max_photos; ?></span>
                <h3>Maximo de<br/>fotos<h3>
            </div>
        </div> 
        <div class="wpcm-wrap-item">
            <div class="wpcm-painel-item wpcm-painel-item-03"> 
                <span><?php echo $maxposts; ?></span>
                <h3>Maximo de<br/> anúncios<h3>
            </div>
        </div>               
    </div>
</div>