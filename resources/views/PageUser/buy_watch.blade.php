@extends('PageUser.header')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo asset('css/Style_BuyWatch.css')?>" type="text/css">
</head>

<body>
<section class="title1">
            <h2>BEST SELLERS</h2>
            <h5>Best Sellers Collections</h5>

        </section>
    <div class="container">

        <div class="row main_row">
            <div class="col-12 col-md-7 buy">
                <div class="image1">
                    <img class="big_img" src="https://klassywatches.com/cdn/shop/files/1_3_1000x.png?v=1694110929"
                        alt="">

                    <div class="row sum_samll">
                        <div class="col-6 col-md-2 Samll_buy">
                            <div class="Samll_image">
                                <img class="img3"
                                    src="https://klassywatches.com/cdn/shop/files/CLRJ08_Front_1200x_9d3307cb-d93b-4cd0-9899-876b35327e40_1000x.webp?v=1682389584"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-2 Samll_buy">
                            <div class="Samll_image">
                                <img class="img3"
                                    src="https://klassywatches.com/cdn/shop/files/CLRJ08_Emotional_1200x_d9683374-6d2e-482e-92ca-641854c35d1e_1000x.webp?v=1682389589"
                                    alt="">

                            </div>
                        </div>
                        <div class="col-6 col-md-2 Samll_buy">
                            <div class="Samll_image">
                                <img class="img3"
                                    src="https://klassywatches.com/cdn/shop/files/CLRJ08_Caseback_1200x_a2ecce92-f7f9-42cc-a176-877d8f5c83ad_1000x.webp?v=1682389595"
                                    alt="">

                            </div>
                        </div>
                        <div class="col-6 col-md-2 Samll_buy">
                            <div class="Samll_image">
                                <img class="img3"
                                    src="https://klassywatches.com/cdn/shop/files/CLRJ08_Side_1200x_df47a944-503e-4975-a3d1-861af451e921_1000x.webp?v=1682389601"
                                    alt="">

                            </div>
                        </div>

                        <div class="col-6 col-md-2 Samll_buy">
                            <div class="Samll_image">
                                <img class="img3"
                                    src="https://klassywatches.com/cdn/shop/files/CLRJ08_Side_1200x_df47a944-503e-4975-a3d1-861af451e921_1000x.webp?v=1682389601"
                                    alt="">

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 sum_buy">
                <div class="main_title">
                    <div class="title">

                        <h2>ZENVO BLAND BLANDCOBAOL</h2>
                        <h2 class="doller">$ 333</h2>
                        <div class="buy">
                            <a href="">-</a>
                            <a href="">1</a>
                            <a href="">+</a>
                        </div>
                        <div class="add_to">
                            <p>ADD TO CART</p>
                        </div>
                        <div class="buy_it">
                            <p class="p2">BUY IT NOW</p>
                        </div>
                    </div>
                    <p class="sum_title">
                        Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="box_size">
                        <h6>SIZE</h6>
                        <h6 class="rig">44mm X 12mm</h6>
                    </div>
                    <hr>
                    <div>
                        <h6>CASE</h6>
                        <h6 class="rig">Stainless Steel Mette Black</h6>
                    </div>
                    <hr>
                    <div>
                        <h6>DIAL</h6>
                        <h6 class="rig">Blue</h6>
                    </div>
                    <hr>
                    <div>
                        <h6>STRAP</h6>
                        <h6 class="rig">Premiun Silicom</h6>
                    </div>
                    <hr>
                    <div>
                        <h6>GLASS</h6>
                        <h6 class="rig">Scratch-Proof</h6>
                    </div>
                    <hr>
                    <div>
                        <h6>MOVEMENT</h6>
                        <h6 class="rig">Automatic Seiko</h6>
                    </div>
                    <hr>
                </div>
            </div>

        </div>

        <!-- <div class="row">
            <div class="col-6 col-md-4">.col-6 .col-md-4</div>
            <div class="col-6 col-md-4">.col-6 .col-md-4</div>
            <div class="col-6 col-md-4">.col-6 .col-md-4</div>
        </div> -->

    </div>


    <!-- slide watch -->
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card">
                                <div id="hover" class="card-img">
                                    <img src="https://klassywatches.com/cdn/shop/products/PCBJ21_Front_400x.png?v=1620360543"
                                        class="img-fluid">
                                </div>
                                <!-- <div class="card-img-overlay">Slide 1</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div id="hover" class="card-img">
                                    <img src="https://klassywatches.com/cdn/shop/products/ATBJ11_Front_400x.png?v=1631507083"
                                        class="img-fluid">
                                </div>
                                <!-- <div class="card-img-overlay">Slide 2</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div id="hover" class="card-img">
                                    <img src="https://klassywatches.com/cdn/shop/files/DT002RB_1_400x.jpg?v=1693212685"
                                        class="img-fluid">
                                </div>
                                <!-- <div class="card-img-overlay">Slide 3</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div id="hover" class="card-img">
                                    <img src="https://klassywatches.com/cdn/shop/products/UTBL18_Front_1200x_3e9f3444-2fc7-442d-932c-61b0226abd47_400x.webp?v=1680160522"
                                        class="img-fluid">
                                </div>
                                <!-- <div class="card-img-overlay">Slide 4</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div id="hover" class="card-img">
                                    <img src="https://klassywatches.com/cdn/shop/files/DS001SS_2_1000x.jpg?v=1688643623"
                                        class="img-fluid">
                                </div>
                                <!-- <div class="card-img-overlay">Slide 5</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div id="hover" class="card-img">
                                    <img src="https://klassywatches.com/cdn/shop/files/dt001_0000s_0001_DSC00305-Enhanced_900x_e71033b9-3202-457c-8e21-c7973ac192fb_900x.webp?v=1693212646"
                                        class="img-fluid">
                                </div>
                                <!-- <div class="card-img-overlay">Slide 6</div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 5
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    <!-- -----------end----------- -->
    <div class="hr">
        <hr>
        <hr>
    </div>


    <div class="row">
        <div class="col-12 col-md-4 Image_Big">
            <div class="Image_Big1">
                <img src="https://zinvowatches.com/cdn/shop/files/LA-Leftover-2_720x.webp?v=1668141397" alt="">
            </div>
        </div>
        <div class="col-12 col-md-4 Image_Big">
            <div class="Image_Big1">
                <img src="https://zinvowatches.com/cdn/shop/files/LA-Leftover-3_After_720x.webp?v=1668141397" alt="">
            </div>
        </div>
        <div class="col-12 col-md-4 Image_Big">
            <div class="Image_Big1">
                <img src="https://zinvowatches.com/cdn/shop/files/308_bold_3_4x_89be6f8e-f0e1-4d9c-bbb0-1a501ced4378_720x.webp?v=1668141397"
                    alt="">
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/"
                        aria-label="Bootstrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2"
                            viewBox="0 0 118 94" role="img">
                            <title>Bootstrap</title>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="fs-5">Bootstrap</span>
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Designed and built with all the love in the world by the <a
                                href="/docs/5.3/about/team/">Bootstrap team</a> with the help of <a
                                href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.
                        </li>
                        <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE"
                                target="_blank" rel="license noopener">MIT</a>, docs <a
                                href="https://creativecommons.org/licenses/by/3.0/" target="_blank"
                                rel="license noopener">CC BY 3.0</a>.</li>
                        <li class="mb-2">Currently v5.3.2.</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h6>Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Home</a></li>
                        <li class="mb-2"><a href="/docs/5.3/">Docs</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/">Examples</a></li>
                        <li class="mb-2"><a href="https://icons.getbootstrap.com/">Icons</a></li>
                        <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                        <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                        <li class="mb-2"><a href="https://cottonbureau.com/people/bootstrap" target="_blank"
                                rel="noopener">Swag Store</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h6>Guides</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/docs/5.3/getting-started/">Getting started</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Starter template</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Webpack</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/">Parcel</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/vite/">Vite</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h6>Projects</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank"
                                rel="noopener">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank"
                                rel="noopener">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank"
                                rel="noopener">Icons</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/rfs" target="_blank" rel="noopener">RFS</a>
                        </li>
                        <li class="mb-2"><a href="https://github.com/twbs/examples/" target="_blank"
                                rel="noopener">Examples repo</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h6>Community</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues" target="_blank"
                                rel="noopener">Issues</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions" target="_blank"
                                rel="noopener">Discussions</a></li>
                        <li class="mb-2"><a href="https://github.com/sponsors/twbs" target="_blank"
                                rel="noopener">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="https://opencollective.com/bootstrap" target="_blank"
                                rel="noopener">Open Collective</a></li>
                        <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5"
                                target="_blank" rel="noopener">Stack Overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
@endsection
