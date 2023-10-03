<?php
if (is_front_page()) {
    echo '<div class="l-main_hero p-main_hero">';
    echo '<div class="p-main_hero__title">';
    echo '<h2>ダミーサイト</h2>';
    echo '</div>';
    echo '</div>';
} elseif (is_archive()) {
    echo '<div class="l-main_hero p-main_hero p-main_hero--archive">';
    echo '<div class="p-main_hero__title p-main_hero--archive__title">';
    echo '<h2>Menu:</h2>';
    echo  '<span>'. single_cat_title('', false) .'</span>';
    echo '</div>';
    echo '</div>';
} elseif (is_search()) {
    echo '<div class="l-main_hero p-main_hero p-main_hero--archive">';
    echo '<div class="p-main_hero__title p-main_hero--archive__title">';
    echo '<h2>Search:</h2>'; 
    $search_text = sprintf( esc_html('%s'), get_search_query() );
    echo '<span>'. $search_text .'</span>';  
    echo '</div>';
    echo '</div>';
} elseif (is_single()) {
    // 投稿詳細ページの場合のコードをここに追加
} elseif (is_page()) {
    // 固定ページの場合のコードをここに追加
} else {
    echo '<div class="l-main_hero p-main_hero">';
    echo '<div class="p-main_hero__title">';
    echo '<h2>ダミーサイト</h2>';
    echo '</div>';
    echo '</div>';
}


?>
