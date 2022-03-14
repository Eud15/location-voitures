
@extends('base')

@section('contenu')
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.png" style="width: 500px; height: 408px;"alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-danger"><b>Car</b>Location</h1>
                                <h3 class="h2">Votre entreprise de location de voitures</h3>
                                <p>
                                    Retrouvez ici tous vos voitures de tous genres adaptés à votre élégances pour des nombres de jours voulus
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-danger"><b>Car</b>Location</h1>
                                <h3 class="h2">Votre entreprise de location de voitures</h3>
                                <p>
                                    Retrouvez ici tous vos voitures de tous genres
                                   Vous serez dans des voitures de luxe<strong>Elégant qui vous élève au rang de Roi</strong> Des voitures d'élégances super adaptés à votre image. Des voitures de location.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-danger"><b>Car</b>Location</h1>
                                <h3 class="h2">Votre entreprise de location de voitures</h3>
                                <p>
                                    Retrouvez ici tous vos voitures de tous genres
                                   Vous serez dans des voitures de luxe Elégant qui vous élève au rang de Roi Des voitures d'élégances super adaptés à votre image. Des voitures de location.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Catégoties de voitures</h1>
                <p>
                   Tous vos genres de voitures classés par catégories
                   venez en découvrir!!!!!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_01.jpg" style="width: 223,98px; height: 223,98px;" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Audits</h5>
                <p class="text-center"><a class="btn btn-info"  href="/shop-single">Boutique</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_02.jpg" style="width: 223,98px; height: 223,98px;" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Bently</h2>
                <p class="text-center"><a class="btn btn-info"  href="/shop-single">Boutique</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_01.jpg" style="width: 223,98px; height: 223,98px;" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Lexus</h2>
                <p class="text-center"><a href="/shop-single" class="btn btn-info">Boutique</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produit en vedette</h1>
                    <p>
                        Découvrez une bonne gamme de voitures en vedettes qui font le buzz en ce moment
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a  href="/shop-single">
                            <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">25000FCFA/jour</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Mercedes</a>
                            <p class="card-text">
                               Un puissant moteur, 4cyllindres avec des roues en feu. Une vitesse incroyable/ </br> Cliquez sur l'image pour voir plus
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a  href="/shop-single">
                            <img src="./assets/img/feature_prod_02.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">40.000FCFA/jour</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Toyota</a>
                            <p class="card-text">
                                Un puissant moteur, 4cyllindres avec des roues en feu. Une vitesse incroyable.
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a  href="/shop-single">
                            <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">30.000FCFA/jours</li>
                            </ul>
                            <a  href="/shop-single" class="h2 text-decoration-none text-dark">Lexus</a>
                            <p class="card-text">
                                Un puissant moteur, 4cyllindres avec des roues en feu. Une vitesse incroyable.
                            </p>
                            <p class="text-muted">Vu (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

@endsection
