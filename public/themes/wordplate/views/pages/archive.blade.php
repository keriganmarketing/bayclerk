@extends('layouts.main')

@section('content')
@include('partials.mast')
<main id="content" class="sizable">
    <div class="container">
        <article class="support">
            <header class="text-primary">
                <h1>{{ $headline != '' ? $headline : the_title() }}</h1>
            </header>
            {{ the_content() }}
            {{ wp_reset_query() }}
            
        </article>
        @if (!empty($results))
            @foreach ($results as $post)
                @include('partials.result')
            @endforeach
        @else
            <article>
                <p>Nothing was found using the requested search criteria. Search again?</p>
                {{ get_search_form() }}
            </article>
        @endif
    </div>
</main>
@endsection