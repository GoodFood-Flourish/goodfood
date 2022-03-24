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
            <div class="food-list-content">
                <img src="../images/notes.png" alt="">
                <div class="col-md-10 food-list-content-title">
                    <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut illum dolore eu feugiat nulla facilisis at vero eros et
                    accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit. Ut wisi enim ad minim veniam, quis
                    nostrud exerci tation ullamcorper suscipit.</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.  Duis autem vel eum iriure dolor in lorem ipsum dolor sit
                    amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt utumgi.</p>
                </div>
            </div>
        </div>
      </section>
      <section class="section-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-9  p-5">
              <p class="col-md-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur praesentium possimus voluptate
                voluptatem iste est quae quibusdam? Fugiat, atque, aspernatur aperiam provident alias, error eveniet
                architecto placeat praesentium modi nihil!</p>
              <p class="col-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure iusto labore quisquam, vero atque
                nam quos libero vel architecto, accusamus in nesciunt ex perspiciatis a nemo et autem sapiente non
                voluptatum quibusdam ullam repudiandae. Veritatis molestiae consequuntur saepe quae neque, earum porro
                corrupti iure quam tempora! Eos, nulla quasi.</p>
            </div>
          </div>
      </section>
      <section class="section-page">
          <div class="container">
            <img src="../images/img-content.png" class="img-thumbnail" alt="...">
          </div>
      </section>
      <section class="section-page">
        <div class="container">
            <div class="food-banner-text-section">
                <div class="food-banner-text-container">
                    <div class="food-banner-text-content">
                        <img src="../images/content-card.png" alt="">
                        <div class="food-banner-text-content-fill">
                            <div class="card-body food-banner-card-body">
                                <p class="col-md-6">
                                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut illum dolore eu feugiat nulla facilisis at vero eroswisi
                                    enim ad minim veniam, quis nostrud Ssed diam nonummy
                                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    elit, sed diam nonummy nibh euismod tincidunt ut
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="section-page hero position-relative">
        <div class="position-absolute top-100 start-50 translate-middle">
          <img src="../images/frame2.svg" alt="frame">
        </div>
      </section>
      <section class="section-page"></section>
      <section class="section-page">
        <div class="food-banner-section">
            <div class="food-banner-container">
                <div class="food-banner-content">
                    <a href="/everyday">
                        <img src="../images/everyday.png">
                    </a>
                </div>
                <div class="food-banner-content">
                    <a href="/catering">
                        <img src="../images/catering-1.png">
                    </a>
                </div>
            </div>
        </div>
      </section>
      <section class="section-page hero position-relative">
        <div class="position-absolute top-100 start-50 translate-middle">
          <img src="../images/frame3.svg" alt="frame">
        </div>
      </section>
      <section class="section-page"></section>
      <section class="section-page">
          <div class="container">
              <h3>Cuisines</h3>
              <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item multicarousel active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="carousel-caption">
                                                <h2>Indonesian</h2>
                                            </div>
                                            <a href="#">
                                                <img class="img-fluid" alt="100%x280" src="../images/indonesia_thumb.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="carousel-caption">
                                                <h2>Indian</h2>
                                            </div>
                                            <a href="#">
                                                <img class="img-fluid" alt="100%x280" src="../images/indian_thumb.png">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="carousel-caption text text-center">
                                                <h2>Mexican</h2>
                                            </div>
                                            <a href="#">
                                                <img class="img-fluid" alt="100%x280" src="../images/mexican_thumb.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item multicarousel">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/mexican_thumb.png">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri2.png">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="../images/img_galeri3.png">

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
            <div id="carouselContent" class="carousel slide" data-ride="carousel" style="background-color: #E8E3E6;">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active text-center p-4">
                         <p class="col-md-12">Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut illum dolore eu feugiat nulla facilisis at vero eroswisi enim ad minim
                            veniam, quis nostrud Ssed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci  elit, sed diam nonummy nibh euismod</p>
                    </div>
                    <div class="carousel-item text-center p-4">

                        <p>lorem ipsum (imagine longer text)</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
      </section>
      <section class="section-page">
      </section>
      <section class="section-page hero position-relative">
        <div class="position-absolute top-100 start-50 translate-middle">
          <img src="../images/frame4.svg" alt="frame">
        </div>
      </section>
      <section class="section-page"></section>
      <section class="section-page">
        <div class="container">
            <form role="form" method="" action="">
                <h3 class="text text-center">Sign up NOW TO GET OUR NEWSLETTER</h3>
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
                            <button type="button" class="button-contact mt-3" style="float: right;background-color: #66455A;
                            color: #ffff;">
                                SUBSCRIBE
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
  </main>

</div>

@endsection
