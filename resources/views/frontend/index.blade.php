@extends('frontend.layouts.master')

@section('content')
    {{-- content 1 --}}
    <section class="header" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="text-header">Solusi Cetak Cepat & Berkualitas</h3>
                    <p class="mt-4 text-header-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam
                        laboriosam nam, maiores maxime rem, porro laudantium minus animi commodi excepturi iure, aliquam
                        odit. Itaque fuga saepe perferendis vel asperiores magnam quidem impedit architecto.</p>
                    <button class="btn btn-sm btn-centak mt-4">CETAK SEKARANG <i
                            class='bx bx-fw bxs-chevron-right bx-fade-right'></i></button>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </section>
    {{-- last content 1 --}}

    {{-- content 2 --}}
    <section class="second">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center text-white">Kenalan Yuk,</h3>
                    <h3 class="text-heading text-center"> Dobha Printing</h3>
                    <p class="text-p-second">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis qui,
                        maxime quod laboriosam cupiditate eum voluptatibus. Iusto porro dolor quisquam in iste inventore
                        nulla assumenda nemo repellat totam a nisi deserunt veniam provident cum unde autem eum, nihil
                        voluptate maxime animi quis dolorum eligendi voluptatem. Totam nostrum ad aut temporibus animi, a
                        dolorem minus unde aspernatur, blanditiis iste repellat consectetur?</p>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid jumbo-second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="card-img-top icon-panel" src="{{ asset('frontend/img/panel1.png') }}" alt="">
                        <p class="text-icon">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptate
                            laboriosam voluptatum veniam eligendi. Hic consectetur quae provident recusandae quod.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="card-img-top icon-panel" src="{{ asset('frontend/img/panel2.png') }}" alt="">
                        <p class="text-icon">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptate
                            laboriosam voluptatum veniam eligendi. Hic consectetur quae provident recusandae quod.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="card-img-top icon-panel" src="{{ asset('frontend/img/panel3.png') }}" alt="">
                        <p class="text-icon">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptate
                            laboriosam voluptatum veniam eligendi. Hic consectetur quae provident recusandae quod.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-heading-second text-center">Kenapa Harus Kami?</h3>
                    </div>
                </div>
                <div class="row why">
                    <div class="col-lg-3 text-center">
                        <img class="img-card" src="{{ asset('frontend/img/p4.png') }}" alt="">
                        <div class="card-kenapa">
                            <div class="card-body">
                                <h3 class="card-text">777+</h3>
                                <p class="p-card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-card" src="{{ asset('frontend/img/p5.png') }}" alt="">
                        <div class="card-kenapa-2">
                            <div class="card-body">
                                <h3 class="card-text">777+</h3>
                                <p class="p-card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-card" src="{{ asset('frontend/img/p6.png') }}" alt="">
                        <div class="card-kenapa-3">
                            <div class="card-body">
                                <h3 class="card-text">777+</h3>
                                <p class="p-card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-card" src="{{ asset('frontend/img/p7.png') }}" alt="">
                        <div class="card-kenapa-4">
                            <div class="card-body">
                                <h3 class="card-text">777+</h3>
                                <p class="p-card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- last content 2 --}}

    {{-- content 3 --}}
    <section class="there bottom-slide"  id="produk">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-heading-there text-center">Produk</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="produk owl-carousel">
                        <div>
                            <div class="card-produk text-center">
                                <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-produk" alt="...">
                                <div class="card-body">
                                    <p class="text-card-produk">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                                    <button type="button" class="btn btn-produk" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- modal --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" style="z-index: 9999999" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-produk" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    {{-- last content 3 --}}

    {{-- content 4 --}}
    <section class="four" id="portfolio">
        <div class="jumbotron-fluid jumbo-four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-heading-four">Portfolio</h3>
                        <div class="portfolio owl-carousel">
                            <div>
                                <div class="card-produk text-center">
                                    <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-portfolio" alt="...">
                                    <div class="card-body">
                                        <p class="text-card-produk">Some quick example text to build on the card
                                            title and make
                                            up the bulk of the card's content.</p>
                                        <button type="button" class="btn btn-produk" data-toggle="modal"
                                            data-target="#portfolioModal">
                                            Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-produk text-center">
                                    <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-produk" alt="...">
                                    <div class="card-body">
                                        <p class="text-card-produk">Some quick example text to build on the card
                                            title and make
                                            up the bulk of the card's content.</p>
                                        <button type="button" class="btn btn-produk" data-toggle="modal"
                                            data-target="#portfolioModal">
                                            Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-produk text-center">
                                    <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-produk" alt="...">
                                    <div class="card-body">
                                        <p class="text-card-produk">Some quick example text to build on the card
                                            title and make
                                            up the bulk of the card's content.</p>
                                        <button type="button" class="btn btn-produk" data-toggle="modal"
                                            data-target="#portfolioModal">
                                            Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="card-img-top cart-portfolio" src="{{ asset('frontend/img/portfolio.png') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="portfolioModal" tabindex="-1" style="z-index: 9999999" aria-labelledby="portfolioModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-produk" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    {{-- last content 4 --}}
    {{-- content 5 --}}
    <section class="five" id="alamat">
        <div class="jumbotron jumbotron-fluid jumbo-five">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-heading-five text-center">Alamat</h3>
                        <p class="text-p-five">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi rerum omnis
                            expedita sint aut nulla id harum non aliquid amet.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-4">
                    <div class="col-lg-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3201787155726!2d106.78674511432578!3d-6.607077995222012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5f5b71a9eff%3A0x678f1e8747cfb7ff!2sPT.%20Dobha%20Putra%20Salim!5e0!3m2!1sid!2sid!4v1615141119326!5m2!1sid!2sid"
                            width="800" height="600" style="border:0;" allowfullscreen="" class="shadow"
                            loading="lazy"></iframe>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-4">
                    <div class="col-lg-12">
                        <a href="" class="btn btn-produk">
                            Google Map <i class='bx bx-tada bx-sm bxs-map'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- last content 5 --}}
    {{-- content 6 --}}
    <section class="six">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="text-heading-six text-center">Partner</h3>
              </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12" style="text-align: -webkit-center;">
                <div class="partner owl-carousel">
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
                  <div>
                          <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-partner" alt="...">
                  </div>
              </div>
              </div>
            </div>
        </div>
    </section>
    {{-- last content 6 --}}
@endsection

@push('js')
    <script>
        $('.produk').owlCarousel({
            center: true,
            items: 2,
            loop: true,
            margin: 50,
            responsive: {
                600: {
                    items: 4
                }
            }
        });
        $('.portfolio').owlCarousel({
            items: 2,
            margin: 10,
            loop: true,
            nav: true,
            navText: ["<i class='bx bx-fw bx-md bxs-chevron-left-circle' style='color:#f0f0f0'  ></i>",
                "<i class='bx bx-fw bx-md bxs-chevron-right-circle' style='color:#f0f0f0'  ></i>"
            ],
            autoHeight: true
        });
        $('.partner').owlCarousel({
          center:true,
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ["<i class='bx bx-fw bx-md bxs-chevron-left-circle' style='color:#f0f0f0'  ></i>",
                "<i class='bx bx-fw bx-md bxs-chevron-right-circle' style='color:#f0f0f0'  ></i>"
            ],
            autoHeight: true
        });

    </script>
@endpush
