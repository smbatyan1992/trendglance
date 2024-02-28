<?php
function enqueue_assets() {
	wp_enqueue_style("bootstrap-style", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", [], "", "all"); 
	wp_style_add_data( 'bootstrap-style', array( 'integrity', 'crossorigin' ) , array( 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC', 'anonymous' ) );
	wp_enqueue_style("font-awesome-5", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css", [], "", "all"); 
	wp_style_add_data( 'font-awesome-5', array( 'integrity', 'crossorigin' ) , array( 'sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU', 'anonymous' ) );
	wp_enqueue_style("stylecss", get_stylesheet_uri());
	
	wp_enqueue_script("jquery");

	wp_enqueue_style('owl-carousel-css', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css','','',false);
	wp_enqueue_script('owl-carousel-js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', '', '', true);

	//wp_enqueue_style('aos-animation-css', '//unpkg.com/aos@2.3.1/dist/aos.css','','',false);
    //wp_enqueue_script('aos-animation-cjs', '//unpkg.com/aos@2.3.1/dist/aos.js', '', '', true);

	//wp_enqueue_script("jquery-js", "//code.jquery.com/jquery-3.3.1.slim.min.js", "", "", true);
	//wp_script_add_data( 'jquery-js', array( 'integrity', 'crossorigin' ) , array( 'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo', 'anonymous' ) );
	wp_enqueue_script("bootstrap-5", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", "", "", true);
    wp_script_add_data( 'bootstrap-5', array( 'integrity', 'crossorigin' ) , array( 'sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM', 'anonymous' ) );

	wp_enqueue_script("functions", get_template_directory_uri() . "/js/functions.js", "", "", true);
	
	wp_localize_script("functions", "wp_var",
		[
			"ajax_url" => admin_url("admin-ajax.php"),
		]
	);
}
add_action("wp_enqueue_scripts", "enqueue_assets");
