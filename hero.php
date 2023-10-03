<?php
if (is_front_page()) {
    echo '<div class="l-main_hero p-main_hero">';
    echo '<div class="p-main_hero__title">';
    echo '<h1>ダミーサイト</h1>';
    echo '</div>';
    echo '</div>';
} elseif (is_archive()) {
    echo '<div class="l-main_hero p-main_hero p-main_hero--archive">';
    echo '<div class="p-main_hero__title p-main_hero--archive__title">';
    echo '<h1>Menu:</h1>';
    echo  '<span>'. single_cat_title('', false) .'</span>';
    echo '</div>';
    echo '</div>';
} elseif (is_search()) {
    echo '<div class="l-main_hero p-main_hero p-main_hero--archive">';
    echo '<div class="p-main_hero__title p-main_hero--archive__title">';
    echo '<h1>Search:</h1>'; 
    $search_text = sprintf( esc_html('%s'), get_search_query() );
    echo '<span>'. $search_text .'</span>';  
    echo '</div>';
    echo '</div>';
} elseif (is_single()) {
    echo '<div class="l-main_hero p-main_hero p-main_hero--single">';
    echo '<div class="p-main_hero__title p-main_hero--single__title">';
    echo '<h1>'.esc_html(get_the_title()).'</h1>';  
    echo '</div>';
    echo '</div>';
} elseif (is_page()) {
    echo '<div class="l-main_hero p-main_hero p-main_hero--page">';
    echo '<div class="p-main_hero__title p-main_hero--page__title">';
    echo '<h1>'.esc_html(get_the_title()).'</h1>';  
    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="l-main_hero p-main_hero">';
    echo '<div class="p-main_hero__title">';
    echo '<h1>ダミーサイト</h1>';
    echo '</div>';
    echo '</div>';
}


?>
