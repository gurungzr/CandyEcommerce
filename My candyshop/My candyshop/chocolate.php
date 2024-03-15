<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Candy Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<style>
 

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top:200px;
        }

        .product {
            width: 300px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            border-radius: 5px;
        }

        .product h2 {
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .product p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        .product button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product button:hover {
            background-color: #0056b3;
        }
        header p {
            text-align: left;
            font-size: 24px;
            margin-top: 10px;
        }
        

</style>
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
            <a href="chocolate.html">Chocolates</a>
            <a href="contact.html">CONTACT</a>
        </div>
    </nav>
<body>



    <main>
        <p style="text-align:center; font-size:24px; margin-top:20px;"> Our Chocolates </p>
        <section class="products">
            <div class="product">
                <img src="images/forrero.jpg" alt="Candy 1">
                <h2>Forrero rocer</h2>
                <p>Well you know about forrero rocher</p>
                <p>$5.99</p>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="images/raffaelo.jpg" alt="Candy 2">
                <h2>raffaelo</h2>
                <p>One of the best white chocolates with coconut.</p>
                <p>$3.99</p>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="images/bs2.jpg" alt="Candy 3">
                <h2>Assorted chocolate 1</h2>
                <p>Try our inhouse chocolates</p>
                <p>$6.49</p>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="images/bs1.png" alt="Candy 4">
                <h2>assorted chocolate 2</h2>
                <p>Try our inhouse chocolates</p>
                <p>$4.75</p>
                <button>Add to Cart</button>
            </div>
        </section>
    </main>

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

</body>
</html>
