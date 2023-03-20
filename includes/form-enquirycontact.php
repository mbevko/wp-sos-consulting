<form class="contact_form">
                    <input type="text" id="name" name="name" class="name contact_form_name" placeholder="Name" required/>
                    <!-- <input
                        type="text"
                        name="comp_name"
                        class="comp_name"
                        placeholder="Company Name"/> -->
                    <input
                        type="text"
                        name="contact_email"
                        class="contact_email contact_form_email"
                        placeholder="Email"/>
                    <input name="message" class="message contact_form_message" placeholder="Write us a Message" type="textarea" />
                    <button type="submit" class="form_submit contact_form_sbmt">Send Message</button>
                </form>
    
    <script>
        (function($){

        })
        let formNameContact = document.querySelector(".contact_form_name");
        let formEmailContact = document.querySelector(".contact_form_email");
        let formMessageContact = document.querySelector(".contact_form_message");
        let submitFormContact = document.querySelector(".form_submit");

        let contactForm = document.querySelector(".contact_form");

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            let endpoint = '<?php echo admin_url('admin-ajax.php');?>'

           /*  let form = {
                name:formName.value, 
                email:formEmail.value, 
                message: formMessage.value
            } */

            let form = jQuery(contactForm).serialize()

            const formData = new FormData;

            formData.append('action', 'enquiry');
            formData.append('enquiry', form);

            jQuery.ajax(endpoint, {
                type:'POST',
                data: formData,
                processData: false,
                contentType: false,

                success:  (res) => {
                    //alert(res.data)
                    formNameContact.value = "";
                    formEmailContact.value = "";
                    formMessageContact.value = "";
                    submitFormContact.innerHTML = "Message Sent";
                    submitFormContact.classList.toggle("form_submitted")

                },

                error: (err) => {

                }

            })

        })
    </script>