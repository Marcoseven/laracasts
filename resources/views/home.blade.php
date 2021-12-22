@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="content_jumbo">
            <div class="image_jumbo">
               <img src="{{ asset('img/banner-illustration-lg.webp') }}" alt="immagine sfondo Laracasts">  
            </div>
            <div class="jumbo_right">
                <div>
                    <h1>
                        Screencasts for the <br>
                        <span class="title_special">modern.developer;</span>
                    </h1>
                </div>
                <div>
                    <p>
                        Push your web development skills to the next level, through expert <br>screencasts on Laravel, Vue, and so much more.
                    </p>
                </div>
                <div>
                    <h6>
                        Ready to binge?
                    </h6>
                </div>
                <div class="buttons_jumbo">
                    <button class="rounded-pill" type="submit" name="">BROWSE COURSES</button>
                    <button class="rounded-pill button_forum" type="submit" name="">DISCUSSION FORUM</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection