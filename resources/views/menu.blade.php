@extends('layouts.base')

@section('content')

<div style="height: 150px;"></div>

<!-- Start Menu -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <h1>Spacial Menu</h1>
        </div>
    </div>
</div>
<div class="menu-box">
    <div class="container">
        <div class="row">
        </div>

        <div class="row inner-menu-box">



            <div class="col-13">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                @foreach ($posts as $post)
                                @if ($post->spacial===1)
                                <div class="col mb-4 d-flex align-self-stretch" data-aos="flip-right">
                                    <div class="card">
                                        <img class="card-img" style="height: 20em;width:100%;" src="{{ asset($post->cover) }}" alt="Suresh Dasari Card">
                                        <div class="card-body something4">
                                            <h5 class="card-title something4">{{ $post->name }}</h5>
                                            <p class="card-text something4">{{ $post->description }}.</p>
                                            <h3 class="something4">Rs {{ $post->price }}.00</h3>
                                            <!-- <a href="" class="btn btn-outline-danger" name="submit" id="submit">Add To Cart</a> -->
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

</div>
@php
        $food_choice=['Biriyani','Curries','Garlic Rice','Juice Bar','Kilo koththu'];
@endphp
@foreach ($food_choice as $cho)
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <h1>{{$cho}}</h1>
        </div>
    </div>
</div>
<div class="menu-box">
    <div class="container">
        <div class="row">
        </div>

        <div class="row inner-menu-box">



            <div class="col-13">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                @foreach ($posts as $post)
                                @if ($post->food===$cho)

                                <div class="col mb-4 d-flex align-self-stretch" data-aos="flip-right">
                                    <div class="card">
                                        <img class="card-img" style="height: 20em;width:100%;" src="{{ asset($post->cover) }}" alt="Suresh Dasari Card">
                                        <div class="card-body something4">
                                            <h5 class="card-title something4">{{ $post->name }}</h5>
                                            <p class="card-text something4">{{ $post->description }}.</p>
                                            <h3 class="something4">Rs {{ $post->price }}.00</h3>
                                            <!-- <a href="" class="btn btn-outline-danger" name="submit" id="submit">Add To Cart</a> -->
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

</div>
@endforeach


<style>
    body {
        background-color: #fff3b2;
        color: #666666;
        font-size: 15px;
        font-family: 'Rubik', sans-serif;
        line-height: 1.80857;
    }
</style>
<!-- Start Customer Reviews -->

<!-- End Customer Reviews -->


@endsection
