<?php
$learn_menu = [
    [
        'href' => 'sign_up',
        'text' => 'Sign up',
    ],
    [
        'href' => 'sign_in',
        'text' => 'Sign In',
    ],
    [
        'href' => 'series',
        'text' => 'Series',
    ],
    [
        'href' => 'larabits',
        'text' => 'Larabits',
    ],
    [
        'href' => 'topics',
        'text' => 'Topics',
    ],
    [
        'href' => "what's_new",
        'text' => "What's New",
    ],
    [
        'href' => 'search',
        'text' => 'Search',
    ],
    [
        'href' => 'commercial',
        'text' => 'Commercial',
    ],
];

$discuss_menu = [
    [
        'href' => 'forum',
        'text' => 'Forum',
    ],
    [
        'href' => 'podcast',
        'text' => 'Podcast',
    ],
    [
        'href' => 'blog',
        'text' => 'Blog',
    ],
    [
        'href' => 'support',
        'text' => 'Support',
    ],
];

$extras_menu = [
    [
        'href' => 'gift_certificates',
        'text' => 'Gift Certificates',
    ],
    [
        'href' => 'teams',
        'text' => 'Teams',
    ],
    [
        'href' => 'faq',
        'text' => 'FAQ',
    ],
    [
        'href' => 'assets',
        'text' => 'Assets',
    ],
    [
        'href' => 'get_a_job',
        'text' => 'Get a Job',
    ],
    [
        'href' => "privacy",
        'text' => "Privacy",
    ],
    [
        'href' => 'terms',
        'text' => 'Terms',
    ],
]; 
?>

<footer id="site_footer">
    <div class="container">
        <div class="d-flex justify-content-center py-5">
            <div>
                <img src="{{ asset('img/mic-drop.svg') }}" alt="immagine artistica di un microfono">
            </div>
            <div class="input_email">
                <div>
                    <h3>
                        Want to us email you occasionally with <br>Laracts news? 
                    </h3>
                </div>
                <div class="pt-5">
                    <form action="action_page.php">
                        <input type="text" name="email" class="w-100 rounded-pill p-2 border-0" placeholder="Enter your email address">
                        <input type="button" value="SUBSCRIBE" class="rounded-pill p-2">
                    </form>
                </div>
            </div>
        </div>
        <div id="laracats_footer" class="d-flex py-5">
            <!-- .col-6 -->
            <div class="col-6 text-start">
                <img src="{{ asset('img/negative-logo.svg') }}" alt="immagine logo Laracasts">
                <p id="footer_paragraph">
                    Nine out of the doctors recommend Laracasts over competing <br>brands. Come inside, see for yourself, and massively level up <br>your development skills in the process.
                </p>  
                <div class="social">
                    <ul>
                        <li>
                            <a href="https://www.youtube.com/laracastsofficial">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/laracasts">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/laracasts">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>        
            </div>
            <!-- /.col-6 -->

            <!-- .col-6 -->
            <div id="image_footer" class="col-6">
                <div class="col-4">
                    <h6>LEARN</h6>
                    <div class="learn_menu">
                        <ul>
                            @foreach($learn_menu as $item)
                            <li>
                                <a href="{{ route($item['href']) }}">
                                    {{ $item['text'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <h6>DISCUSS</h6>
                    <div class="discuss_menu">
                        <ul>
                            @foreach($discuss_menu as $item)
                            <li>
                                <a href="{{ route($item['href']) }}">
                                    {{ $item['text'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <h6>EXTRAS</h6>
                    <div class="extras_menu">
                        <ul>
                            @foreach($extras_menu as $item)
                            <li>
                                <a href="{{ route($item['href']) }}">
                                    {{ $item['text'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col-6 -->
        </div>
        <hr>
        <div id="copyright">
            <p>
                © Laracasts 2021. All rights reserved. Yes, all of them. That means you, Todd. <br>
                Designed with <i class="fas fa-heart"></i> by <a href="https://twitter.com/tudssss" class="tuds_link">Tuds</a>. Proudly hosted with <a href="https://forge.laravel.com" class="laravel_link">Laravel Forge</a> and <a href="https://www.digitalocean.com/?refcode=d2070a2d5f35" class="ocean_link">DigitalOcean</a>. 
            </p>
        </div>
    </div>
</footer>
