<script type="text/javascript">
<!--//
function sizeFrame(frameId) {

var F = document.getElementById(frameId);
if(F.contentDocument) {
F.height = F.contentDocument.documentElement.scrollHeight+30; //FF 3.0.11, Opera 9.63, and Chrome
} else {



F.height = F.contentWindow.document.body.scrollHeight+30; //IE6, IE7 and Chrome

}

}

// window.onload=sizeFrame; 

//-->
</script>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */

?>          
            
            <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
                  <?php
                    echo "<li><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
                    echo "<li class=\"active\"><a href=\"./index.php?r=site%2Fmy-visa\">My Visa Transaction</a></li>" ;
                    echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
                  ?>                   
                </ul>
              </div>
   </div>
</div>   

            <link rel="stylesheet" type="text/css" href="css/sidebar.css" />
            <script src="js/sidebar.js"></script>

      <div class="about">
      <div class="wrap">
         <div class="top-head">
            <h3>My Visa Application</h3>
            <ul>
               <li><a href="index.php">Home / </a></li>
               <li><a href="./index.php?r=site%2Fmy-account"><span>My Visa Application</span></a></li>
            </ul>
         </div>

         <br>

         <iframe width="100%" id="myFrame" src="./index.php?r=services%2Findex&ServicesSearch%5Buser_id%5D=<?= $model->id?>" scrolling="no" frameborder="0" onload="sizeFrame('myFrame')">
			An iframe capable browser is
			required to view this web page.
			</iframe>

         <br>
      </div>
      </div>

 
