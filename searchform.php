<form role="search" method="get" id="searchform" class="searchform" action="http://webbyscratch.local/">
    <div>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" class="form-control" width="75%" placeholder="<?php the_search_query(); ?>">
        <input type="submit" id="searchsubmit" value="Search" class="btn btn-success">
    </div>
</form>