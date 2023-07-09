<?php
$images='C:\xampp\htdocs\travel\images\Saigon - 15952.mp4';
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from `reg_info` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            //echo " login successful";
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:#home');
        }else{
            //echo "invalid data";
            $invalid=1;
        }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP project</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <style>
        <?php include "style.css" ?>
        <?php include "https://unpkg.com/swiper/swiper-bundle.min.css" ?>
        <?php include "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" ?>
        <?php include  "C:\xampp\htdocs\travel\images"?>
        </style>
</head>
<body> 
<?php
if($login)
{
    echo '<div class="alert alert-success alert-dimissible fade show" role="alert">
    <strong>success </strong>you are logged in successfully <button type="button" class="close">
    <spanaria-hidden="true">&times;</span>
    </button>
    </div> ';
}

?>
<?php
if($invalid)
{
    echo '<div class="alert alert-danger alert-dimissible fade show" role="alert">
            <strong>ohh snap!</strong> user doesnot exists<button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
}

?>

 <!-- header section starts  -->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>ravel<span> P</span>lanner</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>
<!-- header section ends -->
<!-- login form container  -->
<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="index.php "method="post">
        <h3>login</h3>
        <input type="text" name="username" class="box" placeholder="enter your username">
        <input type="password" name="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="registration.php">register now</a></p>
    </form>
</div>
<!-- -->
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>Life Is Short And The World Is Wide</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>
    <div class="controls">
        <span class="vid-btn active"data-src="images\Saigon - 15952.mp4"></span>
        <span class="vid-btn " data-src="images/Archaeology - 37997.mp4"></span>
        <span class="vid-btn " data-src="images/Palm Trees - 41897.mp4"></span>
        <span class="vid-btn " data-src="images/Mountains - 56592.mp4"></span>
        <span class="vid-btn " data-src="images/vid-5.mp4"></span>
    </div>
    <div class="video-container">
        <video src="images\Saigon - 15952.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>
<!-- home section ends -->
<!-- book section starts  -->
<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>
    <div class="row">

        <div class="image">
            <img src="images\book-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now" href="#services">
        </form>
    </div>
</section>
<!-- book section ends -->
<!-- packages section starts  -->
<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Mumbai </h3>
                <p>Mumbai the city where people live their dreams.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 30,000.00 <span>50,000</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kashmir </h3>
                <p>The beauty of Kashmir can’t be compared by the whole world!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 50,000 <span>90,000</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/jaipur2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Jaipur </h3>
                <p>Sometimes you just need a Rajasthani-style vacation.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 70,000 <span>90,000</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/kerlaa.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kerala </h3>
                <p>They don’t call it God’s own country for nothing.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 60,000 <span>90,000</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/taj_mahal.jfif" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Agra </h3>
                <p>How marble-ous is the Taj Mahal ?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 40,000 <span>50,000</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/meghalaya.jfif" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Meghalaya </h3>
                <p>Halfway to heaven!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 90,000 <span>1,00,000</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
    </div>
</section>
<!-- packages section ends -->
<!-- services section starts  -->
<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Affordable Hotels</h3>
            <a href="hotels.php">We help you find the best hotels for your stay according to your preferences.</a>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Food and Drinks</h3>
            <a href="food_restaurants.php">We help you find the best restaurants of all cusines and best ratings in town.</a>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Attractions</h3>
            <a href="attractions.php">We list down all the tourist spots in and around your stay along with the prices and directions.</a>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Tickets Booking</h3>
            <a href="ticketbooking.php">We help you book your travel Tickets.</a>
        </div>
        <div class="box">
            <i class="fas fa-car"></i>
            <h3>Car Pooling</h3>
            <a href="car_pool.html">Traveling solo ? want company for your ride and also share expenses !?
                we've got you covered . Here you can easily car pool with like minded people travelling to the same station.
            </a>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Local Travel</h3>
            <a href="localtravel.php">We provide you with contacts for your local travel.</a>
        </div>
    </div>
</section>
<!-- services section ends -->
<!-- gallery section starts  -->
<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/jaipur.webp" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/bhopal.jfif" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/amritsar.jfif" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/MUNNAR.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/delhi.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/thanjavur.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/udaipur.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/kerla.webp" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Wanna Vist These Amazing Places !? Click Here To Explore More</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
    </div>
</section>
<!-- gallery section ends -->
<!-- review section starts  -->
<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>Anu Mathew</h3>
                    <p>Thanks for such a great deal . We will be booking and planning through you guys again ! quick responses to questions too.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>Aditya keel</h3>
                    <p>Always great service and pricing.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>lisa deo</h3>
                    <p>For an online travel planner it was a simple process to get the holiday sorted. Good support and service, will use again</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>john sturgis</h3>
                    <p>I had the most amazing holiday. This was my first time to Mumbai. I loved every moment & cannot wait to go back again. Booking and planning my travel with Travel Planner was professional, easy & went without a hitch. Thank you.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>About Us</h3>
            <p>We here in Travel Planner ,help you in planning out your entire trip , book your travel tickets and in the end provide you with an estimated cost of your entire trip.we also provide you with other services like car pooling , where we help you find like minded people travelling to the same destination ,so that the travel cost can be shared.
            </p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Delhi</a>
            <a href="#">Mumbai</a>
            <a href="#">Chennai</a>
            <a href="#">Kolkata</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created with <span>Love</span> | all rights reserved! </h1>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>