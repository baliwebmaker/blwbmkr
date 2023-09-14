<?php
/**
 * Title: Search Tour Form
 * Slug: blwbmkr/search-tour-form
 * Categories: blwbmkr-tour-search
 * Block Types: core/heading, core/group, core/post-content
 * Keywords: Search
 *
 * @package blwbmkr
 * @since 1.0.0
 */
?>
<style>.select{ font-size: .61em; width:100%; padding:0.87em 1em;} </style>
 
<form action="https://balitourpaket.test/list-tour" method="post" id="cariTourForm" style="margin:0;padding: 0;">
<div class="wp-block-columns" style="padding-right:10px; margin-bottom: 0;">
	<div class="wp-block-column" style="margin-top:1em; padding-right: .6em; ">
<?php
$categories =  get_categories('tour-package');
if ( $categories ) {
    echo '<select class="select" name="tour-cat">'; //echo the select
        echo '<option>Pilih satu kategori</option>';
    //loop through each category and echo as option for the select
    foreach ($categories as $cat) { 
        echo '<option value="'. $cat->term_id .'">'. $cat->cat_name .'</option>';
    }

    echo '</select>'; //close the select
}
?></div>
<div class="wp-block-column" style="margin-top:1em; padding-right: .6em; ">
<?php
$args = array(
    'taxonomy'=> 'post_tag',
    'hide_empty'=> false
);
$durasi =  get_terms($args);
if ( $durasi ) {
    echo '<select class="select" name="tour-tag">'; //echo the select
    echo '<option>Pilih satu durasi</option>';
    //loop through each category and echo as option for the select
    foreach ($durasi as $dur) { 
        echo '<option value="'. $dur->term_id .'">'. $dur->name .'</option>';
    }

    echo '</select>'; //close the select
}
?></div>
<div class="wp-block-column" style="margin-top:1em;flex-basis:23%;">
        <button type="submit" id="tombolcari" class="wp-block-button__link has-white-color has-midnight-gradient-background has-text-color has-background wp-element-button">Cari Tour</button>
</div>
</div>
</form>
 