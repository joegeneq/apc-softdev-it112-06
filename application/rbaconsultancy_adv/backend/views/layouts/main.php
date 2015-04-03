<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\icons\Icon;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'RBA Consultancy and General Services',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => Icon::show('home') . 'Home', 'url' => ['/site/index']],
            ];

            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => Icon::show('leaf') . 'Login', 'url' => ['/site/login']];
            } elseif (Yii::$app->user->can('access-backend')) {
                $menuItems = [
                    ['label' => Icon::show('home') . 'Home', 'url' => ['/site/index']],
                    ['label' => Icon::show('tower') . 'Administration', 'items' => [
                        ['label' => Icon::show('user') . 'Users', 'url' => ['/user/index']],
                        ['label' => Icon::show('plane') . 'Visa Transactions', 'url' => ['/services/index']],
                        ['label' => Icon::show('list') . 'Services List', 'url' => ['/servicelist/index']],
                        ['label' => Icon::show('list-alt') . 'Requirements List', 'url' => ['/requirementslist/index']],
                        ['label' => Icon::show('folder-open') . 'Requirements Per User', 'url' => ['/requirementsperuser/index']],
                        ['label' => Icon::show('dashboard') . 'Price List', 'url' => ['/pricelist/index']]
                    ]],
                    ['label' => Icon::show('leaf') . 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']],
                ];
            }
            
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
                'encodeLabels' => false,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; RBA Consultancy and General Services <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
