<?php 
/* Creating a function to create our CPT
*/
 
function trabajadores() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Trabajadores', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Trabajador', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Trabajadores', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Trabajador', 'twentythirteen' ),
        'all_items'           => __( 'Todos los trabajadors', 'twentythirteen' ),
        'view_item'           => __( 'Ver trabajador', 'twentythirteen' ),
        'add_new_item'        => __( 'Nuevo trabajador', 'twentythirteen' ),
        'add_new'             => __( 'Agregar', 'twentythirteen' ),
        'edit_item'           => __( 'Editar trabajador', 'twentythirteen' ),
        'update_item'         => __( 'Actualizar trabajador', 'twentythirteen' ),
        'search_items'        => __( 'Buscar trabajador', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Trabajadores', 'twentythirteen' ),
        'description'         => __( 'Trabajador', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array(  'thumbnail', 'revisions', 'custom-fields', ),

        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
         'menu_icon'   => 'dashicons-businessman',

    );
     
    // Registering your Custom Post Type
    register_post_type( 'trabajadores', $args );
 
}

add_theme_support( 'post-thumbnails' ); 
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'trabajadores', 0 );






function clientes() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Clientes', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Cliente', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Clientes', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Cliente', 'twentythirteen' ),
        'all_items'           => __( 'Todos los clientes', 'twentythirteen' ),
        'view_item'           => __( 'Ver cliente', 'twentythirteen' ),
        'add_new_item'        => __( 'Nuevo cliente', 'twentythirteen' ),
        'add_new'             => __( 'Agregar cliente', 'twentythirteen' ),
        'edit_item'           => __( 'Editar cliente', 'twentythirteen' ),
        'update_item'         => __( 'Actualizar cliente', 'twentythirteen' ),
        'search_items'        => __( 'Buscar cliente', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Clientes', 'twentythirteen' ),
        'description'         => __( 'Cliente', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
         'menu_icon'   => 'dashicons-star-empty',

    );
     
    // Registering your Custom Post Type
    register_post_type( 'clientes', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'trabajadores', 0 );






function proveedores() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Proveedores', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Proveedor', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Proveedores', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent proveedor', 'twentythirteen' ),
        'all_items'           => __( 'Todos los proveedor', 'twentythirteen' ),
        'view_item'           => __( 'Ver proveedor', 'twentythirteen' ),
        'add_new_item'        => __( 'Nuevo proveedor', 'twentythirteen' ),
        'add_new'             => __( 'Agregar', 'twentythirteen' ),
        'edit_item'           => __( 'Editar proveedor', 'twentythirteen' ),
        'update_item'         => __( 'Actualizar proveedor', 'twentythirteen' ),
        'search_items'        => __( 'Buscar proveedor', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Proveedores', 'twentythirteen' ),
        'description'         => __( 'Proveedor', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
         'menu_icon'   => 'dashicons-groups',

    );
     
    // Registering your Custom Post Type
    register_post_type( 'proveedores', $args );
 
}
 



function ordenesdetrabajo() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Ordenes de trabajo', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Orden de trabajo', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Ordenes de trabajo', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Orden de trabajo', 'twentythirteen' ),
        'all_items'           => __( 'Todas las Ordenes de trabajo', 'twentythirteen' ),
        'view_item'           => __( 'Ver Orden de trabajo', 'twentythirteen' ),
        'add_new_item'        => __( 'Nuevo Orden de trabajo', 'twentythirteen' ),
        'add_new'             => __( 'Agregar', 'twentythirteen' ),
        'edit_item'           => __( 'Editar Orden de trabajo', 'twentythirteen' ),
        'update_item'         => __( 'Actualizar Orden de trabajo', 'twentythirteen' ),
        'search_items'        => __( 'Buscar Orden de trabajo', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Ordenes de trabajo', 'twentythirteen' ),
        'description'         => __( 'Ordenes de trabajo', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'thumbnail', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
         'menu_icon'   => 'dashicons-tickets-alt',

    );
     
    // Registering your Custom Post Type
    register_post_type( 'ordenesdetrabajo', $args );
 
}



