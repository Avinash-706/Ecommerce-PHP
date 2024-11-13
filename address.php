<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="contact-type" content="text/html; charset-utf-8" />

    <meta name="viewport"
        content="width-device-width,initial-scale=1,mininmum-scale=1,maximum-scale=1,user-scalable=no">

    <title>

        Details for Delivery

    </title>

    <link href="address.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>

</head>

<body>
    <header class="custom-header">
        <div class="left-section">
            <span class="brand-name">Shree Bhandar</span>
        </div>

    </header>

    <div class="contact-in">

        <div class="contact-map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192866!2d77.06889754725779!3d28.52758200617606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1642929688022!5m2!1sen!2sin"
                width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="contact-form">

            <h1 align='center'>

                Details For Delivery

            </h1>

            <div id="error_message"></div>

            <form class='address_form' action='payment.php' onsubmit="return validate_form();">

                <input type="text" placeholder="Name" class="contact-form-txt" id='name' required />

                <input type="text" placeholder="Address" class="contact-form-txt" id='address' required />

                <input type="text" placeholder="Email-ID" class="contact-form-txt" id='email' required />

                <input type="text" placeholder="Locality/Apartment" class="contact-form-txt" required />

                <select class="contact-form-txt" id="pincode" required style="padding: 10px;">
                    <option value="" selected style="color: grey;">Select Pincode</option>
                    <option value="110001" style="color: black;">110001</option>
                    <option value="110002" style="color: black;">110002</option>
                </select>



                <input type="text" placeholder="Contact No." class="contact-form-txt" id='phone' required />

                <input type="text" placeholder="Date (Format: dd/mm/yyyy)" class="contact-form-txt" id='date'
                    required />

                <input type="text"
                    placeholder="Time Slot (Format: Starting Time - Ending Time. Give a duration of 2 hours.)"
                    class="contact-form-txt" id='time' required />

                <button type="submit" class="contact-form-btn" id='submit'>

                    <!-- <a href = 'Payment HTML.html' style = "cursor: pointer; text-decoration: none; color: rgb(255, 255, 255);"> -->

                    <b>Submit</b>

                    <!-- </a> -->

                </button>
            </form>

        </div>

    </div>
    <footer class="footer" 
        style="
            -webkit-text-size-adjust: 100%; 
            -webkit-tap-highlight-color: transparent;
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
            --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,'Liberation Mono','Courier New',monospace;
            font-size: 1rem;
            line-height: 1.5;
            font-family: 'Andika', sans-serif;
            text-align: center!important;
            color: #6c757d!important;
            box-sizing: border-box;
            font-weight: bolder;
            position: relative; 
            margin-top: 10px; 
            background-color: #141414; 
            min-height: 150px; 
            padding-top: 40px; 
            width: 100%; 
            bottom: 0;
        ">
    <div class="container text-center" 
         style="text-align: center; font-family: 'Andika', sans-serif; color: #d1d1d1; font-size: 14px; margin: 0; padding: 0; box-sizing: border-box;">
        <span class="text-muted" style="font-size: 16px; color:grey">
            <b>Copyright&copy;Shree Bhandar | All Rights Reserved | Contact Us: +91 70636 28574</b>
        </span>
    </div>
</footer>




    <script>
        function validate_form() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var pincode = document.getElementById("pincode").value;
            var error_message = document.getElementById("error_message");

            error_message.style.padding = "10px";

            var text;
            if (name.length < 3) {
                text = "Please Enter a valid Name";
                error_message.innerHTML = text;
                return false;
            }
            if (isNaN(phone) || phone.length != 10) {
                text = "Please Enter a valid Phone Number";
                error_message.innerHTML = text;
                return false;
            }
            if (isNaN(pincode) || pincode.length != 6) {
                text = "Please enter a valid Pincode";
                error_message.innerHTML = text;
                return false;
            }
            if (email.indexof("@") == -1 || email.length < 6) {
                text = "Please enter a valid E-mail ID.";
                error_message.innerHTML = text;
                return false;
            }
        }
    </script>

</body>

</html>