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
                        <li id="rightmostLi">
                            <a href="myForm.php">Form</a>
                        </li>
                        <li>
                            <a href="myWeather.php">My Weather</a>
                        </li>
                        <li id="navbarActive">
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
            <div id="content">
                <div class="row">
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: 52.090737, lng: 5.121420};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 16,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
                    </script>
                </div>
                </div>
                <div class="contentHalf">
                    <!-- hier zou content kunnen....-->
                </div>
            </div>
        </div>
    </div>    
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMjoVU-QMb8AFKiUppDZQGlxRwPbjEXqg&callback=initMap">
    </script> 
</body>
</html>