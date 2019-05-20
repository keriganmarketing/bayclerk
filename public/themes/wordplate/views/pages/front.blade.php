@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        <kma-slider class="slider-container d-none d-md-block"></kma-slider>

        <div class="button-gallery d-flex flex-column justify-content-center align-items-center sizeable w-100">

            <div class="mobile-announcements bg-accent d-md-none pt-1 px-2">
                @include('partials.announcements')
            </div>

            <div class="action-button-group h-100 d-flex flex-column align-items-center justify-content-center" >
                <div class="d-none d-md-block search-box py-2">
                    {{ get_search_form() }}
                </div>
                @include('partials.buttongallery')
            </div>

            <div id="main" class="clickdown justify-self-end bg-accent">
                <button class="clickdown-button" v-scroll-to="'#main'" ><i class="fa fa-chevron-down" aria-hidden="true" ></i></button>
                @include('partials.announcements')
            </div>

        </div>

    @endwhile
@else
    @include('pages.404')
@endif
@endsection