@extends('layouts.main')

@section('content')
@include('partials.mast')
<main id="content" class="sizable">
    <div class="container">
        @if (have_posts())
            @while (have_posts())

                {{ the_post() }}
                
                @if(get_field('expiration_date',get_the_ID()) >= date('Ymd') || get_field('expiration_date',get_the_ID()) == '')
                @include('partials.article')
                @endif

            @endwhile
        @else
            @include('pages.404')
        @endif
    </div>
</main>
@endsection