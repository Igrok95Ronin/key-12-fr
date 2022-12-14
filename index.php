<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Serrurier'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? 'à proximité'));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="locksmith">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="locksmith__box">
                            <h1 class="locksmith__title"><?= $title ?></h1>
                            <div class="locksmith__inner">
                                <div class="locksmith__left">
                                    <img class="locksmith__img" src="./assets/img/aufsperrdienst.jpeg" alt="">
                                </div>
                                <div class="locksmith__right">
                                    <img class="locksmith__img" src="./assets/img/tueroeffnung.jpeg" alt="">
                                </div>
                            </div>
                            <p class="locksmith__dscr">Serrurier dépannage</p>
                            <p class="locksmith__dscr">Porte fermée? Serrure cassé?</p>
                            <div class="locksmith__wrapper">
                                <a class="locksmith__btn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="services__title">Serrurier Services:</h2>
                        <div class="services__box">
                            <ul>
                                <li class="services__list">🔑 Remplacement de serrure</li>
                                <li class="services__list">🔑 Remplacement de canon</li>
                                <li class="services__list">🔑 Blindage de porte</li>
                                <li class="services__list">🔑 Porte blindée</li>
                                <li class="services__list">🔑 Perte et vol de clé</li>
                                <li class="services__list">🔑 Effraction - Cambriolage</li>
                                <li class="services__list">🔑 Ouverture de porte</li>
                                <li class="services__list">🔑 Changer serrure porte</li>
                                <li class="services__list">🔑 Porte blindée</li>
                                <li class="services__list">🔑 Changer barillet porte</li>
                                <li class="services__list">🔑 Boite à clé bloquée</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="locksmith2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="locksmith2__box">
                            <div class="locksmith2__left">
                                <h2 class="locksmith2__title">Serrurier <?= $city ?>
                                    dépannage 24-7 24h/24</h2>
                                <p class="locksmith2__dscr">
                                    En tant que Serrurier <span><?= $city ?></span> nous assurons la plus grande sécurité
                                    pour votre maison ou votre local. Faites appel à notre serrurier qualifié et honnête
                                    pour une ouverture de porte, un changement de serrure ou une installation de porte
                                    blindée.
                                </p>
                            </div>
                            <div class="locksmith2__right">
                                <img class="locksmith2__img" src="./assets/img/119.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="change">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="change__box">
                            <h2 class="change__title">Changement de serrure <?= $city ?></h2>
                            <p class="change__dscr">Il est nécessaire de changer la serrure régulièrement, surtout si
                                vous vous rendez compte que votre serrure est défectueuse. Il est également important de
                                nous faire appel, Serrurier <span><?= $city ?></span> , pour changer votre serrure.</p>
                            <p class="change__dscr">Il est toujours mieux de confier le changement de serrure à un
                                serrurier confirmé. Nos artisans serruriers sont des experts et vous propose des
                                prestations de changement de serrures adaptées à vos besoins et – surtout – résistantes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="team__title">Notre équipe serrurier</h2>
                        <div class="team__box">
                            <div class="team__inner">
                                <div class="team__wrapper">
                                    <img class="team__img" src="./assets/img/1master3.jpg" alt="">
                                </div>
                                <div class="team__wrapper2">
                                    <p class="team__name">Olivier Rousseau</p>
                                    <p class="team__age">32 ans</p>
                                    <p class="team__dol">Expert:<span>Ouverture de porte</span></p>
                                    <p class="team__loc"><img class="team__min-img" src="./assets/img/min.png" alt="" >Proximité</p>
                                </div>
                            </div>
                            <div class="team__inner">
                                <div class="team__wrapper">
                                    <img class="team__img" src="./assets/img/2master2.jpg" alt="">
                                </div>
                                <div class="team__wrapper2">
                                    <p class="team__name">Alex  Rousseau</p>
                                    <p class="team__age">41 ans</p>
                                    <p class="team__dol">Expert:<span>Changement de serrrure</span></p>
                                    <p class="team__loc"><img class="team__min-img" src="./assets/img/min.png" alt="" >Proximité</p>
                                </div>
                            </div>
                            <div class="team__inner">
                                <div class="team__wrapper">
                                    <img class="team__img" src="./assets/img/3master1.jpg" alt="">
                                </div>
                                <div class="team__wrapper2">
                                    <p class="team__name">Paul Bernard</p>
                                    <p class="team__age">41 ans</p>
                                    <p class="team__dol">Expert:<span>Ouverture Coffre fort</span></p>
                                    <p class="team__loc"><img class="team__min-img" src="./assets/img/min.png" alt="" >Proximité</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="min">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="min__title">Intervention serrurier 20 - 30 min. <?= $city ?></h2>
                        <div class="min__box">
                            <div class="min__inner">
                                <img class="min__img" src="./assets/img/11.png" alt="" >
                                <p class="min__name">Expliquez-nous votre problème</p>
                            </div>
                            <div class="min__inner">
                                <img class="min__img" src="./assets/img/22.png" alt="" >
                                <p class="min__name">Obtenez un prix d'intervention fixe</p>
                            </div>
                            <div class="min__inner">
                                <img class="min__img" src="./assets/img/33.png" alt="" >
                                <p class="min__name">Le meilleur serrurier chez vous en 30 Min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ambulance">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="ambulance__box">
                            <h2 class="ambulance__title">En urgence par téléphone</h2>
                            <a class="ambulance__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="images">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="images__box">
                            <img class="images__img" src="./assets/img/111schluesseldienst.jpeg" alt="" >
                            <img class="images__img" src="./assets/img/222schliesszylinder.jpeg" alt="" >
                            <img class="images__img" src="./assets/img/333einbruchschutz.jpeg" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="partners">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="partners__title">Serrurier partenaire</h2>
                        <div class="partners__box">
                            <img class="partners__logo" src="./assets/img/1logo.jpg" alt="" >
                            <img class="partners__logo" src="./assets/img/2logo.png" alt="" >
                            <img class="partners__logo" src="./assets/img/4logo.jpg" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">Copyright © 2022</div>
                <a class="ambulance__btn fixed" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
</body>

</html>