<?php
/*
Template Name: subpage_3rdparty
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
            src="<?php echo get_template_directory_uri(); ?>/images/BannerImages/3rdPartyPage.png">
    </div>

    <div class="subject_article">
        <div class="subject_container">
            <div class="subject_container_left"><?php get_template_part('includes/section', 'content');?>
                <a href="<?php echo site_url('/contact'); ?>">
                    <!-- <button class="contact_us_btn">Contact Us</button> -->
                </a>
            </div>
            <div class="subject_container_right"><?php if(has_post_thumbnail()):?> 
                <img
                    src="<?php the_post_thumbnail_url('medium_large');?>"
                    alt="<?php the_title();?>+"
                    class="page_featured_img">
                <?php endif;?></div>
        </div>

    </div>

    <div class="third_party_banner">
            <img
                class="third_party_banner_icon integrate"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/Integrate.png">
                <p class="third_party_banner_p">Integrate</p>
            <img
                class="third_party_banner_icon customize"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/CustomizeIII.png">
                <p class="third_party_banner_p">Customize</p>
            <img
                class="third_party_banner_icon automate"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/Automate.png">
                <p class="third_party_banner_p">Automate</p>
            <img
                class="third_party_banner_icon streamline"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/Streamline.png">   
                <p class="third_party_banner_p">Streamline</p>      

        <p class="third_party_banner_title">Supercharge your ERP</p>
    </div>

    <div class="thirdparty_solutions_desc">
        <h4>Sales Tax Processing and Compliance</h4>
        <ul>
            <li>Avalara: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A cloud-based solution that
                automates sales tax calculation, exemption certificate management, and tax
                return filing. It helps businesses reduce the risk of audit penalties and
                improve compliance with tax regulations.</li>
        </ul>

        <h4>Alerts and Workflow</h4>
        <ul>
            <li>Sage Alerts and Workflow: <span class="compatibility">&#60;Intergrates with: Sage 300 / Sage HRMS></span> A
                tool that automates business processes by sending alerts to users when specfic
                events occur in Sage 300. It helps businesses improve efficiency by reducing
                manual intervention and streamlining workflows.</li>
        </ul>

        <h4>Purchasing Workflow</h4>
        <ul>
            <li>Pacifictech’s Purchasing Workflow: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A
                solution that automates the purchasing process by providing a centralized
                platform for managing purchase orders, approvals, and vendor communications. It
                helps businesses improve efficiency by reducing manual intervention and
                streamlining workflows.</li>
        </ul>

        <h4>Audit Logging</h4>
        <ul>
            <li>Pacifictech’s Audit Logger: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A tool that
                tracks changes made to Sage 300 data by users. It helps businesses improve
                efficiency by providing visibility into user activity and ensuring data
                integrity.</li>
        </ul>

        <h4>Manufacturing Suite</h4>
        <ul>
            <li>AutoSimply’s Manufacturing Suite: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A
                solution that provides end-to-end manufacturing functionality for Sage 300. It
                helps businesses improve efficiency by automating production planning,
                scheduling, inventory management, and quality control.</li>
        </ul>

        <h4>Barcode Suite</h4>
        <ul></li>AutoSimply’s Barcode Suite: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A
        solution that provides barcode scanning functionality for Sage 300. It helps
        businesses improve efficiency by reducing manual data entry errors and
        streamlining operations.</li>
</ul>

<h4>Sales Anywhere</h4>
<ul>
    <li>AutoSimply’s Sales Anywhere: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A solution
        that provides mobile sales functionality for Sage 300. It helps businesses
        improve efficiency by enabling sales teams to access customer information,
        inventory data, and order history on-the-go.</li>
</ul>

<h4>Sales Pricing</h4>
<ul>
    <li>AutoSimply’s Sales Pricing: <span class="compatibility">&#60;Intergrates with: Sage 300&#62;</span> A solution
        that provides advanced pricing functionality for Sage 300. It helps businesses
        improve efficiency by automating pricing calculations based on customer-specific
        rules and discounts.</li>
</ul>

<h4>Inventory Management</h4>
<ul>
    <li>Orchid Systems’ Bin Tracking: A solution that provides inventory tracking
        functionality for Sage 300. It helps businesses improve efficiency by enabling
        real-time tracking of inventory movements across multiple locations.</li>
    <li>TaiRox’s DB Management Suite: A suite of tools that includes DBSpy, DBLoad,
        and DBAdmin. These tools help businesses improve efficiency by providing
        database management functionality for Sage 300.</li>
    <li>DBSpy: A tool that provides real-time monitoring of Sage 300 databases. It
        helps businesses improve efficiency by providing visibility into database
        activity and performance.</li>
    <li>DBLoad: A tool that automates the process of loading data into Sage 300
        databases. It helps businesses improve efficiency by reducing manual data entry
        errors and streamlining operations.</li>
    <li>DBAdmin: A tool that provides database administration functionality for Sage
        300. It helps businesses improve efficiency by enabling them to manage their
        databases more effectively.</li>
</ul>

<h4>Document Management & Process Automation</h4>
<ul>
    <li>Altec’s DocLink: An affordable, scalable enterprise document management and
        process automation solution endorsed by Sage and Acumatica. DocLink enables
        companies to digitize their documents and data in any department (AP, AR, HR,
        legal/contracts, IT) as well as automate workflows and streamline vital business
        document processes.</li>
    <li>Orchid Systems’ Document Management: A solution that provides document
        storage and retrieval functionality for Sage 300. It helps businesses improve
        efficiency by enabling easy access to critical documents such as invoices,
        purchase orders, and contracts. TaiRox’s Automate GL Consolidation: An add-on
        for Sage 300 that drives any number of G/L Consolidation operations that you set
        up using the standard Sage 300 G/L Consolidations module. It eliminates the
        manual steps involved in consolidating Sage 300 General Ledgers, letting you
        consolidate multiple companies – all in a single operation 12.</li>
    TaiRox’s Recurring Entries: An add-on for Sage 300 that allows you to create
    recurring entries such as journal entries, accounts payable
    <li>invoices, accounts receivable invoices, and purchase orders. It helps
        businesses improve efficiency by automating the creation of recurring
        transactions and reducing manual data entry errors.</li>
</ul>

<h4>EDI Integration</h4>
<ul>
    <li>True Commerce: A cloud-based EDI solution that integrates with Sage 300 to
        automate the exchange of business documents such as purchase orders, invoices,
        and shipping notices with trading partners. It helps businesses improve
        efficiency by reducing manual data entry errors and streamlining supply chain
        operations.</li>
            </ul>

        <h4>Service Management</h4> 
        <ul>
            <li>Technisoft’s Service Manager: A solution that provides end-to-end service
                management functionality for Sage 300. It helps businesses improve efficiency by
                automating service scheduling, dispatching, billing, and reporting.</li>
        </ul>
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