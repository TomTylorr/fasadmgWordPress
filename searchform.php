
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/') ?>" >
    <label class="screen-reader-text visually-hidden" for="s">Поиск: </label>
    <input class="search" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <input class="search-icon" type="submit" id="searchsubmit" value="Искать" />
</form>

