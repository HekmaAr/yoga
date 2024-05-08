<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/navbarstylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <title>yoga Form</title>
    <style>
        /* CSS styles for the title */
        #title {
            color: #3366ff; /* Change color to your preference */
            font-size: 24px; /* Adjust font size as needed */
            font-family: Arial, sans-serif; /* Specify preferred font family */
            text-align: center; /* Center align the title */
        }
    </style>
</head>
<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="navbar.php">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="userProfile.php">
                    <span class="icon"><i class="fas fa-user-circle"></i></span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li>
                <a href="yoga.php">
                    <span class="icon"><i class="fas fa-stream"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="About.php">
                    <span class="icon"><i class="fas fa-info-circle"></i></span>
                    <span class="title">About us</span>
                </a>
            </li>
        </ul>
    </div> 

    <div class="navbar">
        <div class="col-md-4 ">
            <form action="loggedinHomePage.php" method="POST"></form>
        </div>
        <div class="col-md-4 col-sm-6">
            <h2>Yoga Tutor</h2> 
        </div>
        <div class="col-md-4 col-sm-6">
            <form action="logincss.php" method="POST">
                <div class="form-group mb3 logbtn">
                    <input type="submit" value="Sign in" class="btn" />
                </div>
            </form>
        </div>    
    </div>

    <div class="homebg">
        <div class="align-mid">
            <h1>Welcome to Yoga tutor</h1>
        </div>
    </div>    

    <div class="container">
        <div class="row">
            <div class="talk">
                <h2>Discover the Transformative Power of Yoga</h2>
                <div class="quoteOne">
                    <p>Yoga is not merely a physical practice; it is a journey of self-discovery, a path to inner peace, and a gateway to holistic well-being. As you step onto your mat, you embark on a profound exploration of body, mind, and spirit. Through the union of breath and movement, you unlock the hidden depths of your being, releasing tension, finding balance, and tapping into your innate wisdom.</p>
                    <p>In the practice of yoga, each posture becomes a metaphor for life – a reflection of the challenges we face, the strength we possess, and the grace with which we navigate the ups and downs of our journey. With each asana, we cultivate resilience, flexibility, and presence, learning to embrace discomfort with curiosity and greet each moment with open arms.</p>
                    <p>Yoga transcends boundaries of time and space, inviting you to connect with your true essence and the infinite possibilities that lie within. It is a practice of liberation, offering liberation from the constraints of the mind, the limitations of the body, and the distractions of the world. In the stillness of meditation and the flow of movement, you discover the freedom to be authentically yourself – radiant, limitless, and whole.</p>
                    <p>Join us on this journey of self-discovery and transformation. Together, let us dive deep into the ocean of yoga, exploring the depths of our being and awakening to the beauty of our existence. With each breath, each posture, and each moment of presence, may we discover the boundless potential that resides within and embrace the magic of yoga in every aspect of our lives.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row kuro">
        <div class="col-lg-4 col-md-12 col-sm-12 separator ">CALL US 24/7 <p id="detail">+123-456-7890</p></div>
        <div class="col-lg-4 col-md-12 col-sm-12 separator">EMAIL ADDRESS <p id="detail">example@examle.com</p></div>
        <div class="col-lg-4 col-md-12 col-sm-12 separator">OPEN HOURS <p id="detail">Daily 9.00-20.00</p></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="secImg">
                <div class="alignMid">
                    7 Ways to Get Your Best Sleep Ever
                    <p>Celebrate World Sleep Day by having a lie in and trying some of our best ever tips for using yoga to sleep deeper and wake more rested.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Discover Yoga Retreats</h5>
                        <p class="card-text">Explore serene yoga retreats nestled in nature's embrace. Immerse yourself in tranquil surroundings, connect with like-minded souls, and deepen your practice amidst breathtaking landscapes.</p>
                        <a href="serviceDetails.php" class="btn btn-outline-dark">Explore Retreats</a>
                    </div>
                    <img src="images/yoga2.jpg" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transform Your Practice</h5>
                        <p class="card-text">Elevate your yoga journey with transformative workshops and classes. From invigorating Vinyasa flows to restorative Yin sessions, discover new depths of strength, flexibility, and inner peace.</p>
                        <a href="#" class="btn btn-outline-dark">Explore Workshops</a>
                    </div>
                    <img src="images/yoga3.jpg" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cultivate Mindfulness</h5>
                        <p class="card-text">Embark on a journey of self-discovery and inner exploration through mindfulness courses. Learn to quiet the mind, cultivate presence, and find balance in the midst of life's chaos.</p>
                        <a href="#" class="btn btn-outline-dark">Explore Mindfulness</a>
                    </div>
                    <img src="images/yoga1.jpg" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>

    <div class="footer">
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="foot col-md-3">
                    <h3>About Us</h3>
                    <br>
                    <p><a href="#">Services</a></p>
                    <p><a href="#">Policy</a></p>
                    <p> <a href="#">Careers</a></p>
                    <p> <a href="#">Services</a></p>
                </div>
                <div class="foot col-md-3">
                    <h3>Resources</h3>
                    <br>
                    <p><a href="#">Docs</a></p>
                    <p><a href="#">Links</a></p>
                    <p> <a href="#">Ebook</a></p>
                    <p> <a href="#">Webinars</a></p>
                </div>
                <div class="foot col-md-3">
                    <h3>Contact Us</h3>
                    <br>
                    <p><a href="#">Help</a></p>
                    <p><a href="#">Sales</a></p>
                    <p> <a href="#">Advertise</a></p>
                    <p> <a href="#">Help</a></p>
                </div>
                <div class="foot col-md-3">
                    <h3>Stay Updated</h3><br>
                    <p>Sign in to our page for more information</p>
                    <form>
                        <div class="row">
                            <input type="Email" name="email" placeholder="Enter Email" required="">
                            <button type="Submit" class="btnToreg btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr style="height: 2px;">
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="social-media">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4"></div>
            <br><br><br><br>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>
</body>
</html>
