
<main>
    <div class="container-main-cards">
        <ul>
            @foreach ($cards as $card)
            <li>
                <a href="#!">
                    <img src="{{ $card['thumb'] }}" alt="">
                    <div>{{ $card['series'] }}</div>
                </a>
            </li>
            @endforeach
        </ul>
        <button>load more</button>
    </div>


    <!--<div class="second-main">
        <div class="container-blue-cards">
            <ul class="ul-images">
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-digital-comics.png" alt="">
                        <div>DIGITAL COMICS</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-merchandise.png" alt="">
                        <div>DC MERCHANDISE</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                        <div>SUBSCRIPTION</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img id="img-shop" src="/images/buy-comics-shop-locator.png" alt="">
                        <div>COMIC SHOP LOCATOR</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-dc-power-visa.svg" alt="">
                        <div>DC POWER VISA</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>-->

    <div class="second-main">
        <div class="container-blue-cards">
            <ul class="ul-images">
                @foreach ($dcCards as $comic)
                    <li class="li-inline-block">
                        <a href="#!">
                            <img src="{{ $comic['image'] }}" alt="">
                            <div>{{ $comic['text'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <section class="bkg-DC">
        <div class="container-third-main">
            <div class="container float">
              <div class="little-container">

                <!--<ul class="ul-second-main">
                    <h2>dc comics</h2>
                    <li class="second-li">
                        <a href="">
                           <div>Characters</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="">
                           <div>Comics</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="">
                           <div>Movies</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="">
                           <div>TV</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="">
                           <div>Games</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="">
                           <div>Videos</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="">
                           <div>News</div>
                        </a>
                    </li>
    
    
                    <h2>shop</h2>
                    <li class="second-li" >
                        <a href="#!">
                           <div>Shop DC</div>
                        </a>
                    </li>
                    <li class="second-li" >
                        <a href="#!">
                           <div>Shop DC Collectibles</div>
                        </a>
                    </li>
                </ul>-->

                <ul class="ul-second-main">
                    <h2>dc comics</h2>
                    @foreach ($dcComics as $comics)
                    <li class="second-li">
                        <a href="">
                           <div>{{ $comics['text'] }}</div>
                        </a>
                    </li>
                    @endforeach

                    <h2>shop</h2>
                    @foreach ($shop as $link)
                    <li class="second-li" >
                        <a href="#!">
                           <div>{{ $link['text'] }}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>

                <!--<ul class="ul-second-main">
                    <h2>dc</h2>
                    <li class="second-li">
                        <a href="#!">
                            <div>Terms of use</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Privacy policy(New)</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Ad Choices</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Advertsiting</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Jobs</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Subscriptions</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Talent Workshops</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>CPSC Certificates</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Ratings</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Shop Help</div>
                        </a>
                    </li>
                    <li class="second-li">
                        <a href="#!">
                            <div>Contact Us</div>
                        </a>
                    </li>
                </ul>-->

                <ul class="ul-second-main">
                    <h2>dc</h2>
                    @foreach ($dc as $settings)
                    <li class="second-li">
                        <a href="#!">
                            <div>{{ $settings['text'] }}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>

                <ul class="ul-second-main">
                    <h2>sites</h2>
                    @foreach ($sites as $site)
                    <li class="second-li">
                        <a href="#!">
                            <div>{{ $site['text'] }}</div>
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
            <img src="/images/dc-logo-bg.png" alt="big DC">
        </div>
    </section>


  


</main>