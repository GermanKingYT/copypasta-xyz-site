<!doctype html>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
        <title>YOURNAME.XYZ</title>
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="content/magie.js" type="text/javascript"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
		<link rel="stylesheet" href="content/main.css" type="text/css">
		
		<meta name="author" content="sapphyrus, Snego">
		<meta name="publisher" content="sapphyrus.xyz">
		<meta name="keywords" lang="de" content="R3CHEATS, High-Minded, ElitePVPErs, Steam, Iniuria, project-unknown, ev0lve">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    </head>

    <body bgcolor="#000000">

        <div id="pOverlay">
            <div id="content">
                <center>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                 <br>
                  <br>           
                    <h1 class="animated fadeInUp">/// YOURNAME.XYZ ///</h1>
                    <div id="circles">
                        <div id="container" class="animated fadeIn">
                            <br>
							<div class="circle_first" id="steam" onclick="location.href = 'https://example.org/';">
                            </div>
							<div class="circle_first" id="soundcloud" onclick="location.href = 'https://example.org/';">
                            </div>
                            <div class="circle_first" id="youtube" onclick="location.href = 'https://example.org/';">
                            </div>
                            <div class="circle_first" id="twitch" onclick="location.href = 'https://example.org/';">
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <div id="pYoutubeVid" class="background-video"></div>

        <script>
            jQuery(function($) {
                $('#pYoutubeVid').YTPlayer({
                    fitToBackground: true,
                    videoId: "fJTuldpMwCg",
                    mute: false,
                    pauseOnScroll: false,
                    playerVars: {
                        start: 1,
                        modestbranding: 0,
                        autoplay: 1,
                        controls: 0,
                        showinfo: 0,
                        wmode: 'transparent',
                        branding: 0,
                        rel: 0,
                        autohide: 0,
                       addRaster: true,
                        origin: window.location.origin
                    }
                });
            });
        </script>

    </body>
</html>
