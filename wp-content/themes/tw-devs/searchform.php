<!-- My search -->
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')) ?>">
    <div class="flex">
        <label class="screen-reader-text sr-only" for="s"><?php esc_html_e('Search for', 'wp-devs') ?>:</label>
        <input class="px-4 py-2 border border-black rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-64" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <input class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r-md" type="submit" id="searchsubmit" value="<?php esc_html_e('Search', 'wp-devs') ?>">
        <input type="hidden" value="post" name="post_type" id="post_type" />
    </div>
</form>