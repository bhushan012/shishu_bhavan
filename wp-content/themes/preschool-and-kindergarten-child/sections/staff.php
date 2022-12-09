<?php
/**
 * Staff Section
 * 
 * @package Preschool_and_Kindergarten
*/ 
    $section_title = get_theme_mod('preschool_and_kindergarten_staff_section_title');
    $description   = get_theme_mod('preschool_and_kindergarten_staff_section_description');
    $staff_one     = get_theme_mod( 'preschool_and_kindergarten_staff_post_one' );
    $staff_two     = get_theme_mod( 'preschool_and_kindergarten_staff_post_two' );
    $staff_three   = get_theme_mod( 'preschool_and_kindergarten_staff_post_three' );
    $staff_four   = get_theme_mod( 'preschool_and_kindergarten_staff_post_four' );
    $staff_five   = get_theme_mod( 'preschool_and_kindergarten_staff_post_five' );
    $staff_six   = get_theme_mod( 'preschool_and_kindergarten_staff_post_six' );
    $staff_seven   = get_theme_mod( 'preschool_and_kindergarten_staff_post_seven' );
    $staff_eight   = get_theme_mod( 'preschool_and_kindergarten_staff_post_eight' );
    
    $staffs_posts = array( $staff_one, $staff_two, $staff_three,$staff_four,$staff_five,$staff_six,$staff_seven,$staff_eight );
    $staffs_posts = array_diff( array_unique( $staffs_posts ), array('') );
?>
<section class="our-staff">
    <div class="container">
		<?php 
		preschool_and_kindergarten_get_section_header( $section_title, $description ); 
        
        if( $staffs_posts ):
			$staff_qry = new WP_Query(array(
	    	    'post__in'   => $staffs_posts,
                'orderby'   => 'post__in',
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true
			));

		    if( $staff_qry->have_posts() ){
		    	?>
				<div class="row">
				    <?php 
				    while( $staff_qry->have_posts() ){
				    	$staff_qry->the_post(); ?>
							<div class="col">
								<div class="img-holder">
									<!-- <a href="<?php //the_permalink(); ?>"> -->
										<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail( 'preschool-and-kindergarten-staff-thumb', array( 'itemprop' => 'image' ) ); 
										}else{
											preschool_and_kindergarten_get_fallback_svg( 'preschool-and-kindergarten-staff-thumb' );
										} ?>
									<!-- </a> -->
								</div>
								<div class="text-holder">
									<!-- <strong class="name"><a href="<?php // the_permalink(); ?>"><?php //the_title(); ?></a></strong> -->
									<strong class="name"><?php the_title(); ?></strong>
									<?php if( has_excerpt() ){?><span class="designation"><?php the_excerpt(); ?></span><?php } ?>
								</div>
							</div>
			            <?php 
					}
					wp_reset_postdata();  ?>
				</div>
		    <?php 
		    }		    
		endif; ?>
	</div>
</section>