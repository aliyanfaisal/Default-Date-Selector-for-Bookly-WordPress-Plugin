<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://aliyanfaisal.urbansofts.com
 * @since             1.0.0
 * @package           Afb_Bookly_Date_Selector
 *
 * @wordpress-plugin
 * Plugin Name:       Bookly Plugin Default Date Selector
 * Plugin URI:        https://https://aliyanfaisal.urbansofts.com
 * Description:       select a default date for your Bookly calendar. Built with &hearts; by Aliyan Faisal
 * Version:           1.0.0
 * Author:            Aliyan Faisal
 * Author URI:        https://https://aliyanfaisal.urbansofts.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       afb-bookly-date-selector
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AFB_BOOKLY_DATE_SELECTOR_VERSION', '1.0.0' );
define("AFB_BOOKLY_DATE_SELECTOR_URL", plugin_dir_url(__FILE__));
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-afb-bookly-date-selector-activator.php
 */
function activate_afb_bookly_date_selector() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-afb-bookly-date-selector-activator.php';
	Afb_Bookly_Date_Selector_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-afb-bookly-date-selector-deactivator.php
 */
function deactivate_afb_bookly_date_selector() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-afb-bookly-date-selector-deactivator.php';
	Afb_Bookly_Date_Selector_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_afb_bookly_date_selector' );
