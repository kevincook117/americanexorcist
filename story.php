<html>
<head>
	<title>Story</title>
	
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
<div class="folder-box container">
	<div class="folder">
		<!--FOLDER-->
		<ul id="tabs">
    		<li><a href="#" name="tab1">Story</a></li>
    		<li><a href="#" name="tab2">Georgette</a></li>
    		<li><a href="#" name="tab3">Snowfeather</a></li> 
		</ul>

		<div id="content"> 
			<div class="bloodsplat1">
    			<img src="resources/bloodsplat1.png">
    		</div>
    		<div class="bloodsplat3">
    			<img src="resources/bloodsplat3.png">
    		</div>

    		<div id="tab1">
    			<div class="paper">
    				<div class="watermark">
    						<img src="resources/watermark.png">
    				</div>

    				<div class="summary">
    				<h3>The Story</h3>
    				<p>
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio ex, eleifend non metus quis, consectetur hendrerit sapien. In elementum, enim et vestibulum iaculis, erat mi pharetra velit, et ultricies magna dui vel nulla. Donec sit amet eros quis lacus auctor tincidunt sit amet vel nibh. Phasellus quis augue posuere, feugiat orci eu, condimentum enim. Cras in interdum purus, ac scelerisque metus. Suspendisse dignissim dolor ac tortor bibendum eleifend. Nam sed purus eget purus tempus viverra.
    					<br><br>
						Quisque nec porta quam, ut lacinia nibh. Nullam at tincidunt felis, ac auctor odio. Aenean nec nisi pharetra neque efficitur egestas eu sed libero. Phasellus lacinia dolor id tellus rhoncus, ac viverra felis ornare. Nulla dictum lectus vitae tellus convallis malesuada. Donec in varius neque. Morbi sit amet scelerisque metus, finibus euismod dolor. Maecenas bibendum, enim luctus dictum rhoncus, lacus nisl finibus odio, at pellentesque purus augue sit amet dui. Donec lacinia fermentum fringilla. Nulla eu lorem et eros pulvinar maximus. Nunc eget tempus orci. Etiam blandit dapibus dapibus. Sed egestas facilisis nibh ac viverra.
    				</p>
    				</div>
    			</div>
    			

    		</div>
    		<div id="tab2">
    			<div class="paper">
    				<div class="watermark">
    						<img src="resources/watermark.png">
    				</div>
    					<ul>
    						<br>
    						<li>Name: Georgette DuBois</li>
    						<li>Age: unknown</li>
    						<li>Sex: F</li>
    						<li>Played by: Falon Joslyn</li>
    					</ul>
    					
    					<div class="folder-image col-md-3 col-sm-4">
    						<img src="resources/falon2.jpg">
    					</div>
    				
    				<p>
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio ex, eleifend non metus quis, consectetur hendrerit sapien. In elementum, enim et vestibulum iaculis, erat mi pharetra velit, et ultricies magna dui vel nulla. Donec sit amet eros quis lacus auctor tincidunt sit amet vel nibh. Phasellus quis augue posuere, feugiat orci eu, condimentum enim. Cras in interdum purus, ac scelerisque metus. Suspendisse dignissim dolor ac tortor bibendum eleifend. Nam sed purus eget purus tempus viverra.
    				</p>
    			</div>

    		</div>
    		<div id="tab3">
    			<div class="paper">
    				<div class="watermark">
    						<img src="resources/watermark.png">
    				</div>
    				
    					<ul>
    							<br>
    						<li>Name: Mr. Snowfeather</li>
    						<li>Age: unknown</li>
    						<li>Sex: M</li>
    						<li>Played by: Bill Moseley</li>
    					</ul>
					<div class="folder-image col-md-3 col-sm-4">
    					<img src="resources/bill.jpg">
    				</div>

    				<p>
    					Quisque nec porta quam, ut lacinia nibh. Nullam at tincidunt felis, ac auctor odio. Aenean nec nisi pharetra neque efficitur egestas eu sed libero. Phasellus lacinia dolor id tellus rhoncus, ac viverra felis ornare. Nulla dictum lectus vitae tellus convallis malesuada. Donec in varius neque. Morbi sit amet scelerisque metus, finibus euismod dolor. Maecenas bibendum, enim luctus dictum rhoncus, lacus nisl finibus odio, at pellentesque purus augue sit amet dui. Donec lacinia fermentum fringilla. Nulla eu lorem et eros pulvinar maximus. Nunc eget tempus orci. Etiam blandit dapibus dapibus. Sed egestas facilisis nibh ac viverra.
    				</p>
    			</div>

    		</div>





		</div>
		<!--END FOLDER-->
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function() {
    $("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current"); // Activate the first tab
    $("#content #tab1").fadeIn(); // Show first tab's content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return;       
        }
        else{             
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });
});
</script>



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


</body>
</html>