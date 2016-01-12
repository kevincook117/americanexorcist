<html>
<head>
	<title>Home</title>
	
	<script src="jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="templates/tempstyle.css">
	<link rel="stylesheet" type="text/css" href="homestyle.css">


</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<header>
	<?php include 'includes/header.php';?>
	<br>
	<br>
</header>

<main>
<div class="container-fluid">
		<div id="thelogo">
			<img src="resources/amexlogoalt.png">
		</div>
		
		<div id="poster">
			<img src="resources/poster3.jpg">
		</div>
		<div class="video">
			<div class="video-container">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/4GIQYV-mxPc?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
</div>
<br>
<div class="container">
		<div class="infobox">
			<img src="resources/yes.png" id="yes">
			<img src="resources/no.png" id="no">
		<h3>About</h3>
		<p> 
			A paranormal investigator is trapped inside a haunted skyscraper on Christmas Eve. The skeptical scientist, Georgette DuBois, is horrified once confronted with the reality of the supernatural. She risks life and limb to escape her ghoulish prison, stranded on the top floor.
		</p>
		<p>Starring: Bill Moseley, Falon Joslyn, & Jo Pincushion</p>
		<p>Written & Directed by: Tony Trov & Johnny Zito</p>
			<img src="resources/starleft.png" id="starleft">
			<img src="resources/starright.png" id="starright">
		</div>	
</div>


<div class="container insta">
<!-- SnapWidget -->
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?u=YW1lcmljYW5leG9yY2lzdHxpbnwxMjV8NnwzfHxub3wxNXxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=070116" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
<br>
<br>
</div>
	
</main>

<footer>
	<?php include 'includes/footer.php';?>
</footer>


<script type="text/javascript">
	jQuery(function($){
    	     $( '.menu-btn' ).click(function(){
    	     $('.responsive-menu').slideToggle('expand')
    	     })
        })
</script>

<script type="text/javascript">
$(document).ready( function() {
$('.dropdown-toggle').dropdown();
});
</script>



</body>
</html>
