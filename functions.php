<?php
	
	/* barisan kode ini digunakan untuk menambahkan link untuk RSS kebagian HEAD templatenya */
	automatic_feed_links();
	
	/* sebelah sini digunakan untuk meload JQUERY, menggantikan JQUERY bawaan wordpressnya */
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("./js/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	/* yang sebelah sini digunakan untuk memberikan LINK bagian HEAD template dari link-link  yang tidak perlu */
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	/* yang sebelah sini digunakan untuk meregister sidebar, silahkan disesuaikan dengan template */
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>