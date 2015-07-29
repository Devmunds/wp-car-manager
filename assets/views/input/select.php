<label for="<?php echo $field['key']; ?>">
	<span><?php echo $field['label']; ?></span>
	<select name="<?php echo $mb_prefix; ?>[<?php echo $field['key']; ?>]" id="<?php echo $field['key']; ?>">
		<?php
		if ( isset( $field['options'] ) && count( $field['options'] ) > 0 ) {
			foreach ( $field['options'] as $option_key => $option_value ) {
				?>
				<option value="<?php echo $option_key; ?>"<?php selected( $option_key, $field['value'] ); ?>><?php echo $option_value; ?></option>
				<?php
			}
		}
		?>
	</select>
</label>