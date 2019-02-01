@extends('layouts.app')

@section('content')


    <h2 class="content-heading">Image Rotate Left <small><code class="text-lowercase">.fx-item-rotate-l</code></small></h2>
    <div class="row items-push">

        <div class="col-md-2 animated fadeIn">
            <div class="options-container fx-item-rotate-l img-wrapper">
                <img class="img-fluid options-item" src="got.jpg" alt="">
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">ддИгра на Тронове На Сътбата</h3>
                        <h4 class="h6 text-white-75 font-w400 mb-3">Some Extra Info</h4>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-play text-success mr-1"></i> Гледай
                        </a>

                    </div>
                </div>

            </div>
            <h4>ддИгра на Тронове На Сътбата</h4>
            <p class="small">Последен епизод: преди 2 дни</p>
        </div>
        <div class="col-md-2 animated fadeIn">
            <div class="options-container fx-item-rotate-l img-wrapper">
                <img class="img-fluid options-item" src="got.jpg" alt="">
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Игра на Тронове</h3>
                        <h4 class="h6 text-white-75 font-w400 mb-3">Some Extra Info</h4>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-play text-success mr-1"></i> Гледай
                        </a>

                    </div>
                </div>

            </div>
            <h4>Игра на Тронове</h4>
            <p class="small">Последен епизод: преди 2 дни</p>
        </div>
        <div class="col-md-2 animated fadeIn">
            <div class="options-container fx-item-rotate-l img-wrapper">
                <img class="img-fluid options-item" src="got.jpg" alt="">
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Игра на Тронове</h3>
                        <h4 class="h6 text-white-75 font-w400 mb-3">Some Extra Info</h4>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-play text-success mr-1"></i> Гледай
                        </a>

                    </div>
                </div>

            </div>
            <h4>Игра на Тронове</h4>
            <p class="small">Последен епизод: преди 2 дни</p>
        </div>
        <div class="col-md-2 animated fadeIn">
            <div class="options-container fx-item-rotate-l img-wrapper">
                <img class="img-fluid options-item" src="got.jpg" alt="">
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Игра на Тронове</h3>
                        <h4 class="h6 text-white-75 font-w400 mb-3">Some Extra Info</h4>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-play text-success mr-1"></i> Гледай
                        </a>

                    </div>
                </div>

            </div>
            <h4>Игра на Тронове</h4>
            <p class="small">Последен епизод: преди 2 дни</p>
        </div>
        <div class="col-md-2 animated fadeIn">
            <div class="options-container fx-item-rotate-l img-wrapper">
                <img class="img-fluid options-item" src="got.jpg" alt="">
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Игра на Тронове</h3>
                        <h4 class="h6 text-white-75 font-w400 mb-3">Some Extra Info</h4>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-play text-success mr-1"></i> Гледай
                        </a>

                    </div>
                </div>

            </div>
            <h4>Игра на Тронове</h4>
            <p class="small">Последен епизод: преди 2 дни</p>
        </div>
        <div class="col-md-2 animated fadeIn">
            <div class="options-container fx-item-rotate-l img-wrapper">
                <img class="img-fluid options-item" src="got.jpg" alt="">
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Игра на Тронове</h3>
                        <h4 class="h6 text-white-75 font-w400 mb-3">Some Extra Info</h4>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-play text-success mr-1"></i> Гледай
                        </a>

                    </div>
                </div>

            </div>
            <h4>Игра на Тронове</h4>
            <p class="small">Последен епизод: преди 2 дни</p>
        </div>
    </div>
@endsection

@section('css_after')
    <style>
        .img-wrapper {
            position: relative;
            padding-bottom: 100%;
            overflow: hidden;
            width: 100%;
        }
        .img-wrapper img {
            position: absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
        }
    </style>
@endsection
