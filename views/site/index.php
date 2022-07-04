<?php

/** @var yii\web\View $this */

$this->title = 'ElderSoft your Elder Protection';
use practically\chartjs\Chart;

echo Chart::widget([
    'type' => Chart::TYPE_BAR,
    'datasets' => [
        [
            'data' => [
                'Label 1' => 10,
                'Label 2' => 20,
                'Label 3' => 30
            ]
        ]
    ]
]);
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully entered the ElderSoft testing Programm.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">More about ElderSoft</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Documentation</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">ElderSoft Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Forum</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">ElderSoft Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Extemsions</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">ElderSoft Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
