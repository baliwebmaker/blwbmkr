<?php
/**
 * Title: Search Tour Results
 * Slug: blwbmkr/search-tour
 *
 * @package blwbmkr
 * @since 1.0.0
 */
?>

<?php

	$cat_id = isset($_REQUEST['tour-cat']) && !empty($_REQUEST['tour-cat'])?$_REQUEST['tour-cat']:'';
	$tag_id = isset($_REQUEST['tour-tag']) && !empty($_REQUEST['tour-tag'])?$_REQUEST['tour-tag']:'';
?>


<?php
	if($cat_id || $tag_id){
		$tax_query =  array(
			'relation' => 'OR',
				array(
				  'taxonomy' => 'post_tag',
				  'field' => 'term_id',
				  'terms' => $tag_id ,
				),
				array(
				  'taxonomy' => 'category',
				  'field' => 'term_id',
				  'terms' => $cat_id ?? '',
				)
		);
	}else{
		$tax_query ='';
	}
	

    $sql = new WP_Query(array(
        'post_type' => 'tour-package',
		'posts_per_page' => '-1',
		'cat' => $cat_id ?? '',
        'tax_query' => $tax_query ,
    ));
   
?>
<style type="text/css">

	.grid{
		display: grid;
		grid-gap: 15px 15px;
		align-items: initial;
	}
	.post{
		border-radius: 5px;
		box-sizing: border-box;
   		margin: 0;
    	overflow: hidden;
	}

.bwm-thumb{
background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    height: 10px;
    margin: 0;
    padding-bottom: 60%;
    position: relative;
    text-align: center;
}
.bwm-thumb img{
height: 100%!important;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
@media (max-width: 576px){
	.bwm-thumb-cats {
    font-size: 13px;
	}
}

.bwm-thumb-cats{
    font-weight: 400;
    font-size: 13px;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: auto;
    line-height: 135%;
    letter-spacing: 0px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    bottom: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    gap: 5px;
    left: 10px;
    position: absolute;
}
.bwm-thumb-cats a{
	color: #fff;background: #8344c5;border-radius: 2px;
    padding: 2px 10px;
    text-decoration: none!important;
    cursor: pointer;
}
.columns-3 {
    grid-template-columns: repeat(3,1fr);
}
@media (max-width: 768px){
	.columns-tablet-2 {
    grid-template-columns: repeat(2,1fr);
}
}
@media (max-width: 576px){
.columns-mobile-1 {
    grid-template-columns: repeat(1,1fr);
}}
.excerpt {
    text-align: justify;
    color: #333;
    margin: 0px 0px 10px 0px;
    font-size: 14.8px;
}
</style>
<div class=" ">
<h3 style="font-size:12px;">ditemukan <?php echo($sql->post_count);?> tour yang sesuai dengan kriteria pencarian Anda!</h3>
<div class="grid columns-3 columns-tablet-2 columns-mobile-1">
<?php    
	if ($sql->have_posts()):
    	while($sql->have_posts()):$sql->the_post();
			$post_id = get_the_ID();
			$cat = get_the_category( $post_id);
			
?>
<article class="post" style="text-align: left;background: #f4f2fc;">
<figure class="bwm-thumb">
<?php the_post_thumbnail( 'medium', array( 'class' => 'w-full aspect-video lazyloaded' ) );?>

<div class="bwm-thumb-cats"><a href="<?php echo esc_url( get_category_link( $cat[0]->cat_ID ) ); ?>" title="<?php echo $cat[0]->name??'';?>"><?php echo $cat[0]->name??'';?></div>
</figure>
<div class="" style="padding: 20px 25px;">
<h2 class="wp-block-post-title has-extra-small-font-size"><a style=" " class="" href="<?php echo esc_url( get_permalink() ) ;?>"><?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?></a></h2>
<div class="excerpt innerContent">
<?php
$excerpt = get_the_excerpt();

$excerpt = substr($excerpt, 0, 66 );
$result = substr($excerpt, 0, strrpos($excerpt, ' '));
echo $result;
?> 
</div>
<a style=" " class="" href="<?php echo esc_url( get_permalink() ) ;?>">Klik</a>

</div>
</article>
 

<?php 
	endwhile; 
	endif;
?>
</div>
</div>