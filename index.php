<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EPSI'NOV</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Ladda Button -->
    <link rel="stylesheet" href="ladda/dist/ladda-themeless.min.css">
    <script src="ladda/dist/spin.min.js"></script>
    <script src="ladda/dist/ladda.min.js"></script>

</head>

<body>

    <!-- Content -->
    <div class="cd-hero">

        <!-- Navigation -->
        <div class="cd-slider-nav">
            <nav class="navbar">
                <div class="tm-navbar-bg">

                    <a class="navbar-brand text-uppercase" href="#">
                        <img class="imgmenu" onclick="goToMenu()" src="img/tm-img-06-tn.jpg">
                    </a>

                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link" id="goMenu" href="#0" data-no="1">Inspiration <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>

        <ul class="cd-hero-slider" id="allPage">

            <!-- Page 1 Gallery One -->
            <li class="selected" id="design1">
                <div class="cd-full-width">
                    <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                        <div class="tm-img-gallery-container">
                            
                        <a href="Selectall.php"> rechercher? </a>
                        <br>
                        <a href="showALL.php"> Afficher tous les médicaments </a> 
                            
                            
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- .cd-hero-slider -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-1a2bb42d-8912-410c-b224-12ff18e4f127"></div>

        <footer class="tm-footer">
            <br><br>
            <div class="tm-social-icons-container text-xs-center">
                <a href="https://www.facebook.com/EpsiNov-116762026744556/" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-link"><i class="fa fa-instagram"></i></a>
            </div>

            <p class="tm-copyright-text">Copyright &copy; 2020 Epsi Lille </p>

        </footer>

    </div> <!-- .cd-hero -->


    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">

        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
    <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
    <script src="js/hero-slider-main.js"></script> <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

    <script>
        //menu quand click sur epsi
        function goToMenu() {
            document.getElementById("goMenu").click();
        }

        function goBefore() {
            document.getElementById("goMenu").click();
        }

        $('input[type=checkbox]').on('change', function(e) {
            if ($('input[type=checkbox]:checked').length > 2) {
                $(this).prop('checked', false);
            }
        });

        //IA
        function UseIA() {
            var recyclage = document.getElementById("cb1").checked;
            var nature = document.getElementById("cb2").checked;
            var technologie = document.getElementById("cb3").checked;
            var voyage = document.getElementById("cb4").checked;
            var peche = document.getElementById("cb5").checked;
            var sante = document.getElementById("cb6").checked;
            var animaux = document.getElementById("cb7").checked;
            var sport = document.getElementById("cb8").checked;
            var reponse = document.getElementById("reponseIA");
            var innovation = "";

            // recyclage //
            if (recyclage && nature) {
                innovation = 'Récupération du miel d\'abeille et le réutiliser pour nettoyer en profondeur des surfaces via l\'action du sucre sur celles-ci';
                reponse.innerHTML = innovation;
            }
            if (recyclage && technologie) {
                innovation = 'Une technologie permettant d\'éliminer les contaminants présents dans les déchets plastiques afin de produire du polypropylène recyclé (équivalent à du polypropylène pure)';
                reponse.innerHTML = innovation;
            }
            if (recyclage && peche) {
                innovation = 'Utilisation d\'un aimant pour récupérer tous les hamecons et poids perdus au fond de l\'eau, afin de les recycler ou les revendre';
                reponse.innerHTML = innovation;
            }
            if (recyclage && animaux) {
                innovation = 'Récupération des escréments de certains animaux afin de créer des gaz de dispersion dans les manifestations';
                reponse.innerHTML = innovation;
            }
            if (recyclage && sante) {
                innovation = 'Recyclage des seringues utilisées dans les hopitaux pour permettre d\'en recréer ou bien de la verrerie';
                reponse.innerHTML = innovation;
            }
            if (recyclage && sport) {
                innovation = 'Récupération des lacets des chaussures, afin de faire de la corde, des vêtements, ou des élastiques';
                reponse.innerHTML = innovation;
            }
            if (recyclage && voyage) {
                innovation = 'Recyclage des photos de voyage, le tout en proposant de transformer ces photos papiers en formats numériques, hebergées gratuitement. Le papier peut servir à refaire du papier';
                reponse.innerHTML = innovation;
            }

            // nature //
            if (nature && technologie) {
                innovation = 'Une serre automatique qui peut planter les graines, récolter les fruits et les arroser automatiquement';
                reponse.innerHTML = innovation;
            }
            if (nature && peche) {
                innovation = 'Utilisation d\'un aimant pour récupérer tous les hamecons et poids perdus au fond de l\'eau, afin de les recycler ou les revendre.';
                reponse.innerHTML = innovation;
            }
            if (nature && animaux) {
                innovation = 'Récupération de la mue d\'animaux pour confectionner des vêtements en "peau de reptile"';
                reponse.innerHTML = innovation;
            }
            if (nature && sante) {
                innovation = 'Utilisation des plantes médicinales traditionnelles afin de recréer des concentrés de ces plantes permettant de se soigner facilement en suivant des techniques d\'antan';
                reponse.innerHTML = innovation;
            }
            if (nature && sport) {
                innovation = 'Création d\'un complexe sportif en peine aire, où toutes les activités physiques sont destinées à améliorer l\'environnement de l\'aire, comme le ramassage de feuille ou bien le déplacement de rochers';
                reponse.innerHTML = innovation;
            }
            if (nature && voyage) {
                innovation = 'Création d\'un site touristique qui ne propose que des destinations éco-responsables, ou chez des autochtones, afin de proposer des expériences uniques';
                reponse.innerHTML = innovation;
            }

            // technologie //

            if (technologie && peche) {
                innovation = 'Hamecon connecté permettant de déterminer à quelle distance de fil sont les poissons, et de quels types ils sont';
                reponse.innerHTML = innovation;
            }
            if (technologie && animaux) {
                innovation = 'Utilisation des signaux électrique du cerveau des animaux afin de pouvoir traduire leurs pensées et les synthétiser vocalement';
                reponse.innerHTML = innovation;
            }
            if (technologie && sante) {
                innovation = 'Création de puces à intégrer directement sur les personnes afin d\'avoir tout le dossier médical du patient lors des opérations d\'urgence à l\'hopital';
                reponse.innerHTML = innovation;
            }
            if (technologie && sport) {
                innovation = 'Gilet de sauvetage qui une fois dans l\'eau émet un infrason repoussant les requins ou animaux dangereux';
                reponse.innerHTML = innovation;
            }
            if (technologie && voyage) {
                innovation = 'Une balise intégrée aux sièges des avions afin de retrouver le lieu du crash et les survivants';
                reponse.innerHTML = innovation;
            }

            // pêche //
            if (peche && animaux) {
                innovation = 'Une pêche utilisant un hameçon électrique permettant aux poissons de ne pas ressentir la douleur, ou bien de la pâte permettant d\'endormir la zone du poisson qui est attachée';
                reponse.innerHTML = innovation;
            }
            if (peche && sante) {
                innovation = 'Utilisation de peaux mortes de poisson pour soigner des brûlures';
                reponse.innerHTML = innovation;
            }
            if (peche && sport) {
                innovation = 'Poids pour lester une canne à pêche afin de muscler l\'utilisateur durant sa pêche';
                reponse.innerHTML = innovation;
            }
            if (peche && voyage) {
                innovation = 'Canne à pêche gonflable pour permettre de la déplacer où l\'on souhaite';
                reponse.innerHTML = innovation;
            }

            // animaux //
            if (animaux && sante) {
                innovation = 'Utilisation des chiens pour detecter les cancers';
                reponse.innerHTML = innovation;
            }
            if (animaux && sport) {
                innovation = 'Association de promenade des chiens de la SPA';
                reponse.innerHTML = innovation;
            }
            if (animaux && voyage) {
                innovation = 'Création de moyen de transport destinés aux animaux, comme une moto avec un siège canin';
                reponse.innerHTML = innovation;
            }

            // santé //

            if (sante && sport) {
                innovation = 'Création d\'une chaise connectée permettant d\'envoyer des ondes électriques passivement sur le corps, rendant le corps engourdit et forçant l\'utilisateurs à se déplacer et bouger pour sa santé';
                reponse.innerHTML = innovation;
            }
            if (sante && voyage) {
                innovation = 'Un sac à dos convertible en fauteuil roulant';
                reponse.innerHTML = innovation;
            }

            // sport //
            if (sport && voyage) {
                innovation = 'Un sac à dos convertible en trotinette ou en d\'autres moyens de locomotion';
                reponse.innerHTML = innovation;
            }
        }

        //LADDA 
        Ladda.bind('button[type=submit]', {
            callback: function(instance) {
                var progress = 0;
                var interval = setInterval(function() {
                    progress = Math.min(progress + Math.random() * 0.2, 1); //0.1, 1);
                    instance.setProgress(progress);

                    if (progress === 1) {
                        instance.stop();
                        clearInterval(interval);
                        if ($('input[type=checkbox]:checked').length < 2) {
                            $(this).prop('checked', false);
                            alert('Veuillez choisir d\'autres thèmes pour plus de cohérence.');
                        } else {
                            UseIA();
                            document.getElementById("resultatclick").click();
                        }
                    }
                }, 200);
            }
        });
        // END LADDA

        function adjustHeightOfPage(pageNo) {

            var offset = 80;
            var pageContentHeight = 0;

            var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

            if (pageType != undefined && pageType == "gallery") {
                pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container")
                    .height();
            } else {
                pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() +
                    20;
            }

            if ($(window).width() >= 992) {
                offset = 120;
            } else if ($(window).width() < 480) {
                offset = 40;
            }

            // Get the page height
            var totalPageHeight = $('.cd-slider-nav').height() +
                pageContentHeight + offset +
                $('.tm-footer').height();

            // Adjust layout based on page height and window height
            if (totalPageHeight > $(window).height()) {
                $('.cd-hero-slider').addClass('small-screen');
                $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
            } else {
                $('.cd-hero-slider').removeClass('small-screen');
                $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
            }
        }

        /*
            Everything is loaded including images.
        */
        $(window).load(function() {

            adjustHeightOfPage(1); // Adjust page height

            /* Gallery One pop up
            -----------------------------------------*/
            $('.gallery-one').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Gallery Two pop up
            -----------------------------------------*/
            $('.gallery-two').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Gallery Three pop up
            -----------------------------------------*/
            $('.gallery-three').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Collapse menu after click 
            -----------------------------------------*/
            $('#tmNavbar a').click(function() {
                $('#tmNavbar').collapse('hide');

                adjustHeightOfPage($(this).data("no")); // Adjust page height       
            });



            /* Browser resized 
            -----------------------------------------*/
            $(window).resize(function() {
                var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data(
                    "page-no");

                // wait 3 seconds
                setTimeout(function() {
                    adjustHeightOfPage(currentPageNo);
                }, 1000);

            });

            // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
            $('body').addClass('loaded');

        });
    </script>
</body>

</html>