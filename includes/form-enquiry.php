   <p class="footer_form_title">Send Us a Message</p>
    <form class="footer_form form">
        <input type="text" name="name" id="name" placeholder="Name" class="footer_form_input form_name" required/>
        <input type="email" name="email" placeholder="Email" class="footer_form_input form_email" required/>
        <input type="textarea" name="message" placeholder="Message" class="footer_form_input form_message"/>
        <button type="submit" class="footer_form_sbmt">Submit</button>
    </form>
    
    <script>
        (function($){

        })
        let formName = document.querySelector(".form_name");
        let formEmail = document.querySelector(".form_email");
        let formMessage = document.querySelector(".form_message");
        let submitForm = document.querySelector(".footer_form_sbmt");

        let footerForm = document.querySelector(".footer_form");

        footerForm.addEventListener('submit', (e) => {
            e.preventDefault();

            let endpoint = '<?php echo admin_url('admin-ajax.php');?>'

           /*  let form = {
                name:formName.value, 
                email:formEmail.value, 
                message: formMessage.value
            } */

            let form = jQuery(footerForm).serialize()

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
                    formName.value = "";
                    formEmail.value = "";
                    formMessage.value = "";
                    submitForm.innerHTML = "Message Sent";
                    submitForm.classList.toggle("form_submitted")

                },

                error: (err) => {

                }

            })

        })
    </script>