<form class="p-header__form c-search" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <span class="material-symbols-outlined c-search-icon">
    search
    </span>
    <input 
    type="text" 
    value="<?php echo get_search_query(); ?>" 
    class="c-search__input" 
    name="s" id="s" 
    placeholder="キーワードを入力して検索">
    <button type="submit" class="c-search__button">検索</button>
</form>
