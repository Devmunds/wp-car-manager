<div class="wpcm-filter wpcm-filter-anomod">
	<select name="anomod_from">
		<option value="0">Ano mínimo</option>
		<option value="0"><?php esc_html_e( 'All', 'wp-car-manager' ); ?></option>
		<?php for ( $i = date( 'Y', time() ); $i >= 1900; $i -- ) : ?>
			<?php
			if ( $i < 1970 && 0 != ( $i % 5 ) ) {
				continue;
			}
			?>
			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
		<?php endfor; ?>
	</select>
</div>