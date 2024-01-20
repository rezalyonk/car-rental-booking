@extends('frontend.layout')

@section('content')
  <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('frontend/images/car-8.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
          <div class="text w-100 text-center mb-md-5 pb-md-5">
            <h1 class="mb-4">Cara Cepat &amp; Mudah Untuk Menyewa Mobil</h1>
            <p style="font-size: 18px;">diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa</p>
            <a href="https://youtu.be/BC2ogKAsUg8"
              class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="ion-ios-play"></span>
              </div>
              <div class="heading-title ml-5">
                <span>Langkah mudah untuk menyewa mobil impian</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12	featured-top">
          <div class="row justify-content-center no-gutters">
            <div class="col-md-10 d-flex align-items-center">
              <div class="services-wrap rounded-right w-100">
                <h3 class="heading-section text-center mb-4">Cara Lebih Baik untuk Menyewa Mobil Impian Anda</h3>
                <div class="row d-flex mb-4">
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center"><span
                          class="flaticon-route"></span></div>
                      <div class="text w-100">
                        <h3 class="heading mb-2">Pilih Lokasi Penjemputan</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center"><span
                          class="flaticon-handshake"></span></div>
                      <div class="text w-100">
                        <h3 class="heading mb-2">Pilih Penawaran Terbaik</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center"><span
                          class="flaticon-rent"></span></div>
                      <div class="text w-100 text-center mx-auto m-auto">
                        <h3 class="heading mb-2 text-center">Pesan Mobil Sewa</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mt-5"><a target="_blank" href="https://api.whatsapp.com/send/?phone=+6281286866769&text=hello+world"
                    class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Pesan Sekarang</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">Apa yang kita tawarkan</span>
          <h2 class="mb-2">Kendaraan Unggulan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel-car owl-carousel">
            @foreach($cars as $car)
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url({{ Storage::url($car->thumbnail) }});">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">{{$car->title}}</a></h2>
                  <div class="d-flex mb-3">
                    <p class="price ml-auto">Rp. {{$car->price}} <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a target="_blank" href="https://api.whatsapp.com/send/?phone=+6289516346302&text=hello+world" class="btn btn-primary py-2 mr-1">Pesan</a> 
                  <a href="{{ route('car.show', $car->slug) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                      href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                      href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-4.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                  <div class="d-flex mb-3">
                    <p class="price ml-auto">$500 <span>/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                      href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-about">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
          style="background-image: url({{ asset('frontend/images/about.jpg') }});">
        </div>
        <div class="col-md-6 wrap-about ftco-animate">
          <div class="heading-section heading-section-white pl-md-5">
            <span class="subheading">Tentang Kami</span>
            <h2 class="mb-4">Selamat Datang, Pelangan Rental Mobil Jaya Abadi</h2>

            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh mauris cursus mattis molestie. Sodales neque sodales ut etiam sit. Placerat in egestas erat imperdiet sed euismod nisi porta. Lectus sit amet est placerat. Imperdiet sed euismod nisi porta lorem mollis aliquam ut. Lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor. Vel pharetra vel turpis nunc eget lorem dolor. Volutpat diam ut venenatis tellus in metus vulputate eu. Id diam maecenas ultricies mi eget mauris. Nisl purus in mollis nunc sed id semper. Auctor urna nunc id cursus metus. Cursus metus aliquam eleifend mi in nulla.

Et tortor consequat id porta nibh venenatis. Quis eleifend quam adipiscing vitae. Maecenas accumsan lacus vel facilisis volutpat est. Quis blandit turpis cursus in hac habitasse platea dictumst. Neque egestas congue quisque egestas diam in. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Ut consequat semper viverra nam libero justo laoreet sit. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Purus ut faucibus pulvinar elementum integer. Ac felis donec et odio pellentesque diam volutpat.
            </p>
            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
              paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
            <!-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have
              been rewritten a thousand times and everything that was left from its origin would be the word "and" and
              the Little Blind Text should turn around and return to its own, safe country. A small river named Duden
              flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in
              which roasted parts of sentences fly into your mouth.</p> -->
            <p><a href="{{ route('car') }}" class="btn btn-primary py-3 px-4">Cari Kendaraan</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">layanan Jasa</span>
          <h2 class="mb-3">Layanan Terbaru Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-wedding-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Upacara Pernikahan</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Antar Kota Antar Provinsi</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Antar Jemput Bandara</h3>
              <p>ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-transportation"></span></div>
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


  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Testimonial</span>
          <h2 class="mb-3">Cerita Kepuasan Pelanggan</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/person_1.jpg') }})">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum</p>
                  <p class="name">Jerico</p>
                  <span class="position">Selebritis</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/person_2.jpg') }})">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum.</p>
                  <p class="name">Gustiandia</p>
                  <span class="position">Eselon 1 Pemerintah</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/person_3.jpg') }})">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum</p>
                  <p class="name">Badru</p>
                  <span class="position">UI/UX Designer Web Developer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection