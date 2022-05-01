
<main class="main-cards">
    <div class="container-main-cards">
        <ul>
            @foreach ($cards as $card)
            <li>
                <a href="{{ route('character', ['id' => $card['id']]) }}">
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                    <div>{{ $card['series'] }}</div>
                </a>
            </li>
            @endforeach
        </ul>
        <button>load more</button>
    </div>

    <div class="second-main">
        <div class="container-blue-cards">
            <ul class="ul-images">
                @foreach ($dcCards as $comic)
                    <li class="li-inline-block">
                        <a href="#!">
                            <img src="{{ $comic['image'] }}" alt="{{ $comic['text'] }}">
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