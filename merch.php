<html>
<head>
	<title>Merch</title>
	
	<script src="jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="templates/tempstyle.css">
	<link rel="stylesheet" type="text/css" href="storystyle.css">


</head>
<body>
<header>
	<?php include 'includes/header.php';?>
	<br>
	<br>
</header>

<main>
	<div id="thelogo">
			<img src="resources/amexlogoalt.png">
	</div>

<div class="container">
        <div class="infobox">
            <img src="resources/yes.png" id="yes">
            <img src="resources/no.png" id="no">
            <br>
        <h1>Coming<br>Soon!</h1>

            <img src="resources/starleft.png" id="starleft">
            <img src="resources/starright.png" id="starright">
        </div>  
</div>


<!-- COMING SOON/TEMPORARY CONTENT -->
    

    <style type="text/css">

    @font-face{
    font-family: Ouija;
    src: url("resources/CAPTH___.ttf");
    }
    h1{
        text-align: center;
        font-family: Ouija;
        font-size: 8vw;
        color: #c5b358;
    }
    .infobox{
    text-align: left;
    color: #c5b358;
    position: relative;
    padding: 0px 15px 30px 15px;
    border: 1px solid #c5b358;
    font-family: Garamond;
    font-size: 16px;
    }

    .infobox h3{
    font-family: Ouija;
    color: #c5b358;
    font-size: 20px;
    text-align: center;
    }
    #yes{
    position:absolute;
    top:0;
    left:0;
    width: 85px;
    height: 50px;
    opacity: 0.7;

    }
    #no{
    position:absolute;
    top:0;
    right:0;
    width: 75px;
    height: 50px;
    opacity: 0.7;
    }
    #starleft{
    position:absolute;
    bottom:0;
    left:0;
    width: 30px;
    opacity: 0.7;
    }
    #starright{
    position:absolute;
    bottom:0;
    right:0;
    width: 30px;
    opacity: 0.7;
    }
    </style>

</main>

<footer>
	<?php include 'includes/footer.php';?>
</footer>

</body>
</html>