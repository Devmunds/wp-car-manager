<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<tr>
	<th><?php _e( 'Ano Fabricação', 'wp-car-manager' ); ?></th>
	<td><span class="wpcm-vehicle-data"><?php echo $vehicle->get_anofab(); ?></span></td>
</tr>