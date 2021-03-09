@extends('layouts.base')

@section('content')

<!-- Start About -->
<div style="height:50px;"></div>
<div class="customer-reviews-box theback" style="background-color: rgb(0, 0, 0);height: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto text-center">
                <div id="reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item text-center active">
                            <!-- <div class="img-box p-1 m-auto">
                                <img class="d-block " src="{% static 'kiloapp/images/pro1.png'%}" alt="">
                            </div> -->
                            <h5 class="mt-4 mb-0" style="color: aliceblue;font-size: 20px;"><strong class="text-warning1 text-uppercase">High Quality Fresh Ingredients</strong></h5>
                            <!-- <p class="m-0 pt-3 " style="color: rgb(0, 0, 0);">BBK prides itself in using the freshest and handpicked ingredients</p> -->
                        </div>
                        <div class="carousel-item text-center">
                            <!-- <div class="img-box p-1  m-auto">
                                <img class="d-block  " src="{% static 'kiloapp/images/pro2.png'%}" alt="">
                            </div> -->
                            <h5 class="mt-4 mb-0"><strong style="color: aliceblue;" class="text-warning1 text-uppercase">Dum cooked fresh on every order</strong></h5>
                            <!-- <p class="m-0 pt-3" style="color: rgb(0, 0, 0);">Each biryani is individually prepared in the traditional dum style with distinct layers by our khansamas in natural clay handis</p> -->
                        </div>
                        <div class="carousel-item text-center">
                            <!-- <div class="img-box p-1  m-auto">
                                <img class="d-block " src="{% static 'kiloapp/images/pro3.png'%}" alt="">
                            </div> -->
                            <h5 class=""><strong style="color: aliceblue;" class="text-warning1 text-uppercase">Authentic recipes with traditional khansama style of cooking</strong></h5>
                            <!-- <p class="" style="color: rgb(0, 0, 0);">KB brings the Royal Biryani to you, prepared in the traditional dum style, slow cooked to perfection by our khansama</p> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/images/po1.jpeg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/po2.jpeg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/po3.jpeg')}}" alt="First slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="all-page-title1 page-breadcrumb2">
    <div class="container text-center">
        <div class="row">
            <h1>Menu</h1>
        </div>
    </div>
</div>

