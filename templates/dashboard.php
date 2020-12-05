<?php

/**
 * wpcm_before_dashboard hook
 */
do_action( 'wpcm_before_dashboard' );
?>
	<div class="wpcm-wrap-page cler-dms">
		<!--Menu-->
		<div class="wpcm-wrap-menu">
			<div class="wpcm-dashboard-menu">				
				<div class="wpcm-wrap-item-menu">
					<a href="http://localhost/devplugins/meus-carros?item=1">
						<div class="wpcm-item-menu">
								<i class="fas fa-tachometer-alt"></i>
								<h3>Dashboard</h3>						
						</div>
					</a>
				</div>
				<div class="wpcm-wrap-item-menu">
					<a href="http://localhost/devplugins/meus-carros?item=2">
						<div class="wpcm-item-menu">						
								<i class="fas fa-user-circle"></i> 
								<h3><?php  $user = wp_get_current_user(); echo $user->user_login;?></h3>						
						</div>
					</a>
				</div>
				<div class="wpcm-wrap-item-menu">
					<a href="http://localhost/devplugins/meus-carros?item=3">
						<div class="wpcm-item-menu">						
								<i class="fas fa-car-alt"></i> 
								<h3>Anúncios</h3>						
						</div>
					</a>
				</div>	
				<div class="wpcm-wrap-item-menu">
					<a href="http://localhost/devplugins/enviar-carros/	">
						<div class="wpcm-item-menu">						
								<i class="fas fa-plus-circle"></i> 
								<h3>Publicar</h3>						
						</div>
					</a>
				</div>									
				</div>
			</div>
			<!--Content-->
			<div class="dms-content-dashboard">
					<?php  
						if(isset($_GET['item']) && $_GET['item'] != ""){
							switch($_GET['item']){
								case '1':
									do_action('wpcm_dashboard_v_painel');
								break;
								case '2': 
									do_action( 'wpcm_dashboard_v_profile');
									break;
								case '3' : 
									do_action( 'wpcm_dashboard_v_vehicles');
									break;      
							}
						}else{
							do_action('wpcm_dashboard_v_painel');
						}				
					?>
			</div>
		</div>
	</div>
<?php
/**
 * wpcm_after_dashboard hook
 */
do_action( 'wpcm_after_dashboard' );