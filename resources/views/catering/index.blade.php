@extends('layout.master')

@section('title', 'Home')

@section('content')
<!-- Hero Home  -->
<main>
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
    <section class="quoete mt-10">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 content-notes">
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
            <form role="form" method="" action="">
                <div class="order-form">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-5">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Name"
                            aria-label="Name"
                            name=""
                            id=""
                        />
                        </div>
                        <div class="form-group my-5">
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Email Address"
                            aria-label="name@example.com"
                            name=""
                            id=""
                        />
                        </div>
                        <div class="form-group my-5">
                        <input
                            type="phone"
                            class="form-control"
                            placeholder="Phone Number"
                            aria-label="08XXXXXXXXXX"
                            name=""
                            id=""
                        />
                        </div>
                        <div class="form-group my-5">
                            <input
                                type="date"
                                class="form-control"
                                placeholder="Date and Time"
                                aria-label="date and time"
                                name=""
                                id=""
                            />
                        </div>
                        <div class="form-group my-5">
                            <select class="form-control">
                                <option>Type of Event</option>
                            </select>
                        </div>
                        <div class="form-group my-5">
                            <select class="form-control">
                                <option>Number of People</option>
                            </select>
                        </div>
                        <button type="button" class="button-contact mt-3" style="background-color: #66455A;
                        color: #ffff;">
                            Get Quotation
                        </button>
                        <button type="button" class="button-contact mt-3" style="float: right;background-color: #66455A;
                        color: #ffff;">
                            Browse Our Menu
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item multicarousel active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri1.png">
                                            <div class="card-body">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri2.png">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri3.png">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item multicarousel">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri1.png">
                                            <div class="card-body">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri2.png">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri3.png">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-sqres" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-sqres" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-page">
    {{-- bagian garis titik --}}
    </section>
    <section class="section-page">
        <div class="container content-gfe">
            <div class="card">
                <img src="../images/everyday.png" class="img-fluid" alt="100%x280">
            </div>
            <div class="col-md-4 mb-3 content-gfe-paragraf">
                <h3> Good Food Everyday</h3>
                <p>Lorem ipsum dolor sit amet, cons ectetuer
                    adipiscing elit,sed diam nonummy nibh
                    euismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad minim
                    veniam, quis nostrud exerci tation ullamcorper
                    suscipit lobortis nisl ut illum dolore eu </p>
                    <button class="btn btn-all" type="submit" style="background-color: #66455A;
                    color: #ffff;">SEE DETAIL</button>
            </div>
        </div>
    </section>
</main>
@endsection
