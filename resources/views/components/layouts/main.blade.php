@extends('components.layouts.index')
@section('content')
    <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{asset('assets/img/work/img1.jpg')}}" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8  ">
            <h2 class="text-white">Liev KeaHeng</h2>
            <p class="text-white">I'm a Web Developer</p>
            <a href="{{asset('about')}}" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>


@endsection
    
 