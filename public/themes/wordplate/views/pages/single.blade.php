@extends('layouts.main')
@section('content')

@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
        @include('partials.mast')
        <main id="content" class="sizable">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-start">
                    <div class="col-md-9 order-md-2">
                        <article class="support pb-5">
                            <header class="text-primary">
                                <h1>{{ $headline != '' ? $headline : the_title() }}</h1>
                            </header>
                            {{ the_content() }}
                        </article>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </main>
    @endwhile
@else
    @include('pages.404')
@endif

@endsection