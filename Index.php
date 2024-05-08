<?php
session_start();

include ("classes/DB.php");
include ("classes/functions.php");
$user_data = check_login($con);


?>
<!Doctype html>
<HTML lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="css/stylesheet.css" />

    <link href="<link rel=" preconnect href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <title>yoga Form</title>
    <style>
        /* CSS styles for the title */
        #title {
            color: #3366ff;
            /* Change color to your preference */
            font-size: 24px;
            /* Adjust font size as needed */
            font-family: Arial, sans-serif;
            /* Specify preferred font family */
            text-align: center;
            /* Center align the title */
        }
    </style>

</head>

<body>
    <form action="navbar.php" method="POST">
        <div class="form-group mb3 des">

            <input type="submit" value="Show Data" class="btn btn-success" />

        </div>
    </form>

    <div class="banner">

        <div class="section col-md-12 col-sm-12">
            <div class="content">
                <h1>Welcome to Yoga Tutor</h1>
                <h2>Discover the Essence of Yoga</h2>
                <p>Yoga is a profound practice that transcends the physical realm, touching the mind, body, and spirit
                    in profound ways. Originating in ancient India, yoga is not just a form of exercise but a holistic
                    approach to life. It intertwines movement, breathwork, meditation, and philosophy to cultivate
                    harmony and balance within oneself.</p>
                <p>Through regular practice, yoga offers a myriad of benefits. Physically, it enhances flexibility,
                    strength, and balance, improving overall fitness levels. Mentally, it promotes clarity, focus, and
                    stress relief, helping individuals find inner peace amidst life's chaos. Spiritually, it deepens
                    self-awareness and connection to the universe, fostering a sense of unity and purpose.</p>
                <p>At Yoga Tutor, we are committed to guiding you on your yoga journey, whether you're a beginner or an
                    experienced practitioner. Our classes are designed to cater to all levels and interests, offering a
                    diverse range of styles including Hatha, Vinyasa, Ashtanga, Yin, and more.</p>
                <p>Join us as we explore the transformative power of yoga and embark on a path of self-discovery,
                    healing, and growth. Step onto your mat, breathe deeply, and let the journey unfold.</p>

            </div>
        </div>
        <div class="section col-md-12 col-sm-12">
            <h2>Explore Mindfulness</h2>
            <p>Embark on a journey of self-discovery and inner exploration through the practice of mindfulness. In a
                world filled with distractions and constant noise, mindfulness offers a sanctuary of peace and presence.
            </p>
            <p>By cultivating awareness of the present moment, mindfulness enables us to fully engage with our
                experiences, whether mundane or extraordinary. It invites us to observe our thoughts and emotions with
                non-judgmental acceptance, fostering a deep sense of clarity and tranquility.</p>
            <p>Through mindfulness practices such as meditation, breath awareness, and body scans, we learn to quiet the
                mind, release stress, and cultivate a profound sense of well-being. As we integrate mindfulness into our
                daily lives, we discover a newfound sense of calm amidst the chaos, enabling us to navigate life's
                challenges with grace and resilience.</p>
            <p>Join us on the journey to greater mindfulness and inner peace. Together, let us awaken to the beauty of
                each moment and embrace the fullness of life's experiences.</p>
        </div>
    </div>
    <div class="section col-md-12 col-sm-12">
        <div class="content">
            <h2>Unlock Your Inner Strength</h2>
            <p>Discover the power within you as you embark on a journey to unlock your inner strength. Life presents us
                with challenges, obstacles, and moments of adversity, but within each of us lies a reservoir of
                resilience and courage waiting to be unleashed.</p>
            <p>Through the practice of yoga, meditation, and self-reflection, we tap into our inner resources,
                cultivating a sense of empowerment and fortitude. Yoga not only strengthens the body but also nurtures
                the mind and spirit, instilling a deep sense of confidence and self-belief.</p>
            <p>As we face life's trials with courage and determination, we discover that our challenges are not
                obstacles but opportunities for growth and transformation. With each breath, each pose, and each moment
                of stillness, we embody our true potential and embrace the limitless possibilities that await.</p>
            <p>Join us as we embark on this journey of self-discovery and empowerment. Together, let us unlock the doors
                to our inner strength and step boldly into the fullness of life.</p>
        </div>
    </div>
    <div class="section col-md-12 col-sm-12">
        <div class="content">
            <h2>Embrace the Flow</h2>
            <p>Step onto your mat and immerse yourself in the fluidity of movement as you embrace the transformative
                power of yoga flow. Flow yoga, also known as Vinyasa, invites you to synchronize breath with movement,
                creating a seamless dance of body and breath.</p>
            <p>With each transition between poses, you cultivate a sense of grace, strength, and presence. Flowing
                through sequences that seamlessly blend strength and flexibility, you awaken vitality and energy that
                permeate every cell of your being.</p>
            <p>As you surrender to the rhythm of your breath and the flow of the practice, you discover a profound sense
                of freedom and liberation. The worries of the mind melt away as you become fully immersed in the present
                moment, experiencing a deep sense of connection to yourself and the world around you.</p>
            <p>Join us as we journey into the flow, exploring the infinite possibilities that arise when we surrender to
                the current of life. Together, let us embrace the fluidity of existence and move with grace, strength,
                and intention.</p>
        </div>
    </div>

    </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>

</body>

</HTML>