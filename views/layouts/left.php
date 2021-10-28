<?php

/** @var \yii\web\View $this */
/** @var string $directoryAsset */
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= \yii\helpers\Html::a('<img class="brand-image img-circle elevation-3" src="' . ($directoryAsset . '/img/AdminLTELogo.png') . '" alt="APP"><span class="brand-text font-weight-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <div class="sidebar">

        <nav class="mt-2">
            <?= dmstr\adminlte\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
                    'items' => [
                        ['label' => 'Menu Yii2', 'header' => true],
                        ['label' => 'User Management', 'iconType' => 'far', 'icon' => 'nav-icon fas fa-folder', 'url' => ['/gii'],
						      'items' => [
                                ['label' => 'Create Users', 'iconType' => 'far', 'icon' => 'user', 'url' => ['/gii'],],
                                ['label' => 'Create Profiles', 'icon' => 'far fa-circle nav-icon', 'url' => ['/debug'],],
								['label' => 'Assign roles', 'icon' => 'users', 'url' => ['/debug'],],                           
                          ],
						 ],
						 ['label' => 'Reports', 'iconType' => 'far', 'icon' => 'nav-icon fas fa-table', 'url' => ['/gii'],
						      'items' => [
                                ['label' => 'Create Users', 'iconType' => 'far', 'icon' => 'user', 'url' => ['/gii'],],
                                ['label' => 'Create Profiles', 'icon' => 'far fa-circle nav-icon', 'url' => ['/debug'],],
								['label' => 'Assign roles', 'icon' => 'users', 'url' => ['/debug'],],                           
                          ],
						 ],
                        ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug'], 'visible' => Yii::$app->user->isGuest],
                        ['label' => 'Login', 'icon' => 'tachometer-alt','url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                       ],
                ]
            ) ?>
        </nav>

    </div>

</aside>
