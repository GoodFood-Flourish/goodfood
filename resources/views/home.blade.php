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
      <section class="section-page">
            <div class="row position-relative">
                <div class="col-lg-6 content-catering">
                    <img src="../images/everyday.png" alt="">
                </div>
                <div class="col-lg-6 content-catering">
                    <img src="../images/catering-1.png" alt="frame">
                </div>
              </div>
          </div>
      </section>
      <section class="section-page hero position-relative">
        <div class="position-absolute top-100 start-50 translate-middle">
          <img src="../images/frame3.svg" alt="frame">
        </div>
      </section>
    </div>
  </main>

</div>

@endsection
