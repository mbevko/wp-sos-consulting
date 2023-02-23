<?php get_header();?>

        <header class="main_header">
            <div class="overlay">
                <h1 class="header_title">Enterprise Management Software & Technology Provider</h1>
                <p>Providing end-to-end solutions for business looking for greater efficiency,
                    flexability, and insight.</p>
                <div class="more_info_btns">
                    <button class="header_learn_more_btn">Learn More</button>
                    <button class="header_contact_us_btn">Contact Us</button>
                </div>
                <!-- <img src="./images/3.png" class="header_logo"/> -->
            </div>
        </header>
 
        <div class="container">
            
        </div>

        <section class="index_main_body">

            <article class="software">
                <h2 class="software_heading">Sage 300 ERP Accounting Software</h2>
                <div class="software_links">
                    <a href="#" title="Accounting and Financials"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/accountingfinancials.png">
                        <p>Accounting and Financials</p>
                    </a>
                    <a href="#" title="Project and Job Costing">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/projectjobcosting.PNG">
                        <p>Project and Job Costing</p>
                    </a>
                    <a href="#" title="Distribution Manufacturing Barcoding"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/distributionmanufacturing.PNG">
                        <p>Distribution Manufacturing Barcoding</p>
                    </a>
                    <a href="#" title="Fixed Assets"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/fixedassets.PNG">
                        <p>Fixed Assets</p>
                    </a>
                    <a href="#" title="Alerts"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/alerts.PNG">
                        <p>Alerts</p>
                    </a>
                    <a href="#" title="Reporting Dashboards and Intelligence"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/reportingdashbaords.PNG">
                        <p>Reporting Dashboards & Intelligence</p>
                    </a>
                </div>
                <div class="software_links2_closed">
                    <a href="#" title="Multi-Currency">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/multicurrency.PNG">
                        <p>Multi-Currency</p>
                    </a>
                    <a href="#" title="Warehouse Management">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/warehousemangement.PNG">
                        <p>Warehouse Management</p>
                    </a>
                    <a href="#" title="Workflow Analysis"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/workflow analysis.PNG">
                        <p>Workflow Analysis</p>
                    </a>
                    <a href="#" title="Custom Forms"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/customforms.PNG">
                        <p>Custom Forms</p>
                    </a>
                    <a href="#" title="Process Automation"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/processautomation.PNG">
                        <p>Process Automation</p>
                    </a>
                    <a href="#" title="Commerce Integration"><img src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/commerceintegration.PNG">
                        <p>Commerce Integration</p>
                    </a>
                </div>
                <button title="Discover More" alt="Discover More" class="discover_btn">Discover More</button>

                <p class="mobile_software_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea facere similique odio animi earum, accusamus corrupti! Aspernatur dignissimos fuga, quibusdam ducimus delectus dolores deserunt harum voluptates voluptatibus quisquam non.</p>

                <button class="mobile_software_btn">Discover Accounting Solutions</button>
            </article>

            <article class="sos_info">
                <div class="sos_info_content">
                    <h2 class="sos_info_heading">Why SOS Consulting Services?</h2>
                    <p>SOS Consulting Services is a boutique consulting practice made up of a team of accountants, software engineers/programmers, I.T. professionals, and project management specialists with over 25 years’ experience in their respective fields.  We provide our services to a select clientele representing many different industries including financial services, manufacturing/distribution, retail, agricultural, food services, electronics, real estate, maintenance, and health care to name a few.</p>
                </div>
            </article>
            <article class="articles">
                <h2 class="articles_heading">Articles</h2>
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
                    echo '<div class="card_body">';
                    echo the_post_thumbnail('blog-small');
                    echo '<div class="card_bottom">';
                    echo '<h3 class="thumbnail_titles">'. get_the_title() . '</h3>';
                    the_excerpt();
                    echo'<a href="' . get_permalink() . '" class="archive_btn" > Read More >> </a>';
                    echo '</div>';
                    echo '</div>';
                    
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
        ?>
        </div>

            </article>
            

        </section>

<?php get_footer();?>