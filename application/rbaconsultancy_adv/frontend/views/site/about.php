                
            <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li class="active"><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
				<?php

				if (Yii::$app->user->isGuest) {
					echo "<li><a href=\"./index.php?r=site%2Flogin\">Login</a></li>" ;
					echo "<li><a href=\"./index.php?r=site%2Fsignup\">Signup</a></li>" ;
				} else {
					if(Yii::$app->user->can('access-backend')) {
						echo "<li><a href=\"http://localhost/rbaconsultancy_adv/backend/web/index.php\" target=\"_blank\">Admin's Panel</a></li>" ;
						echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
					} else {						
						echo "<li><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
						echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
					}
				}
				?>                   
                </ul>
			</div>
	</div>
</div>	

<!---start-content----->
<div class="content">

	<!---start-about---->
	<div class="about">
		<div class="wrap">
			<div class="top-head">
				<h3>About</h3>
				<ul>
					<li><a href="index.php">Home / </a></li>
					<li><a href="./index.php?r=site%2Fabout"><span>About</span></a></li>
				</ul>
			</div>

			<div class="about-grids">
				<div class="about-left">
					<h3>RBA Consultancy and General Services</h3>
					<div class="about-left-info">
						<img src="images/about1.jpg" alt="" />
						<h4>Company Overview </h4>
						<p> RBA Consultancy and General Services is a duly recognized business entity by the Department of Trade and Industry, Department of Labor and Employment and Bureau of Immigration. It was established in 2001 through the leadership and management of Mr. Ricardo B. Alegre. His expertise and efficient processing of working permits and immigration visas gained the respect of big companies as his clients.</p><br>
						<p>RBA Consultancy and General Services is committed to bringing 100% satisfaction to its clients, that’s why they strive hard to give the clients all the services that they need in the most efficient and economical way with such excellence</p>
						<p>RBA Consultancy and General Services processes different kinds of travel Visa of expatriate here in the Philippines.
							They are dedicated to give our clients like you fast but economical way to process your Visa and other legal documents.</p>
					
					</div>
				</div>
				
				<div class="about-right">
					<h3>WHAT WE OFFER</h3>
					<div class="about-right-grid">
						<div class="about-right-pic">
							<span>A</span>
						</div>
					
						<div class="about-right-info">
							<h4>Apply for your Visa now with ease</h4>
							<p>With RBA Client Servicing System, you do not need to know any technical terms to get your Visa. 
					   Our system includes everything you need: laying out the process in a sequence of steps, completing 
					   every form and letter you need, explanation on how to submit the application, and guides to all the 
					   follow on processes</p>
						</div>
						<div class="clear"> </div>
					</div>
					
					<div class="about-right-grid">
						<div class="about-right-pic">
							<span>B</span>
						</div>
						
						<div class="about-right-info">
							<h4>Manage your account and monitor every transactions you made</h4>
							<p>With our Client Servicing System, you’re also in control. You can work on your application whenever 
						and wherever is convenient for you, and if you need help, we have got it for you.
						We make the process quick and gives you peace of mind. </p>
						</div>	
						<div class="clear"> </div>
					</div>
					
					<div class="about-right-grid">
						<div class="about-right-pic">
							<span>C</span>
						</div>
					
						<div class="about-right-info">
							<h4>Know the status of your transactions fast and seamlessly</h4>
							<p>We secure every piece of data you provide us, every answer, individually 
								with its own unique government level security key.</p>
						</div>
						<div class="clear"> </div>
					</div>
						</div>
						<div class="clear"> </div>
					</div>
					<!---start-ourteam---->
					<div class="team">
						<h2>Team</h2>
						<div class="team-member">
							<a href="images/t1.jpg" class="flipLightBox">
							<img src="images/t1.jpg"  alt="Image 2" />
							</a>
							<h3>Ricardo Alegre</h3>
							<p>Mr. Ricardo Alegre is the owner and founder of RBA Consultancy and General Services. He started this business in the year of 2000. He is the acting president of the said company. </p>
							<div class="sub-about-grid-social">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
									<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
									<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
									<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-member">
							<a href="images/t2.jpg" class="flipLightBox">
							<img src="images/t2.jpg"  alt="Image 2" />
							</a>
							<h3>Consectetur adipisicing</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<div class="sub-about-grid-social">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
									<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
									<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
									<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-member">
							<a href="images/t3.jpg" class="flipLightBox">
							<img src="images/t3.jpg"  alt="Image 2" />
							</a>
							<h3>Consectetur adipisicing</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<div class="sub-about-grid-social">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
									<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
									<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
									<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-member">
							<a href="images/t4.jpg" class="flipLightBox">
							<img src="images/t4.jpg"  alt="Image 2" />
							</a>
							<h3>Consectetur adipisicing</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<div class="sub-about-grid-social">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
									<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
									<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
									<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-member last">
							<a href="images/t1.jpg" class="flipLightBox">
							<img src="images/t1.jpg"  alt="Image 2" />
							</a>
							<h3>Consectetur adipisicing</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<div class="sub-about-grid-social">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
									<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
									<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
									<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
								</ul>
							</div>
						</div>
						<script type="text/javascript" src="js/fliplightbox.min.js"></script>
						<script type="text/javascript">$('body').flipLightBox()</script>
						<div class="clear"> </div>
					</div>
					<!---End-ourteam---->
				</div>
			</div>
			<!---End-about---->
		</div>
		</div>
		<!---End-content----->
		<!---End-wrap---->

