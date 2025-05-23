<?php
/*
 * Custom post types for theme.
 */
 
 
 
// Team member CPT.
function synergy_cpts()
{
    $labels = [
        'name'                  => _x('Provider', 'General name', 'synergy-theme'),
        'singular_name'         => _x('Provider', 'Singular name', 'synergy-theme'),
        'menu_name'             => _x('Providers', 'Admin Menu text', 'synergy-theme'),
        'name_admin_bar'        => _x('Provider', 'Add New on Toolbar', 'synergy-theme'),
        'add_new'               => __('Add New', 'synergy-theme'),
        'add_new_item'          => __('Add New Provider', 'synergy-theme'),
        'new_item'              => __('New Provider', 'synergy-theme'),
        'edit_item'             => __('Edit Provider', 'synergy-theme'),
        'view_item'             => __('View Provider', 'synergy-theme'),
        'all_items'             => __('All Providers', 'synergy-theme'),
        'search_items'          => __('Search Providers', 'synergy-theme'),
        'parent_item_colon'     => __('Parent Providers:', 'synergy-theme'),
        'not_found'             => __('No Providers found.', 'synergy-theme'),
        'not_found_in_trash'    => __('No Providers found in Trash.', 'synergy-theme'),
        'featured_image'        => _x('Provider Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'synergy-theme'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'synergy-theme'),
        'remove_featured_image' => _x('Remove image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'synergy-theme'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'synergy-theme'),
        'archives'              => _x('Provider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'synergy-theme'),
        'insert_into_item'      => _x('Insert into Provider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'synergy-theme'),
        'uploaded_to_this_item' => _x('Uploaded to this provider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'synergy-theme'),
        'filter_items_list'     => _x('Filter providers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'synergy-theme'),
        'items_list_navigation' => _x('Providers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'synergy-theme'),
        'items_list'            => _x('Providers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'synergy-theme'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'providers'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom_fields'],
    ];

    register_post_type('provider', $args);

    $testimonial_labels = [
        'name'                  => _x('Testimonial', 'General name', 'synergy-theme'),
        'singular_name'         => _x('Testimonial', 'Singular name', 'synergy-theme'),
        'menu_name'             => _x('Testimonials', 'Admin Menu text', 'synergy-theme'),
        'name_admin_bar'        => _x('Testimonial', 'Add New on Toolbar', 'synergy-theme'),
        'add_new'               => __('Add New', 'synergy-theme'),
        'add_new_item'          => __('Add New Testimonial', 'synergy-theme'),
        'new_item'              => __('New Testimonial', 'synergy-theme'),
        'edit_item'             => __('Edit Testimonial', 'synergy-theme'),
        'view_item'             => __('View Testimonial', 'synergy-theme'),
        'all_items'             => __('All Testimonials', 'synergy-theme'),
        'search_items'          => __('Search Testimonials', 'synergy-theme'),
        'parent_item_colon'     => __('Parent Testimonials:', 'synergy-theme'),
        'not_found'             => __('No Testimonials found.', 'synergy-theme'),
        'not_found_in_trash'    => __('No Testimonials found in Trash.', 'synergy-theme'),
        'featured_image'        => _x('Testimonial Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'synergy-theme'),
        'archives'              => _x('Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'synergy-theme'),
        'insert_into_item'      => _x('Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'synergy-theme'),
        'uploaded_to_this_item' => _x('Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'synergy-theme'),
        'filter_items_list'     => _x('Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'synergy-theme'),
        'items_list_navigation' => _x('Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'synergy-theme'),
        'items_list'            => _x('Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'synergy-theme'),
    ];

    $testimonial_args = [
        'labels'             => $testimonial_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'testimonials'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'custom_fields'],
    ];

    register_post_type('testimonial', $testimonial_args);
}

add_action('init', 'synergy_cpts');

/*
 * Register custom taxonomies for team-member cpt.
 */
function register_provider_taxonomies()
{
    // Register Locations Taxonomy
    $labels_locations = [
        'name'              => _x('Locations', 'synergy-theme'),
        'singular_name'     => _x('Location', 'synergy-theme'),
        'search_items'      => __('Search Locations', 'synergy-theme'),
        'all_items'         => __('All Locations', 'synergy-theme'),
        'parent_item'       => __('Parent Location', 'synergy-theme'),
        'parent_item_colon' => __('Parent Location:', 'synergy-theme'),
        'edit_item'         => __('Edit Location', 'synergy-theme'),
        'update_item'       => __('Update Location', 'synergy-theme'),
        'add_new_item'      => __('Add New Location', 'synergy-theme'),
        'new_item_name'     => __('New Location Name', 'synergy-theme'),
        'menu_name'         => __('Locations', 'synergy-theme'),
        'back_to_items'     => __('Back to Locations', 'synergy-theme'),
    ];

    $args_locations = [
        'hierarchical'      => true,
        'labels'            => $labels_locations,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'location'],
    ];

    register_taxonomy('location', ['provider', 'testimonial'], $args_locations);

    // Register Specialties Taxonomy
    $labels_specialties = [
        'name'              => _x('Specialties', 'synergy-theme'),
        'singular_name'     => _x('Specialty', 'synergy-theme'),
        'search_items'      => __('Search Specialties', 'synergy-theme'),
        'all_items'         => __('All Specialties', 'synergy-theme'),
        'parent_item'       => __('Parent Specialty', 'synergy-theme'),
        'parent_item_colon' => __('Parent Specialty:', 'synergy-theme'),
        'edit_item'         => __('Edit Specialty', 'synergy-theme'),
        'update_item'       => __('Update Specialty', 'synergy-theme'),
        'add_new_item'      => __('Add New Specialty', 'synergy-theme'),
        'new_item_name'     => __('New Specialty Name', 'synergy-theme'),
        'not_found'         => __('No Specialties found.', 'synergy-theme'),
        'menu_name'         => __('Specialties', 'synergy-theme'),
        'back_to_items'     => __('Back to Specialties', 'synergy-theme'),
    ];

    $args_specialties = [
        'hierarchical'      => true,
        'labels'            => $labels_specialties,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => false,
    ];

    register_taxonomy('specialty', ['provider', 'testimonial'], $args_specialties);

    // Register Age Ranges Taxonomy
    $labels_ages = [
        'name'              => _x('Age Ranges', 'synergy-theme'),
        'singular_name'     => _x('Age Range', 'synergy-theme'),
        'search_items'      => __('Search Age Ranges', 'synergy-theme'),
        'all_items'         => __('All Age Ranges', 'synergy-theme'),
        'parent_item'       => __('Parent Age Range', 'synergy-theme'),
        'parent_item_colon' => __('Parent Age Range:', 'synergy-theme'),
        'edit_item'         => __('Edit Age Range', 'synergy-theme'),
        'update_item'       => __('Update Age Range', 'synergy-theme'),
        'add_new_item'      => __('Add New Age Range', 'synergy-theme'),
        'new_item_name'     => __('New Age Range', 'synergy-theme'),
        'not_found'         => __('No Age Ranges found', 'synergy-theme'),
        'menu_name'         => __('Age Ranges', 'synergy-theme'),
        'back_to_items'     => __('Back to Age Ranges', 'synergy-theme'),
    ];

    $args_ages = [
        'hierarchical'      => true,
        'labels'            => $labels_ages,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'age-range'],
    ];

    register_taxonomy('age-range', ['provider'], $args_ages);
}

add_action('init', 'register_provider_taxonomies');

/* Start of custom fields for specialty taxonomy */
// Add custom URL field to the add and edit forms for the specialty taxonomy
function specialty_add_custom_fields()
{
    ?>
    <div class="form-field term-group">
        <label for="custom-url"><?php _e('Custom URL', 'synergy-theme'); ?></label>
        <input type="text" id="custom-url" name="custom_url" value="" />
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('slug').closest('.form-field').style.display = 'none';
        });
    </script>
    <?php
}
add_action('specialty_add_form_fields', 'specialty_add_custom_fields');

function specialty_edit_custom_fields($term)
{
    $custom_url = get_term_meta($term->term_id, 'custom_url', true);
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="custom-url"><?php _e('Custom URL', 'synergy-theme'); ?></label></th>
        <td>
            <input type="text" id="custom-url" name="custom_url" value="<?php echo esc_attr($custom_url); ?>" />
        </td>
    </tr>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('slug').closest('.form-field').style.display = 'none';
        });
    </script>
    <?php
}
add_action('specialty_edit_form_fields', 'specialty_edit_custom_fields');

// Save custom fields
function save_specialty_custom_fields($term_id)
{
    if (isset($_POST['custom_url']) && '' !== $_POST['custom_url']) {
        $custom_url = sanitize_text_field($_POST['custom_url']);
        update_term_meta($term_id, 'custom_url', $custom_url);
    } else {
        delete_term_meta($term_id, 'custom_url');
    }
}
add_action('created_specialty', 'save_specialty_custom_fields', 10, 2);
add_action('edited_specialty', 'save_specialty_custom_fields', 10, 2);
/* End of custom fields for specialty taxonomy */

/* Start of specialty URL redirect */
// Redirect specialty URLs to custom URLs if they exist
function redirect_specialty_urls()
{
    if (is_tax('specialty')) {
        $term = get_queried_object();
        $custom_url = get_term_meta($term->term_id, 'custom_url', true);

        if ($custom_url) {
            wp_redirect($custom_url, 301);
            exit();
        } else {
            wp_redirect(home_url(), 301);
            exit();
        }
    }
}
add_action('template_redirect', 'redirect_specialty_urls');
/* End of specialty URL redirect */

function custom_title_placeholders($title)
{
    $screen = get_current_screen();

    if ('testimonial' == $screen->post_type) {
        $title = 'Reviewer name';
    }

    return $title;
}

add_filter('enter_title_here', 'custom_title_placeholders');
