@extends('template')

@section('main')
<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading">Merci d'avoir signalé l'incident</div>
                <a href="{{url('/')}}" class="page-scroll btn btn-xl">Télécharger <br>l'application <i class="fa fa-download"></i></a>
            </div>
        </div>
    </header>
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
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
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

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection