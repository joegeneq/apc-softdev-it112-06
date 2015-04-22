<?php 
use yii\helpers\Html;
?>
               
            <div class="top-nav">
                <ul>
                    <li class="active"><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
					<li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
				<?php

				if (Yii::$app->user->isGuest) {
					echo "<li><a href=\"./index.php?r=site%2Flogin\">Login</a></li>" ;
					echo "<li><a href=\"./index.php?r=site%2Fsignup\">Signup</a></li>" ;
				} else {
					if(Yii::$app->user->can('access-backend')) {
						echo "<li><a href=\"../../backend/web/index.php\" target=\"_blank\">Admin's Panel</a></li>" ;
						echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
					} else {				
						echo "<li><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
						echo "<li><a href=\"./index.php?r=site%2Fmy-visa\">My Visa Application</a></li>" ;
						echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
					}
				}
				?>                    
                </ul>
			</div>

<!---start-content-->				
	<div class="image-slider">
			<ul class="rslides" id="slider1">
				<li><img src="images/slider1.png" alt=""></li>
				<li><img src="images/slider2.png" alt=""></li>
				<li><img src="images/slider3.png" alt=""></li>
			</ul>
		</div>
	</div>
</div>	

<div class="content">
	<div class="border"></div>

	<div class="wel-mesg">
		<div class="wrap">
			<h2>Welcome to our site!</h2>
			<p>RBA Consultancy and General Services processes different kinds of travel Visa of expatriate here in the Philippines.</p>
			<p>We are dedicated to give our clients like you fast but economical way to process your Visa and other legal documents.</p>
			<a href="./index.php?r=site%2Fsignup">Join us!</a>
		</div>
	</div>

	<div class="border"></div>

	<div class="bottom-grids">
		<div class="wrap">				
			<div class="col span_1_of_3">
      			<img src="images/feature1.PNG" alt="" />
			</div>	
			
			<div class="col span_2_of_3">
				<div class="company_address">
				    <h3>Apply for your Visa now with ease</h3>
					<p>With RBA Client Servicing System, you don’t need to know any technical terms to get your Visa. 
					   Our system includes everything you need: laying out the process in a sequence of steps, completing 
					   every form and letter you need, explanation on how to submit the application, and guides to all the 
					   follow on processes
					</p>
				</div>
  			</div>	
			<div class="clear"> </div>
		</div>
	</div>
	
	<div class="border"></div>
			
	<div class="content-banner">
		<div class="wrap">
			<div class="col span_2_of_3">
				<div class="company_address">
					<h3>Manage your account and monitor every transactions you made</h3>
					<p>With our Client Servicing System, you’re also in control. You can work on your application whenever 
						and wherever is convenient for you, and if you need help, we’ve got it for you.
						We make the process quick and gives you peace of mind.</p>
				</div>
			</div>	
			
			<div class="col span_1_of_3">
					<img src="images/feature2.PNG" alt="" />
  			</div>	
			<div class="clear"> </div>
		</div>
	</div>
	
	<div class="border"></div>
	
	<div class="bottom-grids">
		<div class="wrap">
			<div class="col span_1_of_3">
      			<img src="images/feature3.PNG" alt="" />
			</div>	
			
			<div class="col span_2_of_3">
				<div class="company_address">
				    <h3>Know the status of your transactions fast and seamlessly</h3>
					<p>We secure every piece of data you provide us – every answer – individually 
					   with its own unique government level security key.</p>
				</div>
  			</div>
			<div class="clear"> </div>
		</div>
		
		<div class="clear"> </div>
	</div>
<!--end-content-->

     