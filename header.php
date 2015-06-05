<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" 
	<?php 
		/* 	barisan ini digunakan untuk mengambil atribut bahasa 
			yang digunakan oleh cms wordpress */ 
		language_attributes(); ?>>

<head profile="http://www.memonmu.xyz/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php 
		/* barisan ini digunakan untuk mengecek apakah sedang dalam mode pencarian */
		if (is_search()) { 
	?>
		<!-- khusus untuk robot / bot atau webbot, maka dia tidak diperkenankan untuk mengindex halaman ini -->
		<!-- Anda bisa merubahnya menjadi content="index,follow" sesuai dengan kebutuhan Anda -->
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php
		/* yang ini merupakan penutup dari is_search() */
		} 
	?>

	<title>
		   <?php
			
			/* barisan kode-kode disini Akan menentukan Dynamic Title / Title Pada Browsernya */
			/* Dan sangat berpengaruh sekali untuk SEO dan Navigasi ... */
			/* Anda sedang berada Di Halaman akan terlihat dari Title pada Browsernya */
			
			/* Jika yang diakses Adalah tag post wordpress */
		      if (function_exists('is_tag') && is_tag()) {
			  
				/* maka judulnya nanti akan menjadi Tag Archive For "Nama Tagnya" */
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      
			/* Dan jika yang di akses adalah archive (kategori) */  
			  elseif (is_archive()) {
			  
				/* Maka tampilkan title si browsernya adalah NAMA KATEGORI Archive - */
		         wp_title(''); echo ' Archive - '; }
				 
			/* Jika yang di akses itu adalah hasil pencarian ... */
		      elseif (is_search()) {
				
				/* maka title yang nanti akan muncul adalah Search for "KEYWORDNYA" - */
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
				 
			/* jika yang di akses halaman/page maupun artikel/post */
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
			  
				/* maka titile yang akan nanti akan muncul SESUAI DENGAN JUDUL ARTIKEL / HALAMAN - */
		         wp_title(''); echo ' - '; }
				 
			/* jika yang di akses itu tidak ada sama sekali, baik itu halaman maupun artikel */
		      elseif (is_404()) {
				
				/* maka tampilkan Not Found - */
		         echo 'Not Found - '; }
				 
			/* jika yang di akses itu halaman beranda atau home */
		      if (is_home()) {
				
				/* title yang akan muncul nantinya adalah NAMA WEBSITE - DESKRIPSI WEBSITE */
				/* NAMA WEBSITE + DESKRIPSI WEBSITE itu di ambil dari bagian SETTING > GENERAL */
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
				 
			/* jika yang diakses itu bukan halaman beranda Atau home */
		      else {
				/* maka nanti yang akan muncul adalah nama websitenya saja */
				/* hal ini dipadukan dengan bagian sebelumnya */
				/* misalkan yang diakses adalah halaman kategori herbal */
				/* maka nanti title yang akan muncul adalah Herbal Archive - NAMA WEBSITE */
		          bloginfo('name'); }
				  
			/* yang ini digunakan untuk title apabila halaman dari kategori lebih dari satu */
			/* biasanya untuk paging halaman 1 2 3 dan seterusnya ... */
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<!-- bagian ini digunakan untuk mengambil file styles css default dari templatenya, 
	dalam hal ini adalah style.css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	
	<?php 
	/* bagian ini digunakan ketika yang diakses adalah halaman artikel / single post */
	if ( is_singular() ) /* maka munculkanlah form komentar */ wp_enqueue_script( 'comment-reply' ); 
	?>

	<?php 
	/* bagian ini adalah bagian standar dari template wordpress bagian header */
	/* biasanya digunakan oleh wordpress untuk berbagai keperluan seperti javascript */
	/* style dan lain-lain yang berhubungan dengan plugin */
	wp_head(); 
	?>
	
</head>

<body <?php /* bagian ini digunakan untuk mengambil body_class default dari wordpress */ body_class(); ?>>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
      <script src="./js/html5shiv.min.js"></script>
      <script src="./js/respond.min.js"></script>
    <!-- [endif] -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>

	<div class="container well">

		<div class="begron container-fluid well">
			<h1>
				<a href="<?php /* mengambil alamat dari URL home/beranda wordpressnya */ echo get_option('home'); ?>/">
					<?php /* bagian ini digunakan untuk mengambil nama dari websitenya di ambil dari SETTING GENERAL */ 
					bloginfo('name'); ?>
				</a>
			</h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>

