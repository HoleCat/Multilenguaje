@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('{{ asset('assets/images/banner/about-banner.jpg') }}')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Acerca de Nosotros</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a> Acerca</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!-- header about inner section -->
<section class="about-inner section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                <div class="about-inner-img">
                    <img src="{{ asset('assets/images/about/home1-slider1-600x600.jpg') }}" alt="">
                </div>
            </div><!-- col end -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="about-inner-content">
                    <h2 class="column-title2 column-title">Acerca de Nosotros</h2>
                   <div class="single-about-content">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                   </div>
                   <div class="single-about-content">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                   </div>
                   <div class="row about-funfact">
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_1"></i>
                                <h4 class="funfact-title" data-counter="25">25 +</h4>
                                <p>Años d experiencia</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_2"></i>
                                <h4 class="funfact-title" data-counter="502">502 +</h4>
                                <p>Clientes satisfechos</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_4"></i>
                                <h4 class="funfact-title" data-counter="100">100</h4>
                                <p>Expertos profesionales</p>
                            </div>
                       </div>
                   </div>
                </div>
            </div><!-- col end -->
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End about inner section -->

<!-- header company timeline section -->
<section class="company-timeline-sec section-padding" style="background: url({{ asset('assets/images/about/compnay-timeline.jpg') }})">
    <div class="container-fluid">
        <div class="section-title-item section-title-v2-item white">
            <h2 class="section-title">
             <span class="xs-title">Linea de Tiempo</span>
                Cronologia de la Empresa
            </h2>
            <span class="section-bar"></span>
        </div><!-- .section end -->

        <div class="row company-timeline-item">
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2012</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2012</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                 <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2013</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2013</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0 active">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2014</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2014</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua.
                        
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2015</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2015</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-md col-sm-6 single-timeline-item xs-padding-0">
                 <div class="history-of-timeline">
                    <span class="circle-border"></span>
                    <label>2016</label>
                </div>
                <div class="single-timeline-content">
                    <img src="{{ asset('assets/images/about/employers-350x350.jpg') }}" alt="">
                    <h3>2016</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div> <!-- company-timeline-item -->
    </div><!-- .container end -->
</section><!-- End company timeline section -->


<!-- header why choose us section -->
<section class="why-choose-us-sec why-choose-inner section-padding section-bg-v2">
    <div class="container">
        <div class="row">
        <div class="col-lg-9 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="why-choose-content">
                    <h2 class="column-title2 column-title">Por Qué Elegirnos</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                <i class="icon-why-choose-1"></i> 
                                <h3>Certificación ISO</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                <i class="icon-why-choose-2"></i> 
                                <h3>Soporte 24/7</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-3"></i> 
                                <h3>Equipo de expertos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-4"></i>
                                <h3>Café por Origen</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="why-choose-inner-img">
                    <img src="{{ asset('assets/images/about/why-choose-us-inner.png') }}" alt="">
                </div>
            </div>
            
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End why choose us section -->

<!-- start banner section -->
<section class="promo-area-sec">
    <div class="container">
        <div class="promo-content-item">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    
                        <div class="single-service">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/services/mision.jpg') }}" alt="">
                                
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/services/mision.jpg') }}" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/services/mision.jpg') }}" alt="">
                            
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
        </div><!-- promo-content end-->
    </div><!-- .container end -->
</section><!-- End banner section -->

<!-- header team-v2 section -->
<section class="team-sec team-v2-sec v3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-item section-title-v2-item">
                       
                        <h2 class="section-title">
                            <span class="xs-title">Nuestros Expertos </span>
                            Reúnase con nuestro equipo
                        </h2>
                        <h3 class="hidden-title">expertos</h3>
                    </div>
                </div>
            </div><!-- .row end -->
            <div class="row">
               <div class="col-md-4">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/team/employers-350x350.jpg') }}" alt="">
                            <div class="team-author">
                                <h3>Mr. Jonson Miller</h3>
                                <p>Gardener</p>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/team/employers-350x350.jpg') }} " alt="">
                            <div class="team-author">
                                <h3>Mis. Alina Miller</h3>
                                <p>Gardener</p>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/team/employers-350x350.jpg') }} " alt="">
                            <div class="team-author">
                                <h3>Mr. Polard kim</h3>
                                <p>Gardener</p>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- End team-v2 section -->


    
<!-- header ready to contact section -->
<section class="ready-to-contact section-padding" style="background: url({{ asset('./assets/images/about/ready-to-contact.jpg') }}) no-repeat center center /cover">
    <div class="container">
       <div class="col-lg-8 offset-lg-2">
           <div class="ready-to-contact-content">
               <h2>¿Estás listo para comprar nuestro café?</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a href="#" class="xs-btn fill">CONTACTENOS</a>
           </div>
       </div>
    </div><!-- .container end -->
</section><!-- End ready to contact section -->
@endsection