<?php

namespace Never5\WPCarManager\Vehicle;

use Never5\WPCarManager\Helper;

class Data {

	/**
	 * Get Vehicle fields
	 *
	 * @param string $type Not used at the moment, but will be used when more than 1 vehicle type is offered
	 *
	 * @return array
	 */
	public static function get_fields( $type = 'car' ) {

		return apply_filters( 'wpcm_vehicle_fields', array(
			'condition'    => array(
				'type'     => 'select',
				'options'  => self::get_conditions(),
				'label'    => __( 'Condition', 'wp-car-manager' ),
				'key'      => 'condition',
				'required' => true,
				
			),
			'make'         => array(
				'type'     => 'select',
				'options'  => wp_car_manager()->service( 'make_model_manager' )->get_makes_map(),
				'label'    => __( 'Make', 'wp-car-manager' ),
				'key'      => 'make',
				'required' => true
			),
			'model'        => array(
				'type'     => 'select-model',
				'label'    => __( 'Model', 'wp-car-manager' ),
				'key'      => 'model',
				'required' => true,
			),		
			'body_style'   => array(
				'type'        => 'text',
				'label'       => __( 'Versão', 'wp-car-manager' ),
				'key'         => 'body_style',
				'required'    => true,
				'placeholder' => __( 'e.g.', 'wp-car-manager' ) . ' ' . __( 'A6', 'wp-car-manager' )
			),
			/*			
			'frdate'       => array( 
				'type'        => 'text',
				'label'       => __( 'Ano do veiculo', 'wp-car-manager' ),
				'key'         => 'frdate',
				'required'    => true,
				'placeholder' => 'Ano'
			),*/
			'anofab'        => array(
				'type'        => 'select',
				'options'  => self::get_anofab(),
				'label'       => __( 'Ano Fabricação', 'wp-car-manager' ),
				'key'         => 'anofab',
				'required'    => true,
				
			),										
			'anomod'        => array(
				'type'        => 'select',
				'options' => self::get_anomod(),
				'label'       => __( 'Ano Modelo', 'wp-car-manager' ),
				'key'         => 'anomod',
				'required'    => true,
				 
			),
			'price'        => array(
				'type'        => 'text',
				'label'       => __( 'Price', 'wp-car-manager' ),
				'key'         => 'price',
				'required'    => true,
				'placeholder' => Helper\Format::price( '29000.99', array( 'plain' => true, 'decimals' => 2 ) )
			),
			'mileage'      => array(
				'type'        => 'text',
				'label'       => __( 'Quilometragem', 'wp-car-manager' ),
				'key'         => 'mileage',
				'required'    => false,
				'placeholder' => Helper\Format::mileage( '100000' )
			),
			'fuel_type'    => array(
				'type'     => 'select',
				'options'  => self::get_fuel_type(),
				'label'       => __( 'Fuel Type', 'wp-car-manager' ),
				'key'         => 'fuel_type',
				'required'    => true,
				'placeholder' => __( 'e.g.', 'wp-car-manager' ) . ' ' . __( 'Gas', 'wp-car-manager' )
			),
			'color'        => array(
				'type'        => 'text',
				'label'       => __( 'Color', 'wp-car-manager' ),
				'key'         => 'color',
				'required'    => false,
				'placeholder' => __( 'e.g.', 'wp-car-manager' ) . ' ' . __( 'Grey', 'wp-car-manager' )
			),
			'transmission' => array(
				'type'     => 'select',
				'options'  => self::get_transmissions(),
				'label'    => __( 'Transmission', 'wp-car-manager' ),
				'key'      => 'transmission',
				'required' => true,
			),
			'doors'        => array(
				'type'        => 'text',
				'label'       => __( 'Doors', 'wp-car-manager' ),
				'key'         => 'doors',
				'required'    => false,
				'placeholder' => __( 'e.g.', 'wp-car-manager' ) . ' 5'
			),
			'engine'       => array(
				'type'        => 'text',
				'label'       => __( 'Engine', 'wp-car-manager' ),
				'key'         => 'engine',
				'required'    => false,
				'placeholder' => __( 'e.g.', 'wp-car-manager' ) . ' ' . __( '2.0 TDI', 'wp-car-manager' )
			),
		), $type );
	}

