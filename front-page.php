<?php get_header();?>

<header class="main_header">
    <div class="overlay">
        <h1 class="header_title">Enterprise Management Software & Technology Provider</h1>
        <p>Providing end-to-end solutions for business looking for greater efficiency,
            flexability, and insight.</p>
        <div class="more_info_btns">
            <a href="<?php echo site_url('/about'); ?>">
                <button class="header_learn_more_btn">Learn More</button>
            </a>
            <a href="<?php echo site_url('/contact'); ?>">
                <button class="header_contact_us_btn">Contact Us</button>
            </a>
        </div>
        <!-- <img src="./images/3.png" class="header_logo"/> -->
    </div>
</header>

<div class="container"></div>

<section class="index_main_body">

    <article class="software">
        <h2 class="software_heading">Sage 300 ERP Accounting Software</h2>
        <div class="software_links">
            <a
                href="<?php echo site_url('/supported-solutions/184-2'); ?>"
                title="Sage 300"
                class="sf_link_cont">
                <p class="sage_link">Sage 300</p>
                <p class="software_links_p2">Sage 300 ERP contains the power and tools to help
                    you see your business in a new way so you can improve productivity. , envision
                    success, and accelerate growth.</p>
            </a>
            <a
                href="<?php echo site_url('/supported-solutions/sage-fixed-assets'); ?>"
                title="Sage Fixed Assets"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/fixedassets.PNG">
                <p class="software_links_p">Sage Fixed Assets</p>
                <p class="software_links_p2">Thanks to an intuitive user interface, Sage Fixed
                    Assets—Depreciation gives you the flexibility to manage the entire fixed asset
                    lifecycle—from acquisition to transfers and disposals—for both public and
                    private organizations.</p>
            </a>
            <a
                href="<?php echo site_url('/supported-solutions/workflow-analysis-and-process-automation'); ?>"
                title="Workflow Analysis and Process Automation"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/workflow-analysis.PNG">
                <p class="software_links_p">Workflow Analysis and Process Automation</p>
                <p class="software_links_p2">Our team can work with you to walk your entire
                    business from A-Z and assist with documenting the required workflow necessary in
                    order to leverage Sage 300.</p>
            </a>
            <a
                href="<?php echo site_url('/supported-solutions/warehouse-management'); ?>"
                title="Warehouse Management"
                class="sf_link_cont"><img
                src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/warehousemanagement.PNG">
                <p class="software_links_p">Warehouse management</p>
                <p class="software_links_p2">Out of the box, Sage 300 provides extremely
                    powerful modules to support your warehouse needs.</p>
            </a>
            <a
                href="<?php echo site_url('/supported-solutions/custom-screens-and-applications'); ?>"
                title="Custom Screens and Applications"
                class="sf_link_cont"><img
                src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/processautomation.PNG">
                <p>Custom Screens and Applications</p>
                <p class="software_links_p2">Thanks to Sage 300’s powerful UI and architecture,
                    our custom development team can customize any Sage master file and transaction
                    screen.</p>
            </a>
            <a
                href="<?php echo site_url('/supported-solutions/accounting-and-financials'); ?>"
                title="Accounting and Financials"
                class="sf_link_cont"><img
                src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/accountingfinancials.PNG">
                <p>Accoutning and financials</p>
                <p class="software_links_p2">Sage 300 has extremely powerful and comprehensive
                    financial modules for true end-to-end financial management.</p>
            </a>

        </div>
        <div class="software_links2_closed">
            <a
                href="<?php echo site_url('/supported-solutions/reporting-dashboards-intelligence'); ?>"
                title="Reporting Dashboards and Intelligence"
                class="sf_link_cont"><img
                src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/reportingdashbaords.PNG">
                <p>Reporting Dashboards & Intelligence</p>
                <p class="software_links_p2">Whether you require custom reports, detailed
                    analysis in real time, or dashboards that give you a bird’s eye view of your
                    business, we can assist you.</p>
            </a>
            <a href="<?php echo site_url('/supported-solutions/distribution-manufacturing-and-barcode'); ?>" title="Distribution Manufacturing and Barcode" class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/distributionmanufacturing.PNG">
                <p>Distribution, Manufacturing and Barcode</p>
                <p class="software_links_p2">Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Nesciunt, consectetur. Earum tempore praesentium quod atque incidunt
                    deleniti</p>
            </a>
        </div>
        <button title="Discover More" alt="Discover More" class="discover_btn">Discover More</button>
        <script>
            let discoverMoreBtn = document.querySelector(".discover_btn")

            discoverMoreBtn.addEventListener('click', () => {
                document
                    .querySelector(".software_links2_closed")
                    .classList
                    .toggle("software_links2")

            })
        </script>
    </article>

    <article class="sos_info">
        <div class="sos_info_content">
            <h2 class="sos_info_heading">Why SOS Consulting Services?</h2>
            <p>SOS Consulting Services is a boutique consulting practice made up of a team
                of accountants, software engineers/programmers, I.T. professionals, and project
                management specialists with over 25 years’ experience in their respective
                fields. We provide our services to a select clientele representing many
                different industries including financial services, manufacturing/distribution,
                retail, agricultural, food services, electronics, real estate, maintenance, and
                health care to name a few.</p>
            <a href="<?php echo site_url('/about');?>" class="sos_info_link">See More</a>
        </div>
    </article>
    <article class="articles">
        <!-- <h2 class="articles_heading"></h2> -->
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