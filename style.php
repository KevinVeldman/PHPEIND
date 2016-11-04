<?php
    header("Content-type: text/css; charset: UTF-8");
    $test="#ff6600";
    session_start();
    $weatherCode = $_SESSION['weatherCode'];
    switch ($weatherCode){
        case 1:
            $backgroundLink="url(http://i.huffpost.com/gen/2176456/images/o-TORNADO-facebook.jpg)";
            $divColor="#292E37";
            $accentColor="#666666";
            $FontColor="#FFFFFF";
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        case 7:
            break;
        case 8:
            break;
        case 9:
            break;
        case 10:
            break;
        case 11:  
            break;
        case 12:
            break;
        case 13:
            break;
        case 14:
            break;
        case 15:  
            break;
        case 16:
            break;
        case 17:
            break;
        case 18:
            break;
        case 19:  
            break;
        case 20:
            break;
        case 21:
            break;
        case 22:
            break;
        case 23:  
            break;
        case 24:
            break;
        case 25:
            break;
        case 26:
            break;
        case 27:  
            break;
        case 28:
            break;
        case 29:
            break;
        case 30:
            break;
        case 31:  
            break;
        case 32:
            break;
        case 33:
            break;
        case 34:
            break;
        case 35:  
            break;
        case 36:
            break;
        case 37:
            break;
        case 38:
            break;
        case 39:  
            break;
        case 40:
            break;
        case 41:
            break;
        case 42:
            break;
    }
?>
*{
margin: 0;
padding: 0;
color: <?=$FontColor?>;
text-decoration: none;
}
body{
background-image:<?=$backgroundLink?>
}
#wrapper{
margin: 0 auto;
width: 800px;
overflow: auto;
background-color:<?=$divColor?>;

}
.row{
width: 750px;
padding-left: 25px;
padding-right:25px;
overflow: auto;
overflow-y: hidden;
border-bottom: 3px solid <?=$accentColor?>;
}
#logo{
width:100px;
height:100px;
float:left;

}
#navbar{
}
#navbar ul{
list-style: none;}
#map{
width: 500px;
height: 500px;
}
#navbar li{
float:right;
width: 100px;
height: 100px;
line-height:100px;
border-left: 1px solid <?=$accentColor?>;
text-align: center;
transition: background-color 0.5s ease;
background-color:<?=$divColor?>
}
#navbar li:hover{
background-color: <?=$accentColor?>;
}
#navbarActive{
background-color: <?=$accentColor?> !important;}
#rightmostLi{
border-right: 1px solid <?=$accentColor?>;
}
#content{
width: 800px;
}
.contentHalf{
width:355px;
margin:10px;
float:left;
}


