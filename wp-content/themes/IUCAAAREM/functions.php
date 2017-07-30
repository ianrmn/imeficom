<?php 
	
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 		  
 	 add_action( 'wp_enqueue_scripts', 'caaa_enqueue_script' );
	 function caaa_enqueue_script() { 
 		  wp_enqueue_script( 'IUCAAAREM', get_template_directory_uri() . '/js/caaarem.js' ); 
 		  } 
 		  
 	function wpbeginner_display_gravatar() { 
		global $current_user;
		get_currentuserinfo();
		// Get User Email Address
		$getuseremail = $current_user->user_email;
		// Convert email into md5 hash and set image size to 32 px
		$usergravatar = 'https://www.gravatar.com/avatar/' . md5($getuseremail) . '?s=32';
		echo '<img src="' . $usergravatar . '" class="wpb_gravatar" />';
	}
	
	add_action('admin_head', 'removeNotices');

	function removeNotices() {
	  echo '<style>
	    .wp-mobile-menu-notice, .updated { display: none; } 
	  </style>';
	}
	
	add_action( 'woocommerce_add_order_item_meta', 'jk_add_item_sku', 10, 3 );
	function jk_add_item_sku( $item_id, $values, $cart_item_key ) {
	  $item_sku = get_post_meta( $values[ 'product_id' ], '_sku', true );
	  wc_add_order_item_meta( $item_id, 'sku', $item_sku , false );
	}
		
 ?>