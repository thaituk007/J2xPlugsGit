<?php
$this->title = 'J2xPlugs';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>J2xPlugs Version 20191122.x001</title>
  <!-- Bootstrap core CSS -->
  <link href="css/fonts.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
</head>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user3-128x128.jpg" class="img-circle animated fadeInUp" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <a href="#"><i class="fa fa-hospital-o text-success"></i></a>
                <a href="#"><i class="fa fa fa-cloud text-success"></i>Online >> พร้อมใช้งาน</a>

            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [



                    ['label' => 'ตรวจสอบแฟ้มมาตรฐาน',
                    'icon' => 'book',
                    'url' => '#',
                    'items' => [
                    ['label' => 'PERSON', 'icon' => 'barcode', 'url' => ['/debug'],],
                    ['label' => 'CHRONIC', 'icon' => 'beer', 'url' => ['/debug'],],
                    ['label' => 'DEATH', 'icon' => 'bomb', 'url' => ['/debug'],],
                    ['label' => 'HOME', 'icon' => 'building', 'url' => ['/debug'],],
                    ['label' => 'VILLAGE', 'icon' => 'building', 'url' => ['/debug'],],
                    ['label' => 'CARD', 'icon' => 'barcode', 'url' => ['/debug'],],
                    ['label' => 'WOMEN', 'icon' => 'barcode', 'url' => ['/debug'],],
                    ['label' => 'PRENATAL', 'icon' => 'barcode', 'url' => ['/debug'],],
                    ['label' => 'CARD', 'icon' => 'barcode', 'url' => ['/debug'],],
                    ['label' => 'PROVIDER', 'icon' => 'bookmark', 'url' => ['/debug'],],
                    ],
                    ],
                    [
                        'label' => 'เครื่องมือ (System Tools)',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/debug']],
                    ['label' => 'Line Notify PHP', 'icon' => 'comment', 'url' => ['/site/line'],],
                    ['label' => 'Highcharts', 'icon' => 'bars', 'url' => ['/highcharts'],],
                    ['label' => 'BUGS Reports', 'icon' => 'bug', 'url' => ['/debug']],

                    ['label' => 'ปฏิทินกิจกรรม',
                    'icon' => 'calendar',
                    'url' => '#',
                    'items' => [
                    ['label' => 'QOF', 'icon' => 'check', 'url' => ['/debug'],],
                    ['label' => 'Fee-Schedule-2563', 'icon' => 'check', 'url' => ['/debug'],],
                    ['label' => 'KPI', 'icon' => 'bolt', 'url' => ['/debug'],],
                    ],
                    ],
                    ['label' => 'cURL COVID-19', 'icon' => 'comment', 'url' => ['/site/ccurl'],],
                    ['label' => 'WTTR.in', 'icon' => 'comment', 'url' => ['/site/wttr'],],
                    ['label' => 'ผู้พัฒนา', 'icon' => 'facebook', 'url' => ['site/about'],],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>
    </section>

</aside>
