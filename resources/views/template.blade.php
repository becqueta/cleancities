<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cleancities</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/agency.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{url('/')}}#page-top">Cleancities</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="{{url('/')}}#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/')}}#about">A quoi ça sert?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/')}}#team">Qui sommes nous?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/')}}#contact">Call me maybe</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    @yield('main')
       <!-- About Section -->
    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A quoi ça sert?</h2>
                    <h3 class="section-subheading text-muted">Signale tes problèmes via l'application, ta mairie sera mise au courant et les corrigera. Facile non?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{url('img/about/1.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>7h59 Lundi 23/11</h4>
                                    <h4 class="subheading">Martin se rend au boulot en vélo.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Fatigué après son startup weekend Martin tombe à cause d'un nid de poule sur la piste cyclable.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{url('img/about/2.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>8h02 Lundi 23/11</h4>
                                    <h4 class="subheading">Martin agit</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">En sang et lassé de se faire secouer la choucroute tous les matins par ce fichu trou il décide de le signaler à sa mairie avec l'application Cleancities. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{url('img/about/3.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>8h03 Lundi 23/11</h4>
                                    <h4 class="subheading">Norbert - CEO des voies cyclables de grenoble</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Son dashboard Cleancities lui notifie qu'un incident a été remonté sur une des pistes cyclables de Grenoble.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{url('img/about/4.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>8h04 Lundi 23/11</h4>
                                    <h4 class="subheading">Norbert agit</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Norbert envoie l'équipe d'intervention la plus proche pour boucher le trou signalé par Martin. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{url('img/about/1.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>18h00 Lundi 23/11</h4>
                                    <h4 class="subheading">Martin rentre du boulot</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Il constate que le trou qu'il a signalé ce matin a été bouché.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Cleancities
                                    <br>Une ville propre
                                    <br>et sexy</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 text-center">
                   <h2 class="section-heading">Qui sommes nous?</h2>
                   <h3 class="section-subheading text-muted">Les 7 fantastiques de CleanCities</h3>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-3">
                   <div class="team-member">
                       <img src="{{url('img/team/Remi.JPG')}}" class="img-responsive img-circle" alt="">
                       <h4>Rémi</h4>
                       <p class="text-muted">"The Head"</p>

                   </div>
               </div>
               
               
               <div class="col-sm-3">
                   <div class="team-member">
                       <img src="{{url('img/team/Micky.JPG')}}" class="img-responsive img-circle" alt="">
                       <h4>Micky</h4>
                       <p class="text-muted">"The Urbaniste"</p>

                   </div>
               </div>
               
               
               <div class="col-sm-3">
                   <div class="team-member">
                       <img src="{{url('img/team/Damien.JPG')}}" class="img-responsive img-circle" alt="">
                       <h4>Damien</h4>
                       <p class="text-muted">"The Businessman"</p>

                   </div>
               </div>
                               <div class="col-sm-3">
                   <div class="team-member">
                       <img src="{{url('img/team/nonot.jpg')}}" class="img-responsive img-circle" alt="">
                       <h4>Nonot</h4>
                       <p class="text-muted">"The Sticker"</p>

                   </div>
               </div>
               
               <div class="col-sm-4">
                   <div class="team-member">
                       <img src="{{url('img/team/Arnaud.jpg')}}" class="img-responsive img-circle" alt="">
                       <h4>Arnaud</h4>
                       <p class="text-muted">"The Developper"</p>

                   </div>
               </div>
               
               <div class="col-sm-4">
                   <div class="team-member">
                       <img src="{{url('img/team/Maxence.JPG')}}" class="img-responsive img-circle" alt="">
                       <h4>Maxence</h4>
                       <p class="text-muted">"The other Developper"</p>

                   </div>
               </div>
               
               <div class="col-sm-4">
                   <div class="team-member">
                       <img src="{{url('img/team/Yann.JPG')}}" class="img-responsive img-circle" alt="">
                       <h4>Yann</h4>
                       <p class="text-muted">"The Graphist"</p>

                   </div>
               </div>
               
           </div>
           <div class="row">
               <div class="col-lg-8 col-lg-offset-2 text-center">
                   <p class="large text-muted">Une équipe soudée de citoyens 3.0</p>
               </div>
           </div>
       </div>
   </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Call me maybe</h2>
                    <h3 class="section-subheading text-muted">Envie d'en savoir plus? Envoie nous un mail</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/cleancities_co"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="{{url('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{url('js/classie.js')}}"></script>
    <script src="{{url('js/cbpAnimatedHeader.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{url('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('js/contact_me.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('js/agency.js')}}"></script>

</body>

</html>
