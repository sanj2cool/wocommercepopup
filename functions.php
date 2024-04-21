<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function dd($p){
	echo "<pre>";
  print_r($p);
   echo "</pre>";
}
/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.6.8' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.6.4' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pro/', 'dashboard', 'free-theme', 'upgrade-now' ) );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pro/', 'customizer', 'free-theme', 'upgrade' ) );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';





/**
 * Add a product to the WooCommerce cart programmatically.
 *
 * @param int $product_id The ID of the product to add to the cart.
 * @param int $quantity   The quantity of the product to add to the cart. Default is 1.
 */



add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );
function enqueue_custom_scripts() {
    wp_enqueue_script( 'jquery' );
}

//add_action( 'wp_footer', 'custom_ajax_add_to_cart_script' );
function custom_ajax_add_to_cart_script() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.custom-add-to-cart-button').on('click', function(e) {
                e.preventDefault();
                var product_id = $(this).data('product-id');
				var checkin = $('#checkin').val();
				var check_out = $('#checkout').val();
				
				
				var startDate = new Date(checkin);
				var endDate = new Date(check_out);
				
				// Calculate the difference in milliseconds
				var difference = endDate.getTime() - startDate.getTime();
				
				// Convert milliseconds to days
				var days = Math.ceil(difference / (1000 * 3600 * 24));
				
				// Create a Date object from the input date
				var date = new Date(checkin);
				
				// Get the day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
				var dayOfWeek = date.getDay();
				// Array to map day of week index to its name
                 var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        
				
				
                $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                    data: {
                        action: 'custom_add_to_cart',
                        product_id: product_id,
						checkin_date:checkin,
						check_out_date:check_out,
						total_days:days,
                    },
                    success: function(response) {
						console.log(response);
						//document.querySelector('.custom-add-to-cart-button').classList.add('testing');
						//$('#wpcf7-f6-p7-o1 .wpcf7-form').submit();
                        // Handle success response
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                    }
                });
            });
        });
    </script>
    <?php
}

add_action( 'wp_ajax_custom_add_to_cart', 'custom_add_to_cart_callback' );
add_action( 'wp_ajax_nopriv_custom_add_to_cart', 'custom_add_to_cart_callback' );

function custom_add_to_cart_callback() {
	
	 print_r($_POST);
    $product_id = 4355;
    $quantity = $_POST['total_days']; // Change this if you want to allow adding multiple quantities

    WC()->cart->add_to_cart( $product_id, $quantity );
	
    //wp_die();
}
// *********************** Woocommerce Changes *********************////

add_action( 'wp_footer', 'add_product_ajax_add_to_cart_script' );
function add_product_ajax_add_to_cart_script() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
			
				function checkproducts() {
	    
					var prod = []; // Reset prod array before collecting data
					
					// Loop through each row with the class name 'productRow'
					document.querySelectorAll('.productRow').forEach(function(row) {
						// Loop through each element with the class name 'product_cart_data' within the row
						row.querySelectorAll('.product_cart_data').forEach(function(element) {
							if (element.value > 0) {
								/**alert('testing');**/
								var printing_option = document.getElementById(element.getAttribute('data-parent')).value;
								var product = {
									tap:printing_option,
									color: element.getAttribute('data-color'),
									size: element.getAttribute('data-size'),
									quantity: element.value
								};
								prod.push(product);
							}
						});
					});
					return prod;
					//console.log(prod); // Log the collected product data
				}
			
						// Hide the form initially
				$('#product_form').hide();

				// Show the form when the "Add to Cart" button is clicked
				$('#show_product_form').click(function() {
					$('#product_form').show();
				});
            $('#add_all_ajax').on('click', function(e) {
                e.preventDefault();
                var product_id = $(this).data('productid');
				 allproduct=checkproducts();
					alert('testt');
              console.log(allproduct, product_id);
                		
                $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                    data: {
                        action: 'all_add_to_cart',
                        product_id: product_id,
						product_data:allproduct,
						
                    },
                    success: function(response) {
						console.log(response);
						//document.querySelector('.custom-add-to-cart-button').classList.add('testing');
						//$('#wpcf7-f6-p7-o1 .wpcf7-form').submit();
                        // Handle success response
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                    }
                });
            });
        });
    </script>
    <?php
}

add_action( 'wp_ajax_all_add_to_cart', 'all_add_to_cart_callback' );
add_action( 'wp_ajax_nopriv_all_add_to_cart', 'all_add_to_cart_callback' );

