<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection Failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Corrected SQL query without single quotes around the table name
    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date)
    VALUES ('$name', '$email', '$number', '$date')") or die('Insert Query Failed: ' . mysqli_error($conn));

    if($insert){
        $message[] = "Your appointment has been booked successfully";
    } else {
        $message[] = "Failed to book your appointment";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dentist</title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Dental <span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>
                <a href="#contact" class="link-btn">make appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores animi a
                        ccusamus officiis voluptate</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/image_1.jpg" class="w-100 mb-4 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>About us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident ad cum iste ullam, laboriosam nam,
                        deserunt magni quos nostrum ducimus architecto! Temporibus labore dolor aliquid ab inventore. Id, vero culpa!</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">

        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon_1.png" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eos.</p>
            </div>
            <div class="box">
                <img src="images/icon_2.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eos.</p>
            </div>
            <div class="box">
                <img src="images/icon_3.png" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eos.</p>
            </div>
            <div class="box">
                <img src="images/icon_4.png" alt="">
                <h3>Root Canal specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eos.</p>
            </div>
            <div class="box">
                <img src="images/icon_5.png" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eos.</p>
            </div>
            <div class="box">
                <img src="images/icon_6.png" alt="">
                <h3>Cavity inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eos.</p>
            </div>
        </div>
    </section>

    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process_image_1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, et?</p>
            </div>

            <div class="box">
                <img src="images/process_image_2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, et?</p>
            </div>

            <div class="box">
                <img src="images/process_image_3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, et?</p>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/image_1.jpg" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia modi iure cupiditate obcaecati, saepe dignissimos numquam temporibus enim praesentium excepturi!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images/image_1.jpg" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia modi iure cupiditate obcaecati, saepe dignissimos numquam temporibus enim praesentium excepturi!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images/image_1.jpg" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia modi iure cupiditate obcaecati, saepe dignissimos numquam temporibus enim praesentium excepturi!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <span>your name : </span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email : </span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number : </span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date : </span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" name="submit" value="make appointment" class="link-btn">
        </form>
    </section>

    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+94 58691236</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>colombo</p>
                <p>srilanka</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:07am to 10.00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>rameshpeshala000@gmail.com</p>
            </div>
           
        </div>
        <div class="credit">created by <span>Ramesh Peshala</span> </div>
    </section>


    <script src="js/script.js"></script>
</body>

</html>