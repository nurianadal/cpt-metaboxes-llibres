if ( ! function_exists('nuria_libros_cpt') ) {

// Register Custom Post Type
function nuria_libros_cpt() {

	$labels = array(
		'name'                  => _x( 'Libros', 'Post Type General Name', 'libros_cpt' ),
		'singular_name'         => _x( 'Libro', 'Post Type Singular Name', 'libros_cpt' ),
		'menu_name'             => __( 'Libros', 'libros_cpt' ),
		'name_admin_bar'        => __( 'Libros', 'libros_cpt' ),
		'archives'              => __( 'Item Archives', 'libros_cpt' ),
		'attributes'            => __( 'Item Attributes', 'libros_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'libros_cpt' ),
		'all_items'             => __( 'All Items', 'libros_cpt' ),
		'add_new_item'          => __( 'Add New Item', 'libros_cpt' ),
		'add_new'               => __( 'Add New', 'libros_cpt' ),
		'new_item'              => __( 'New Item', 'libros_cpt' ),
		'edit_item'             => __( 'Edit Item', 'libros_cpt' ),
		'update_item'           => __( 'Update Item', 'libros_cpt' ),
		'view_item'             => __( 'View Item', 'libros_cpt' ),
		'view_items'            => __( 'View Items', 'libros_cpt' ),
		'search_items'          => __( 'Search Item', 'libros_cpt' ),
		'not_found'             => __( 'Not found', 'libros_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'libros_cpt' ),
		'featured_image'        => __( 'Featured Image', 'libros_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'libros_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'libros_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'libros_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'libros_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'libros_cpt' ),
		'items_list'            => __( 'Items list', 'libros_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'libros_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'libros_cpt' ),
	);
	$args = array(
		'label'                 => __( 'Libro', 'libros_cpt' ),
		'description'           => __( 'Custom Post Type para libros', 'libros_cpt' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'libros', $args );

}
add_action( 'init', 'nuria_libros_cpt', 0 );

}

//Register Custom metabox
function nuria_libros_metabox() {
    add_meta_box( 'libros-metabox', esc_html__( 'Información Libros', 'theme-textdomain' ), 'nuria_info_metabox', array( 'libros' ) );
}

add_action( 'add_meta_boxes', 'nuria_libros_metabox' );

function nuria_info_metabox( $post )
{
$values = get_post_custom( $post->ID );
	$text = isset( $values['isbn'] ) ? esc_attr( $values['isbn'][0] ) : '';
	$selected = isset( $values['encuadernacion'] ) ? esc_attr( $values['encuadernacion'][0] ) : '';
	$selected2 = isset( $values['tapa'] ) ? esc_attr( $values['tapa'][0] ) : '';
	$check = isset( $values['stock'] ) ? esc_attr( $values['stock'] ) : '';
// We'll use this nonce field later on when saving.  
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
<p>
		<label for="isbn">ISBN</label>
		<input type="text" name="isbn" id="isbn" value="<?php echo $text; ?>" />
    </p>
    <p>  
		<label for="encuadernacion">Tipo de encuadernación</label>  
		<select name="encuadernacion" id="encuadernacion">  
			<option value="rustica" <?php selected( $selected, 'rustica' ); ?>>Rústica</option>  
			<option value="pegada" <?php selected( $selected, 'pegada' ); ?>>Pegada</option>
			<option value="cosida" <?php selected( $selected, 'cosida' ); ?>>Cosida</option>  
		</select>  
if ( ! function_exists('nuria_libros_cpt') ) {

// Register Custom Post Type
function nuria_libros_cpt() {

	$labels = array(
		'name'                  => _x( 'Libros', 'Post Type General Name', 'libros_cpt' ),
		'singular_name'         => _x( 'Libro', 'Post Type Singular Name', 'libros_cpt' ),
		'menu_name'             => __( 'Libros', 'libros_cpt' ),
		'name_admin_bar'        => __( 'Libros', 'libros_cpt' ),
		'archives'              => __( 'Item Archives', 'libros_cpt' ),
		'attributes'            => __( 'Item Attributes', 'libros_cpt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'libros_cpt' ),
		'all_items'             => __( 'All Items', 'libros_cpt' ),
		'add_new_item'          => __( 'Add New Item', 'libros_cpt' ),
		'add_new'               => __( 'Add New', 'libros_cpt' ),
		'new_item'              => __( 'New Item', 'libros_cpt' ),
		'edit_item'             => __( 'Edit Item', 'libros_cpt' ),
		'update_item'           => __( 'Update Item', 'libros_cpt' ),
		'view_item'             => __( 'View Item', 'libros_cpt' ),
		'view_items'            => __( 'View Items', 'libros_cpt' ),
		'search_items'          => __( 'Search Item', 'libros_cpt' ),
		'not_found'             => __( 'Not found', 'libros_cpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'libros_cpt' ),
		'featured_image'        => __( 'Featured Image', 'libros_cpt' ),
		'set_featured_image'    => __( 'Set featured image', 'libros_cpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'libros_cpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'libros_cpt' ),
		'insert_into_item'      => __( 'Insert into item', 'libros_cpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'libros_cpt' ),
		'items_list'            => __( 'Items list', 'libros_cpt' ),
		'items_list_navigation' => __( 'Items list navigation', 'libros_cpt' ),
		'filter_items_list'     => __( 'Filter items list', 'libros_cpt' ),
	);
	$args = array(
		'label'                 => __( 'Libro', 'libros_cpt' ),
		'description'           => __( 'Custom Post Type para libros', 'libros_cpt' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'libros', $args );

}
add_action( 'init', 'nuria_libros_cpt', 0 );

}

//Register Custom metabox
function nuria_libros_metabox() {
    add_meta_box( 'libros-metabox', esc_html__( 'Información Libros', 'theme-textdomain' ), 'nuria_info_metabox', array( 'libros' ) );
}

add_action( 'add_meta_boxes', 'nuria_libros_metabox' );

function nuria_info_metabox( $post )
{
$values = get_post_custom( $post->ID );
	$text = isset( $values['isbn'] ) ? esc_attr( $values['isbn'][0] ) : '';
	$selected = isset( $values['encuadernacion'] ) ? esc_attr( $values['encuadernacion'][0] ) : '';
	$selected2 = isset( $values['tapa'] ) ? esc_attr( $values['tapa'][0] ) : '';
	$check = isset( $values['stock'] ) ? esc_attr( $values['stock'] ) : '';
// We'll use this nonce field later on when saving.  
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
<p>
		<label for="isbn">ISBN</label>
		<input type="text" name="isbn" id="isbn" value="<?php echo $text; ?>" />
    </p>
    <p>  
		<label for="encuadernacion">Tipo de encuadernación</label>  
		<select name="encuadernacion" id="encuadernacion">  
			<option value="rustica" <?php selected( $selected, 'rustica' ); ?>>Rústica</option>  
			<option value="pegada" <?php selected( $selected, 'pegada' ); ?>>Pegada</option>
			<option value="cosida" <?php selected( $selected, 'cosida' ); ?>>Cosida</option>  
		</select>  
	</p> 

	<p>  
		<label for="tapa">Tipo de Tapa</label>  
		<select name="tapa" id="tapa">  
			<option value="dura" <?php selected( $selected2, 'dura' ); ?>>Dura</option>  
			<option value="blanda" <?php selected( $selected2, 'blanda' ); ?>>Blanda</option>  
		</select>  
	</p>
	<p> 
		<input type="checkbox" id="stock" name="stock" <?php checked( $check, 'on' ); ?> />  
		<label for="stock">Libro disponible en Stock</label>  
    </p>
 <?php    
	
}

 add_action( 'save_post', 'nuria_libros_metabox_save' );  
function nuria_libros_metabox_save( $post_id )  
{  
    // Bail if we're doing an auto save  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return; 
 
    // if our nonce isn't there, or we can't verify it, bail 
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return; 
 
    // if our current user can't edit this post, bail  
    if( !current_user_can( 'edit_post' ) ) return;  
 
    // now we can actually save the data  
    $allowed = array(   
        'a' => array( // on allow a tags  
            'href' => array() // and those anchors can only have href attribute  
        )  
    );  
 
    // Make sure your data is set before trying to save it  
 if( isset( $_POST['isbn'] ) )  
        update_post_meta( $post_id, 'isbn', wp_kses( $_POST['isbn'], $allowed ) );  
 
    if( isset( $_POST['encuadernacion'] ) )  
        update_post_meta( $post_id, 'encuadernacion', esc_attr( $_POST['encuadernacion'] ) );  
 
	if( isset( $_POST['tapa'] ) )  
        update_post_meta( $post_id, 'tapa', esc_attr( $_POST['tapa'] ) );
 
    // This is purely my personal preference for saving check-boxes  
    $check = isset( $_POST['stock'] ) && $_POST['stock'] ? 'on' : 'off';  
    update_post_meta( $post_id, 'stock', $check );  
}
//Add Metaboxes to the content
//
add_filter( 'the_content', 'nuria_add_custom_fields_to_content' );
function nuria_add_custom_fields_to_content( $content ) {
$custom_fields = get_post_custom();
$content .= "<div class='campos'>";
if( isset( $custom_fields['isbn'] ) ) {
$content .= '<li>ISBN: '. $custom_fields['isbn'][0] . '</li>';
}
if( isset( $custom_fields['tapa'] ) ) {
$content .= '<li>Tipo Tapa: ' . $custom_fields['tapa'][0] . '</li>';
}
if( isset( $custom_fields['encuadernacion'] ) ) {
$content .= '<li>Formato encuadernación: ' . $custom_fields['encuadernacion'][0] . '</li>';
$content .= '</div>';
}

if( isset( $custom_fields['stock'] ) ) {
$content .= '<li>Disponible: ' . $custom_fields['stock'][0] . '</li>';
$content .= '</div>';
}
return $content;
}