register_deactivation_hook( __FILE__, 'deactivate_afb_bookly_date_selector' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-afb-bookly-date-selector.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_afb_bookly_date_selector() {

	$plugin = new Afb_Bookly_Date_Selector();
	$plugin->run();

}
run_afb_bookly_date_selector();



add_action("wp_head", function(){
	?>
<style>
	.svelte-wx26po .card-body{
		display: none !important
	}
	.bookly-bootstrap .card{
		min-height: 200px !important
	}
	.svelte-1p4lg7g{
		margin: 0px !important
	}
	.svelte-1p4lg7g .card-text{
		height: 20px !important
	}
	
	.bookly-bootstrap .bookly-search-form-left{
		display: none !important
	}

</style>
<?php
});



add_action( 'wp_footer', function(){
	
	?>
<style>
	.bookly-search-form{
		display:none
	}
	
	.disabled {
    	pointer-events: auto !important;
		opacity: 1 !important;
	}
	
	.active{
		background-color: #0072b8 !important;
   		 border-color: #0072b8 !important;
	}
	
	.bg-light{
		background-color: transparent !important
	}
	
		
/* 	.bookly-bootstrap .d-sm-block, .bookly-bootstrap .d-block  {
		display: block !important
	} */
	
	.bookly-bootstrap .modal-body.pb-0 .row > div:nth-child(4) {
		display: none !important
	}
	.bookly-search-form{
		display: flex;
		flex-direction: row
	}
	.bookly-search-form .bookly-search-form-left , .bookly-search-form .bookly-search-form-right{
		flex: 1 !important
	}
	
	.svelte-17gn86m .bookly-card-title{
		 position: absolute; 
		  left: 0; 
		  right: 0; 
		  margin-left: auto; 
		  margin-right: auto; 
		  width: 120px;
		top: 5% !important;
		align-content:center
	}
	
	.svelte-17gn86m .bookly-card-title > div{
		height: 120px !important;
    	width: 120px !important;
	}
	.svelte-17gn86m .bookly-card-title img{
		height: 120px !important;
		width: 120px !important
	}
</style>
<script>


jQuery(function($){
	
	
	function start_here_afb(){
		var myInt= setInterval(function(){
			let done= init_calendar_afb()
			console.log("loppingggg")
			if(done){
				clearInterval(myInt)
			}
		}, 800)
	}
	start_here_afb()

   function addBackEve(){
		var myIntx= setInterval(function(){
   		let y= $(".card.svelte-wx26po")
		
			if(y.length){
				start_here_afb()
				clearInterval(myIntx)
			}

		}, 800)

   }
	addBackEve()
	

	function init_add_Event(){
		
		$("")
	}
	
	function init_calendar_afb(){
		var calendar_container= $(".bookly-staff-form-container .card.svelte-1p4lg7g") 
		if(calendar_container.length){
			
			$(".bookly-bootstrap > .d-flex button:nth-of-type(1)").click(function(){
				console.log("adding 1st event")
				start_here_afb()
			})
			
			$(".bookly-bootstrap > .d-flex button:nth-of-type(2)").click(function(){
				console.log("adding 2nd event")
				addBackEve()
			})
			
			addEventToCalendar(calendar_container)
			return true
		}
		
		return false
	}
	
	
	
	
	function addEventToCalendar (calendar_container){
			calendar_container.click(function(){
				
				
			$(".bookly-bootstrap .d-sm-block, .bookly-bootstrap .d-block").attr("style","display:block !important")
			$(".bookly-bootstrap > .d-flex button:nth-of-type(1)").click(function(){
				console.log("adding 1st event")
				start_here_afb()
			})
			
			$(".bookly-bootstrap > .d-flex button:nth-of-type(2)").click(function(){
				console.log("adding 2nd event")
				addBackEve()
			})
			
			console.log("loaded")
			setTimeout(function(){

					var curr_selected_date= $(".bookly-search-form .bookly-search-form-calendar > div .btn-group button:nth-child(2)").html()
					var date_to_select= "<?php echo get_option( 'afb_bookly_default_date', '' );?>"

					const timestamp1 = Date.parse(curr_selected_date); // convert to Unix timestamp
					const timestamp2 = Date.parse(date_to_select); // convert to Unix timestamp

					if (timestamp1 < timestamp2) {
						setDefaultDayAFB(date_to_select)

						$(".bookly-search-form .bookly-search-form-calendar > div .btn-group button:nth-child(3) , .bookly-search-form .bookly-search-form-calendar > div .btn-group button:nth-child(1)").on("click", function(){
// 						  disableAllDays(date_to_select)
						})
						
						$(".bookly-search-form").css("display","flex")
						
					} else if (timestamp1 > timestamp2) {
					  console.log("cant select "+date_to_select+" because it is less than current date");
					} else {

					}
				}, 1300)

			})
	}

	
	function setDefaultDayAFB(date_to_select){
		// go next untill we reach it
		let now_day=  $(".bookly-search-form .bookly-search-form-calendar > div .btn-group button:nth-child(2)").html()
		goNextAFB(now_day,date_to_select)
	}
	
	
	function goNextAFB(now_day,stop_on_day){
		
		let month= now_day.slice(0,3);
		let year= now_day.slice(-4);
		
		const monthNamesFr = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
		const monthNamesEn = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; 
		
		let frMonth= monthNamesFr.indexOf(month);
		let engMonth= monthNamesEn[frMonth]
		
		
		
		const date = new Date(stop_on_day); // Convert to milliseconds
		const monthStopNameEng = monthNamesEn[date.getMonth()]; // Get the month name
		const monthStopNameFr = monthNamesFr[date.getMonth()]; 
		const yearStop= date.getFullYear()
		console.log("now day",engMonth," ", monthStopNameEng," "  ,yearStop, year,stop_on_day)
		if( monthStopNameEng.toLowerCase()==engMonth.toLowerCase() && parseInt(year) == parseInt(yearStop) ){
			$(".bookly-search-form-calendar > div > div:nth-child(2) .position-relative button").each(function(inx){
				//console.log( "HTML INSIDE",  parseFloat($(this).html()), date.getDate())
				if( parseFloat($(this).html())==date.getDate()){
					
					if(!$(this).hasClass("active")){
						$(this).trigger("click")
					}
					disableAllDays(stop_on_day)
					return false
				}
				else{
// 					disableThisDay($(this))
				}
				
			})
			
			return 1;
		}
		
		$(".bookly-search-form .bookly-search-form-calendar > div .btn-group button:nth-child(3)").trigger("click")
		
		setTimeout(function(){
			now_day=  $(".bookly-search-form .bookly-search-form-calendar > div .btn-group button:nth-child(2)").html()
		
			
			goNextAFB(now_day,stop_on_day)
		},300)
	
		
	}
	
	
	function disableThisDay(his){ 
		<?php
	$current_user = wp_get_current_user();
if (! current_user_can( 'administrator', $current_user->ID ) ) {
?> 
				his.attr("disabled",true)
		<?php
} 
	?>

	}
	
	function enableThisDay(his){
		his.removeAttr("disabled")
		his.addClass("active text-white")
		his.removeClass("disabled")
		his.removeClass("bg-light")
		his.attr("style","background-color: #0072b8 !important;border-color: #0072b8 !important;color:white !important")
	}
	
	function disableAllDays(date_to_select){
		
		let now_day=  $(".bookly-search-form-calendar > div .btn-group button:nth-child(2)").html()
		let month= now_day.slice(0,3);
		let year= now_day.slice(-4);
		
		const monthNamesFr = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
		const monthNamesEn = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; 
		
		let frMonth= monthNamesFr.indexOf(month);
		let engMonth="Jun"
		if(frMonth > 0){
			engMonth= monthNamesEn[frMonth]
		}else{
		    engMonth= frMonth
		}
		
		const date = new Date(date_to_select);
		
		
		
		$(".bookly-search-form-calendar > div > div:nth-child(2) .position-relative button").each(function(inx){
			
			
			if( parseFloat($(this).html())==date.getDate() && engMonth.toLowerCase()== (monthNamesEn[date.getMonth()]).toLowerCase() && parseInt(year) == parseInt(date.getFullYear()) ){
// 					$(this).trigger("click")
					enableThisDay($(this))
				}
				else{
// 					console.log("dis ",parseFloat($(this).html()),date.getDate() )
					//console.log("disabling now",$(this))
					disableThisDay($(this))
				}
				
		})
	}
	
})
</script>
<?php
	
},10 );












// Add a custom field to the General Settings page
function afb_bookly_default_date_action() {
    // Register a new setting
    register_setting( 'general', 'afb_bookly_default_date', 'esc_attr' );
 
    // Add a new field to the General Settings page
    add_settings_field(
        'afb_bookly_default_date',
        '<label for="afb_bookly_default_date">' . __( 'Bookly Default Date', 'text-domain' ) . '</label>',
        'afb_bookly_default_date_callback',
        'general'
    );
}
add_action( 'admin_init', 'afb_bookly_default_date_action' );

// Callback function to display the field
function afb_bookly_default_date_callback() {
    $value = get_option( 'afb_bookly_default_date', '' );
    echo '<input type="date" id="afb_bookly_default_date" name="afb_bookly_default_date" value="' . esc_attr( $value ) . '">';
}


add_action("wp_head", function(){
	?>
<script>
	var afb_def_date= "<?php echo get_option( 'afb_bookly_default_date', '' ); ?>"
	console.log("in the head", afb_def_date)
</script>
	<?php
});

