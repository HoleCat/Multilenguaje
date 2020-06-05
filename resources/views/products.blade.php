@extends('layouts.client')
@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/our-project/banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Productos</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Inicio  / </a>  productos</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!-- start about section -->
<section class="about-v2-sec section-padding about-sec">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="nav flex-column about-tabs-menu" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                           aria-controls="v-pills-home" aria-selected="true">
                            <i class="icon-planting-and-growth"></i>
                            Café Orgánico
                        </a>
                        <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false">
                            <i class="icon-caring"></i>
                            Café Fair Trade
                        </a>
                        <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                           aria-controls="v-pills-messages" aria-selected="false">
                            <i class="icon-grass"></i>
                            Café Convencional
                        </a>
                        <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages_v2" role="tab"
                           aria-controls="v-pills-messages" aria-selected="false">
                            <i class="icon-caring"></i>
                            Micro lote de Café Especial
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="about-tabs-item">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane show active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h3>Café Orgánico</h3>
                                            <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h4>Café Fair Trade</h4>
                                            <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                            </ul>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h4>Café Convencional</h4>
                                            <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-messages_v2" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-tabs-img">
                                            <img src="assets/images/about/about_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="about-tabs-content">
                                            <h4>Micro lote de Café Especial</h4>
                                            <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    <i class="icon icon-checked2"></i>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- .container end -->
    </section>
@endsection