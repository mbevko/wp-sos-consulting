<?php get_header();?>

<header class="main_header">
    <div class="main_overlay">
<div class="index_nav_home nav">
            <a href="<?php echo site_url(); ?>" class="logo_link">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"
                    class="logo"/>
            </a>
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' =>
            'nav_links' ) ); ?>
        </div>
    <div class="overlay">
        
        <h1 class="header_title">ERP Solutions Built For Your Industry</h1>
        <p>For manufacturers, distributors, and professional services - tailored ERP solutions that tackle your toughest challenges.</p>
       
        <!-- <img src="./images/3.png" class="header_logo"/> -->
        <a class="hp_learn_more_link">
                    <button class="hp_learn_more_btn schedule_demo">Learn More</button>
                </a>
         <div class="software_links">
            <a
                href="<?php echo site_url('/enterprise-resource-planning-erp'); ?>"
                title="ERP Solutions"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/Manufacturing.png"
                    alt="ERP Solutions">
                <p class="software_links_p">Manufacturing</p>
            </a>

            <a
                href="<?php echo site_url('/human-resource-management'); ?>"
                title="Human Resource Management"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/Distribution.png"
                    alt="Distribution">
                <p class="software_links_p">Distribution</p>
            </a>
           
            <a
                href="<?php echo site_url('/custom-programming'); ?>"
                title="Custom Programming"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/ProfessionalServices.png"
                    alt="Professional Services">
                <p class="software_links_p">Professional Services</p>
            </a>
           
            <a
                href="<?php echo site_url('/3rd-party-solutions'); ?>"
                title="Custom Programming"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/CustomPrograms.png"
                    alt="Custom Programming"/>
                <p class="software_links_p">Custom Programming</p>
            </a>

        </div>
    </div>
    </div>
</header>

<section class="index_main_body">
    <article class="software">
        <div class="software_left">
            <h2 class="software_heading">25+ Years of ERP Expertise. Built on Client Trust.</h2>
            <p>SOS Consulting Services is one of the top-rated ERP partners for customer satisfaction and long-term success. We specialize in delivering world-class ERP applications for Manufacturing, Distribution and Professional Services firms, tailored to help them optimize workflows, reduce costs, and accelerate growth.</p>
            <button>Learn More</button>
        </div>
        <div class="software_right">
            <div class="stat_cont top_row">
                <p>99.5%</p>
                <small>Succesful Implementation Rate</small>
            </div>
            <div class="stat_cont top_row">
                <p>10.5</p>
                <small>Avg. client relationship length</small>
            </div>
            <div class="stat_cont bottom_row">
                <p>25+</p>
                <small>Years of experience</small>
            </div>
            <div class="stat_cont bottom_row">
                <p><1%</p>
                <small>Billing disputes</small>
            </div>
        </div>
       
    </article>
    <section class="problems-section">
  <div class="container">
    <h2>We Don’t Just Sell ERP. We Solve Industry Problems</h2>

    <div class="problem-row open">
      <div class="problem-title">Processes slow you down</div>
      <div class="problem-text">
        We manage implementations and migrations to keep your operations moving smoothly,
        minimizing downtime and ensuring teams stay productive.
      </div>
    </div>

    <div class="problem-row">
      <div class="problem-title">You don’t have the data you need</div>
      <div class="problem-text">
        <strong>Reports &amp; Dashboards:</strong> We create intuitive dashboards and reports that show real-time insights,
        from inventory levels to project profitability, so you can make faster, smarter decisions.
      </div>
    </div>

    <div class="problem-row">
      <div class="problem-title">System changes risk disruption</div>
      <div class="problem-text">
        <strong>Business Process &amp; Design:</strong> We uncover bottlenecks in your workflows, whether it’s production delays,
        shipping errors, or lost billable hours, and redesign them to drive efficiency and growth.
      </div>
    </div>

    <div class="problem-row">
      <div class="problem-title">Teams struggle to adopt new tools</div>
      <div class="problem-text">
        We provide tailored training and ongoing support so your staff feel confident using your ERP system,
        helping you realize value faster.
      </div>
    </div>

    <div class="problem-row">
      <div class="problem-title">Financials don't add up</div>
      <div class="problem-text">
        We reconcile your sub-ledgers with precision, ensuring your financial data is accurate, consistent, and audit-ready.
      </div>
    </div>

    <div class="problem-row">
      <div class="problem-title">Out-of-the-box ERP isn’t enough</div>
      <div class="problem-text">
        We develop custom applications and integrations that fill the gaps, streamlining unique manufacturing, distribution, or service processes.
      </div>
    </div>
  </div>