<!-- Start Menu -->
<div class="menu-box" style="background-color: rgb(0, 0, 0);">
    <div class="container">

        <div class="row inner-menu-box">

            <div class="col-3">


                <div style="position: -webkit-sticky;top: 150px;position: sticky;" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a style="color: aliceblue;" class="nav-link active" id="v-pills-special-tab" data-toggle="pill" href="#v-pills-special" role="tab" aria-controls="v-pills-special" aria-selected="true">Offers</a>
                    <a style="color: aliceblue;" class="nav-link" id="v-pills-special1-tab" data-toggle="pill" href="#v-pills-special1" role="tab" aria-controls="v-pills-special1" aria-selected="false">Special</a>
                    <a style="color: aliceblue;" class="nav-link" id="v-pills-biriyani-tab" data-toggle="pill" href="#v-pills-biriyani" role="tab" aria-controls="v-pills-biriyani" aria-selected="false">Biriyani</a>
                    <a style="color: aliceblue;" class="nav-link" id="v-pills-curries-tab" data-toggle="pill" href="#v-pills-curries" role="tab" aria-controls="v-pills-curries" aria-selected="false">Curries</</a>
                    <a style="color: aliceblue;" class="nav-link" id="garlicrice-tab" data-toggle="pill" href="#garlicrice" role="tab" aria-controls="garlicrice" aria-selected="false">Garlic Rice</a>
                    <a style="color: aliceblue;" class="nav-link" id="juicebar-tab" data-toggle="pill" href="#juicebar" role="tab" aria-controls="juicebar" aria-selected="false">Juice Bar</a>
                    <a style="color: aliceblue;" class="nav-link" id="kilokoththu-tab" data-toggle="pill" href="#kilokoththu" role="tab" aria-controls="kilokoththu" aria-selected="false">Kilo koththu</a>

                </div>
            </div>
            <div class="col-9 content">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-special" role="tabpanel" aria-labelledby="v-pills-special-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->offer>0)
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        @php
                                            $counter = floor((($post->price)-($post->offer))/($post->price)*(100));
                                        @endphp
                                        <p style="color:black;font-size: 2em; font-weight: 700;height: 1em;text-align: center;">{{$counter}}% OFF</p>
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>

                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-special1" role="tabpanel" aria-labelledby="v-pills-special1-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->spacial===1)
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>

                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-biriyani" role="tabpanel" aria-labelledby="v-pills-biriyani-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->food==='Biriyani')
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-curries" role="tabpanel" aria-labelledby="v-pills-curries-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->food==='Curries')
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="garlicrice" role="tabpanel" aria-labelledby="garlicrice-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->food==='Garlic Rice')
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach


                        </div>
                    </div>
                    <div class="tab-pane fade" id="juicebar" role="tabpanel" aria-labelledby="juicebar-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->food==='Juice Bar')
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach


                        </div>
                    </div>

                    <div class="tab-pane fade" id="kilokoththu" role="tabpanel" aria-labelledby="kilokoththu-tab">
                        <div class="row">

                            @foreach ($posts as $post)
                            @if ($post->food==='Kilo koththu')
                            <div class="col-lg-4 col-md-6 special-grid ">
                                <div class="gallery-single fix" data-aos="flip-up">
                                    <div class="why-text">
                                        <h4>{{ $post->name }}</h4>
                                        <p>{{ $post->description }}</p>

                                        @if ($post->offer===0)
                                        <h5>Rs {{ $post->price }}</h5>
                                        @else
                                        <h5><s>Rs {{ $post->price }}</s></h5>
                                        <h5>Rs {{ $post->offer }}</h5>
                                        @endif

                                    </div>
                                    <div style="background-color: aliceblue;">
                                        <img  class="img-fluid" style="height: 15em;width:100%;" src="{{ asset($post->cover) }}" alt="Image">

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach


                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
</div>


<div class="gallery-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2 style="color: white;">Our Happy Customers</h2>
                </div>
            </div>
        </div>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Sumudu Wijesooriya </h1>
                            <p>Had a delicious experience with Kilo Biriyani .... hot and tasty! Friendly and responsive service too .... Long way to go!</p>
                        </div>
                        <img src="{{asset('/images/cus1.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Neelika Dissage</h1>
                            <p>Mouthwatering dishes 👍 thank you for you service 💯</p>
                        </div>
                        <img src="{{asset('/images/cus7.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>



                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Alane VanCuylenburg</h1>
                            <p>Very satisfied customer .It’s very hard to please my hubby bcz he’s a good cook but he gives yourl 100 marks very good will definitely order again.</p>
                        </div>
                        <img src="{{asset('/images/cus3.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Vijay Muthiyah</h1>
                            <p>Fully satisfied with their vegetable biriyani .. highly recommended</p>
                        </div>
                        <img src="{{asset('/images/cus4.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Krish Sivam</h1>
                            <p>biriyani was awesome good quantity & super taste</p>
                        </div>
                        <img src="{{asset('/images/cus5.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Muditha Priyashan</h1>
                            <p>food was delicious</p>
                        </div>
                        <img src="{{asset('/images/cus6.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Dulan Abeynayake </h1>
                            <p>The flavors were on point and mouthwatering</p>
                        </div>
                        <img src="{{asset('/images/cus8.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="gallery-single fix" data-aos="flip-up">
                        <div class="why-text">
                            <h1>Dilhani Perera</h1>
                            <p>Biriyani was awesome.... Thank you so much</p>
                        </div>
                        <img src="{{asset('/images/cus9.jpg')}}" class="img-fluid" style="height: 15em;width:100%;" alt="Image">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
