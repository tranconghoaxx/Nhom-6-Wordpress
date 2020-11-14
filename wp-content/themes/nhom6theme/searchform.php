
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input value="" name="s" id="s" type="text" placeholder="<?php the_search_query(); ?>">
        <input id="searchsubmit" value="Search" type="submit">
    </div>
</form>