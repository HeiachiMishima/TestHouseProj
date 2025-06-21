@extends('layout.layout')
@section('content')
    <section id="home">
        <!-- Carousel -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                @foreach ($home as $home)
                    <div class="carousel-item active">
                        <div class="d-block w-100"
                            style="background-image: url('{{ asset('image/' . $home->image) }}'); background-position: center; background-repeat: no-repeat; background-size: cover;"
                            class="img-fluid">
                            <div class="col-lg-6 col-md-12 col-sm-12 Carousal">
                                <h1>{{ $home->heading }}</h1>
                                <p>{{ $home->paragraph }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>



    <section id="about">
        <div class="container" style="margin-top: 10%">
            <div class="row">
                @foreach ($about as $about)
                    <div class="col-lg-6  col-md-12 col-sm-12 mb-5">
                        <img src="{{ asset('image/' . $about->image) }}" height="90%" width="100%" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3 ">
                        <h1 class="about ms-5">{{ $about->heading1 }}</h1>
                        <h1 class="about1">{{ $about->heading2 }}</h1>
                        <p class="para mt-5 ms-2">{{ $about->paragraph }}</p>
                        <button class="bg-info ms-2 mt-3" id="openModal">{{ $about->button }}</button>
                @endforeach
                @foreach ($modal1 as $modal1)
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>{{ $modal1->heading }}</h2>
                            <img src="{{ asset('image/' . $modal1->image) }}" alt="Team" class="modal-image">
                            <p>{{ $modal1->paragraph }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    <section id="services">
        @foreach ($sheading as $sheading)
            <h1 class="services text-center mt-5">{{ $sheading->heading1 }}</h1>
            <h1 class="services1">{{ $sheading->heading2 }}</h1>
        @endforeach
        <div class="container">
            <div class="row">
                @foreach ($scard as $scard)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon">
                            <img src="{{ asset('image/' . $scard->image) }}" class="img-icon">
                            <div class="Modern ms-4">
                                <h4 class="houses">{{ $scard->heading }}</h4>
                                <p class="Morbi">{{ $scard->paragraph }}</p>
                                <button class="read" data-modal="modal1">{{ $scard->button }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>{{ $modal1->heading }} </h2>
                    <img src="{{ asset('image/' . $modal1->image) }}" alt="Team" style="width: 100%; height: auto;" />
                    <p>{{ $modal1->paragraph }}</p>
                </div>
            </div>

        </div>
    </section>

    <div class="video">
        @foreach ($crud as $crud)
            <video autoplay loop muted src="{{ asset('videos/' . $crud->video) }}"
                style="width: 100%; height: 100%;"></video>
            <div class="videotext">
                <h1 class="dreams text-danger"> {{ $crud->heading }}</h1>
                <h4 class="videopara"> {{ $crud->paragraph }}</h4>
                <button class="videobtn" id="openModal2">
                    {{ $crud->button }}
                </button>
            </div>
        @endforeach
        @foreach ($modal2 as $modal2)
            <div id="myModal2" class="modal">
                <div class="modal-content">
                    <span class="close2">&times;</span>
                    <h2>
                        {{ $modal2->heading }}
                    </h2>
                    <img src="{{ asset('image/' . $modal2->image) }}" alt="Team" class="modal-image">
                    <p>{{ $modal2->paragraph }}</p>
                </div>
            </div>
        @endforeach
    </div>




    <section id="team">
        @foreach ($team as $team)
            <h1 class="service2 text-center mt-5">{{ $team->heading1 }}</h1>
            <h1 class="services2">{{ $team->heading2 }}</h1>
        @endforeach
        <div class="container">
            <div class="row">
                @foreach ($tcard as $tcard)
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                        <img src="{{ asset('image/' . $tcard->image) }}" class="t1" alt="">
                        <div class="info text-center">
                            <h4 class="amanda mt-3">{{ $tcard->name }}</h4>
                            <p class="designer">{{ $tcard->text }}</p>
                            <p>{{ $tcard->paragraph }}</p>
                            <div class="icon3 mt-4">
                                <a href=""><i class="fa-brands fa-facebook mt-3" style="color: #009688;"></i></a>
                                <a href=""><i class='bx bxl-twitter ms-2 mt-3' style='color:#009688'></i></a>
                                <a href=""><i class='bx bxl-google-plus ms-2 mt-3' style='color:#009688'></i></a>
                                <a href=""><i class='bx bxl-linkedin ms-2 mt-3' style='color:#009688'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="gallery">
        @foreach ($gallery as $gallery)
            <h1 class="services text-center mt-5">{{ $gallery->heading1 }}</h1>
            <h1 class="services1">{{ $gallery->heading2 }}</h1>
        @endforeach
        <div class="buttons mt-5 text-center">
            @foreach ($gbutton as $gbutton)
                <a href="#" class="filter-btn"
                    data-filter="{{ $gbutton->heading1 }}">{{ $gbutton->heading2 }}</a>
            @endforeach
        </div>
        <div class="container mt-5">
            <div class="row">
                @foreach ($gcard as $gcard)
                    <div class="col-lg-3 col-md-6 col-sm-12 filter-item {{ $gcard->name }}">
                        <a href="#" class="gallery-image" data-bs-target="#imageModal" data-bs-toggle="modal"
                            data-bs-index="0">
                            <img src="{{ asset('image/' . $gcard->image) }}" class="image1 mt-1" alt="Interior">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="modal fade pt-5" id="imageModal" tabindex="-1" aria-hidden="true" style="margin-top: 15%;">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content position-relative">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-0">
                        <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($carousalimage as $carousalimage)
                                    <div class="carousel-item active">
                                        <img src="{{ asset('image/' . $carousalimage->image) }}" alt="Image 1">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <img src="Image/btnPrevious.png" alt="">
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselImages"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                <img src="Image/btnNext.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                    @foreach ($stats as $stats)
                        <h1 class="services ms-5 mt-5">{{ $stats->heading1 }}</h1>
                        <h1 class="services3">{{ $stats->heading2 }}</h1>
                        <p class="lorem mt-5 ms-2">{{ $stats->paragraph }}</p>
                        <button class="bg-info ms-2 mt-3" id="openModal">{{ $stats->button }}</button>
                    @endforeach
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>{{ $modal2->heading }}</h2>
                            <img src="{{ asset('image/' . $modal2->image) }}" alt="Team" class="modal-image">
                            <p>{{ $modal2->paragraph }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                    <div class="container">
                        <div class="row">
                            @foreach ($stats2 as $stats2)
                                <div class="col-lg-6 col-md-6 col-sm-12 text-center mt-3">
                                    <img src="{{ asset('image/' . $stats2->image) }}" class="img-icon">
                                    <p class="counter">{{ $stats2->counting }}</p>
                                    <p class="properties1">{{ $stats2->info }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        @foreach ($news as $news)
            <h1 class="services text-center mt-5">{{ $news->heading1 }}</h1>
            <h1 class="services1">{{ $news->heading2 }}</h1>
        @endforeach
        <div class="container mt-5">
            <div class="row">
                @foreach ($newscard as $newscard)
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-3">
                        <div class="backgroundimage"
                            style="background-image: url('{{ asset('image/' . $newscard->image) }}');background-position: center; background-repeat: no-repeat; background-size: cover;">
                            <div class="news ps-3 pt-5 pb-5">
                                <p>{{ $newscard->date }}</p>
                                <h4>{{ $newscard->heading }}</h4>
                                <p>{{ $newscard->paragraph }}</p>
                                <button class="button">{{ $newscard->button }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="contact">
        @foreach ($contact as $contact)
            <div class="contactimage mt-5"
                style="background-image: url('{{ asset('image/' . $contact->image) }}');background-position: center; background-repeat: no-repeat; background-size: cover;">
                <h1 class="service5 text-center mt-3">{{ $contact->heading1 }}</h1>
                <h1 class="services5">{{ $contact->heading2 }}</h1>
                <div class="container">
                    <div class="row">
                        <!-- Left Column: About Us -->
                        <div class="CAbout col-lg-4 col-md-12 col-sm-12 mt-5 mb-5">
                            <h1 class="CHeading mt-5 ms-4">{{ $contact->heading3 }}</h1>
                            <p class="CLorem mt-2 ms-4 me-2">{{ $contact->paragraph1 }}</p>
                            <h1 class="CHeading mt-3 ms-4">{{ $contact->heading4 }}</h1>
                            <p class="CLorem mt-2 ms-4">{{ $contact->paragraph2 }}</p>
                            <p class="CLorem ms-4">{{ $contact->paragraph3 }} </p>
                            <a href="#" class="example ms-4">{{ $contact->paragraph4 }}</a>
                            <div class="icon5 ms-4 mt-4">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="bx bxl-twitter ms-2"></i></a>
                                <a href="#"><i class="bx bxl-google-plus ms-2"></i></a>
                                <a href="#"><i class="bx bxl-linkedin ms-2"></i></a>
                            </div>
                        </div>

                        <!-- Right Column: Contact Form -->
                        <div class="CAbout col-lg-8 col-md-12 col-sm-12 mt-5 mb-5">
                            <h3 class="CHeading mt-5 ms-4">{{ $contact->heading5 }}</h3>
        @endforeach
        <form action="{{ route('store.Contactlist') }}" method="post" class="ms-4 me-4">
            @csrf
            @foreach ($contactform as $contactform)
                <div class="form-group">
                    <label for="name">{{ $contactform->heading }}</label>
                    <input type="text" id="name" name="{{ $contactform->text2 }}" class="form-control"
                        placeholder="{{ $contactform->text1 }}" required>
                </div>
            @endforeach
            @foreach ($contactform2 as $contactform2)
                <div class="form-group">
                    <label for="message">{{ $contactform2->heading }}</label>
                    <textarea id="message" class="form-control" rows="3" name="{{ $contactform2->text2 }}"
                        placeholder="{{ $contactform2->text1 }}"></textarea>
                </div>
            @endforeach
            <button class="Cbtn" type="submit">{{ $contact->button }}</button>
        </form>
        </div>
        </div>
        </div>
        </div>
    </section>
    <div class="map">
        @foreach ($map as $map)
            <div class="map-container">
                <iframe src="{{ $map->text1 }}{{ $map->text2 }}"></iframe>
            </div>
        @endforeach
    </div>
@endsection
