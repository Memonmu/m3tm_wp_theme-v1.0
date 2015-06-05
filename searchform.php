<!-- bloginfo('siteurl'); akan menghasilkan alamat dari URL Wordpress sitenya , 
	dalam hal ini http://localhost/wp-nyong/ -->
<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <div>
        <label for="s" class="screen-reader-text">Search for:</label>
        <input type="text" id="s" name="s" value="" />
        
        <input type="submit" value="Search" id="searchsubmit" />
    </div>
</form>