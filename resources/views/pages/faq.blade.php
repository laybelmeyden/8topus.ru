@extends('layouts.master')
@section('content')
<section class="service-home pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center">
                        <div class="service-home-content" style="padding-top: 160px;">
                            @foreach ($faq as $faqs)
                            @if (App::isLocale('ru'))
                            {!! $faqs -> body_ru !!}
                            @else 
                            {!! $faqs -> body_en !!}
                            @endif
                            @endforeach
                        <div class="tv-free-button tv-moduleid-974731"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection