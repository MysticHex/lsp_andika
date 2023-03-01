@extends('layouts.main')

@section('container')
    <div class="mt-3">
        <div class="row px-3">
            <div class="col-8">
                <div class="ratio ratio-16x9">
                    <img src="{{ '/asset/images/asset-1.jpg' }}" alt="" class="image-fluid" height="56">
                </div>
            </div>
            <div class="col-4 d-flex align-items-center">
                <span class="my-auto mx-auto fw-bold fs-3"><ins>Mendidik Masa Depan</ins></span>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-4 d-flex align-items-center">
                <span class="my-auto mx-auto fw-bold fs-3 text-wrap text-center"><ins>Fasilitah Lengkap, <span><br></span>
                        Berrsih, Aman</ins></span>
            </div>
            <div class="col-8">
                <div class="ratio ratio-16x9">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ '/asset/images/asset-2.jpeg' }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ '/asset/images/asset-3.jpeg' }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ '/asset/images/asset-1.jpg' }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
