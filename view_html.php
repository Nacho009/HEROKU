<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portafolio | Andres Lobaton</title>
    <meta name="description" content="Curriculum o portafolio para reclutadores empresas que quieren hacer un con contrato de trabajo con migo como desarrollador">
    <meta name="keywords" content="Curriculum o portafolio para reclutadores empresas que quieren hacer un con contrato de trabajo con migo como desarrollador">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="Portafolio Currilulum - Andres Lobaton ">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Portafolio Currilulum - Andres Lobaton ">
    <meta property="og:description" content="Currilulum o portafolio para reclutadores empresas que quieren hacer un con contrato de trabajo con migo como desarrollador">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@portafolioandreslobaton">
    <meta name="twitter:title" content="@portafolioandreslobaton">
    <meta name="twitter:description" content="currilulum o portafolio para reclutadores empresas que quieren hacer un con contrato de trabajo con migo como desarrollador">
    <meta name="twitter:image" content="">
    <!-- favicon -->
    <link rel="icon" href="img/logo_front.png" type="image/png" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>
        const url = `https://statistics-web-pages.herokuapp.com/tracking/${location.hostname}`;
        function makeRequest(data){
            fetch(url,{
                method: 'POST',
                body: JSON.stringify(data),
                headers:{
                    "Content-Type":"application/json"
                }
            })
        }
        function clickProject(e) {
            const name = e.target.dataset.project;
            const type = e.target.dataset.type;
            makeRequest({ interactions:[ { name: `${name}__${type}` } ] })

        }
        document.addEventListener('DOMContentLoaded',()=> makeRequest({}))
    </script>
</head>

