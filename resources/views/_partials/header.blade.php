<header>
    @php
    $headerLinks = config('myArray.headerList');
    @endphp
    <div class="top-header">
        <div class="container">
            <div class="top">
                <h5>DC POWER VISA</h5>
                <h5>ADDITIONAL DC SITES</h5>
            </div>
        </div>
    </div>
    <nav class="navigator">
        <div class="container row-header">
            <div class="logo">
                <img src="./images/dc-logo.png" alt="">
            </div>

            <ul class="menu-list">
                @foreach ($headerLinks as $link)
                <li><a href="{{$link['route']}}">
                    {{$link['title']}}
                </a></li>                    
                @endforeach
            </ul>

            <div class="search">
                <input class="inp-search" placeholder="Search" type="text">
            </div>
        </div>
    </nav>
</header>