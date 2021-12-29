<?php
$buttons = [
    [
        'href' => 'series',
        'text' => 'BROWSES COURSES',
    ],
    [
        'href' => 'discussion',
        'text' => 'DISCUSSION FORUM',
    ],
];
?>

<section id="section_jumbotron">
    <div class="container">
        <div class="content_jumbotron">
            <div class="image_jumbotron">
               <img src="{{ asset('img/banner-illustration-lg.webp') }}" alt="immagine sfondo Laracasts">  
            </div>
            <div class="jumbotron_right">
                <div>
                    <h1>
                        Screencasts for the <br>
                        <span class="title_special">modern.developer;</span>
                        <span id="dynamic_coffin"></span>
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
                <div class="buttons_jumbotron">
                    @foreach($buttons as $item)
                    <a href="{{ route($item['href']) }}">
                        <button class="rounded-pill" type="submit" name="courses">
                        {{ $item['text'] }} 
                        </button> 
                    </a>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</section>
