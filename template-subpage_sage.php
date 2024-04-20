<?php
/*
Template Name: subpage_sage
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
                <button class="subpage_learn_more_btn schedule_demo">Schedule Demo</button>
                <a href="<?php echo site_url('/contact'); ?>" class="subpage_contact_us_link">
                    <button class="subpage_contact_us_btn">Contact Us</button>
                </a>
            </div>
        </div>
        <img
            class="subpage_header_img"
            src="<?php echo get_template_directory_uri(); ?>/images/BannerImages/SOSWebsiteBannerImage-ERP.png">
    </div>

    <h3 class="subpage_banner_header">ERP Solutions SOS Consulting Services Supports</h3>

    <a
        href="<?php echo site_url('/enterprise-resource-planning-erp/acumatica/'); ?>"
        class="subpage_banner subpage_banner_intacct">
        <div class="featured_software_intacct">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/accumaticaLogo.png"/>
        </div>

        <ul class="featured_software_desc">
            <li>
                <span class="featured_software_headers">Comprehensive Business Integration:</span>
                Achieve seamless integration across various business functions, from finance and
                human resources to supply chain and manufacturing. Acumatica ERP provides a
                unified platform that breaks down silos, ensuring real-time data visibility and
                collaboration for improved decision-making.</li>
            <li>
                <span class="featured_software_headers">Scalable Cloud-Based Solution:</span>
                Leverage the power of Acumatica's cloud-based ERP system to effortlessly scale
                your business operations. Whether you're a growing startup or an established
                enterprise, enjoy the flexibility and cost-effectiveness of a solution that
                adapts to your evolving needs while providing secure and reliable access from
                anywhere in the world.</li>
            <li>
                <span class="featured_software_headers">Customizable and Adaptable:</span>
                Tailor Acumatica ERP to fit your unique business processes with ease. The
                platform's flexible architecture allows for extensive customization without the
                need for complex coding. Adapt workflows, reports, and dashboards to match your
                specific requirements, ensuring that the ERP system aligns perfectly with your
                organization's goals.</li>
            <li>
                <span class="featured_software_headers">Real-Time Business Insights:</span>
                Gain a competitive edge with Acumatica's powerful analytics and reporting
                capabilities. Access real-time data insights through intuitive dashboards,
                enabling you to make informed decisions swiftly. From financial performance to
                operational efficiency, Acumatica empowers you with the tools to monitor and
                optimize every aspect of your business for sustained growth.</li>
        </ul>
    </a>

    <a
        href="https://intacct.sosconsultingservices.net/"
        class="subpage_banner subpage_banner_intacct">
        <div class="featured_software_intacct">
            <p>Sage
                <span>Intacct</span>
            </p>
        </div>

        <ul class="featured_software_desc">
            <li>
                <span class="featured_software_headers">Cloud-Based vs. On-Premises:</span>
                A true cloud-based solution that offers access from anywhere, anytime, on any
                device.</li>
            <li>
                <span class="featured_software_headers">Multi-Entity and Multi-Location Management:</span>
                Sage Intacct is architected for the modern organization that operates across
                multiple entities and locations. It allows for easy consolidation, currency
                conversion, intercompany transactions, and global compliance.</li>
            <li>
                <span class="featured_software_headers">Flexible Reporting:</span>
                Sage Intacct has built-in dashboards and reports that provide instant visibility
                and enable timely, data-driven decisions with data updated in real-time and
                configurable for each user.</li>
            <li>
                <span class="featured_software_headers">Collaborative and Connected:</span>
                Sage Intacct is a collaborative solution that enables teamwork and communication
                across your organization. You can share information, documents, comments, and
                approvals with your colleagues, managers, auditors, and external stakeholders.</li>
        </ul>
    </a>

    <a
        href="<?php echo site_url('/enterprise-resource-planning-erp/sage-300/'); ?>"
        class="subpage_banner">
        <div class="featured_software">
            <p>Sage 300 ERP</p>
        </div>

        <ul class="featured_software_desc">
            <li>
                <span class="featured_software_headers">Comprehensive and Integrated:</span>
                Offers a comprehensive and integrated suite of modules, such as inventory
                management, order entry, purchase orders, project and job costing, payroll, and
                CRM. It also integrates with other Sage products, such as Sage HRMS, Sage Fixed
                Assets, and Sage Payment Solutions.</li>
            <li>
                <span class="featured_software_headers">Flexibility and Supply Chain Excellence:</span>
                Sage 300 offers great flexibility, excellent supply chain management, quick and
                hassle-free accounts payable management, painless budget management, and project
                management.</li>
            <li>
                <span class="featured_software_headers">Flexible deployment:</span>
                Sage 300 is an on-premises solution that gives you more control over your data
                and infrastructure. You can choose where to host your application, whether on
                your own servers or on a third-party hosting provider. You can also customize
                your system to fit your specific needs and preferences.</li>
            <li>
                <span class="featured_software_headers">Integration with Other Applications:</span>
                Sage 300 can also integrate with other applications such as Sage CRM, Sage Data
                & Analytics, and various add-ons and extensions to expand your capabilities.</li>
        </ul>
    </a>

    <div class="mobile_subpage_banner">
        <a
            class="sage_mobile_link acumatica"
            href="<?php echo site_url('/enterprise-resource-planning-erp/acumatica/'); ?>">Acumatica</a>
        <a
            class="sage_mobile_link intacct"
            href="https://intacct.sosconsultingservices.net/sage-intacct/overview/">Sage<span class="intacct_mobile_link">&nbsp;Intacct</span>
        </a>
        <a
            class="sage_mobile_link sage300"
            href="<?php echo site_url('/enterprise-resource-planning-erp/sage-300/'); ?>">Sage 300</a>

    </div>

    <!-- SCHEDULE DEMO FORM -->

    <div class="demo_modal">
        <div class="demo_form" data-type="form">
            <script
                charset="utf-8"
                type="text/javascript"
                src="//js.hsforms.net/forms/embed/v2.js"></script>
            <script>
                hbspt
                    .forms
                    .create({region: "na1", portalId: "45057611", formId: "2ef2a378-31fe-4f39-a08a-b6a30c2743aa"});
            </script>
        </div>
    </div>

    <div class="subject_article">
        <img
            class="subpage_intacct_partner"
            src="<?php echo get_template_directory_uri(); ?>/images/intacctpartner.png">
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
                    echo '<button class="read_more">Read More</button>';
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

<script>
    let schedDemo = document.querySelector(".schedule_demo");
    const modal = document.querySelector(".demo_modal")

    schedDemo.addEventListener('click', () => {
        modal.style = "display: block;"
    })

    modal.addEventListener('click', (e) => {
        if (e.target.getAttribute("data-type") !== document.querySelector(".schedule_demo").getAttribute("data-type")) {
            return
        } else 
            modal.style = "display: hidden"
    })
</script>

<?php get_footer();?>