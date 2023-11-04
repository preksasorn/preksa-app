
@extends('PageUser.header')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo asset('css/stylehomepage.css')?>" type="text/css">
</head>
<style>

</style>

<body>

    <div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/photo2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/photo1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/photo4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/photo5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/photo6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="div_h2">
        <h5>FEATURED COLLECTION</h5>
    </div>

    <!-- list Product -->

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/files/1_3_1000x.png?v=1694110929" alt="">
                    <h5>ZINVO BLADE COBALT </h5>

                    <p>350$</p>
                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/Q-1put-2_1000x.png?v=1654481087" alt="">
                    <h5>ZINVO BLADE COBALT </h5>

                    <p>350$</p>
                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/CobraVolt_After_400x.png?v=1646110499" alt="">
                    <h5>ZINVO BLADE COBALT </h5>
                    <p>350$</p>

                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/s1_400x.png?v=1612929669" alt="">
                    <h5>ZINVO BLADE COBALT </h5>
                    <p>350$</p>

                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/ATBJ13_Front_400x.png?v=1665799134" alt="">
                    <h5>ZINVO BLADE COBALT </h5>
                    <p>350$</p>

                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/ATBJ10_Front_400x.png?v=1631506949" alt="">
                    <h5>ZINVO BLADE COBALT </h5>

                    <p>350$</p>
                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/CHBJ10_Front_400x.png?v=1616315166" alt="">
                    <h5>ZINVO BLADE COBALT </h5>

                    <p>350$</p>
                </div>
            </div>

            <div class="col-6 col-md-3 grid1">
                <div class="image1">
                    <img src="https://klassywatches.com/cdn/shop/products/ATBJ12_Front_400x.png?v=1631507113" alt="">
                    <h5>ZINVO BLADE COBALT </h5>
                    <p>350$</p>


                </div>
            </div>
        </div>


    </div>
    <div class="view_all">
        <button type="button" class="btn btn-secondary btn-dark">VIEW ALL</button>
    </div>


    <div class="row">
        <div class="col-12 col-md-6 grid">
            <div class="box_img">
                <img class="img1"
                    src="https://klassywatches.com/cdn/shop/products/CobraGold_After_600x.png?v=1646110455" alt="">

            </div>
        </div>
        <div class="col-12 col-md-6 grid1">
            <div>
                <h5>ZINVO</h5><br>
                <h3>ZINVO BLADE COBRA GOLD</h3><br>
                <h5>$370</h5><br>

                <div class="box2">
                    <P class="add">ADD TO CART</P>
                </div>
                <div class="box3">
                    <P class="buy">BUY IT NOW</P>
                </div><br>
                <div>
                    <a href="">View product details</a>
                </div>

            </div>
        </div>

    </div>
    <hr>
    <div class="title_SHOP">
        <p>SHOP</p>
        <h5>OUR LOOKS</h5>
    </div>
    <!-- big image -->

    <div class="row">

        <div class="col-6 col-md-4 grid4">
            <div class="image4">
                <img src="https://klassywatches.com/cdn/shop/files/AM402SS_7-2_1000x.jpg?v=1694055219" alt="">
                <button type="button" class="btn btn-outline-dark">VIEW PRODUCTS</button>
            </div>
        </div>

        <div class="col-6 col-md-4 grid4">
            <div class="image4">
                <img src="https://klassywatches.com/cdn/shop/files/AM403SS_3_1000x.jpg?v=1694076576" alt="">
                <button type="button" class="btn btn-outline-dark">VIEW PRODUCTS</button>

            </div>
        </div>

        <div class="col-6 col-md-4 grid4">
            <div class="image4">
                <img src="https://klassywatches.com/cdn/shop/files/AM402SS_1_1000x.jpg?v=1694076576" alt="">
                <button type="button" class="btn btn-outline-dark">VIEW PRODUCTS</button>
            </div>
        </div>

    </div>

    <div class="div_hr">
        <hr class="hr">
        <hr>
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
                    <h5>Links</h5>
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
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/docs/5.3/getting-started/">Getting started</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Starter template</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Webpack</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/">Parcel</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/vite/">Vite</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Projects</h5>
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
                    <h5>Community</h5>
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
