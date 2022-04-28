<header>
    <section class="bk-blue">
        <div class="width">
            <div>dc power visa&#174;</div>
            <div>additional dc sities <span>&#9660;</span></div>
        </div>
    </section>
    <div class="container-header">
        <img src="/images/dc-logo.png" alt="DC logo">
        <ul>
            @foreach ($links as $link)
                <li><a href="#!">{{ $link['name'] }}</a></li>
            @endforeach
        </ul>
        <div class="form">
            <div>Search</div>
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>
