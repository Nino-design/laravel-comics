@extends('layout.app')

@section('title')
    Comics homepage
@endsection

@section('main_content')
    <section>
        <div class="container d-flex justify-content-start align-items-center pt-3">
            <div class="row row-cols-6">
                @foreach ($comics as $element)
                    <div class="album-wrapper m-3 text-left">
                        <img src="{{ $element['thumb'] }}" alt="">
                        <h5> {{ $element['series'] }} </h5>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center pb-3">
        <button class="load-more text-center">load more</button>
    </div>
    </section>
    <section class="main-links">
        <div class="container">
            <ul class="links-list">
                <li>
                    <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="" />
                  <h3>DIGITAL COMICS</h3>
                </li>
                <li>
                    <img src="{{asset('/images/buy-comics-merchandise.png')}}" alt="" />
                  <h3>DC MERCHANDISE</h3>
                </li>
                <li>
                    <img src="{{asset('/images/buy-comics-subscriptions.png')}}" alt="" />
                  <h3>SUBSCRIPTION</h3>
                </li>
                <li>
                    <img src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="" />
                  <h3>COMIC SHOP LOCATOR</h3>
                </li>
                <li>
                    <img src="{{asset('/images/buy-dc-power-visa.svg')}}" alt="" />
                  <h3>DC POWER VISA</h3>
                </li>
            </ul>
        </div>

    </section>
@endsection
