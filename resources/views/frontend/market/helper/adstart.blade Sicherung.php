<div class="site-base">
    <div class="site-base--left-banner">
        <div class="site-base--left-banner--full">
                    <div id="banner-skyscraper-left" class="">
                        <div data-liberty-position-name="srpb-sky-atf-left" class="l-container" id="liberty-srpb-sky-atf-left"></div>
        </div>
                </div>
            </div>
    <div class="site-base--content">    
        <div id="site-content" class="l-page-wrapper l-container-row  ">
            <div class="l-container-row">


                    @if($categories->count())
                    @foreach ($categories as $category)

                    <div id="vap-brdcrmb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrump">
                        <a class="breadcrump-link" itemprop="url" href="/" title="Kleinanzeigen ">
                            <span itemprop="title"></span>
                        </a>
                            <a class="breadcrump-link" itemprop="url" href=""><span itemprop="title">{!! $categories->first()->breadcrumb() !!}</span></a>
                        </div>
                    </div>
                <div id="browser-unsupported-warning" class="outcomebox-error" hidden="">
                    <header><h1>Bitte aktualisiere deinen Browser</h1></header>
                    <div class="outcomebox--body">
                        <div><img src="/static/img/common/illustrations/connection-issue.19tgaem4ty5h3.png" alt="" width="79" height="77"></div>
                        <p>Viele Deals wurden auf eBay Kleinanzeigen gemacht, seit dein Browser das Licht der Welt erblickt hat. Um weiterhin alle Funktionen einwandfrei nutzen zu können, solltest du ihn aktualisieren.
                        Wir empfehlen <a href="https://www.google.com/intl/de/chrome/" target="_blank" rel="nofollow">Google Chrome</a>, <a href="https://www.mozilla.org/de/firefox/new/" target="_blank" rel="nofollow">Mozilla Firefox</a>,
                            <a href="https://www.microsoft.com/de-de/edge" target="_blank" rel="nofollow">Microsoft Edge</a> oder <a href="https://support.apple.com/de-de/HT204416" target="_blank" rel="nofollow">Safari</a>, falls du macOS benutzt.
                        </p>
                    </div>
                </div>
                @endforeach
                @endif 

                <script type="text/javascript" src="https://static.criteo.net/js/ld/publishertag.js" async="async"></script>
                    <script>
                    window.Criteo = window.Criteo || {};
                    window.Criteo.events = window.Criteo.events || [];
                    </script>
                <section class="l-homepage-navigation-col">
                    <section id="home-ctgrs" class="l-container-row contentbox">
            
                        <header class="boxheader-nomarginbottom splitheader">
                            <h3 class="splitheader--title text-title-4">Categories</h3>
                            <a class="splitheader--addon" href="  ">All Categories</a>
                        </header>
                        @if($categories->count())
                        @foreach ($categories as $category)
                        <div class="no-padding clearfix position-relative">
                            <div class="catinner">
                            <ul id="home-ul-ctgrs" class="itemlist-padded treelist">
                                <li class="">
                                    <a class="text-link-secondary treelist-headline" href="{{route('frontend.advertcreate', ["id" => $category->id])}}">
                                    {{$category->name}}</a><span class="browsebox-facet text-light">{{$category->productsCount}}</span>
                                    @endforeach
                                    @endif 
                                </li>
                            </ul>
                            </div>
                                @if ($category->children->count() > 0)
                                @foreach ( $category->children as $child )
                                
                            
                            <div class="catinner2">
                                <ul>
                                    <li>
                                        <a class="text-link-secondary" href="{{route('frontend.advertcreate', ["id" => $child->id])}}">
                                            {{$child->name}}
                                        </a>
                                    </li>
                                </ul> 
                                @endforeach
                                @endif 
                            </div>
                        </div>
                    </div>
                    </section>
            </div>
        </div> 
    </div>


    <div class="site-base--right-banner">
        <div class="site-base--right-banner--full">
            <div id="banner-skyscraper" class="">
                <div data-liberty-position-name="srpb-sky-atf-right" class="l-container" id="liberty-srpb-sky-atf-right"></div>
            </div>
        </div>
    </div>


</div>