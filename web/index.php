<!DOCTYPE html><html id="html"><head><title id="title"><? print $SITENAME ?></title><link rel="stylesheet" type="text/css" href="styles.css"><link rel="stylesheet" type="text/css" href="popups.css"><link rel="apple-touch-icon" href="images/logo.jpg"><meta name="apple-mobile-web-app-title" content="Odyssey"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" /><link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32" /><link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16" /><meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><script type="text/javascript" src="begin.js"></script></head><body id="body"><?if($_SERVER['SERVER_NAME'] == '0.0.0.0'){	$isLocalhost = true;}require_once "settings.php";?><div id="main">	<h1><? print $SITENAME ?></h1><?require('../vendor/autoload.php');?><div id='interactive'><div id="interactive-container"><br><audio id="soundtrack" onloadstart="onBeginLoad();" oncanplaythrough="onEndLoad();" preload="auto">	<source src="soundtrack.mp3" type="audio/mpeg">	Your browser does not support the audio element.</audio><div id='play-div'>	<div id='play-container'>		<img src="images/buttons/backBtn.png" height="30" onclick="goBack()">		<div id="playBtn">			<img src="images/buttons/playBtn.png" height="30" onclick="play()">		</div>		<img src="images/buttons/fwdBtn.png" height="30" onclick="goForward()">	</div>	<div class="popup" id="popupDiv">  		<span class="popuptext hide" id="loadingPopup">Loading soundtrack</span>	</div></div><br><div id="sectionNameDiv">	&nbsp;<span id="sectionName"></span>&nbsp;<span id="songName"></span>&nbsp;</div><br><br>	<?	require_once("namesDropdown.php");	echo "<br><span class='font-10'> or </span><br>";	require_once("sectionsDropdown.php");	?><br><br></div></div><p class="text"><? print $SITENAME ?> was created by Everest Oreizy. The score was created by Ben Moore, and the libretto by Kelly Rourke. Only for use by Seattle Opera. <b>Depending on your browser and internet speed, loading times may vary, so please be patient.</b> If you have any feedback, reccomendations, or comments, please don't hesitate to fill out this short <a href='https://docs.google.com/forms/d/e/1FAIpQLSfbI4U3nVygCzuWD4j4vlo19TFPMKU1y9C18fCKqbVRE2gZhQ/viewform?usp=sf_link'>feedback form</a>. It will really help me make this site better.</p><p class="text font-10" id="browserMessage"></p></div></div></body><div id="scrollable-checker"></div></html><script type="text/javascript" src="vars.js"></script><script type="text/javascript" src="main.js"></script>