@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/our-project/banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Clientes</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a>  clientes</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->

<!-- start tips and tricks section -->
<section class="tips-tricks-sec section-padding">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-tips-tricks">
                        <img src="assets/images/tips-img1.jpg" alt="">
                        <div class="tips-tricks-content">
                            <span>22 may, 2020</span>
                            <h3>Cliente 1</h3>
                            <a href="#" class="read_more">Leer Más  <i class="icon icon-arrow-right"></i> </a>
                        </div>
                        <div class="tag-line">Cliente 1</div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <div class="single-tips-tricks tips-tricks-item">
                        <img src="assets/images/tips-img2.jpg" alt="">
                        <div class="tips-tricks-content">
                            <span>22 may, 2020</span>
                            <h4>Cliente 2</h4>
                            <a href="#" class="read_more">Leer Más  <i class="icon icon-arrow-right"></i> </a>
                        </div>
                        <div class="tag-line">Cliente 2</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-tips-tricks tips-tricks-item">
                        <img src="assets/images/tips-img3.jpg" alt="">
                        <div class="tips-tricks-content">
                            <span>22 may, 2020</span>
                            <h4>Cliente 3</h4>
                            <a href="#" class="read_more">Leer Más  <i class="icon icon-arrow-right"></i> </a>
                        </div>
                        <div class="tag-line">Cliente 3</div>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </section><!-- End tips and tricks section -->

<!-- header ready to contact section -->
<section class="ready-to-contact section-padding" style="background: url(./assets/images/about/ready-to-contact.jpg) no-repeat center center /cover">
    <div class="container">
       <div class="col-lg-8 offset-lg-2">
           <div class="ready-to-contact-content">
               <h2>¿Estás listo para tomar nuestro servicio?</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a href="#" class="xs-btn fill">CONTACTENOS</a>
           </div>
       </div>
    </div><!-- .container end -->
</section>
@endsection