function facturas() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Facturas', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Factura', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Facturas', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent factura', 'twentythirteen' ),
        'all_items'           => __( 'Todas las facturas', 'twentythirteen' ),
        'view_item'           => __( 'Ver factura', 'twentythirteen' ),
        'add_new_item'        => __( 'Nueva factura', 'twentythirteen' ),
        'add_new'             => __( 'Agregar', 'twentythirteen' ),
        'edit_item'           => __( 'Editar factura', 'twentythirteen' ),
        'update_item'         => __( 'Actualizar factura', 'twentythirteen' ),
        'search_items'        => __( 'Buscar factura', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Facturas', 'twentythirteen' ),
        'description'         => __( 'Factura', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'thumbnail',  'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
         'menu_icon'   => 'dashicons-format-aside',

    );
     
    // Registering your Custom Post Type
    register_post_type( 'facturas', $args );
 
}






function cotizaciones() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Cotizaciones', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Cotización', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Cotizaciones', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent cotización', 'twentythirteen' ),
        'all_items'           => __( 'Todas las cotizaciones', 'twentythirteen' ),
        'view_item'           => __( 'Ver cotización', 'twentythirteen' ),
        'add_new_item'        => __( 'Nuevo cotización', 'twentythirteen' ),
        'add_new'             => __( 'Agregar', 'twentythirteen' ),
        'edit_item'           => __( 'Editar cotización', 'twentythirteen' ),
        'update_item'         => __( 'Actualizar cotización', 'twentythirteen' ),
        'search_items'        => __( 'Buscar cotización', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Cotizaciones', 'twentythirteen' ),
        'description'         => __( 'Cotización', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
         'menu_icon'   => 'dashicons-paperclip',

    );
     
    // Registering your Custom Post Type
    register_post_type( 'cotizaciones', $args );
 
}
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'trabajadores', 0 );
add_action( 'init', 'proveedores', 0 );
add_action( 'init', 'clientes', 0 );
add_action( 'init', 'ordenesdetrabajo', 0 );
add_action( 'init', 'facturas', 0 );
add_action( 'init', 'cotizaciones', 0 );


// Funcion para quitar los default posts
function post_remove () 
{
    if ( current_user_can( 'gerente_general' ) ) 
        {
        remove_menu_page('edit.php');
        remove_menu_page( 'edit-comments.php' );          //Comments
        remove_menu_page( 'tools.php' );                  //Tools
        remove_menu_page( 'edit.php?post_type=page' );    //Pages
        }
    }
add_action('admin_menu', 'post_remove');

add_filter('acf/settings/google_api_key', function () {
    return 'your-api-key';
});



// Auto-populate post title del trabajador with  multiples ACF.
function jb_update_postdata_trabajador( $value, $post_id, $field ) {
	
	$nombres = get_field('nombres', $post_id);
	$apellidos = get_field('paterno', $post_id). '  ' . get_field('materno', $post_id);
    $title = $nombres .'  '. $apellidos;
	$slug = sanitize_title( $title );
	$postdata = array(
	     'ID'          => $post_id,
         'post_title'  => $title,
	     'post_type'   => 'trabajadores',
	     'post_name'   => $slug
  	);
  
	wp_update_post( $postdata );
	
	return $value;
	
}
add_filter('acf/update_value/name=nombres', 'jb_update_postdata_trabajador', 10, 3);
add_filter('acf/update_value/name=paterno', 'jb_update_postdata_trabajador', 10, 3);
add_filter('acf/update_value/name=materno', 'jb_update_postdata_trabajador', 10, 3);



// funcion para cargar el valor del PO en Oden de trabajo
function my_IDPO_load_value( $value, $post_id, $field )
{
    // run the_content filter on all textarea values
    $elano = date('Y');
    $value = $elano . '/' . $post_id;

    return $value;
}

add_filter('acf/load_value/name=po', 'my_IDPO_load_value', 10, 3);






add_action( 'submitpost_box', 'set_post_type_title_manaully' );

