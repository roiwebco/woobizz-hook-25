<?php
/*
* Plugin Name: Woobizz Hook 25 
* Plugin URI: http://woobizz.com
* Description: Show multi-steps process on cart, checkout & order received page 
* Author: Woobizz
* Author URI: http://woobizz.com
* Version: 1.0.0
* Text Domain: woobizzhook25
* Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizzhook25_load_textdomain' );
function woobizzhook25_load_textdomain() {
  load_plugin_textdomain( 'woobizzhook25', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Check if WooCommerce is active
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	//echo "woocommerce is active";		
    add_action('storefront_page','woobizzhook25_check_woocommerce_pages',21);
}else{
	//Show message on admin
	//echo "woocommerce is not active";
	add_action( 'admin_notices', 'woobizzhook25_admin_notice' );
}
//Hook25 Notice
function woobizzhook25_admin_notice() {
	?>
    <div class="notice notice-error is-dismissible">
        <p><?php _e( 'Woobizz Hook 25 needs WooCommerce to work properly, If you do not use this plugin you can disable it!', 'woobizzhook25' ); ?></p>
    </div>
    <?php
}
//Hook 25
//Start Hook Function
function woobizzhook25_checkout_multisteps_1() {
	//Load translated text
	$woobizzhook25_cart_text= __('Shopping Cart','woobizzhook25');
	$woobizzhook25_checkout_text= __('Shipping & Payment','woobizzhook25');
	$woobizzhook25_confirmation_text= __('Confirmation','woobizzhook25');
	//Echo Html
	?>
	<div class="woobizzhook25-stepwizard">
		<div class="woobizzhook25-stepwizard-row">
			<div class="woobizzhook25-stepwizard-step">
				<button type="button" class="btn btn-primary woobizzhook25-btn-circle-1">1</button>
				<p><?php echo $woobizzhook25_cart_text;?></p>
			</div>
			<div class="woobizzhook25-stepwizard-step">
				<button type="button" class="btn btn-primary woobizzhook25-btn-circle-2">2</button>
				<p><?php echo $woobizzhook25_checkout_text;?></p>
			</div>
			<div class="woobizzhook25-stepwizard-step">
				 <button type="button" class="btn btn-primary woobizzhook25-btn-circle-3">3</button>
				<p><?php echo $woobizzhook25_confirmation_text;?></p>
			</div> 
		</div>
	</div>
	<?php
	//Echo CSS
	echo"<style>
	.woobizzhook25-stepwizard-row {display: table-row;}
	.woobizzhook25-stepwizard { display: table; width: 100%; max-width: 640px; margin: 0 auto; position: relative; }
	.woobizzhook25-stepwizard-step button[disabled] { opacity: 1 !important; filter: alpha(opacity=100) !important; }
	.woobizzhook25-stepwizard-row:before { top: 15px; bottom: 0; position: absolute; content: ' '; width: 100%; height: 1px; background-color: #ccc; z-order: 0; }
	.woobizzhook25-stepwizard-step { display: table-cell; text-align: center; position: relative; }
	.woobizzhook25-btn-circle-1 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: #98d258; pointer-events: none; }
	.woobizzhook25-btn-circle-2 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: white; pointer-events: none; }
	.woobizzhook25-btn-circle-3 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: white; pointer-events: none; }
	</style>";
}
function woobizzhook25_checkout_multisteps_2() {
	//Load translated text
	$woobizzhook25_cart_text= __('Shopping Cart','woobizzhook25');
	$woobizzhook25_checkout_text= __('Shipping & Payment','woobizzhook25');
	$woobizzhook25_confirmation_text= __('Confirmation','woobizzhook25');
	//Echo Html
	?>
	<div class="woobizzhook25-stepwizard">
		<div class="woobizzhook25-stepwizard-row">
			<div class="woobizzhook25-stepwizard-step">
				<button type="button" class="btn btn-primary woobizzhook25-btn-circle-1">1</button>
				<p><?php echo $woobizzhook25_cart_text;?></p>
			</div>
			<div class="woobizzhook25-stepwizard-step">
				<button type="button" class="btn btn-primary woobizzhook25-btn-circle-2">2</button>
				<p><?php echo $woobizzhook25_checkout_text;?></p>
			</div>
			<div class="woobizzhook25-stepwizard-step">
				 <button type="button" class="btn btn-primary woobizzhook25-btn-circle-3">3</button>
				<p><?php echo $woobizzhook25_confirmation_text;?></p>
			</div> 
		</div>
	</div>
	<?php
	//Echo CSS
	echo"<style>
	.woobizzhook25-stepwizard-row {display: table-row;}
	.woobizzhook25-stepwizard { display: table; width: 100%; max-width: 640px; margin: 0 auto; position: relative; }
	.woobizzhook25-stepwizard-step button[disabled] { opacity: 1 !important; filter: alpha(opacity=100) !important; }
	.woobizzhook25-stepwizard-row:before { top: 15px; bottom: 0; position: absolute; content: ' '; width: 100%; height: 1px; background-color: #ccc; z-order: 0; }
	.woobizzhook25-stepwizard-step { display: table-cell; text-align: center; position: relative; }
	.woobizzhook25-btn-circle-1 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: white; pointer-events: none; }
	.woobizzhook25-btn-circle-2 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: #98d258; pointer-events: none; }
	.woobizzhook25-btn-circle-3 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: white; pointer-events: none; }
	</style>";
}
function woobizzhook25_checkout_multisteps_3() {
	//Load translated text
	$woobizzhook25_cart_text= __('Shopping Cart','woobizzhook25');
	$woobizzhook25_checkout_text= __('Shipping & Payment','woobizzhook25');
	$woobizzhook25_confirmation_text= __('Confirmation','woobizzhook25');
	//Echo Html
	?>
	<div class="woobizzhook25-stepwizard">
		<div class="woobizzhook25-stepwizard-row">
			<div class="woobizzhook25-stepwizard-step">
				<button type="button" class="btn btn-primary woobizzhook25-btn-circle-1">1</button>
				<p><?php echo $woobizzhook25_cart_text;?></p>
			</div>
			<div class="woobizzhook25-stepwizard-step">
				<button type="button" class="btn btn-primary woobizzhook25-btn-circle-2">2</button>
				<p><?php echo $woobizzhook25_checkout_text;?></p>
			</div>
			<div class="woobizzhook25-stepwizard-step">
				 <button type="button" class="btn btn-primary woobizzhook25-btn-circle-3">3</button>
				<p><?php echo $woobizzhook25_confirmation_text;?></p>
			</div> 
		</div>
	</div>
	<?php
	//Echo CSS
	echo"<style>
	.woobizzhook25-stepwizard-row {display: table-row;}
	.woobizzhook25-stepwizard { display: table; width: 100%; max-width: 640px; margin: 0 auto; position: relative; }
	.woobizzhook25-stepwizard-step button[disabled] { opacity: 1 !important; filter: alpha(opacity=100) !important; }
	.woobizzhook25-stepwizard-row:before { top: 15px; bottom: 0; position: absolute; content: ' '; width: 100%; height: 1px; background-color: #ccc; z-order: 0; }
	.woobizzhook25-stepwizard-step { display: table-cell; text-align: center; position: relative; }
	.woobizzhook25-btn-circle-1 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: white; pointer-events: none; }
	.woobizzhook25-btn-circle-2 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: white; pointer-events: none; }
	.woobizzhook25-btn-circle-3 { width: 30px; height: 30px; text-align: center; padding: 7px 0; font-size: 12px; line-height: 1.428571429; border-radius: 15px; margin-right: 10px; background: #98d258; pointer-events: none; }
	</style>";
}
function woobizzhook25_check_woocommerce_pages(){
	global $woocommerce;
		if (is_cart()) {
			add_action('storefront_page','woobizzhook25_checkout_multisteps_1');
			//echo "is cart page";
		}
		
		if (is_checkout() && !is_wc_endpoint_url('order-received')){
			add_action('storefront_page','woobizzhook25_checkout_multisteps_2');
			//echo "is checkout";
		}
		
		if (is_checkout() && is_wc_endpoint_url('order-received')){
			add_action('storefront_page','woobizzhook25_checkout_multisteps_3');
			//echo "is order received page";
			
		}
}
add_action('wp','woobizzhook25_check_woocommerce_pages');
//Hide titles on mobile
function woobizzhook25_hide_titles_on_mobile() {
	//Echo CSS
	
	echo"<style>
	@media (max-width:640px){
		.woobizzhook25-stepwizard-step p{
			display:none;
		}
		.woobizzhook25-stepwizard {
			margin-bottom:35px!important;
		}
	}
	
	</style>";
}
add_action('storefront_page','woobizzhook25_hide_titles_on_mobile');