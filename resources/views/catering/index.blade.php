@extends('layout.master')

@section('title', 'Home')

@section('content')
<!-- Hero Home  -->
<main>
      {{-- Hero --}}
      <section class="vh-100 hero position-relative">
        <div class="position-absolute position-absolute top-50 start-50 translate-middle z-index-3">
          <img src="../images/goodfood-catering-logo.png" alt="goodfood catering logo">
        </div>
        <div class="d-flex bg-info justify-content-center align-items-center w-100 h-100 overflow-hidden">
          <div class="bg-dark opacity-50 position-absolute top-0 bottom-0 start-0 end-0"></div>
          <img src="../images/hero_catering.png" alt="hero catering image">
        </div>
        <div class="position-absolute top-100 start-50 translate-middle">
          <img src="../images/frame.svg" alt="frame">
        </div>
      </section>
      {{-- End of Hero --}}
      <section class="quoete mt-10">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <p class="col-md-4">Lorem ipsum dolor sit amet, cons
                  ectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut
                  laoreet dolore magna aliquam
                  erat volutpat. Ut wisi enimlobortis
                  nisl ut illum dolore eu feugiat
                  nulla facilisis at vero eros et</p>
            </div>
          </div>
      </section>
      <section class="section-page">
          <div class="container"> 
            <h5>ORDER FORM</h5>
            <div class="container">
                <div class="mb-3">
                    <input type="name" class="form-control" id="name" placeholder="Name">
                    <input type="email" class="form-control" id="email" placeholder="Email@example.com">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>
          </div>


      </section>
  </main>
<section></section>
<div class="container">

</div>
@endsection
