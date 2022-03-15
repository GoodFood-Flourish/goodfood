@extends('layout.master')

@section('title', 'Home')

@section('content')
<!-- Hero Home  -->
<main>
      {{-- Hero --}}
      <section class="vh-100 hero position-relative">
        <div class="position-absolute position-absolute top-50 start-50 translate-middle z-index-3">
          <img src="../images/goodfood-logo.png" alt="goodfood logo">
        </div>
        <div class="d-flex bg-info justify-content-center align-items-center w-100 h-100 overflow-hidden">
          <div class="bg-dark opacity-50 position-absolute top-0 bottom-0 start-0 end-0"></div>
          <img src="../images/hero.png" alt="hero image">
        </div>
        <div class="position-absolute top-100 start-50 translate-middle">
          <img src="../images/frame.svg" alt="frame">
        </div>
      </section>
      {{-- End of Hero --}}
      <section class="quoete mt-10">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 border p-5">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur praesentium possimus voluptate
                voluptatem iste est quae quibusdam? Fugiat, atque, aspernatur aperiam provident alias, error eveniet
                architecto placeat praesentium modi nihil!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure iusto labore quisquam, vero atque
                nam quos libero vel architecto, accusamus in nesciunt ex perspiciatis a nemo et autem sapiente non
                voluptatum quibusdam ullam repudiandae. Veritatis molestiae consequuntur saepe quae neque, earum porro
                corrupti iure quam tempora! Eos, nulla quasi.</p>
            </div>
          </div>
      </section>
    </div>
  </main>
<section></section>
<div class="container">

</div>

@endsection
