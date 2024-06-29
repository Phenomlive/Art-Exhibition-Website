<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="gallery.css">
	<link rel="stylesheet" type="text/css" href="main.css">
    <link rel="icon" href="img/logo.png">
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<div >
    <div class="header">
        <img src="img/logo.png" onclick="location.href='index.html'">
        <a href="login.php">Log In</a>
        <a href="aboutus.php"> About Us</a>
        <a href="index.php"> Home</a>
    </div>
	<div class="main-body">
			<div class="slide-container">
					<div class="slides">
					<?php
							include("connection.php");
							$attr=0;
							$sql = "SELECT img_path,Category from arts WHERE Category='scenary';";  
							$result = $con->query($sql);
							$attr=0;   
							while($row = $result->fetch_assoc()){
					?>
								<img src=<?php echo "img/".$row['img_path']; ?> <?php if ($attr==0){ ?>class="active"<?php }?> id="<?php echo $row['Category'];?>">
							<?php
							$attr++;
							}?>
					</div>

					<div class="buttons">
						<span class="next">&#10095;</span>
						<span class="prev">&#10094;</span>
					</div>

					<div class="dotsContainer">
						<?php
							include("connection.php");
							$attr=0;
							$sql = "SELECT img_path from arts WHERE Category='scenary'";  
							$result = mysqli_query($con, $sql);
							$attr=0;   
							while($data=mysqli_fetch_assoc( $result )){
						?>
							<div class="dot <?php if ($attr==0){ ?>active <?php }?>" attr=<?php echo $attr;?> onclick="switchImage(this)"></div>
						<?php
							$attr++;
							}
						?>
					</div>
			
				<script type="text/javascript">
					// Access the Images
					let slideImages = document.querySelectorAll('.slides img');
					// Access the next and prev buttons
					let next = document.querySelector('.next');
					let prev = document.querySelector('.prev');
					// Access the indicators
					let dots = document.querySelectorAll('.dot');

					var counter = 0;

					// Code for next button
					next.addEventListener('click', slideNext);
					function slideNext(){
					slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
					if(counter >= slideImages.length-1){
						counter = 0;
					}
					else{
						counter++;
					}
					slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
					indicators();
					}

					// Code for prev button
					prev.addEventListener('click', slidePrev);
					function slidePrev(){
					slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
					if(counter == 0){
						counter = slideImages.length-1;
					}
					else{
						counter--;
					}
					slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
					indicators();
					}

					// Auto slideing
					function autoSliding(){
						deletInterval = setInterval(timer, 3000);
						function timer(){
							slideNext();
							indicators();
						}
					}
					autoSliding();

					// Stop auto sliding when mouse is over
					const container = document.querySelector('.slide-container');
					container.addEventListener('mouseover', function(){
						clearInterval(deletInterval);
					});

					// Resume sliding when mouse is out
					container.addEventListener('mouseout', autoSliding);

					// Add and remove active class from the indicators
					function indicators(){
						for(i = 0; i < dots.length; i++){
							dots[i].className = dots[i].className.replace(' active', '');
						}
						dots[counter].className += ' active';
					}

					// Add click event to the indicator
					function switchImage(currentImage){
						currentImage.classList.add('active');
						var imageId = currentImage.getAttribute('attr');
						if(imageId > counter){
						slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
						counter = imageId;
						slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
						}
						else if(imageId == counter){
							return;
						}
						else{
						slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
						counter = imageId;
						slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';	
						}
						indicators();
					}
				</script>
			</div>
			<div class="gallery-category-box-active" name="scenary"  onclick="location.href='scenary.php'" >
				<img src="img/rural.jpeg"> Scenary
			</div>
			<div class="gallery-category-box" name="abstract"  onclick="location.href='abstract.php'">
				<img src="img/abstract.jpeg"> Abstract
			</div>
			<div class="gallery-category-box" name="alpona"  onclick="location.href='alpona.php'">
				<img src="img/alpona.jpeg"> Alpona
			</div>
			<div class="gallery-category-box" name="digital"  onclick="location.href='digital.php'">
				<img src="img/digital.jpeg"> Digital
			</div>
	</div>
</body>
</html>