		<div class="begron well">
			<!-- yang ini digunakan untuk menampilkan tahun dan blogname dari si wordpressnya --> 
			Copyright &copy; <?php echo date("Y"); echo " Salam Budiarto | "; echo bloginfo('name'); ?>
		</div>

	</div>
	
	<?php 
	/* 	wp_footer() digunakan oleh wordpress sebagai penutup query, atau menampilkan bagian-bagian 
		yang dibutuhkan oleh wordpress, seperti meload script yang dijalankan di bagian footer */
	wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
