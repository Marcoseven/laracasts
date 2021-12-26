<header id="site_header">
    <div class="menu">    
        <!-- #logo -->
        <div id="logo" class="col-6">
            <img src="{{ asset('img/negative-logo.svg') }}" alt="immagine logo Laracasts">
        </div>
        <!-- /#logo -->

        <!-- #nav_bar -->
        <nav id="nav_bar" class="row col-6">
            <div class="col-6"></div>
            <div class="col-6 pe-0">
                <ul class="d-flex">
                    <li id="search">
                        <a href="#">
                            <form action="/action_page.php">
                                <input type="text" id="fname" name="fname"><i class="fas fa-search"></i>
                            </form>
                        </a>
                    </li>
                    <li id="sign_in">
                        <a href="#">SIGN IN</a>
                    </li>
                    <li id="nav_bar_button">
                        <a href="#">
                            <form action="/action_page.php">
                                <input class="rounded-pill" type="button" value="GET STARTED">
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /#nav_bar -->
    </div>
</header>
