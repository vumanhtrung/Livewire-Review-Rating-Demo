<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Type some info">
	<meta name="author" content="Type name">
	<title>Website layout sample </title>
	<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ url('css/ui.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ url('css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ url('fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
    <style>
        div.stars {
            display: inline-block;
        }
        .mt-200{
            margin-top:200px;
        }
        input.star { display: none; }
        label.star {
            float: right;
            padding: 10px;
            font-size: 20px;
            color: #51585e;
            transition: all .2s;
        }
        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #ff8100;
            transition: all .25s;
        }
        input.star-5:checked ~ label.star:before {
            color: #ff8100;
            text-shadow: 0 0 20px #952;
        }
        input.star-1:checked ~ label.star:before { color: #F62; }
        label.star:hover { transform: rotate(-15deg) scale(1.3); cursor: pointer; }
        label.star:before {
            content: '\f006';
            font-family: 'Font Awesome 5 Free';
        }
    </style>
</head>
<body>
	<header class="section-header">
		<section class="header-main">
			<div class="container">
				<div class="row gy-3 align-items-center">
					<div class="col-lg-2 col-sm-4 col-4">
						<a href="http://bootstrap-ecommerce.com" class="navbar-brand">
							<img class="logo" height="40" src="{{ url('images/logo.svg') }}">
						</a>
					</div>
					<div class="order-lg-last col-lg-5 col-sm-8 col-8">
						<div class="float-end">
							<a href="#" class="btn btn-light">
								<i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline-block">Sign in </span>
							</a>
							<a href="#" class="btn btn-light">
								<i class="fa fa-heart"></i> <span class="ms-1 d-none d-sm-inline-block">Wishlist</span>
							</a>
							<a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light">
								<i class="fa fa-shopping-cart"></i> <span class="ms-1">My cart </span>
							</a>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-12">
						<form action="#" class="">
							<div class="input-group">
								<input type="search" class="form-control" style="width:55%" placeholder="Search">
								<select class="form-select">
									<option value="">All type</option>
									<option value="codex">Special</option>
									<option value="comments">Only best</option>
									<option value="content">Latest</option>
								</select>
								<button class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</section>
	</header>
	<section class="bg-primary padding-y-sm">
		<div class="container">

			<ol class="breadcrumb ondark mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>

		</div>
	</section>
	<section class="padding-y">
		<div class="container">

			<div class="row">
				<aside class="col-lg-6">
					<article class="gallery-wrap">
						<div class="img-big-wrap img-thumbnail">
							<a data-fslightbox="mygalley" data-type="image" href="{{ url('images/items/detail1/big.webp') }}">
								<img height="560" src="{{ url('images/items/detail1/big.webp') }}">
							</a>
						</div>
						<div class="thumbs-wrap">
							<a data-fslightbox="mygalley" data-type="image" href="{{ url('images/items/detail1/big1.webp') }}"
								class="item-thumb">
								<img width="60" height="60" src="{{ url('images/items/detail1/thumb1.webp') }}">
							</a>
							<a data-fslightbox="mygalley" data-type="image" href="{{ url('images/items/detail1/big2.webp') }}"
								class="item-thumb">
								<img width="60" height="60" src="{{ url('images/items/detail1/thumb2.webp') }}">
							</a>
							<a data-fslightbox="mygalley" data-type="image" href="{{ url('images/items/detail1/big3.webp') }}"
								class="item-thumb">
								<img width="60" height="60" src="{{ url('images/items/detail1/thumb3.webp') }}">
							</a>
							<a data-fslightbox="mygalley" data-type="image" href="{{ url('images/items/detail1/big4.webp') }}"
								class="item-thumb">
								<img width="60" height="60" src="{{ url('images/items/detail1/thumb4.webp') }}">
							</a>
							<a data-fslightbox="mygalley" data-type="image" href="{{ url('images/items/detail1/big.webp') }}"
								class="item-thumb">
								<img width="60" height="60" src="{{ url('images/items/detail1/thumb.webp') }}">
							</a>
						</div>
					</article>
				</aside>
				<main class="col-lg-6">
					<article class="ps-lg-3">
						<h4 class="title text-dark">Quality Men's Hoodie for Winter, Men's Fashion <br> Casual Hoodie
						</h4>
						<div class="rating-wrap my-3">
							<ul class="rating-stars">
								<li style="width:85%" class="stars-active"> <img src="{{ url('images/misc/stars-active.svg') }}"
										alt=""> </li>
								<li> <img src="{{ url('images/misc/starts-disable.svg') }}" alt=""> </li>
							</ul>
							<b class="label-rating text-warning"> 4.5</b>
							<i class="dot"></i>
							<span class="label-rating text-muted"> <i class="fa fa-shopping-basket"></i> 154 orders
							</span>
							<i class="dot"></i>
							<span class="label-rating text-success">In stock</span>
						</div>

						<div class="mb-3">
							<var class="price h5">$75.00</var>
							<span class="text-muted">/per box</span>
						</div>

						<p>Modern look and quality demo item is a streetwear-inspired collection that continues to break
							away from the conventions of mainstream fashion. Made in Italy, these black and brown
							clothing low-top shirts for men.</p>

						<dl class="row">
							<dt class="col-3">Type:</dt>
							<dd class="col-9">Regular</dd>

							<dt class="col-3">Color</dt>
							<dd class="col-9">Brown</dd>

							<dt class="col-3">Material</dt>
							<dd class="col-9">Cotton, Jeans </dd>

							<dt class="col-3">Brand</dt>
							<dd class="col-9">Reebook </dd>
						</dl>

						<hr>

						<div class="row mb-4">
							<div class="col-md-4 col-6 mb-2">
								<label class="form-label">Size</label>
								<select class="form-select">
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
								</select>
							</div>
							<div class="col-md-4 col-6 mb-3">
								<label class="form-label d-block">Quantity</label>
								<div class="input-group input-spinner">
									<button class="btn btn-icon btn-light" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999"
											viewBox="0 0 24 24">
											<path d="M19 13H5v-2h14v2z"></path>
										</svg>
									</button>
									<input class="form-control text-center" placeholder="" value="14">
									<button class="btn btn-icon btn-light" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999"
											viewBox="0 0 24 24">
											<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
										</svg>
									</button>
								</div>
							</div>
						</div>

						<a href="#" class="btn  btn-warning"> Buy now </a>
						<a href="#" class="btn  btn-primary"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart
						</a>
						<a href="#" class="btn  btn-light"> <i class="me-1 fa fa-heart"></i> Save </a>

					</article>
				</main>
			</div>

		</div>
	</section>
	<section class="padding-top bg-light border-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<header class="card-header">
							<ul class="nav nav-tabs card-header-tabs">
								<li class="nav-item">
									<a href="#" data-bs-target="#tab_specs" data-bs-toggle="tab"
										class="nav-link active">Specification</a>
								</li>
								<li class="nav-item">
									<a href="#" data-bs-target="#tab_warranty" data-bs-toggle="tab"
										class="nav-link">Warranty info</a>
								</li>
								<li class="nav-item">
									<a href="#" data-bs-target="#tab_shipping" data-bs-toggle="tab"
										class="nav-link">Shipping info</a>
								</li>
								<li class="nav-item">
									<a href="#" data-bs-target="#tab_seller" data-bs-toggle="tab"
										class="nav-link">Seller profile</a>
								</li>
							</ul>
						</header>
						<div class="tab-content">
							<article id="tab_specs" class="tab-pane show active card-body">
								<p>With supporting text below as a natural lead-in to additional content. Lorem ipsum
									dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
									reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
								<ul class="list-check cols-two">
									<li>Some great feature name here </li>
									<li>Lorem ipsum dolor sit amet, consectetur </li>
									<li>Duis aute irure dolor in reprehenderit </li>
									<li>Optical heart sensor </li>
									<li>Easy fast and ver good </li>
									<li>Some great feature name here </li>
									<li>Modern style and design</li>
								</ul>
								<table class="table border table-hover">
									<tr>
										<th> Display: </th>
										<td> 13.3-inch LED-backlit display with IPS </td>
									</tr>
									<tr>
										<th> Processor capacity: </th>
										<td> 2.3GHz dual-core Intel Core i5 </td>
									</tr>
									<tr>
										<th> Camera quality: </th>
										<td>720p FaceTime HD camera </td>
									</tr>
									<tr>
										<th> Memory </th>
										<td> 8 GB RAM or 16 GB RAM </td>
									</tr>
									<tr>
										<th> Graphics </th>
										<td> Intel Iris Plus Graphics 640 </td>
									</tr>
								</table>
							</article>
							<article id="tab_warranty" class="tab-pane card-body">
								Tab content or sample information now <br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum
								dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</article>
							<article id="tab_shipping" class="tab-pane card-body">
								Another tab content or sample information now <br>
								Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</article>
							<article id="tab_seller" class="tab-pane card-body">
								Some other tab content or sample information now <br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</article>
						</div>
					</div>
				</div>
				<aside class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Similar items</h5>

							<article class="itemside mb-3">
								<a href="#" class="aside">
									<img src="{{ url('images/items/8.webp') }}" width="96" height="96" class="img-md img-thumbnail">
								</a>
								<div class="info">
									<a href="#" class="title mb-1"> Rucksack Backpack Large <br> Line Mounts </a>
									<strong class="price"> $38.90</strong>
								</div>
							</article>

							<article class="itemside mb-3">
								<a href="#" class="aside">
									<img src="{{ url('images/items/9.webp') }}" width="96" height="96" class="img-md img-thumbnail">
								</a>
								<div class="info">
									<a href="#" class="title mb-1"> Summer New Men's Denim <br> Jeans Shorts </a>
									<strong class="price"> $29.50</strong>
								</div>
							</article>

							<article class="itemside mb-3">
								<a href="#" class="aside">
									<img src="{{ url('images/items/10.webp') }}" width="96" height="96" class="img-md img-thumbnail">
								</a>
								<div class="info">
									<a href="#" class="title mb-1"> T-shirts with multiple colors, for men and lady </a>
									<strong class="price"> $120.00</strong>
								</div>
							</article>

							<article class="itemside mb-3">
								<a href="#" class="aside">
									<img src="{{ url('images/items/11.webp') }}" width="96" height="96" class="img-md img-thumbnail">
								</a>
								<div class="info">
									<a href="#" class="title mb-1"> Blazer Suit Dress Jacket for Men, Blue color </a>
									<strong class="price"> $339.90</strong>
								</div>
							</article>
						</div>
					</div>
				</aside>
			</div>
			<br><br>
		</div>
	</section>
    <section class="padding-bottom bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Reviews </h5>
                            <hr>
                            <blockquote class="border-bottom">
                                <div class="float-lg-end d-flex mb-3">
                                    <div class="btn-group d-inline-flex me-2"> <button
                                            class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip"
                                            data-bs-title="Like"> <i class="fa fa-thumbs-up"></i> </button> <button
                                            class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip"
                                            data-bs-title="Dislike"> <i class="fa fa-thumbs-down"></i> </button> </div>
                                    <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                </div>
                                <div class="icontext"> <img src="{{ url('images/avatars/avatar.webp') }}"
                                        class="img-xs icon rounded-circle">
                                    <div class="text">
                                        <h6 class="mb-0"> Michael Jonathan </h6>
                                        <div class="rating-wrap">
                                            <ul class="rating-stars">
                                                <li style="width:80%" class="stars-active"> <img
                                                        src="{{ url('images/misc/stars-active.svg') }}" alt="">
                                                </li>
                                                <li> <img src="{{ url('images/misc/starts-disable.svg') }}"
                                                        alt=""> </li>
                                            </ul> <b class="dot"></b> <small class="label-rating text-muted"> Purchased
                                                on Wed, May 12 </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p> It used to be great, finding almost every song, but now i dont know what
                                        happened (they might be hacked even) that it can not find any song and it just
                                        makes up a different song to thats all and all the best Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi </p>
                                </div>
                            </blockquote>
                            <blockquote class="border-bottom">
                                <div class="float-lg-end d-flex mb-3">
                                    <div class="btn-group d-inline-flex me-2"> <button
                                            class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip"
                                            data-bs-title="Like"> <i class="fa fa-thumbs-up"></i> </button> <button
                                            class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip"
                                            data-bs-title="Dislike"> <i class="fa fa-thumbs-down"></i> </button> </div>
                                    <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                </div>
                                <div class="icontext"> <img src="{{ url('images/avatars/avatar1.webp') }}"
                                        class="img-xs icon rounded-circle">
                                    <div class="text">
                                        <h6 class="mb-0"> Michael Jonathan </h6>
                                        <div class="rating-wrap">
                                            <ul class="rating-stars">
                                                <li style="width:80%" class="stars-active"> <img
                                                        src="{{ url('images/misc/stars-active.svg') }}" alt="">
                                                </li>
                                                <li> <img src="{{ url('images/misc/starts-disable.svg') }}"
                                                        alt=""> </li>
                                            </ul> <b class="dot"></b> <small class="label-rating text-muted"> Purchased
                                                on Wed, May 12 </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p> It used to be great, finding almost every song, but now i dont know what
                                        happened (they might be hacked even) that it can not find any song and it just
                                        makes up a different song to thats all and all the best Just makes up a
                                        different song to thats all and all the best </p>
                                </div>
                            </blockquote>
                            <blockquote class="border-bottom">
                                <div class="float-lg-end d-flex mb-3">
                                    <div class="btn-group d-inline-flex me-2"> <button
                                            class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip"
                                            data-bs-title="Like"> <i class="fa fa-thumbs-up"></i> </button> <button
                                            class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip"
                                            data-bs-title="Dislike"> <i class="fa fa-thumbs-down"></i> </button> </div>
                                    <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                </div>
                                <div class="icontext"> <img src="{{ url('images/avatars/avatar3.webp') }}"
                                        class="img-xs icon rounded-circle">
                                    <div class="text">
                                        <h6 class="mb-0"> John Alex </h6>
                                        <div class="rating-wrap">
                                            <ul class="rating-stars">
                                                <li style="width:80%" class="stars-active"> <img
                                                        src="{{ url('images/misc/stars-active.svg') }}" alt="">
                                                </li>
                                                <li> <img src="{{ url('images/misc/starts-disable.svg') }}"
                                                        alt=""> </li>
                                            </ul> <b class="dot"></b> <small class="label-rating text-muted"> Purchased
                                                on Wed, Apr 30 </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p> It used to be great, finding almost every song, but now i dont know what
                                        happened (they might be hacked even) that it can not find any song and it just
                                        makes up a different song to thats all and all the best It used to be great,
                                        finding almost every song, but now i dont know what happened (they might be
                                        hacked even) </p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Review and Rating </h5>
                            <form>
                                <div class="stars">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Type here"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <article class="card">
                        <div class="card-body"> <a href="#" class="btn w-100 btn-primary-light">Write review</a>
                            <div class="rating-wrap mt-3">
                                <ul class="rating-stars stars-lg">
                                    <li style="width:80%" class="stars-active"> <img
                                            src="{{ url('images/misc/stars-active.svg') }}" alt=""> </li>
                                    <li> <img height="520" src="{{ url('images/misc/starts-disable.svg') }}"
                                            alt=""> </li>
                                </ul> <b class="label-rating text-lg"> 4.6 out of 5 </b>
                            </div>
                            <p class="mt-1 text-muted"> 320 reviews </p>
                            <table class="table table-borderless table-sm">
                                <tr valign="middle">
                                    <td width="50"> 5 star </td>
                                    <td>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 95%;"
                                                aria-valuenow="25" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td width="50"> 95 % </td>
                                </tr>
                                <tr valign="middle">
                                    <td> 4 star </td>
                                    <td>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;"
                                                aria-valuenow="80" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> 80 % </td>
                                </tr>
                                <tr valign="middle">
                                    <td> 3 star </td>
                                    <td>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;"
                                                aria-valuenow="35" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> 35 % </td>
                                </tr>
                                <tr valign="middle">
                                    <td> 2 star </td>
                                    <td>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 13%;"
                                                aria-valuenow="13" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> 13 % </td>
                                </tr>
                                <tr valign="middle">
                                    <td> 1 star </td>
                                    <td>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width:15%;"
                                                aria-valuenow="5" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> 15 % </td>
                                </tr>
                            </table>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

	<footer class="section-footer bg-primary footer-dark">
		<div class="container">
			<section class="footer-main padding-y">
				<div class="row">
					<aside class="col-12 col-sm-12 col-lg-3">
						<article class="me-lg-4">
							<img src="{{ url('images/logo-white.webp') }}" class="logo-footer">
							<p class="mt-3"> © 2018- 2021 Templatemount. <br> All rights reserved. </p>
						</article>
					</aside>
					<aside class="col-6 col-sm-4 col-lg-2">
						<h6 class="title">Store</h6>
						<ul class="list-menu">
							<li> <a href="#">About us</a></li>
							<li> <a href="#">Find store</a></li>
							<li> <a href="#">Categories</a></li>
							<li> <a href="#">Blogs</a></li>
						</ul>
					</aside>
					<aside class="col-6 col-sm-4 col-lg-2">
						<h6 class="title">Information</h6>
						<ul class="list-menu">
							<li> <a href="#">Help center</a></li>
							<li> <a href="#">Money refund</a></li>
							<li> <a href="#">Shipping info</a></li>
							<li> <a href="#">Refunds</a></li>
						</ul>
					</aside>
					<aside class="col-6 col-sm-4  col-lg-2">
						<h6 class="title">Support</h6>
						<ul class="list-menu">
							<li> <a href="#"> Help center </a></li>
							<li> <a href="#"> Documents </a></li>
							<li> <a href="#"> Account restore </a></li>
							<li> <a href="#"> My Orders </a></li>
						</ul>
					</aside>
					<aside class="col-12 col-sm-12 col-lg-3">
						<h6 class="title">Newsletter</h6>
						<p>Stay in touch with latest updates about our products and offers </p>

						<form class="mb-3">
							<div class="input-group">
								<input class="form-control" type="text" placeholder="Email">
								<button class="btn btn-light" type="submit">
									Join
								</button>
							</div>
						</form>
					</aside>
				</div>
			</section>
			<hr class="my-0">
			<section class="footer-bottom d-flex justify-content-lg-between">
				<div>
					<i class="fab fa-lg fa-cc-visa"></i>
					<i class="fab fa-lg fa-cc-amex"></i>
					<i class="fab fa-lg fa-cc-mastercard"></i>
					<i class="fab fa-lg fa-cc-paypal"></i>
				</div>
				<nav class="dropup">
					<button class="dropdown-toggle btn text-white d-flex align-items-center py-0" type="button"
						data-bs-toggle="dropdown">
						<img src="{{ url('images/flags/flag-usa.webp') }}" class="me-2" height="20">
						<span>English</span>
					</button>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="#">Russian</a></li>
						<li><a class="dropdown-item" href="#">Arabic</a></li>
						<li><a class="dropdown-item" href="#">Spanish</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</footer>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('plugins/fslightbox.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
</body>
</html>
