<?php

function assets_enqueuer(){
  wp_enqueue_style('Standard_Stylesheet',get_template_directory_uri().'/minifications/app.css');
  wp_enqueue_style('Bootstrap css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_script('Bootstrap JS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
  wp_enqueue_script('Bootstrap Bundle JS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');
  wp_enqueue_script('Bootstrap popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
  wp_enqueue_script('Bootstrap Jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
}
add_action( 'wp_enqueue_scripts','assets_enqueuer');

// CREATING DYNAMIC NAVBAR
function navbar(){
  register_nav_menus( array(
    "navBar_menu"   => __("Navbar Menu"),
    "dropdown"      => __("dropdown Menu")
  ));
  // THIS ADD THE TITLE ON THE THE TOP OF THE BROWSER
  add_theme_support("title-tag");
};
add_action('init', 'navbar');


add_filter('use_block_editor_for_post', '__return_false');

function pagamento_post_type(){
  register_post_type('pagamento', array(
    'public' => true,
    'labels'=> array(
      'name' => 'Pagamentos',
      'add_new_item' => 'Insira o nome do projeto',
      'edit_item'=>'Editar o nome do Projeto'
    ),
    'menu_position' => 2,
    'menu_icon' => 'dashicons-tickets-alt',
  ));
}

function cliente_post_type(){
  register_post_type('cliente', array(
    'public' =>true,
    'labels'=> array(
      'name' => 'Clientes',
      'add_new_item' => 'Criar novo Cliente Man'
    ),
    'menu_icon' => 'dashicons-universal-access-alt',
    'menu_position' => 2,
  ));
}

function projeto_post_type(){
  register_post_type('Projeto', array(
    'public' =>true,
    'labels'=> array(
      'name' => 'Projeto',
      'add_new_item' => 'Nome do novo projeto'
    ),
    'menu_icon' => 'dashicons-clipboard',
    'menu_position' => 4,
  ));
}

add_action('init','cliente_post_type');
add_action('init','projeto_post_type');
add_action('init','pagamento_post_type');

// function create_external() {
// register_post_type( 'ibm_externals',
//     array(
//             'labels' => array(
//                 'name' => __( 'Externals' ),
//                 'singular_name' => __( 'External' ),
//                 'add_new_item' => 'Nome post Externo'
//             ),
//             'public' => true,
//             'has_archive' => false,
//             'rewrite' => array('slug' => 'articles'),
//             'menu_position' => 6,
//             'supports' => array('title','editor','author','thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'),
//             'taxonomies' =>'category'
//         )
//     );
// }
// add_action( 'init', 'create_external' );

 ?>
