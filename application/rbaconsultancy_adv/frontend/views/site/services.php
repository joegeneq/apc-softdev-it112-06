<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\Services1 */
/* @var $searchModel backend\models\Services1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>


	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content="Morphing Buttons Concept: Inspiration for revealing content by morphing the action element" />
		<meta name="keywords" content="expanding button, morph, modal, fullscreen, transition, ui" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/content.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>               
        	<div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li class="active"><a href="./index.php?r=site%2Fservices">Services</a></li>
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
			</div>	</div>
		
		</div>	
		<link rel="stylesheet" type="text/css" href="css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />		

		<div class="about">
		<div class="wrap">
			<div class="top-head">
				<h3>Services</h3>
				<ul>
					<li><a href="index.php">Home / </a></li>
					<li><a href="./index.php?r=site%2Fservices"><span>Services</span></a></li>
				</ul>
			</div>
		</div>
		</div>

		<div class="container">	
			<div id="tabs" class="tabs">
				<nav>
					<ul>
						<li><a href="#section-1" class="icon-immigrant"><span>Immigrant Visa</span></a></li>
						<li><a href="#section-2" class="icon-non-immigrant"><span>Non-Immigrant Visa</span></a></li>
						<li><a href="#section-3" class="icon-special"><span>Special Visa</span></a></li>
					</ul>
				</nav>
				<div class="content">
					<section id="section-1">
						<div class="mediabox"> <div id="left">
							<a href="./index.php?r=site%2Fservices_1">Conversion to Non-Quota Immigrant by Marriage</a>
					<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
							<button type="button">Apply here!</button>
								<div class="morph-content">
								<div>
								<div class="content-style-text">
									<span class="icon icon-close"></span>
									<h2>General Instruction</h2>
									<p><strong>1. This Consolidated General Application Form (CGAF) is written in the English language. Enter
										legibly all the information required into the appropriate spaces on the form. If information required
										is not applicable with your application, please write “N/A” therein. Do not leave any item blank.
										The Bureau will not act on application forms that are accomplished incorrectly. All entries must
										be in CAPITAL LETTERS. Your answers must be in English and must use English characters
										only. Letters like ñ, é, ü, and ç are not recognized by the system. For instance, please enter
										names like “Muñoz” and “Sémonin” as “Munoz” and “Semonin”, respectively.</strong><br>
										<strong>2. The CGAF must be accomplished in duplicate [two (2) copies].</strong><br>
										<strong>3. All sworn statements or affidavit must be duly notarized.</strong><br>
										<strong>4. Documents executed outside the Philippines must be authenticated by the Philippine
										Embassy/Consular Officials of the Philippine foreign service at the place of issuance or nearest to
										it, with English translation, if written in other foreign language.</strong><br>
										<strong>5. All documents required for submission must be arranged in the order as listed hereunder,
										otherwise your application or petition cannot be processed immediately.</strong><br></p>
									<p align= "right"><input type="submit" value="Continue"></p> 
								</div>
								</div>
								</div>
						</div><!-- morph-button -->
					</div><br><br>
							<p>For a foreign national on the basis of his valid marriage to a Philippine citizen.</p>
						</div></div>
						
					
						<div class="mediabox"><div id="right">
							<a href="#">Conversion to Quota Immigrant</a>
					<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
							<button type="button">Apply here!</button>
								<div class="morph-content">
								<div>
								<div class="content-style-text">
									<span class="icon icon-close"></span>
									<h2>General Instruction</h2>
									<p><strong>1. This Consolidated General Application Form (CGAF) is written in the English language. Enter
										legibly all the information required into the appropriate spaces on the form. If information required
										is not applicable with your application, please write “N/A” therein. Do not leave any item blank.
										The Bureau will not act on application forms that are accomplished incorrectly. All entries must
										be in CAPITAL LETTERS. Your answers must be in English and must use English characters
										only. Letters like ñ, é, ü, and ç are not recognized by the system. For instance, please enter
										names like “Muñoz” and “Sémonin” as “Munoz” and “Semonin”, respectively.</strong><br>
										<strong>2. The CGAF must be accomplished in duplicate [two (2) copies].</strong><br>
										<strong>3. All sworn statements or affidavit must be duly notarized.</strong><br>
										<strong>4. Documents executed outside the Philippines must be authenticated by the Philippine
										Embassy/Consular Officials of the Philippine foreign service at the place of issuance or nearest to
										it, with English translation, if written in other foreign language.</strong><br>
										<strong>5. All documents required for submission must be arranged in the order as listed hereunder,
										otherwise your application or petition cannot be processed immediately.</strong><br></p>
									<div class="services1-form">

										<?php $form = ActiveForm::begin(); ?>

										<?= Html::activeHiddenInput($model, 'user_id') ?>

										<?= Html::activeHiddenInput($model, 'slist_id') ?>
										<div class="form-group">
										<p align= "right">	<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?> </p>
										</div>

										<?php ActiveForm::end(); ?>

									</div>
									
								</div>
								</div>
								</div>
						</div><!-- morph-button -->
					</div><br><br>
							<p>Nationals of countries which have diplomatic relations with the Philippines and grant the Filipinos the same immigration privileges under the principle of reciprocity which shall not be in excess of fifty (50) of any one nationality or without nationality for any one calendar year</p>
						</div></div>
						
						<div class="mediabox"><div id="center">
							<a href="#">Immigrant Visa 3</a>
							<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
							<button type="button">Apply here!</button>
								<div class="morph-content">
								<div>
								<div class="content-style-text">
									<span class="icon icon-close"></span>
									<h2>General Instruction</h2>
									<p><strong>1. This Consolidated General Application Form (CGAF) is written in the English language. Enter
										legibly all the information required into the appropriate spaces on the form. If information required
										is not applicable with your application, please write “N/A” therein. Do not leave any item blank.
										The Bureau will not act on application forms that are accomplished incorrectly. All entries must
										be in CAPITAL LETTERS. Your answers must be in English and must use English characters
										only. Letters like ñ, é, ü, and ç are not recognized by the system. For instance, please enter
										names like “Muñoz” and “Sémonin” as “Munoz” and “Semonin”, respectively.</strong><br>
										<strong>2. The CGAF must be accomplished in duplicate [two (2) copies].</strong><br>
										<strong>3. All sworn statements or affidavit must be duly notarized.</strong><br>
										<strong>4. Documents executed outside the Philippines must be authenticated by the Philippine
										Embassy/Consular Officials of the Philippine foreign service at the place of issuance or nearest to
										it, with English translation, if written in other foreign language.</strong><br>
										<strong>5. All documents required for submission must be arranged in the order as listed hereunder,
										otherwise your application or petition cannot be processed immediately.</strong><br></p>
									<p align= "right"><input type="submit" value="Continue"></p> 
								</div>
								</div>
								</div>
						</div><!-- morph-button -->
					</div><br><br>
							<p>Courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
						</div></div>
						<div class="clear"></div>
						
						<div class="mediabox"><div id="left">
							<a href="#">Immigrant Visa 4</a>
							<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
							<button type="button">Apply here!</button>
								<div class="morph-content">
								<div>
								<div class="content-style-text">
									<span class="icon icon-close"></span>
									<h2>General Instruction</h2>
									<p><strong>1. This Consolidated General Application Form (CGAF) is written in the English language. Enter
										legibly all the information required into the appropriate spaces on the form. If information required
										is not applicable with your application, please write “N/A” therein. Do not leave any item blank.
										The Bureau will not act on application forms that are accomplished incorrectly. All entries must
										be in CAPITAL LETTERS. Your answers must be in English and must use English characters
										only. Letters like ñ, é, ü, and ç are not recognized by the system. For instance, please enter
										names like “Muñoz” and “Sémonin” as “Munoz” and “Semonin”, respectively.</strong><br>
										<strong>2. The CGAF must be accomplished in duplicate [two (2) copies].</strong><br>
										<strong>3. All sworn statements or affidavit must be duly notarized.</strong><br>
										<strong>4. Documents executed outside the Philippines must be authenticated by the Philippine
										Embassy/Consular Officials of the Philippine foreign service at the place of issuance or nearest to
										it, with English translation, if written in other foreign language.</strong><br>
										<strong>5. All documents required for submission must be arranged in the order as listed hereunder,
										otherwise your application or petition cannot be processed immediately.</strong><br></p>
									<p align= "right"><input type="submit" value="Continue"></p> 
								</div>
								</div>
								</div>
						</div><!-- morph-button -->
					</div><br><br>
							<p>Sushi gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
						</div></div>
						
						<div class="mediabox"><div id="right">
							<a href="#">Immigrant Visa 5</a>
							<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
							<button type="button">Apply here!</button>
								<div class="morph-content">
								<div>
								<div class="content-style-text">
									<span class="icon icon-close"></span>
									<h2>General Instruction</h2>
									<p><strong>1. This Consolidated General Application Form (CGAF) is written in the English language. Enter
										legibly all the information required into the appropriate spaces on the form. If information required
										is not applicable with your application, please write “N/A” therein. Do not leave any item blank.
										The Bureau will not act on application forms that are accomplished incorrectly. All entries must
										be in CAPITAL LETTERS. Your answers must be in English and must use English characters
										only. Letters like ñ, é, ü, and ç are not recognized by the system. For instance, please enter
										names like “Muñoz” and “Sémonin” as “Munoz” and “Semonin”, respectively.</strong><br>
										<strong>2. The CGAF must be accomplished in duplicate [two (2) copies].</strong><br>
										<strong>3. All sworn statements or affidavit must be duly notarized.</strong><br>
										<strong>4. Documents executed outside the Philippines must be authenticated by the Philippine
										Embassy/Consular Officials of the Philippine foreign service at the place of issuance or nearest to
										it, with English translation, if written in other foreign language.</strong><br>
										<strong>5. All documents required for submission must be arranged in the order as listed hereunder,
										otherwise your application or petition cannot be processed immediately.</strong><br></p>
									<p align= "right"><input type="submit" value="Continue"></p> 
								</div>
								</div>
								</div>
						</div><!-- morph-button -->
					</div><br><br>
							<p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.</p>
						</div></div>
						
						<div class="mediabox">
							<a href="#">Immigrant Visa 6</a><div id="center">
							<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
							<button type="button">Apply here!</button>
								<div class="morph-content">
								<div>
								<div class="content-style-text">
									<span class="icon icon-close"></span>
									<h2>General Instruction</h2>
									<p><strong>1. This Consolidated General Application Form (CGAF) is written in the English language. Enter
										legibly all the information required into the appropriate spaces on the form. If information required
										is not applicable with your application, please write “N/A” therein. Do not leave any item blank.
										The Bureau will not act on application forms that are accomplished incorrectly. All entries must
										be in CAPITAL LETTERS. Your answers must be in English and must use English characters
										only. Letters like ñ, é, ü, and ç are not recognized by the system. For instance, please enter
										names like “Muñoz” and “Sémonin” as “Munoz” and “Semonin”, respectively.</strong><br>
										<strong>2. The CGAF must be accomplished in duplicate [two (2) copies].</strong><br>
										<strong>3. All sworn statements or affidavit must be duly notarized.</strong><br>
										<strong>4. Documents executed outside the Philippines must be authenticated by the Philippine
										Embassy/Consular Officials of the Philippine foreign service at the place of issuance or nearest to
										it, with English translation, if written in other foreign language.</strong><br>
										<strong>5. All documents required for submission must be arranged in the order as listed hereunder,
										otherwise your application or petition cannot be processed immediately.</strong><br></p>
									<p align= "right"><input type="submit" value="Continue"></p> 
								</div>
								</div>
								</div>
						</div><!-- morph-button -->
					</div><br><br>
							<p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip.</p>
						</div></div>
						<div class="clear"></div>
						
					</section>
					<section id="section-2">
						<div class="mediabox"><div id="left">
							<a href="#">Extension of Pre-arranged Employee-Commercial (Commercial)</a>
							<p>For foreign nationals who are existing holders of a Pre-arranged Employee – Commercial Visa and wishes to continue to his employment in the Philippines</p>
						</div></div>
						<div class="mediabox">
							<a href="#">Temporary Visa</a><div id="right">
							<p>A foreign national whose country does not have an existing reciprocity agreement with the Philippines</p>
						</div></div>
						<div class="mediabox"><div id="center">
							<a href="#">Conversion to Pre-arranged Employee-Commercial</a>
							<p>Foreign nationals who are proceeding to Philippines to engage in any lawful occupation, whether for wages or salary or other forms of compensation.</p>
						</div></div>
						<div class="clear"></div>
						
						<div class="mediabox">
							<a href="#">Special Work Permit</a>
							<p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
						</div>
						<div class="mediabox">
							<a href="#">Non-Immigrant Visa 6</a>
							<p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
						</div>
						<div class="mediabox">
							<a href="#">Non-Immigrant Visa 7</a>
							<p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
						</div>
						
					</section>
					<section id="section-3">
						<div class="mediabox">
							<a href="#">Special Visa 1</a>
							<p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.Sushi gumbo beet greens corn soko endive gumbo gourd.</p>
						</div>
						<div class="mediabox">
							<a href="#">Special Visa 2</a>
							<p>Sushi gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
						</div>
						<div class="mediabox">
							<a href="#">Special Visa 3</a>
							<p>Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
						</div>
					</section>
				</div><!-- /content -->
			</div><!-- /tabs -->
		</div>
		<script src="js/cbpFWTabs.js"></script>
		<script>
			new CBPFWTabs( document.getElementById( 'tabs' ) );
		</script>
		<!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_fixed.js"></script>
		<script>
			(function() {	
				var docElem = window.document.documentElement, didScroll, scrollPosition;
				scrollFn();
				
				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							noScroll();
						},
						
						onAfterClose : function() {
							canScroll();
						}
					} );
				} );
				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				var UIBtnn = new UIMorphingButton( document.querySelector( '.morph-button' ), {
					closeEl : '.icon-close',
					onBeforeOpen : function() {
						// don't allow to scroll
						noScroll();
					},
					
					onAfterClose : function() {
						// can scroll again
						
						canScroll();
						
					}
				} );
				 
				
			})();
		</script>
		
		