<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

global $vehicle;
?>
<tr>
	<th><?php _e( 'Year', 'wp-car-manager' ); ?></th>
	<td><span itemprop="dateVehicleFirstRegistered" class="wpcm-vehicle-data"><?php echo $vehicle->get_frdate(); ?></span></td>
</tr>