function all_add_to_cart_callback() {
    // Include WooCommerce functions.
    if ( ! function_exists( 'WC' ) ) {
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        include_once( ABSPATH . 'wp-content/plugins/woocommerce/woocommerce.php' );
    }

    // Retrieve product data from the AJAX call.
    $product_data = $_POST['product_data'];
    $product_taps = array();

    // Loop through each product data
    foreach ( $product_data as $ky => $pdata ) {
        // Extract product data
        $product_id      = 4365; // Example product ID
        $attribute_color = $pdata['color'];
        $attribute_size  = $pdata['size'];
        $quantity        = $pdata['quantity'];
        $tap             = $pdata['tap'];

        // Check if product exists.
        $product = wc_get_product( $product_id );
        if ( ! $product ) {
            continue;
        }

        // Define cart item data.
        $cart_item_data = array(
            'attribute_color' => $attribute_color,
            'attribute_size'  => $attribute_size,
            'attribute_tap'   => $tap, // Add the 'tap' value to cart item data
        );

        // Check if the product is variable
        if ( ! $product->is_type( 'variable' ) ) {
            continue;
        }

        // Initialize variable to store variation ID
        $variation_id = 0;

        // Loop through each variation
        foreach ( $product->get_available_variations() as $variation ) {
            // Check if the variation matches the given attributes
            if ( isset( $variation['attributes']['attribute_size'] ) &&
                isset( $variation['attributes']['attribute_color'] ) &&
                $variation['attributes']['attribute_size'] === $attribute_size &&
                $variation['attributes']['attribute_color'] === $attribute_color ) {
                $variation_id = $variation['variation_id'];
                break;
            }
        }

        // Add the product to the cart.
        $cart_item_key = WC()->cart->add_to_cart( $product_id, $quantity, $variation_id, $cart_item_data );

        // Check if the product was added successfully
        if ( $cart_item_key ) {
            // Store cart item key and tap data
            $product_taps[] = array(
                'cart_item_key' => $cart_item_key,
                'tap'           => $tap,
            );
        }
    }

    // Store the cart item keys and tap data in session or user meta
    // You can store it in session or user meta to access it on the cart page.
    // Example to store in session:
    session_start();
    $_SESSION['product_taps'] = $product_taps;
	
	// Redirect to the cart page after adding products
    echo '<script>window.location.href = "' . wc_get_cart_url() . '";</script>';
    exit;
}



function update_custom_field_in_cart( $cart ) {
    

	session_start();

    // Retrieve stored tap data if session exists
    if ( isset( $_SESSION['product_taps'] ) ) {
        $product_taps = $_SESSION['product_taps'];
		
    // Loop through cart items.
    foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
        // Get product ID.
        $product_id = $cart_item['product_id'];
		
		//echo "<pre>";
		//print_r($cart_item);
		 //echo "</pre>";
        // Get current value of the custom field.
        $current_value = isset( $cart_item['thwepof_options']['printing_option']['value'] ) ? $cart_item['thwepof_options']['printing_option']['value'] : '';
		foreach ( $product_taps as $item ) {
			 // Update the custom field value if needed.
       
            $cart_item['thwepof_options']['printing_option']['value'] = $item['tap'];
            $cart->cart_contents[ $item['cart_item_key'] ]['thwepof_options']=array(
            'printing_option' => array(
                'name' => 'printing_option',
                'value' => $item['tap'],
                'type' => 'select',
                'label' => 'Tryk Muligheder',
                'options' => array(
                    'Uden tryk' => 'Uden tryk',
                    'Med 1 farvet tryk' => 'Med 1 farvet tryk',
                    'Med 2 farvet tryk' => 'Med 2 farvet tryk',
                    'Med 3 farvet tryk' => 'Med 3 farvet tryk',
                    'Med 4 farvet tryk' => 'Med 4 farvet tryk',
                    'Med 5 farvet tryk' => 'Med 5 farvet tryk',
                    'Med 6 farvet tryk' => 'Med 6 farvet tryk',
                    'Begge sider Med 1 farvet tryk' => 'Begge sider Med 1 farvet tryk',
                    'Begge sider Med 2 farvet tryk' => 'Begge sider Med 2 farvet tryk',
                    'Begge sider Med 3 farvet tryk' => 'Begge sider Med 3 farvet tryk',
                    'Begge sider Med 4 farvet tryk' => 'Begge sider Med 4 farvet tryk',
                    'Begge sider Med 5 farvet tryk' => 'Begge sider Med 5 farvet tryk',
                    'Begge sider Med 6 farvet tryk' => 'Begge sider Med 6 farvet tryk',
                ),
            ),
        );
        
		
		}
       
    }
}

