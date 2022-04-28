<footer>
    @php
    $footerLists = config('myArray.footerLists')
    @endphp
    <div class="topFooter">
        <div class="container">
            <div class="footerLeft">
                <div class="col">
                    <div>
                        <h3>
                            {{$footerLists[0]['title']}}
                        </h3>
                        <ul>
                            @foreach ($footerLists[0]['links'] as $link)
                            <li>
                                {{$link}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3>
                            {{$footerLists[1]['title']}}
                        </h3>
                        <ul>
                            @foreach ($footerLists[1]['links'] as $link)
                            <li>
                                {{$link}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h3>
                        {{$footerLists[2]['title']}}
                    </h3>
                    <ul>
                        @foreach ($footerLists[2]['links'] as $link)
                        <li>
                            {{$link}}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h3>
                        {{$footerLists[3]['title']}}
                    </h3>
                    <ul>
                        @foreach ($footerLists[3]['links'] as $link)
                        <li>
                            {{$link}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footerRight">
                <img src="./images/dc-logo-bg.png" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="bottomFooter">
        <div class="container">
            <button class="sign-btn">
                <h4>SIGN-UP NOW!</h4>
            </button>
            <div class="social">
                <h3>FOLLOW US</h3>
                <div>
                    <img src="./images/footer-facebook.png" alt="" srcset="">
                    <img src="./images/footer-twitter.png" alt="" srcset="">
                    <img src="./images/footer-youtube.png" alt="" srcset="">
                    <img src="./images/footer-pinterest.png" alt="" srcset="">
                    <img src="./images/footer-periscope.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</footer>
