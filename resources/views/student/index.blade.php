<x-student-layout>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>
                  Des centaines d'étudiants diplômés chaque année
              </h1>
              <h2>
                  Êtes-vous nouveau ici ? Réservez votre chambre dès maintenant.
              </h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                  <a href="{{url('reserver')}}"class="btn-get-started scrollto">Reserver</a>
                  <a href="https://upb.ci/" class="glightbox btn-watch-video"><i class="fa-solid fa-globe"></i><span>Site officiel</span></a>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('assets/img/upb4.jpg')}}" class="img-fluid animated"  alt="">
              </div>
            </div>
          </div>
    </section><!-- End Hero -->

    <div class="min-h-screen bg-gray-100">

        <main id="main">
                        <!-- Section À propos -->
                            <section id="about" class="about">
                                <div class="container" data-aos="fade-up">
                                    <div class="section-title">
                                        <h2>Bienvenue à l'Université Polytechnique de Bingerville</h2>
                                    </div>
                                    <div class="row content">
                                        L'UPB est un pionnier de l'éducation et de la recherche de pointe depuis 1818. Nous sommes dévoués à offrir une expérience éducative exceptionnelle qui forme les leaders de demain. Notre engagement envers l'innovation et l'excellence académique nous distingue parmi les meilleures universités du monde.
                                    </div>
                                </div>
                            </section><!-- Fin de la section À propos -->

                <!-- ... Votre code précédent ... -->

                <!-- ======= Why Us Section ======= -->
                <section id="why-us" class="why-us section-bg">
                    <div class="container-fluid" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-5 d-flex align-items-stretch order-2 order-lg-1" data-aos="fade-right" data-aos-delay="100" >
                                <img src="{{asset('assets/img/img2.jpeg')}}" alt="" width="250px" height="120px">
                            </div>
                            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-1 order-lg-2" style="text-align: justify;">
                                <p>
                                    Fondée en 1818, l'Université Polytechnique de Bucarest possède une riche histoire de plus de deux siècles d'excellence académique. Notre tradition d'innovation et d'excellence pédagogique continue de façonner l'avenir de l'éducation et de la recherche en Roumanie. Grâce à notre engagement envers l'excellence et à notre communauté diversifiée d'étudiants et de chercheurs talentueux, nous continuons à repousser les limites du savoir et de la découverte.
                                </p>
                            </div>
                        </div>
                    </div>
                </section><!-- End Why Us Section -->

                <!-- ======= Skills Section ======= -->
                <section id="skills" class="skills">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{asset('assets/img/skills.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                                "Au nom de l'Université Polytechnique de Bucarest, je suis ravi de vous accueillir sur notre site. Notre institution s'engage à offrir une éducation de qualité, à favoriser l'innovation et à former des leaders visionnaires capables de relever les défis mondiaux. Nous sommes déterminés à fournir à nos étudiants les outils nécessaires pour réussir dans un monde en constante évolution. Rejoignez-nous dans notre quête de connaissances et d'excellence, et ensemble, construisons un avenir prometteur."
                            </div>
                        </div>
                    </div>
                </section><!-- End Skills Section -->

                <!-- ======= Services Section ======= -->
                <section id="services" class="services section-bg">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Services</h2>
                            <p>Découvrez nos services et ressources disponibles pour les étudiants et les chercheurs.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4><a href="">Decouvrez UPB</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                            </div>

                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="">Reserver</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                            </div>

                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4><a href="">Commander</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                            </div>

                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box">
                                <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                                <h4><a href="">Commander</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                            </div>

                        </div>
                    </div>
                </section><!-- End Services Section -->
        </main>
    </div>
 </x-student-layout>
