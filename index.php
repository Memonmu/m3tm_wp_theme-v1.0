<?php 
/* get_header() digunakan untuk menyisipkan file header.php , agar nantinya bisa menjadi kesatuan template yang utuh */
get_header(); ?>

	<!-- jika di dalam wordpress terdapat artikel-artikel, maka ambil semuanya menggunakan fungsi while(have_post())
	dan sisipkan ke dalam sebuah variable menggunakan function the_post() -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<!-- post_class() digunakan untuk menyisipkan class sesuai dengan kaidah SEO -->
		<!-- sedangkan the_ID() memisahkan Antara post satu dengan post yang lain 
			 menggunakan ID dari tiap artikel -->
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<!-- sisipkan URL artikelnya ke dalam si Linknya dengan the_permalink() -->
			<!-- sisipkan judul artikelnya dengan the_title();?>
			<!-- the_permalink dan the_title() betul-betul sesuai dengan artikel pada wordpressnya -->
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			
			<!-- ini digunakan untuk mengambil atribut artikel seperti waktu penerbitan dan penulisnya siapa -->
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<!-- ambil cuplikan artikelnya (sesuai dengan potongan readmore tiap artikelnya -->
			<div class="entry">
				<?php the_content(); ?>
			</div>
			
			<!-- yang sebelah sini digunakan untuk mendapatkan tag dan category dari tiap artikelnya -->
			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				
				<!-- yang ini adalah keterangan seberapa banyak komentar dari artikel tersebut , 
					 di tambah link menuju komentarnya -->
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>
	
	<!-- ini adalah penutup dari pengulangan pengambilan artikel yang diterapkan ke pada templatenya -->
	<?php endwhile; ?>
	
	<!-- yang ini digunakan sebagai navigasi artikel, apakah artikel pada waktu yang lampau itu ada ? 
		 jika ada maka nanti akan dimunculkan previous articlenya -->
	<?php include (TEMPLATEPATH . './inc/nav.php' ); ?>

	<!-- jika di wordpressnya tidak artikel maka tampilkan saja tidak ada artikel NOT FOUND --> 
	<?php else : ?>

		<h2>Tidak Ada Post Apapun Broo..</h2>

	<?php endif; ?>

<?php 
/* get_header() digunakan untuk menyisipkan file sidebar.php */
get_sidebar(); ?>

<?php 
/* get_header() digunakan untuk menyisipkan file footer.php */
get_footer(); ?>