unset( $_SESSION['product_taps'] );
}
add_action( 'woocommerce_before_calculate_totals', 'update_custom_field_in_cart', 10, 1 );


function create_pop_form_data() {
    $product_id = 4365;
    // Get the product object
    $product = wc_get_product( $product_id );
    
    // Check if the product is variable
    if ( ! $product || ! $product->is_type( 'variable' ) ) {
        echo "Product not found or not variable.";
        return;
    }
    
    // Initialize arrays for attributes
    $psize = $pcolor = $ptap = array();
    
    // Get all attributes
    $attributes = $product->get_attributes();
    
    // Loop through each attribute
    foreach ($attributes as $attribute) {
        // Get attribute name
        $attribute_name = $attribute->get_name();
        
        // Get attribute values
        $attribute_values = $attribute->get_options();
        
        // Store attribute values based on name
        switch ($attribute_name) {
            case 'size':
                $psize = $attribute_values;
                break;
            case 'color':
                $pcolor = $attribute_values;
                break;
            case 'tap':
                $ptap = $attribute_values;
                break;
            default:
                // Handle other attributes if needed
                break;
        }
    }
    
    // Generate Tryk Muligheder select box
    $tryk_select = '<select id="printing_options_1" name="printing_option" value="" class="thwepof-input-field"><option value="Uden tryk">Uden tryk</option><option value="Med 1 farvet tryk">Med 1 farvet tryk</option><option value="Med 2 farvet tryk">Med 2 farvet tryk</option><option value="Med 3 farvet tryk">Med 3 farvet tryk</option><option value="Med 4 farvet tryk">Med 4 farvet tryk</option><option value="Med 5 farvet tryk">Med 5 farvet tryk</option><option value="Med 6 farvet tryk">Med 6 farvet tryk</option><option value="Begge sider Med 1 farvet tryk">Begge sider Med 1 farvet tryk</option><option value="Begge sider Med 2 farvet tryk">Begge sider Med 2 farvet tryk</option><option value="Begge sider Med 3 farvet tryk">Begge sider Med 3 farvet tryk</option><option value="Begge sider Med 4 farvet tryk">Begge sider Med 4 farvet tryk</option><option value="Begge sider Med 5 farvet tryk">Begge sider Med 5 farvet tryk</option><option value="Begge sider Med 6 farvet tryk">Begge sider Med 6 farvet tryk</option></select>';
    
    // Generate Size table row
    $size_row = "<tr><td></td>";
    foreach ($psize as $size) {
        $size_row .= "<td>$size</td>";
    }
    $size_row .= "</tr>";
    
    // Generate Color table rows with input fields
    $color_rows = "";
    foreach ($pcolor as $color) {
        $color_rows .= "<tr><td>$color</td>";
        foreach ($psize as $size) {
            $color_rows .= "<td><input class='product_cart_data' data-parent='printing_options_1' data-tap='' data-color='$color' data-size='$size' type='text' name='printing_options[1][$color][$size]'></td>";
        }
        $color_rows .= "</tr>";
    }
    
    // Output the tables
    echo "<div id='product_form' class='productRow'>";
    echo "<table class='productRow'>";
    echo "<tr><td>Tryk Muligheder</td><td>$tryk_select</td></tr>";
    echo $size_row;
    echo $color_rows;
    echo "</table>";
    echo "<button id='add_all_ajax'> Add to Cart</button>";
    echo "<input type='hidden' name='product_id' value='$product_id'>";
    echo "</div>";
}

// Hook this function to an action that runs on the cart page or wherever you want to display the form
//add_action( 'init', 'create_pop_form_data' );
function display_pop_form_data() {
    if ( is_product() ) {
        // Your form creation function here
        create_pop_form_data();
    }
}

add_action( 'woocommerce_before_single_product', 'display_pop_form_data' );

// Add the "More Product Options" button
function add_more_product_options_button() {
    global $product;
    if ( $product && $product->is_type('variable') ) {
        echo '<button id="show_product_form">More Product Options</button>';
    }
}
add_action( 'woocommerce_single_product_summary', 'add_more_product_options_button', 15 );



?>