</section>

    <h2 class="supported_software_heading">
        Our Supported Software
    </h2>

    <div
        class="supp_software carousel"
        data-flickity='{ "groupCells": true, "wrapAround": true}'>
        <div class="carousel-cell">
            <img
                src="https://sosconsultingservices.net/wp-content/uploads/2025/05/acumatica-partner.png"
                class="acumatica_front_logo supp_software_logo"/>
			
			
        </div>
		<div class="carousel-cell">
            <img
                src="https://sosconsultingservices.net/wp-content/uploads/2025/09/sage-intacct-partner.png"
                class="acumatica_front_logo supp_software_logo"/>

        </div>
		 <div class="carousel-cell">
            <img
                src="https://sosconsultingservices.net/wp-content/themes/wpSOS/images/intacctpartner.png"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/intacctlogo.png'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
       
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/TrueCommerce-logo.svg'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/ecilogo.png'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
    </div>

    <div class="hp_center_banner">

        <a
            href="<?php echo get_template_directory_uri(); ?>'/2024/04/22/nagigating-erp-implementation-pitfalls/'"
            class="hp_banner_left">
            <h2>ERP Implementation Success Guide</h2>
            <p>Ensure a seamless and successful ERP migration with SOS Consulting Services' proven method, backed by decades of experience and a track record of success.</p>
            <button class="hp_read_more">Read More</button>
        </a>
        <a
            href="<?php echo get_template_directory_uri(); ?>'/2024/05/09/comprehensive-guide-to-selecting-the-right-erp-for-your-business/'"
            class="hp_banner_right">
            <h2>How to Choose the Right ERP</h2>
            <p>Achieve a successful ERP implementation by following our comprehensive guide to selecting the right ERP solution for your business.</p>
            <button class="hp_read_more">Read More</button>
        </a>
    </div>

    <div class="map_section">
    <h2 class="supported_software_heading">
        Helping Clients Around the Globe
    </h2>
    <?php the_content();?>
    </div>


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

    </article>
   

</section>

<script>
     let mainNav = document.querySelector("nav");

mainNav.style = "transform: translateY(-150); display: none;"

//if(window.innerHeight < 981px){
//mainNav.style = "display: none;"

window.addEventListener("scroll", () => {

    if(window.scrollY > 100 && window.innerWidth > 981){
        mainNav.style = "display: flex; transform: translateY(0);"
    }else if(window.scrollY < 100 || window.innerWidth < 981){
        mainNav.style = "display: none;"
    }

});


let serviceMenuItem2 = document.querySelectorAll(".index_nav_home .menu-item-has-children");
let subMenu2 = document.querySelectorAll(".index_nav_home ul .sub-menu");



serviceMenuItem2.forEach((dropDown, id) => {

dropDown.addEventListener('mouseover', () => {

    subMenu2[id].style.display = "flex"

    if(subMenu2[id].hasChildNodes()){
        subMenu2[id].childNodes.forEach((child) => {
                if(child.nodeType === 1){
                    if(child.hasChildNodes()){
                        child.childNodes.forEach((smallChild) => {
                            if(smallChild.nodeType === 1){
                            smallChild.style ="display: block;k"
                            //console.log(smallChild)
                            }
                        })
                }
            }
        })
    }
})
})



serviceMenuItem2.forEach((dropDown, id) => {
dropDown.addEventListener('mouseleave', () => {
    subMenu2.forEach(menu => menu.style.display = "none")

})
});

// === Problem rows (leave this as-is) ===
document.querySelectorAll(".problem-row").forEach((row, i) => {
  const text = row.querySelector(".problem-text");
  if (i === 0) row.classList.add("open");

  row.addEventListener("mouseenter", () => row.classList.add("open"));
  row.addEventListener("mouseleave", () => {
    if (i !== 0) row.classList.remove("open");
  });
});


</script>

<?php get_footer();?>