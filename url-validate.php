<?php 
/**
 *
 * URL validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_validate_url' ) ) {
  function cs_validate_url( $value, $field ) {

    if ( ! filter_var($value, FILTER_VALIDATE_URL) ) {
      return esc_html__( 'Please write a valid url!', 'cs-framework' );
    }

  }
  add_filter( 'cs_validate_url', 'cs_validate_url', 10, 2 );
}
