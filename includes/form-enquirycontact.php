<form class="contact_form">
                    <input type="text" name="name" class="name" placeholder="Name" required/>
                    <input
                        type="text"
                        name="comp_name"
                        class="comp_name"
                        placeholder="Company Name"/>
                    <input
                        type="text"
                        name="contact_email"
                        class="contact_email"
                        placeholder="Email"/>
                    <textarea name="message" class="message" placeholder="Write us a Message"></textarea>
                    <button class="form_submit">Send Message</button>
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