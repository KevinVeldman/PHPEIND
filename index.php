<!DOCTYPE html>
<html>
<head>
    <title>Weerspagina Emmen</title>
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' href='style.php?weatherCode=$weatherCode' />
    <?php include "getWeatherStringEmmen.php";
    $weatherString= explode(" ", getWeatherStringEmmen());
    $location = $weatherString[0];
    $temp = $weatherString[1]/10;
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
                    <li id="rightmostLi">
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
                    <li id="navbarActive">
                        <a href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div class="row">
                <div class="contentHalf">
                    <h1>Welkom op mijn pagina!</h1>
                    <br>Op deze pagina toon ik het weer, de locatie van mijn huis, mijn interesses en dat ik een formulier kan maken.
                </div>
                <div class="contentHalf">
                    <!-- hier zou content kunnen....-->
                </div>
            </div>
        </div>
    </div>    
      
</body>
</html>