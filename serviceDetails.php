<?php

//include 'connectToDB.php';
if(isset($_POST["submit_btn"])){

}


//include 'disconnectDB.php';
?>
<!Doctype html>
<HTML lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>

<link type="text/css" rel="stylesheet" href="css/servicestylesheet.css"/>

<link href="<link rel="preconnect href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<title>yoga Form</title>


</head>
<body>

    <?php include 'dashbored.php'?>

   <div class="navbar">
        <div class="col-md-4">
        
            <form action="loggedinHomePage.php" method="POST">
            
            </form>
        </div>
        <div class="col-md-4">

        <h2 style="color: orange ; font-size: 36px; font-weight: bold; text-align: center;text-shadow: 4px 3px 0px #fff, 9px 8px 0px rgba(0,0,0,0.15);">yoga Form</h2>

        </div>
        <div class="col-md-4 ">
            <a href="userProfile.php">
                <i class="fas fa-user-circle usericon"></i>
            </a>        
        </div>   
    </div>

    <div class="container">
        <div class="image-view">
            <img src="images/bgimg.jpg" class="img-fluid" alt="..."><br><br>
        </div>
        <div class=" btn-outline-dark imageName">
            <h1>Eagle Pose </h1><br>
        </div>
        <br>
        <div class="imageTitle">
            <p>You need strength, flexibility, and endurance, and unwavering concentration for Eagle Pose.(gah-rue-DAHS-anna)
            Garuda = the mythic “king of the birds,” the vehicle of Vishnu. The word is usually rendered into English as “eagle,” 
            though according to one dictionary the name literally means “devourer,” because Garuda was originally identified with
            the “all-consuming fire of the suns rays.”</p><br><br><br><br>
        </div>
        <div class="imageDes">
            <h2>Eagle Pose: Step-by-Step Instructions</h2><br><br>
            <ul>
                <li>Step 1
                        Stand in Tadasana. Bend your knees slightly, lift your left foot up and, balancing on your right foot, cross your 
                        left thigh over the right. Point your left toes toward the floor, press the foot back, and then hook the top of the 
                        foot behind the lower right calf. Balance on the right foot.
                        <br><br>

                </li>
                <li>Step 2
                    Stretch your arms straight forward, parallel to the floor, and spread your scapulas wide across the back of your torso. 
                    Cross the arms in front of your torso so that the right arm is above the left, then bend your elbows. Snug the right 
                    elbow into the crook of the left, and raise the forearms perpendicular to the floor. The backs of your hands should be 
                    facing each other.
                    <br><br>

                </li>
                <li>Step 3
                    Press the right hand to the right and the left hand to the left, so that the palms are now facing each other. The thumb 
                    of the right hand should pass in front of the little finger of the left. Now press the palms together (as much as is 
                    possible for you), lift your elbows up, and stretch the fingers toward the ceiling.
                    <br><br>

                </li>
                <li>Step 4
                    Stay for 15 to 30 seconds, then unwind the legs and arms and stand in Tadasana again. Repeat for the same length of 
                    time with the arms and legs reversed.
                    <br><br>
        
                </li>
            </ul>

       </div>
    </div>

    <?php include 'footer.php'?>

  

    

    


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="js/bootstrap.bundle.min.js" ></script>

<script src="https://kit.fontawesome.com/12c1cd3be9.js" crossorigin="anonymous"></script>  

</body>
</HTML>    