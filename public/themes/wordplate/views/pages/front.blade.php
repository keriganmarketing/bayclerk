@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        <kma-slider class="slider-container d-none d-md-block"></kma-slider>

        <div class="button-gallery d-flex flex-column justify-content-center align-items-center sizeable w-100">

            <div class="d-none d-md-block search-box py-2">
                {{ get_search_form() }}
            </div>

            @include('partials.buttongallery')

            <div id="main" class="clickdown justify-self-end">
                <button class="clickdown-button" v-scroll-to="'#main'" ><i class="fa fa-chevron-down" aria-hidden="true" ></i></button>
            </div>

        </div>

    @endwhile
@else
    @include('pages.404')
@endif
@endsection