@extends('layouts.app')
@section('content')

<section id="section_series">
    <!-- #site_header_pages -->
    @include('partials.site_header_pages')
    <!-- /#site_header_pages -->
    <div class="container">
        <div class="container_series_first">
            <h2>
                Recently Updated
            </h2>
            <p>
                Curious what's new at Laracasts? The following series have been recently<br>updated.
            </p>
        </div>
        <div class="container_series_second">
            <div class="col-12">
                <div class="col-8 content_col_12_left">
                    <div>
                        <input class="button_frameworks rounded-pill" type="button" value="FRAMEWORKS">
                    </div>
                    <div class="content_title_series">
                        <h3>Inertia and SPA Techniques</h3>
                    </div>
                    <div>
                        <p>
                            So you've mastered the basics of building an SPA with Laravel and Inertia? Nice work,<br>but of course there's always more to learn. In this series, we'll review a variety of useful<br>tips and techniques to simplify and clean up your single page applications. This...
                        </p>
                    </div>
                    <div class="content_icons_series">
                        <div class="d-flex align-items-center">
                            <i class="me-3 fas fa-bars"></i>
                            Advanced<br>Difficulty
                        </div>
                        <div>
                            <img src="{{ asset('img/lessons-available-icon.svg') }}" alt="immagine raffigurativa di due libri">    
                            3 Lessons</div>
                        <div>
                            <i class="fas fa-clock"></i>
                            20m
                        </div>
                    </div>
                    <form action="/action_page.php">
                        <a id="link_play" class="link-dark rounded-pill" href="#">
                            <i class="far fa-play-circle"></i>
                            <input class="button_play rounded-pill" type="button" value="Start Series">                            
                        </a>
                    </form>
                </div>
                <div class="col-4 content_col_12_right">
                    <img src="{{ asset('img/inertia-and-spa-techniques.svg') }}" alt="immagini dinamica di Laracasts">
                </div>
            </div>
            <div class="col-12">
                <div class="col-8 content_col_12_left">
                    <div>
                        <input class="button_frameworks rounded-pill" type="button" value="TOOLING">
                    </div>
                    <div class="content_title_series">
                        <h3>GraphQL with Laravel and Vue</h3>
                    </div>
                    <div>
                        <p>
                            GraphQL is often looked at as the successor to REST APIs. It provides a powerful query<br>language and allows you to make requests for exactly the information you want,<br>nothing more and nothing less. Many services now offer GraphQL APIs making it easier...
                        </p>
                    </div>
                    <div class="content_icons_series">
                        <div class="d-flex align-items-center">
                            <i class="me-3 fas fa-bars"></i>
                            Advanced<br>Difficulty
                        </div>
                        <div>
                            <img src="{{ asset('img/lessons-available-icon.svg') }}" alt="immagine raffigurativa di due libri">    
                            3 Lessons</div>
                        <div>
                            <i class="fas fa-clock"></i>
                            20m
                        </div>
                    </div>
                    <form action="/action_page.php">
                        <a id="link_play" class="link-dark rounded-pill" href="#">
                            <i class="far fa-play-circle"></i>
                            <input class="button_play rounded-pill" type="button" value="Start Series">                            
                        </a>
                    </form>
                </div>
                <div class="col-4 content_col_12_right">
                    <img src="{{ asset('img/graphql-with-laravel-and-vue.svg') }}" alt="immagini dinamica di Laracasts">
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