<body>

    <div class="loader"></div>
    <div id="myDiv">
        <!--HEADER-->
        <div class="header">
            <div class="bg-color">
                <header id="main-header">
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="https://www.linkedin.com/in/aflobaton/" target="_blank">Andres Lobaton<span class="logo-dec"></span></a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#main-header">Inicio</a></li>
                                    <li class=""><a href="#about">About me</a></li>
                                    <li class=""><a href="#habilidades">Technologies</a></li>
                                    <li class=""><a href="#portafolio">Portfolio</a></li>
                                    <li class=""><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <span id="put-br"></span>

                <div class="wrapper mt-sm-4">
                    <div class="container">
                        <div class="row">
                            <div class="banner-info mt-sm-4 text-center wow fadeIn delay-05s">
                                <h1 class="bg-info bnr-title mt-sm-4">
                                    <h1 class="" style="margin-top: 5%;"><span>Software Developer</span> </h1><span></span>
                                </h1>
                                <h3 class=" bnr-sub-title"><span style="margin:auto 2% auto 2%;"> "Build us amazing things "</span></h3><br />
                                <p class="bnr-para">-- FullStack Developer --</p>

                                <div class="brn-btn">

                                    <a href="#contact" class="btn btn-more">Contacto <i class="fa fa-angle-down"></i></a>
                                </div>
                                <div class="overlay-detail">
                                    <a href="#feature"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ HEADER-->
        <!--Seccion-->
        <section id="about" class="section-padding wow fadeInUp delay-05s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class=" service-title mt-3 pad-bt15">About me</h2>
                        <hr class="bottom-line">
                        <p class="sub-title pad-bt15 text-justify">
                            My name is Andres. I am a web programmer from Colombia, currently living in Bogotá.
                            I am coursing my first year of college in informatic eingeeniring, with a background in technical software programming.
                            I am a full stack developer, with a strong interest in web development, and I am always looking for new challenges.
                        </p>
                        <p class="sub-title pad-bt15 text-justify">
                            I have around 3 years of experience in the field of web development in companies and building personal projects and I have worked with a variety of technologies.
                            My focus is on Javascript, Nest JS, Angular JS, NodeJS, create API's, I have worked with the SCRUM methodology, and I have experience with the agile methodology.
                        </p>
                        <p class="sub-title pad-bt15 text-justify">
                            I love learning new technologies, I could help you to build a new product or a new service only contact me foe discouse what do you need.
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <h3></h3>
                            <div></div>
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="habilidades">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="put_br"></span>
                        <span id="put-br1"></span>

                        <h2 class="service-title margin_1">Technologies</h2>
                    </div>
                    <!---->
                    <section id="featur" class="section-padding wow fadeIn delay-05s">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="wrap-item text-center">
                                        <h3 class="pad-bt15 ">Front-end</h3>
                                        <div class="item-img">
                                            <img style="width:100px;height:100px;" src="img/logo_front.png">
                                        </div>
                                        <ol>
                                            <li type="circle" class="pad-bt15 text-left">HTML</li>
                                            <li type="circle" class="pad-bt15 text-left">CSS</li>
                                            <li type="circle" class="pad-bt15 text-left">BOOTSTRAP4</li>
                                            <li type="circle" class="pad-bt15 text-left">JAVASCRIPT</li>
                                            <li type="circle" class="pad-bt15 text-left">AJAX</li>
                                            <li type="circle" class="pad-bt15 text-left">VUE JS</li>
                                            <li type="circle" class="pad-bt15 text-left">REACT JS</li>
                                            <li type="circle" class="pad-bt15 text-left">ANGULAR JS</li>

                                        </ol>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="wrap-item text-center">
                                        <h3 class="pad-bt15 text-center">Back-end</h3>
                                        <div class="item-img">
                                            <img style="width:100px;height:100px;" src="img/logo_back.png">
                                        </div>
                                        <ul>
                                            <li type="circle" class="pad-bt15 text-left">PHP (MVC - POO)</li>
                                            <li type="circle" class="pad-bt15 text-left">JAVA EE (JSP - Servlets)</li>
                                            <li type="circle" class="pad-bt15 text-left">NODE JS
                                                <ul>
                                                    <li type="circle">API REST- NPM</li>
                                                    <li type="circle">NestJS</li>
                                                    <li type="circle">ORMS (Sequelize - TypeOrm)</li>
                                                </ul>
                                            </li>
                                            <li type="circle" class="pad-bt15 text-left">PYTHON (PIP - POO - PANDAS) </li>
                                            <li type="circle" class="pad-bt15 text-left">MYSQL
                                                <ul>
                                                    <li type="circle">Views</li>
                                                    <li type="circle">Stored Procedures</li>
                                                    <li type="circle">Triggers</li>
                                                </ul>
                                            </li>
                                            <li type="circle" class="pad-bt15 text-left">
                                                <strong>In Addition:</strong>
                                                <ul>
                                                    <li type="circle" class="pad-bt15 text-left">LARAVEL with php</li>
                                                    <li type="circle" class="pad-bt15 text-left">FLASK with python </li>
                                                    <li type="circle" class="pad-bt15 text-left">DJANGO with python </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-6 col-xs-12">
                                    <div class="wrap-item text-center">
                                        <h3 class="pad-bt15 text-center">Others</h3>
                                        <div class="item-img">
                                            <img style="width:100px;height:100px;" src="img/github.png">
                                        </div>
                                        <ul>
                                            <li type="circle" class="pad-bt15 text-left">GIT</li>
                                            <li type="circle" class="pad-bt15 text-left">GITHUB - GITLAB</li>
                                            <li type="circle" class="pad-bt15 text-left">DISTRIBUITED SYSTEMS (Hadoop - Spark | Manage de cloudera) <small class="text-muted">(Basic Level)</small></li>
                                            <li type="circle" class="pad-bt15 text-left">
                                                <strong>Operatives System</strong>
                                                <ul>
                                                    <li type="circle">Linux </li>
                                                    <li type="circle">Windows</li>
                                                </ul>
                                            </li>
                                            <li type="circle" class="pad-bt15 text-left">
                                                <strong>Amazon Web Services (AWS)</strong>
                                                <ul>
                                                    <li type="circle">Api Gateway</li>
                                                    <li type="circle">Lambda</li>
                                                    <li type="circle">Secrets</li>
                                                    <li type="circle">CloudWatch</li>
                                                    <li type="circle">EC2 - ECR - ECS</li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <br>
                    <br>
                    <!---->
                    <section id="portafolio" class="section-padding wow fadeInUp delay-05s">
                        <div class="container cont">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="service-title pad-bt15">My Projects</h2>

                                    <hr class="bottom-line">
                                </div>
                                <!-- inicio -->
                                <?php $proyectos = file_get_contents("datos.json");
                                $proyectos = json_decode($proyectos, false);
                                foreach ($proyectos as $proyecto) : ?>
                                    <div class="col-md-4 col-sm-6  col-xs-12  ">
                                        <div class="border">
                                            <div class="blog-sec">
                                                <h3 style="text-align:center;margin:19px auto"><?= $proyecto->title ?></h3>
                                                <div class="blog-img">
                                                    <a href="<?= ($proyecto->urlproject != NULL) ? $proyecto->urlproject : "" ?>" target="_blank">
                                                        <img alt="<?= $proyecto->urlimg ?>" style="border-radius: 1%;" src="<?= $proyecto->urlimg ?>" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="blog-info">
                                                    <p class="p"><?= $proyecto->subtitle ?></p>
                                                    <p class="p"><?= $proyecto->description ?></p>
                                                    <p class="p"><strong>Used technologies:</strong> <?= $proyecto->technologies ?></p>
                                                    <p class="p"><?= $proyecto->date ?></p>
                                                    <?php if ($proyecto->urlvideo) : ?>
                                                        <p>
                                                            <a style="text-decoration:underline" href="<?= $proyecto->urlvideo ?>" target="_blank">Watch the tutorial</a>
                                                        </p>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <div class="space-bottom">
                                                <div class="m-w-100">
                                                    <?php if ($proyecto->urlproject) : ?>
                                                        <a href="<?= $proyecto->urlproject ?>" onclick="clickProject(event)" data-project="<?= $proyecto->title ?>" data-type="sitio" target="_blank" class="btn btn-success">See site (Online) →</a>
                                                    <?php endif ?>
                                                    <?php if ($proyecto->urlcode) : ?>
                                                        <a href="<?= $proyecto->urlcode ?>" onclick="clickProject(event)" data-project="<?= $proyecto->title ?>" data-type="codigo" target="_blank" class="btn btn-info m-align-right">See code →</a>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- fin -->

                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!---->
            <!---->
            <section id="contact" style="width:100%" class="section- wow fadeInUp delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center white">
                            <br>
                            <br>

                            <h2 class="service-ttle pad-bt15">My Info</h2>
                            <hr class="bottom-line white-bg">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="loction-info text-light white">
                                <p><em class="fa fa-map-marker fa-fw pull-left fa-2x"></em>Bogotá - Colombia</p>
                                <p><em class="fa fa-envelope-o fa-fw pull-left fa-2x"></em><span id="correo"></span></p>
                                <p><em class="fa fa-phone fa-fw pull-left fa-2x"></em><span id="celular"></span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="loction-info white">
                                <p>
                                    <a href="https://github.com/Lobaton2020/" target="_blank" style="color:white;text-decoration:underline"> <img style="width:50px;height:50px;" src="img/github.png" alt=""></a>
                                    <a href="https://github.com/Lobaton2020/" target="_blank" style="color:white;text-decoration:none">&nbsp;&nbsp;&nbsp; https://github.com/Lobaton2020/</a>
                                </p>
                                <p>
                                    <a href="https://www.linkedin.com/in/aflobaton/" target="_blank" style="color:white;text-decoration:underline"> <img style="width:50px;height:50px;" src="img/linkedin.png" alt=""></a>
                                    <a href="https://www.linkedin.com/in/aflobaton/" target="_blank" style="color:white;text-decoration:none">&nbsp;&nbsp;&nbsp; <span>https://www.linkedin.com/in/aflobaton/</span></a>
                                </p>
                                <p>
                                    <a href="Quiz/">.</a>
                                </p>

                            </div>
                        </div>

                        <h2 class="service-ttle pad-bt15 text-center white">Contact me!!</h2>
                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <?php if (isset($_GET["message"])) {
                                    switch ($_GET["message"]) {
                                        case "ok":
                                            echo '<div class="alert alert-success">Tu mensage ha sido enviado. Gracias!</div>';
                                            break;
                                        case "bad":
                                            echo '<div class="alert alert-danger">Los sentimos, el mensaje no se pudo enviar.</div>';
                                            break;
                                        default;
                                            echo '<div class="alert alert-danger">Los sentimos, hubo un error.</div>';
                                    }
                                } ?>
                                <form action="https://tomanota.000webhostapp.com/formHeroku/envioDatos.php" method="post" role="form" class="contactForm">
                                    <div class="col-md-6 padding-right-zero">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Por favor ingresa al menos 4 caracteres" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Por favor ingresa un email valido" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Title or topic" data-rule="minlen:4" data-msg="Por favor ingresa al menos 8 caracteres para el titulo ó tema" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribenos algo" placeholder="Ask me wherever"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block btn-submit" style="margin-bottom: 5%;">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
    </div>
    </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row text-center">
                <p>&copy; copyright Andres Lobaton <span id="year1"></span></p>

            </div>
        </div>

    </footer>


    <!---->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/contactform.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.innerWidth < 768) {
                document.querySelector("#put-br").innerHTML = "<br><br><br><br><br>";

                var num_class = document.querySelectorAll(".put_br");
                document.getElementsByClassName("margin_1")[0].style.marginBottom = "-10%";

                for (let i = 0; i < num_class.length; i++) {
                    num_class[i].innerHTML = "<br><br><br>";
                }
            } else {
                document.querySelector("#put-br1").innerHTML = "<br><br><br>";
            }

            document.querySelector("#year1").innerHTML = new Date().getFullYear();
        });
    </script>
</body>

</html>