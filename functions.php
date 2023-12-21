<?php

//Load CSS
function loadCSS() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
    wp_enqueue_style('splide-style');

    wp_register_style('aos-animation', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('aos-animation');
}
add_action('wp_enqueue_scripts', 'loadCSS');

//Load Google Fonts
function loadFonts() {
    wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700&family=Nanum+Myeongjo:wght@400;700;800&display=swap', true);
    wp_enqueue_style('fonts');
}
add_action('wp_enqueue_scripts', 'loadFonts');

//Load Fontawesome
function loadFontawesome() {
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', true);
    wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'loadFontawesome');

//Load Javascript
function loadJS() {
    
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('splide-script', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);
    wp_enqueue_script('mainJS', get_template_directory_uri() . '/js/scripts.js','','1.1', true);
}
add_action('wp_enqueue_scripts', 'loadJS');


//Enable Menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

//Enable Featured Image
add_theme_support('post-thumbnails');

//Kirki Fields
function strive3_theme_kirki_sections($wp_customize) {
    //Add panels
    $wp_customize->add_section('strive3_basic_settings', array(
        'title' =>  __('Strive3 Basic Settings', 'kirki'),
        'priority' => 10,
        'panel' => '',
    ));
}
add_action('customize_register', 'strive3_theme_kirki_sections');

//Basic Fields in Customizer
function strive3_theme_kirki_fields($fields) {

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'strive3_favicon',
        'label'         => __('Favicon', 'kirki'),
        'description'   => __('Pick Your Favicon', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 5,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'strive3_top_logo',
        'label'         => __('Logo for Top', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 10,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_phone_number',
        'label'         => __('Strive3 Phone Number', 'kirki'),
        'description'   => esc_html__('Type your phone number', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 20,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_email_text',
        'label'         => __('Strive Email', 'kirki'),
        'description'   => esc_html__('Type your email', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 30,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_facebook_url',
        'label'         => __('Facebook URL', 'kirki'),
        'description'   => esc_html__('Type your facebook URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 40,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_x_url',
        'label'         => __('X URL', 'kirki'),
        'description'   => esc_html__('Type your X URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 50,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_linkedin_url',
        'label'         => __('Linkedin URL', 'kirki'),
        'description'   => esc_html__('Type your Linkedin URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 50,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_youtube_url',
        'label'         => __('Youtube URL', 'kirki'),
        'description'   => esc_html__('Type your Youtube URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 60,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_vimeo_url',
        'label'         => __('Vimeo URL', 'kirki'),
        'description'   => esc_html__('Type your Vimeo URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 70,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_instagram_url',
        'label'         => __('Instagram URL', 'kirki'),
        'description'   => esc_html__('Type your Instagram URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 70,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'strive3_pinterest_url',
        'label'         => __('Pinterest URL', 'kirki'),
        'description'   => esc_html__('Type your Pinterest URL', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 80,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'strive3_gsa_logo',
        'label'         => __('Logo for GSA', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 90,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'strive3_sdvosb_logo',
        'label'         => __('Logo for SDVOSB', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 100,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'strive3_bottom_logo',
        'label'         => __('Logo for Footer', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'strive3_basic_settings',
        'priority'      => 110,
        'default'       => ''
    );

  return $fields;
}
add_filter('kirki/fields', 'strive3_theme_kirki_fields');

add_action('rest_api_init', 'register_rest_images' );function register_rest_images(){
    register_rest_field( array('post'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}

// Numbered Pagination
function primarily_pagination() {
	global $wp_query;
		$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
}

function remove_create_block_element($content) {
    $content = preg_replace('/<div class="wp-block-create-block-s3-slider">.*?<\/div>/', '', $content);
    return $content;
}
add_filter('the_content', 'remove_create_block_element');

/**
 * Add a block category for "S3 Blocks" if it doesn't exist already.
 *
 * @param array $categories Array of block categories.
 *
 * @return array
 */
function s3b_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 's3b', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 's3b',
                'title' => __( 'S3 Blocks', 's3b' ),
                'icon'  => null,
            ),
        )
    );
}
add_filter( 'block_categories', 's3b_block_categories' );


//Custom Block Styles
function myguten_enqueue() {
    wp_enqueue_script(
        'myguten-script',
        get_stylesheet_directory_uri() . '/js/myguten.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/js/myguten.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );

// Add custom column to admin list
function sample_columns($columns) {
    $columns['sample_order'] = 'Display Order';
    // Add other columns if needed
    return $columns;
}
add_filter('manage_sample_posts_columns', 'sample_columns');

// Display ACF field value in custom column
function sample_custom_column($column, $post_id) {
    if ($column === 'sample_order') {
        // Replace 'custom_field' with your actual ACF field name
        $custom_field_value = get_field('sample_order', $post_id);
        echo '<span class="editable-acf-field" data-post-id="' . $post_id . '" data-acf-field="custom_field">' . esc_html($custom_field_value) . '</span>';
    }
}
add_action('manage_sample_posts_custom_column', 'sample_custom_column', 10, 2);


function make_acf_field_editable() {
    // Verify nonce for security
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'make_acf_field_editable_nonce')) {
        die('Permission check failed');
    }

    $post_id = $_POST['post_id'];
    $acf_field = $_POST['acf_field'];
    $new_value = $_POST['new_value'];

    // Update ACF field value
    update_field($acf_field, $new_value, $post_id);

    // Return updated value
    echo esc_html($new_value);

    wp_die();
}
add_action('wp_ajax_make_acf_field_editable', 'make_acf_field_editable');


function enqueue_custom_admin_script() {
    if (is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script(
            'custom-admin-script',
            get_template_directory_uri() . '/js/edit_order.js',
            array('jquery'),
            '1.0',
            true
        );

        $nonce = wp_create_nonce('make_acf_field_editable_nonce'); // Generate nonce
        wp_localize_script('custom-admin-script', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php'), 'nonce' => $nonce));
    }
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_script');



// Add custom column to admin list
function people_columns($columns) {
    $columns['people_order'] = 'Display Order';
    // Add other columns if needed
    return $columns;
}
add_filter('manage_people_posts_columns', 'people_columns');

// Display ACF field value in custom column
function people_custom_column($column, $post_id) {
    if ($column === 'people_order') {
        // Replace 'custom_field' with your actual ACF field name
        $custom_field_value = get_field('people_order', $post_id);
        echo '<span class="editable-acf-field" data-post-id="' . $post_id . '" data-acf-field="custom_field">' . esc_html($custom_field_value) . '</span>';
    }
}
add_action('manage_people_posts_custom_column', 'people_custom_column', 10, 2);