function set_post_type_title_manaully() {
global $post, $post_type;

// If the current type supports the title, nothing to done, return
if( post_type_supports( $post_type, 'title' ) )
    return;
 


if ( 'ordenesdetrabajo' == get_post_type() ) 
    {

        $random_number = wp_rand( 100, 999 );
        $elano = date('Y');
        $title = $elano . '/' . $post->ID;
        wp_update_post( array( 'ID'=>$post->ID, 'post_title'=>$title ) );

    } 
    

    }







// funcion para cargar el valor del PO en Oden de trabajo
function my_trabajador_load_value( $value, $post_id, $field )
{
    // run the_content filter on all textarea values
    $value =   $post_id;

    return $value;
}

add_filter('acf/load_value/name=trabajador_id', 'my_trabajador_load_value', 10, 3);



//Deshabilitar  el titulo del ID del PO y el ID del trabajador
add_action( 'admin_head', 'insert_header_wpse_51023' );

function insert_header_wpse_51023()
{
   echo "<script>
$( document ).ready(function(){
$( '#acf-field_5b58fa2d35096' ).prop( 'disabled', true );
$( '#acf-field_5b597019ee1fa' ).prop( 'disabled', true );
 });
</script>
<style>
#acf-field_5b597019ee1fa { padding:20px 10px; font-size:26px; max-width:140px}
</style>";
}




//Copia el valor del acf responsable y lo pasa al título, además actualiza el acf el_responsable
function my_acf_update_value( $value, $post_id, $field  ) {
    
    // override value
    $value = get_field('responsable');
    $post_object = get_field('responsable');
    print_r( get_field('responsable') );
    

if( $post_object ): 

    // override $post
    $post = $post_object;
    setup_postdata( $post ); 
    $miresponsable = $post->post_title;

     wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
endif; 

    return $miresponsable;
    
}

// acf/update_value - filter for every field
// acd_filter('acf/update_value', 'my_acf_update_value', 10, 3);

// acf/update_value/type={$field_type} - filter for a specific field based on it's type
// add_filter('acf/update_value/type=select', 'my_acf_update_value', 10, 3);

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=el_responsable', 'my_acf_update_value', 10, 3);

// acf/update_value/key={$field_key} - filter for a specific field based on it's name
//add_filter('acf/update_value/key=field_508a263b40457', 'my_acf_update_value', 10, 3);


//Quita los elementos del panel de inicio dashboard
function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );




// Auto-populate cliente title with ACF.
// Auto-populate post title with Event dates.
function jb_update_postdata_cliente($post_id ) {

if( 'clientes' == get_post_type( $post_id ) )
	{

	$nombre = get_field('nombre', $post_id);
	$slug = sanitize_title( $nombre );
  
	$postdata = array(
	     'ID'	   => $post_id,
    	 'post_title'  => $nombre,
	     'post_type'   => 'clientes',
	     'post_name'   => $slug
  	);
  
	wp_update_post( $postdata );
	}
	
}

add_action('acf/save_post', 'jb_update_postdata_cliente', 20);


function remove_admin_bar_links() {
    global $wp_admin_bar, $current_user;

    if ($current_user->ID != 1) {
    $wp_admin_bar->remove_menu('site-name');        // Remove the site name menu

            $wp_admin_bar->remove_menu('wp-logo');          // Remove the Wordpress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about Wordpress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the Wordpress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the Wordpress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
    $wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
  //  $wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
    }
}

add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );


add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Administración de EQ Ingenieria', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Bienvenido/a, ¿Requieres apoyo? Contacta al soporte técnico <a href="mailto:valentin.leyzaola@gmail.com">aquí</a>. </p>';
}


function wp_contador_post($contador) {
    
    
    $args = array(
        
        'post_type' => $contador
      );
      $the_query = new WP_Query( $args );
      echo  $the_query->found_posts;
      wp_reset_postdata();
    }



/*
function wpb_new_contactmethods( $contactmethods ) {
// Add Twitter
$contactmethods['micampo'] = 'Mi campo';
//add Facebook
$contactmethods['facebook'] = 'Facebook';
 
return $contactmethods;
}
add_filter('user_contactmethods','wpb_new_contactmethods',10,1);
*/