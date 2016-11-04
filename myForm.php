<!DOCTYPE html>
<html>
    <head>
        <title>Weerspagina Emmen</title>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='style.php?weatherCode=$weatherCode' />
        <?php
        include "getWeatherStringEmmen.php";
        $weatherString = explode(" ", getWeatherStringEmmen());
        $location = $weatherString[0];
        $temp = $weatherString[1] / 10;
        $weatherCode = 1;
        $weatherType = $weatherString[3];
        session_start();
        $_SESSION['weatherCode'] = $weatherCode;
        ?>
        
    </head>
    <body>
        <div id="wrapper">
            <div class="row">
                <div id="logo">
                    <img width="100px" height="100px"src="http://res.freestockphotos.biz/pictures/15/15146-illustration-of-a-stormy-cloud-pv.png">
                </div>
                <div id="navbar">
                    <ul>
                        <li id="rightmostLi navbarActive">
                            <a href="myForm.php">Form</a>
                        </li>
                        <li>
                            <a href="myWeather.php">My Weather</a>
                        </li>
                        <li>
                            <a href="myLocation.php">My Location</a>
                        </li>
                        <li>
                            <a href="myInterests.php">My Interests</a>
                        </li>
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content" >
                <div class="row">

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        echo "thanks! <br>";
                        if (empty($_POST['name'])){
                            echo "Maar je mag ook je naam invullen! <br>";
                        }
                        if (empty($_POST['email'])){
                            echo "Maar je mag ook je email invullen! <br>";
                        }
                        if (empty($_POST['aantal'])){
                            echo "Maar je mag ook je een aantal invullen! <br> Anders heb ik wel een klacht over jou...";
                        }
                    }
                    ?>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        Naam:<input type="text" name="name" placeholder="Naam" style="color: black;"><br><br>
                        Mail:<input type="email" name="email" placeholder="E-mail" style="color: black;"><br><br>
                        hoeveel klachten heeft u? <br>
                        <input type="radio" name="aantal" value="zero"> 1
                        <input type="radio" name="aantal" value="one"> 2
                        <input type="radio" name="aantal" value="two"> 3
                        <input type="radio" name="aantal" value="twoplus"> 4<br>
                        <input type="submit" name="submit" value="Submit" style="color: black;" ><br>
                    </form>
                </div>
            </div>
        </div>    

    </body>
</html>