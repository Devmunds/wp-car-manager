<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<tr>
	<th><?php _e( 'Ano Fab / Mod', 'wp-car-manager' ); ?></th>
	<td><span class="wpcm-vehicle-data"><?php echo $vehicle->get_anomodelo(); ?></span></td>
</tr>