@extends('frontend.layout')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/bg_3.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Layanan <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Layanan Kami</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Services</span>
          <h2 class="mb-3">Our Latest Services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
            <h3 class="heading mb-2">Upacara Pernikahan</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
            <h3 class="heading mb-2">Antar Kota Antar Provinsi</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
            <h3 class="heading mb-2">Antar Jemput Bandara</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
            <h3 class="heading mb-2">Perjalanan Tur</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-intro" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Apakah Anda Ingin Menghasilkan Uang Bersama Kami? Yuk Gabung Sekarang.</h2>
          <a target="_blank" href="https://api.whatsapp.com/send/?phone=+6282110902905&text=saya mau sewa driver dong" class="btn btn-primary btn-lg">Join Yuk</a>
        </div>
      </div>
    </div>
  </section>
@endsection