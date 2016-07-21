<?php
/**
 * Created by PhpStorm.
 * User: prolab1
 * Date: 7/14/16
 * Time: 11:20 AM
 */
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Html;

?>
<?php $this->beginContent('@backend/views/layouts/main.php'); ?>
    <div class="container">
        <div class="left col-md-2">
            <div class="row">
                <?php NavBar::begin([
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-left',
                    ],
                ]);
                $menuItems = [
                    ['label' => 'Sites', 'url' => ['/site/index']],
                ];
                if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                } else {
                    $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                echo Nav::widget([
                    'options' => ['class' => 'nav navbar-left'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>
            </div>
        </div>
        <?= $content ?>
    </div>
<?php $this->endContent(); ?>