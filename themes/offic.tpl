<html>
<head>
    <title>SEYUN Official HOME</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/assets/css/jquery.fullPage.css" rel="stylesheet"/>
    <link href="/assets/css/scrolling.css" rel="stylesheet"/>

    <!-- [if eq IE 7]>
    <link href="/assets/css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet"/>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.fullPage.js"></script>
    <script src="/assets/js/scrolling.js"></script>

    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.js"></script>
    <![endif]-->

    <style type="text/css">
        html, body{  height: 100%;  }
        body{  font-size: 14px;  }
        h1{  font-size: 38px;  }
        h2{  font-size: 34px;  }
        h3{  font-size: 30px;  }
        h4{  font-size: 26px;  }
        h5{  font-size: 22px;  }
        h6{  font-size: 18px;  }

        /* Style for our header texts
	* --------------------------------------- */
        h1{
            font-size: 5em;
            font-family: arial,helvetica;
            color: #fff;
            margin:0;
            padding:0;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
            overflow: hidden;
        }

        #myVideo{
            position: absolute;
            right: 0;
            bottom: 0;
            top:0;
            right:0;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-color: black; /* in case the video doesn't fit the whole page*/
            background-image: /* our video */;
            background-position: center center;
            background-size: contain;
            object-fit: cover; /*cover video background */
            z-index:3;
        }

        .backcover1{
            background-color: #000000;
            width: 100%;  height: 100%;
            z-index: 4;
            position: relative;
            opacity: 0.1
        }

        .layer{
            position: relative;
            -webkit-animation-name: d-arrow; /* Chrome, Safari, Opera */
            -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
            -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */
            animation-name: d-arrow;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }

        .layer > img {
            width: 70px;
        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes d-arrow {
            0%   { top: 87%; }
            25%  { top: 90%; }
            50%  { top: 87%; }
            75%  { top: 90%; }
            100% { top: 87%; }
        }

        /* Standard syntax */
        @keyframes d-arrow {
            0%   { top: 87%; }
            25%  { top: 90%; }
            50%  { top: 87%; }
            75%  { top: 90%; }
            100% { top: 87%; }
        }

        /* Layer with position absolute in order to have it over the video
        * --------------------------------------- */
        #section0 .layer{
            position: absolute;
            z-index: 5;
            width: 100%;
            left: 0;
        }

        /*solves problem with overflowing video in Mac with Chrome */
        #section0{
            overflow: hidden;
        }


        /* Bottom menu
        * --------------------------------------- */
        #infoMenu li a {
            color: #fff;
        }
    </style>

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

</head>

<body>
<div id="fullpage">
    <div class="section " id="section0">
        <video autoplay loop muted id="myVideo">
            <source src="assets/video/1.mp4" type="video/mp4"></source>
        </video>
        <div class="backcover1"></div>
        <div class="layer">
            <img src="assets/img/arrow-down.png"></img>
        </div>
    </div>
    <div class="section" id="section1">

    </div>
    <div class="section" id="section2">
        <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>
        <div class="slide" id="slide2"><h1>Totally customizable</h1></div>
        <div class="slide" id="slide3"><h1>Totally customizable</h1></div>
    </div>
    <div class="section" id="section3"><h1>Lovely images <br />for a lovely page</h1></div>
    <div class="section" id="section4"><h1>One Image = One thousand words</h1></div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            verticalCentered: true,
            sectionsColor: [ '#1bbc9b', '#ffffff', '#ffa500', '#4BBFC3', '#7BAABE' ],
            afterRender: function(){


                //playing the video
                $('video').get(0).play();
            }
        });
    });
</script>

</body>
</html>