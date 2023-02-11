<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>


    <section class="contact_body">
            <div class="contact_white_space">
                
                <div class="back_banner">
                    <div class="contact_container_left">
                        <div class="contact_info_left">
                            <p>Call Us</p>
                            <p>Email</p>
                            <p>Linkedin</p>
                        </div>
                        <div class="contact_info_right">
                            <img class="contact_page_icons" src="<?php echo get_template_directory_uri(); ?>/images/phone.png" /><p>555.987.6543</p>
                            <img class="contact_page_icons" src="<?php echo get_template_directory_uri(); ?>/images/mail.png" /><p>info@sosconsultingservices.net</p>
                            <img class="contact_page_icons" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" /><p>linkedin.com/sosconsultingservices</p>   
                        </div>  
                    </div>
                    <div class="contact_container_right">
                        <h2 class="contact_title"><?php the_title();?></h2>
                        <form class="contact_form">
                            <input type="text" name="name" class="name" placeholder="Name"/>
                            <input type="text" name="comp_name" class="comp_name"  placeholder="Company Name"/>
                            <input type="text" name="contact_email" class="contact_email"  placeholder="Email"/>
                            <input type="text" name="contact_phone" class="contact_phone"  placeholder="Phone"/>
                            <textarea name="message" class="message" placeholder="Write us a Message"></textarea>
                            <button class="form_submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
    </section> 

<?php get_footer();?>

