<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Culinary King | Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- ----------------------------------------NAVBAR----------------------------------------------------->
    <nav class="nav nav_top">
        <div class="logo">
            <a href="index.html"><img src="images/logo.jpg" width="250"></a>
        </div>
        <div class="nav_side">
            <a href="about.html">ABOUT US</a>
            <a href="candy.html">Candy</a>
            <a href="chocolate.html">CATERING</a>
            <a href="contact.html">CONTACT</a>
        </div>
    </nav>
    <!-- --------------------------------------------CONTACT-------------------------------------------------------->
    <div class="contact_container" style="padding-top:100px;">
        <h2>Contact Us</h2>
        <div class="g_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14136.82968702413!2d85.3225115885523!3d27.649053581209376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb175b3e2cf6fb%3A0x5cfe8ae50a22fbd0!2sHattiban%2C%20Mahalaxmi%2044700!5e0!3m2!1sen!2snp!4v1707219098499!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="contact_content">
            <p>We want to hear from you! Drop us a note and someone from our team will get back to you.
                Looking to have your gift order delivered via Same Day Service? Call +1111100000
                Have a question that involves our retail stores? Please head on over to our Locations page to reach our retail locations.</p>
            <p><b>Call: +977 9812312356</b></p>
            <p><b>Mail: rohitgk77not@gmail.com</b></p>
        </div>
    </div>
    <!-- --------------------------------------------FEED--------------------------------------------------------->
    <div class="feed">
        <h2>WRITE A REVIEW</h2>
        <div class="feed_form" method="post">
        <form name="submit-googlesheet">
            <input type="text" name="Name" placeholder="Name"><br>
            <input type="email" name="Email" placeholder="Email ID"><br>
            <input type="text" name="Number" placeholder="Contact Number"><br>
            <textarea rows="5" cols="7" name="Review" placeholder="Write your review"></textarea><br>
            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
    <!-- --------------------------------------------FOOTER-------------------------------------------------------->
    <footer>
        <div class="footer_logo">
           
        </div>

        <div class="doc">
            <h3>Documents</h3>
            <a href="#">Privacy Policy</a>|
            <a href="#">Terms of Use</a>|
            <a href="#">Refund Policy</a>
        </div>
        <div class="social">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="https://api.WhatsApp.com/send?phone=+910000000000" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="tel: +910000000000"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="mailto: roshnideyic365@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>Copyright &copy; 2021 Candy Shop. All rights reserved.</p>
    </footer>

<script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzmY7HJmUEupsd8UBLj-aTxEsPcKQEWFYaxFA44IcIYrYCjanY1WcTF4zyKYXFQubtbTA/exec'
            const form = document.forms['submit-googlesheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks you for your valuable feedback!"))
                .catch(error => console.error('Error!', error.message))
            })
          
</script>
</body>
</html>