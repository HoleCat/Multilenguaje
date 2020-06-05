@extends('layouts.client')

@section('content')
<section class="banner-inner-sec" style="background-image:url('assets/images/contact-banner.jpg')">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">{{ __('Contactenos') }}</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> {{ __('Inicio') }}  / </a>  {{ __('contacto') }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!--  get in touch section -->
<!--<section class="xs-get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="get-in-touch-cont text-center">
                    <h3><span class="light-text">Dejanos</span> tu mensaje</h3>
                    <p>La información ingresada por este medio tendrá un trato confidencial, <br/> bajo ninguna circunstancia se compartirá con terceros</p>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- header contact section -->
<section class="xs-contact-infomation xs-contact-infomation-v2" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-address"></i>
                    <h4>{{ __('Nuestras Oficinas') }}</h4>
                    <span>Av Perú Nro 450, Int. 35</span>
                    <span class="text-color">Perú, Lima, La Molina</span>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-mail"></i>
                    <h4>{{ __('Email') }}</h4>
                    <a href="mailto:contact@example.com">jose@gmail.com</a>
                    <a href="mailto:info@example.com">marioincio@gmail.com</a>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>{{ __('Llamanos') }}</h4>
                    <span>+51 965 776 529</span>
                    <span class="text-color">({{ __('Lun') }}- {{ __('Dom') }}) de 8.am a 8pm</span>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-3 col-md-6 align-self-center">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>{{ __('Hora de Trabajo') }}</h4>
                    <span>{{ __('Lun') }} - {{ __('Vie') }}  : 8am a 7pm</span>
                    <span>{{ __('Sábado') }}  : 10am a 4pm</span>
                    <span class="text-color">{{ __('Domingo') }}  : {{ __('Cerrado') }}</span>
                </div><!-- .contact-info-group END -->
            </div>
        </div>
    </div><!-- .container end -->
</section><!-- End contact section -->

<!-- header contact section -->
<section class="xs-contact-sec xs-contact-v2-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="xs-form-group">
                    <h4 class="xs-single-title text-center"><span class="light-text">{{ __('Deja') }}</span> {{ __('tu mensaje') }}</h4>
                    <form action="#" method="POST" id="xs-contact-form" class="xs-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" placeholder="{{ __('Nombre') }}"
                                       id="xs_contact_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder="{{ __('Email') }}"
                                       id="xs_contact_email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="number" class="form-control" name="phone-number"
                                       placeholder="{{ __('Teléfono') }}" id="xs_contact_phone">

                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="Subject" placeholder="{{ __('Asunto') }}"
                                       id="xs_contact_subject">
                            </div>
                        </div>

                        <textarea name="massage" placeholder="{{ __('Mensaje') }}" id="x_contact_massage"
                                  class="form-control message-box" cols="30" rows="10"></textarea>

                        <div class="xs-btn-wraper">
                            <input type="submit" class="xs-btn" id="xs_contact_submit" value="{{ __('Enviar') }}">
                        </div>
                    </form>
                </div>
            </div><!-- col end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End contact section -->

<!-- start map section -->
<div class="xs-map-sec">
    <div class="xs-maps-wraper">
        <div class="map">
            <iframe src="https://maps.google.com/maps?width=100&amp;height=600&amp;hl=en&amp;q=Perú%Lima%2C%20molina+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
</div>
@endsection