	/**
	 * Return condition possibilities
	 *
	 * @return array
	 */
	public static function get_conditions() {
		return apply_filters( 'wpcm_conditions', array(
			'0'  => __( 'Selecione uma condição', 'wp-car-manager' ),
			'new'  => __( 'New', 'wp-car-manager' ),
			'used' => __( 'Used', 'wp-car-manager' ),
			'repasse' => __( 'Repasse', 'wp-car-manager' )
		) );
	}

	/**
	 * Get transmission possibilities
	 *
	 * @return array
	 */
	public static function get_transmissions() {
		return apply_filters( 'wpcm_transmissions', array(
			'0'      => __( 'Selecione um tipo de transmissão', 'wp-car-manager' ),
			'automatic'      => __( 'Automatic', 'wp-car-manager' ),
			'manual'         => __( 'Manual', 'wp-car-manager' ),
			'semi-automatic' => __( 'Semi-Automatic', 'wp-car-manager' )
		) );
	}
	//By Reteck
	public static function get_fuel_type() {
		return apply_filters( 'wpcm_fuel_type', array(
			'0'       	=> __( 'Selecione um tipo de combustível', 'wp-car-manager' ),
			'Flex'       	=> __( 'Flex', 'wp-car-manager' ),
			'Gasolina'   	=> __( 'Gasolina', 'wp-car-manager' ),
			'Diesel'      	=> __( 'Diesel', 'wp-car-manager' ),
			'Álcool'        => __( 'Álcool', 'wp-car-manager' ),
			'Híbrido'       => __( 'Híbrido', 'wp-car-manager' ),
			'Elétrico' 		=> __( 'Elétrico', 'wp-car-manager' ),
			'GNV e Flex' 	=> __( 'GNV e Flex', 'wp-car-manager' ),
			'GNV e Gasolina' 	=> __( 'GNV e Gasolina', 'wp-car-manager' ),
			'GNV e Álcool' 	=> __( 'GNV e Álcool', 'wp-car-manager' )
		) );
	}


	//By devmunds
public static function get_anomod(){

	$anomod = array();

	for ( $i = date( 'Y', time() )+1; $i >= 1900; $i -- ) {

		if ( $i < 1970 && 0 != ( $i % 5 ) ) {
			continue;
		}

		$anomod[0] = __('Selecione o ano de modelo', 'wp-car-manager');
		$anomod[$i] =  __( $i, 'wp-car-manager' );		
	}

	return  apply_filters('wpcm_anomod', $anomod);
}

public static function get_anofab(){

	$anofab = array();

	for ( $i = date( 'Y', time() )+1; $i >= 1900; $i -- ) {

		if ( $i < 1970 && 0 != ( $i % 5 ) ) {
			continue;
		}

		$anofab[0] = __('Selecione o ano de fabricação', 'wp-car-manager');
		$anofab[$i] =  __( $i, 'wp-car-manager' );		
	}

	return  apply_filters('wpcm_anofab', $anofab);
}




	/**
	 * Remove fields that have no value data
	 *
	 * @param array $fields
	 * @param Vehicle $vehicle
	 *
	 * @return array
	 */
	public static function remove_empty_fields( $fields, $vehicle ) {

		foreach ( $fields as $field_key => $field ) {
			$data_method = 'get_' . $field;
			if ( method_exists( $vehicle, $data_method ) ) {
				$data_val = $vehicle->$data_method();
				if ( '' == $data_val ) {
					unset( $fields[ $field_key ] );
				}
			}
		}

		return $fields;
	}
}
