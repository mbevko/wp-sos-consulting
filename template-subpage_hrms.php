<?php
/*
Template Name: subpage_hrms
*/
?>

<?php get_header();?>

<section class="more_info_body">
<div class="subpage_header_banner">
        <div class="subpage_header_container">
            <div class="subpage_header_subcont">
                <h2 class="subpage_title"><?php the_title();?></h2>
                <img
                    class="horizontal_logo"
                    src="<?php echo get_template_directory_uri(); ?>/images/SOS Morse Code.png">
            </div>
            <div class="more_info_btns_subpage">
                <a href="<?php echo site_url('/about'); ?>" class="subpage_learn_more_link">
                    <button class="subpage_learn_more_btn">Schedule Demo</button>
                </a>
                <a href="<?php echo site_url('/contact'); ?>" class="subpage_contact_us_link">
                    <button class="subpage_contact_us_btn">Contact Us</button>
                </a>
            </div>
        </div>
        <img
            class="subpage_header_img"
            src="<?php echo get_template_directory_uri(); ?>/images/BannerImages/HRMSpage.png">
    </div>

        <h3 class="subpage_banner_header">Human Resource Management Software We Support</h3>

        <a href="<?php echo site_url('/human-resource-management/sage-hrms/'); ?>" class="subpage_banner_hrms">
            <div class="featured_software_hrms">
                    <p><span class="featured_software_hrms_sage">sage</span> <span class="featured_software_hrms_hrms">HRMS</span></p>
            </div>

            <ul class="featured_software_desc">
                <li><span class="featured_software_headers">Comprehensive and Integrated:</span> Offers a comprehensive and integrated suite of modules, such as inventory management, order entry, purchase orders, project and job costing, payroll, and CRM. It also integrates with other Sage products, such as Sage HRMS, Sage Fixed Assets, and Sage Payment Solutions.</li>
                <li><span class="featured_software_headers">Flexibility and Supply Chain Excellence:</span> Sage 300 offers great flexibility, excellent supply chain management, quick and hassle-free accounts payable management, painless budget management, and project management.</li>
                <li><span class="featured_software_headers">On-Premises deployment:</span> Sage 300 is an on-premises solution that gives you more control over your data and infrastructure. You can choose where to host your application, whether on your own servers or on a third-party hosting provider. You can also customize your system to fit your specific needs and preferences.</li>
                <li><span class="featured_software_headers">Integration with Other Applications:</span> Sage 300 can also integrate with other applications such as Sage CRM, Sage Data & Analytics, and various add-ons and extensions to expand your capabilities.</li>
            </ul>
        </a>

        
        <div class="mobile_subpage_banner">
            <a class="sage_mobile_link" href="#" >Sage HRMS</a>
        </div>            


        <div class="subject_article">
            <div class="subject_container">
                <div class="subject_container_left"><?php get_template_part('includes/section', 'content');?>
                <a href="<?php echo site_url('/contact'); ?>"><!-- <button class="contact_us_btn">Contact Us</button> --></a>
            </div>
                <div class="subject_container_right"><?php if(has_post_thumbnail()):?>
                    <img
                        src="<?php the_post_thumbnail_url('medium_large');?>"
                        alt="<?php the_title();?>+"
                        class="page_featured_img">
                    <?php endif;?></div>
            </div>
            
        </div>
    
    <div class="subpage_archive">
        <!-- 
        <h2>Latest Articles</h2> -->
        <div class="subpage_article">
        <?php   $args = array(
            'post_type' => array( 'post' ),
            'posts_per_page' => 3,
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo'<a href="' . get_permalink() . '" class="archive_btn" >';
                    echo '<div class="card_body">';
                    echo the_post_thumbnail('blog-small');
                    echo '<div class="card_bottom">';
                    echo '<h3 class="thumbnail_titles">'. get_the_title() . '</h3>';
                    the_excerpt();
                    echo '<p class="read_more"> Read More >> </p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
        ?>
        </div>
    </div>
</section>

<?php get_footer();?>