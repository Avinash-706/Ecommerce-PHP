<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shree Bhandar | Online Shopping Site for Men</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <style>
    .contact-form {
      background-color: #ffffff;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 30px;
      margin-top: 20px;
    }
    .contact-form .btn-primary {
      background-color: rgb(255, 195, 0);
      border: none;
    }
    .contact-form .btn-primary:hover {
      background-color: #333333; /* Dark gray */
    }
    .form-title {
      font-family: 'Delius Swash Caps', cursive;
      color: #ffc107;
      text-align: center;
    }
    .form-group label {
      font-weight: bold;
    }
    #error_message {
      text-align: center;
      font-size: 14px;
    }
  </style>
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Who We Are ?</h3>
          <hr />
          <img
            src="images\logo.png"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed atque, consequuntur cumque odit
            sapiente blanditiis, expedita ipsam molestiae voluptates reprehenderit ea modi eaque rerum dicta dolores,
            iusto ullam aliquid non?
            Quidem quae odio nemo cumque consectetur natus doloremque voluptatem consequatur voluptate laboriosam, amet
            maiores excepturi sunt aliquid magni voluptatibus aperiam laudantium dolores reiciendis? Laborum laboriosam,
            nam ullam totam amet et.
            Earum recusandae voluptate accusantium, placeat alias consequuntur aspernatur sed explicabo impedit et aut
            assumenda hic repellendus esse facere ratione quod vitae laudantium. Obcaecati nobis sequi esse assumenda,
            rerum dolores pariatur.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE SUPPORT</h1>
            <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
          </span>
          <hr>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered
            alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
            hidden in the middle of text.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nam ducimus a illum, at voluptate, iusto
            eos tempora in quam exercitationem officia autem maxime deserunt. Reprehenderit necessitatibus sequi in
            fugit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, facilis. Reiciendis dicta fuga esse
            at excepturi inventore perferendis? Consequatur dicta blanditiis, magnam consequuntur possimus excepturi
            eaque neque nulla libero temporibus!
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-5">
    <div class="contact-form col-md-8 mx-auto">
      <h3 class="form-title">Contact Form</h3>
      <div id="error_message" class="text-danger mb-3"></div>
      
      <form id="myform">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Enter Subject" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Enter Your Message" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script>
    emailjs.init('XtsX58k1Pp56-m8ob');

    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('myform').addEventListener('submit', function (event) {
        event.preventDefault();
        const btn = document.querySelector('.btn');
        const error_message = document.getElementById('error_message');
        btn.innerText = 'Sending...';
        btn.disabled = true;

        const serviceID = 'service_zgq58qi';
        const templateID = 'template_hl632gn';

        const formData = {
          from_name: document.getElementById('name').value,
          subject: document.getElementById('subject').value,
          phone: document.getElementById('phone').value,
          email_id: document.getElementById('email').value,
          message: document.getElementById('message').value
        };

        emailjs.send(serviceID, templateID, formData)
          .then(() => {
            btn.innerText = 'Submit';
            btn.disabled = false;
            error_message.classList.remove('text-danger');
            error_message.classList.add('text-success');
            error_message.innerText = 'Message sent successfully!';
          })
          .catch(error => {
            btn.innerText = 'Submit';
            btn.disabled = false;
            error_message.classList.remove('text-success');
            error_message.classList.add('text-danger');
            error_message.innerText = 'An error occurred. Please try again later.';
            console.error('Error:', error);
          });
      });
    });
  </script>

  </div>
  <?php include 'includes/footer.php'?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
