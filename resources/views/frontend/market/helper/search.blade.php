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
{{-- <div class="l-container-row"> --}}


    {{-- @if($categories->count())
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
    @endif --}}

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
                <ul id="home-ul-ctgrs" class="itemlist-padded treelist">
                    <li class="">
                        <a class="text-link-secondary treelist-headline" href="{{route('frontend.categories', ["id" => $category->id])}}">
                        {{$category->name}}</a><span class="browsebox-facet text-light">{{$category->productsCount}}</span>
                        {{-- <ul>
                            @if ($category->children->count() > 0)
                            @foreach ( $category->children as $child )
                            <li>
                                <a class="text-link-secondary" href="{{route('frontend.categories', ["id" => $child->id])}}">
                                    {{$child->name}}
                                </a>
                            </li>
                            @endforeach
                            @endif
                            
                         </ul>   --}}
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            
        </section>

        {{-- <section id="home-tsr-srvy" class="l-container-row contentbox">
            <header class="boxheader-nomarginbottom splitheader">
                <h3 class="splitheader--title text-title-4">Feedback</h3>
            </header>
        <p>
            Hast du Feedback für uns?<br>
            <a class="j-start-feedback float-right" href="https://de.surveymonkey.com/r/HB36HB5">Starten</a>
        </p>

        </section>--}}
    </section> 

    <section id="home-cntnt" class="l-homepage-content-col">
        @foreach ($productsearch as $product )
        <section id="home-ads" class="a-double-margin l-container-row">
                
            
            <li class="ad-listitem lazyload-item">
                <a href="{!! route('frontend.categories.product.show', ["category" => $category->id, "product" => $product->id]) !!}">  
            <article class="aditem" data-adid="1786209446" data-href="" style="cursor: pointer;">
                <div class="aditem-image">
                    
                                    <div class="imagebox srpimagebox">
                                        <img src="{{asset('storage/'.$product->pictures)}}" srcset="{{asset('storage/'.$product->pictures)}} 2x" alt="{{$product->title}}"></div>
                                    
                                </div>
                <div class="aditem-main">
                    <div class="aditem-main--top">
                        <div class="aditem-main--top--left">
                            <i class="fas fa-globe-americas"></i> {{$product->country}}
                                    </div>
                        <div class="aditem-main--top--right">
                                <i class="icon icon-small icon-calendar-open"></i> {{$product->created_at}}</div>
                    </div>
                </a>
                    <div class="aditem-main--middle">
                        <h2 class="text-module-begin">
                            <a class="ellipsis" href="{!! route('frontend.categories.product.show', ["category" => $category->id, "product" => $product->id]) !!}">{{$product->title}}
                        </h2>
                        <p class="aditem-main--middle--description">{{$product->description}}</p>
                        <p class="aditem-main--middle--price">
                            {{$product->price}} €</p>
                        </div>
                    <div class="aditem-main--bottom">
                        <p class="text-module-end">{{$product->shipment}}
                            <i class="fas fa-map-marker-alt"></i><span class="simpletag tag-small" >{{$product->location}}</span>
                            </p>
                        </div>
                </div>
            </article>
        </li>
    </a>
        
        </section>
        @endforeach

    


        

    {{-- <section id="store-gallery" class="a-double-margin l-container-row tilesbox">
                <header class="tilesbox--header splitheader">
                    <h2 class="splitheader--title text-title-4">Unternehmensseiten in Deutschland</h2>
                    <a class="splitheader--addon" href="/s-unternehmensseiten-verzeichnis.html" data-gaevent="Homepage,BusinessPagesWidgetClick">
                        Alle anzeigen</a>
                </header>

                <ul id="home-gallery-list-shops" class="tilelist">
                    <li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/Nach-Hause-Immobilien" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/MTQxWDEwMjQ=/z/4uwAAOSw6QxeV9j-/$_2.PNG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/Nach-Hause-Immobilien" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    Nach Hause Immobilien GmbH &amp; Co. KG</a>
                            </h7>
                            <div class="itemtile-location">
                                Leipzig</div>
                        </div>
                    </li><li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/TMetz-Kfz-Service" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/NzVYMjk4/z/coMAAOSwL0xe61A6/$_2.JPG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/TMetz-Kfz-Service" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    T.Metz Kfz-Service</a>
                            </h7>
                            <div class="itemtile-location">
                                Sinzheim</div>
                        </div>
                    </li><li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/TUZA-What-You-Want" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/NTMzWDY5Nw==/z/yfYAAOSwlipgXw0v/$_2.JPG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/TUZA-What-You-Want" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    TUZA-What-You-Want</a>
                            </h7>
                            <div class="itemtile-location">
                                Coesfeld</div>
                        </div>
                    </li><li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/Premium-Jagd" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/NjYyWDY2Mg==/z/730AAOSwz7FfWyO8/$_2.PNG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/Premium-Jagd" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    K&amp;K Premium Jagd GmbH</a>
                            </h7>
                            <div class="itemtile-location">
                                Dortmund</div>
                        </div>
                    </li></ul>
        </section>
    <section id="home-topcitybx" class="l-container-row contentbox">
    <header class="boxheader splitheader">
        <h2 class="splitheader--title text-title-4">Top Städte</h2>
        <a class="splitheader--addon" href="/top-staedte.html">Alle ansehen</a>
    </header>
    <div>
        <ul class="list">
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/berlin/">Berlin</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/bremen (stadt)/">Bremen (Stadt)</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/dortmund/">Dortmund</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/dresden/">Dresden</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/duisburg/">Duisburg</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/duesseldorf/">Düsseldorf</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/essen/">Essen</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/frankfurt (main)/">Frankfurt (Main)</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/hamburg/">Hamburg</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/hannover/">Hannover</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/koeln/">Köln</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/leipzig/">Leipzig</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/muenchen/">München</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/nuernberg/">Nürnberg</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/saarbruecken/">Saarbrücken</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/stuttgart/">Stuttgart</a></li>
            </ul>

    </div>
    </section>
    </section>
    <div id="srp-btf-billboard" class="flex-right">
                </div>--}}
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



























































{{-- 


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
                <ul id="home-ul-ctgrs" class="itemlist-padded treelist">
                    <li class="">
                        <a class="text-link-secondary treelist-headline" href="{{route('frontend.ctg', $category->id)}}">
                        {{$category->name}}</a>
                        <ul>
                            @if ($category->children->count() > 0)
                            @foreach ( $category->children as $child )
                            <li>
                                <a class="text-link-secondary" href="{{route('frontend.ctg', $child->id)}}">
                                    {{$child->name}}
                                </a>
                            </li>
                            @endforeach
                            @endif
                            @endforeach
                            @endif
                         </ul>  
                    </li>
                </ul>
            </div>
        </section>

        <section id="home-tsr-srvy" class="l-container-row contentbox">
            <header class="boxheader-nomarginbottom splitheader">
                <h3 class="splitheader--title text-title-4">Feedback</h3>
            </header>
        <p>
            Hast du Feedback für uns?<br>
            <a class="j-start-feedback float-right" href="https://de.surveymonkey.com/r/HB36HB5">Starten</a>
        </p>

        </section>
    </section>

    <section id="home-cntnt" class="l-homepage-content-col">


        <section class="a-double-margin l-container-row tilesbox-featured carousel" id="home-gallery">
            <header class="tilesbox--header splitheader-centered">
                <h2 class="splitheader--title text-title-4">TOP Products</h2>
                <div class="splitheader--addon">
                    <a class="text-link-secondary" id="home-hpgallery-info-lnk" data-gaevent="Homepage,OrderOptionDetails,GALLERY" data-gaevent-direct="true">Anzeige hier platzieren</a>&nbsp;
                    <button class="button-browse-previous fas fa-caret-left" id="home-gllry-prev" title="zurück"></button>
                    <button class="button-browse-next fas fa-caret-right" id="home-gllry-next" title="weiter"></button>
                </div>
            </header>

            <div class="newber">
                <div class="itemy">

                    <div class="colty">
                        <div class="thumb-wrapper">
                            @if($new->count())
                            @foreach ($new as $product)
                                    
                            <div class="bg-white shadow-sm imgdiv"><a href="{!! route('frontend.product.show', $product->id) !!}"><img src="https://s20.directupload.net/images/210703/e2c2bncb.png" alt="\logo-zerissen.png" style="height:170px; width:100%; object-fit:contain" class="imgadv"></a>
                        
                                <h8 class="mb-1"> <a href="{!! route('frontend.product.show', $product->id) !!}">{!! $product->title !!}</a></h8>
                                <div class="itemtile-ribbon"><span class="itemtiles-price">{!! $product->price !!} € VB</span></div>
                                <i class="fas fa-map-marker-alt"></i>
                                    <span class="medium text-uppercase text">{!! $product->location !!}</span>
                            <!-- <span class="small text-uppercase text">{!! trans($product->description) !!}</span> -->
                        
                            </div>
                          
                            @endforeach
                        @endif
                        </div>
                    </div>        
                </div>
            </div>
        </section>

<section id="home-ads" class="a-double-margin l-container-row">
        <header class="splitheader l-container-row">
        <h1 class="text-title-4 splitheader--title">Recently Added</h1>
            <div class="splitheader--addon">
                <a href="/p-anzeige-aufgeben.html">
                    Neue Anzeige aufgeben
                </a>
            </div>
        </header>
        <ul class="tilelist">
            
            @foreach ($category->products as $product)
            <li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="{!! route('frontend.product.show', $product->id) !!}">
                        <img alt="\logo-zerissen.png" src="zerissen.png" srcset="https://s20.directupload.net/images/210703/e2c2bncb.png" 0.5>
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/gudereit-comfort-8-plus/1811090169-217-7721">
                            {!! $product->title !!}</a>
                    </h7>
                    <div class="itemtile-location">{!! $product->location !!}</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">{!! $product->price !!}</span></div>
                    </div>
                    @endforeach
            </li>
            
            <li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/hessnatur-wickelbody-wolle-seide-kurzarm-body/1811090126-22-10423">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/OkcAAOSwI1pg4B1-/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/OkcAAOSwI1pg4B1-/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/hessnatur-wickelbody-wolle-seide-kurzarm-body/1811090126-22-10423">
                            Hessnatur Wickelbody Wolle Seide Kurzarm Body</a>
                    </h7>
                    <div class="itemtile-location">Eisenberg </div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">12 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/traumhaftes-einfamilienhaus-mit-einliegerwohnung-von-privat/1790592262-208-5008">
                        <img alt="" src="https://i.ebayimg.com/00/s/NDk4WDEwMjQ=/z/SfMAAOSwnGpg3XiD/$_35.JPG" srcset="https://i.ebayimg.com/00/s/NDk4WDEwMjQ=/z/SfMAAOSwnGpg3XiD/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/traumhaftes-einfamilienhaus-mit-einliegerwohnung-von-privat/1790592262-208-5008">
                            Traumhaftes Einfamilienhaus mit Einliegerwohnung von Privat</a>
                    </h7>
                    <div class="itemtile-location">Alflen</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">548.000 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/bauzaun-mieten/1714348389-239-1105">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTYwMFgxNjAw/z/nkoAAOSwKudgYGcS/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTYwMFgxNjAw/z/nkoAAOSwKudgYGcS/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/bauzaun-mieten/1714348389-239-1105">
                            Bauzaun mieten</a>
                    </h7>
                    <div class="itemtile-location">Innenstadt-Ost</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">1 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/haus-am-deich-in-kollmar-gesucht/1811090798-208-9507">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTgzWDI3NQ==/z/yhQAAOSwTURg4BaR/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTgzWDI3NQ==/z/yhQAAOSwTURg4BaR/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/haus-am-deich-in-kollmar-gesucht/1811090798-208-9507">
                            Haus am Deich in Kollmar gesucht</a>
                    </h7>
                    <div class="itemtile-location">Hamburg Rissen</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">450.000 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/autotrailer/1811092282-276-3039">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/RU4AAOSw0bJg4B4w/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/RU4AAOSw0bJg4B4w/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/autotrailer/1811092282-276-3039">
                            Autotrailer</a>
                    </h7>
                    <div class="itemtile-location">Wiesmoor</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">1.000 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/10tb-festplatte-hdd-seagate-exos-x14-sas-st10000nm0528/1811055852-225-1285">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTYwMFgxMjAw/z/bjkAAOSwQNhg4BPY/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTYwMFgxMjAw/z/bjkAAOSwQNhg4BPY/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/10tb-festplatte-hdd-seagate-exos-x14-sas-st10000nm0528/1811055852-225-1285">
                            10TB Festplatte HDD Seagate Exos X14 SAS ST10000NM0528</a>
                    </h7>
                    <div class="itemtile-location">Oberhausen</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">215 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/suche-haus-villa-sacherl-finderlohn-/1811091277-208-5823">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/pkIAAOSw7dFg4B4I/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/pkIAAOSw7dFg4B4I/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/suche-haus-villa-sacherl-finderlohn-/1811091277-208-5823">
                            SUCHE Haus / Villa / Sacherl  -  Finderlohn !</a>
                    </h7>
                    <div class="itemtile-location">Pfarrkirchen</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">800.000 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/mopedauto-aixam-crossover/1811090047-216-4664">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTYwMFgxMjAw/z/WlsAAOSwYzZg4Bz5/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTYwMFgxMjAw/z/WlsAAOSwYzZg4Bz5/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/mopedauto-aixam-crossover/1811090047-216-4664">
                            Mopedauto Aixam Crossover</a>
                    </h7>
                    <div class="itemtile-location">Langgöns</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price"> VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/wir-suchen-ein-haus-zum-kaufen/1811091085-208-10597">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTI4MFg5NjA=/z/s-sAAOSwBQ1g4B3v/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTI4MFg5NjA=/z/s-sAAOSwBQ1g4B3v/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/wir-suchen-ein-haus-zum-kaufen/1811091085-208-10597">
                            Wir suchen ein Haus zum kaufen</a>
                    </h7>
                    <div class="itemtile-location">Altenholz</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">250.000 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/ihre-neue-wohnung-praktisches-1-5-zi-single-appartment/1811088853-203-1102">
                        <img alt="" src="https://i.ebayimg.com/00/s/NTM1WDgwMA==/z/vcgAAOSw7P5g4B15/$_35.JPG" srcset="https://i.ebayimg.com/00/s/NTM1WDgwMA==/z/vcgAAOSw7P5g4B15/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/ihre-neue-wohnung-praktisches-1-5-zi-single-appartment/1811088853-203-1102">
                            Ihre neue Wohnung: praktisches 1,5-Zi.-Single-Appartment</a>
                    </h7>
                    <div class="itemtile-location">Huckarde</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">349 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/chia-plotting-farming-ryzen-9-5950x-112tb-1021-plot/1806097113-225-6304">
                        <img alt="" src="https://i.ebayimg.com/00/s/NzAyWDkwMA==/z/70gAAOSw4m5g2CRB/$_35.JPG" srcset="https://i.ebayimg.com/00/s/NzAyWDkwMA==/z/70gAAOSw4m5g2CRB/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/chia-plotting-farming-ryzen-9-5950x-112tb-1021-plot/1806097113-225-6304">
                            Chia Plotting/Farming Ryzen 9 5950X/112TB/1021 Plot</a>
                    </h7>
                    <div class="itemtile-location">Unterföhring</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">5.000 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/takeuchi-tb108-tb-108-deutsch-werkstatthandbuch-handbuch-bagger/1660300830-276-4810">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTYwMFgxNDEw/z/FokAAOSwwOhgH9eV/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTYwMFgxNDEw/z/FokAAOSwwOhgH9eV/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/takeuchi-tb108-tb-108-deutsch-werkstatthandbuch-handbuch-bagger/1660300830-276-4810">
                            Takeuchi TB108 TB 108 Deutsch Werkstatthandbuch Handbuch Bagger</a>
                    </h7>
                    <div class="itemtile-location">Hofheim am Taunus</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">99 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/streichen-tapezieren-laminat-verlegen/1811090197-239-1863">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTYwMFg4NjE=/z/TvMAAOSwnMhg4B2H/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTYwMFg4NjE=/z/TvMAAOSwnMhg4B2H/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/streichen-tapezieren-laminat-verlegen/1811090197-239-1863">
                            Streichen, tapezieren, Laminat verlegen</a>
                    </h7>
                    <div class="itemtile-location">Langenfeld</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price"> VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/seagate-expansion-desktop-5tb-usb-hdd-3-5-/1811073501-225-6322">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTI4MVg5MDA=/z/jq4AAOSwu4lg4Bm4/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTI4MVg5MDA=/z/jq4AAOSwu4lg4Bm4/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/seagate-expansion-desktop-5tb-usb-hdd-3-5-/1811073501-225-6322">
                            Seagate Expansion Desktop 5TB USB HDD 3,5"</a>
                    </h7>
                    <div class="itemtile-location">Grafrath</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">60 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/koch-koechin-ab-sofort-oder-spaeter/1807912306-110-143">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/cTAAAOSwsFdg2tYG/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/cTAAAOSwsFdg2tYG/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/koch-koechin-ab-sofort-oder-spaeter/1807912306-110-143">
                            Koch/Köchin ab sofort oder später</a>
                    </h7>
                    <div class="itemtile-location">Seebad Warnemünde</div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/buggy-zum-laufen-jogger-jako-o-offroad-kinderwagen/1811089504-25-4296">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/7xwAAOSwi0lg4By1/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTIwMFgxNjAw/z/7xwAAOSwi0lg4By1/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/buggy-zum-laufen-jogger-jako-o-offroad-kinderwagen/1811089504-25-4296">
                            Buggy zum Laufen, Jogger , Jako o, Offroad, Kinderwagen</a>
                    </h7>
                    <div class="itemtile-location">Innenstadt</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">50 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/seagate-expansion-portable-4tb-usb-hdd-2-5-/1811067209-225-6322">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTIyNVg4NTk=/z/MzUAAOSw3CFg4Bhd/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTIyNVg4NTk=/z/MzUAAOSw3CFg4Bhd/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/seagate-expansion-portable-4tb-usb-hdd-2-5-/1811067209-225-6322">
                            Seagate Expansion Portable 4TB USB HDD 2,5"</a>
                    </h7>
                    <div class="itemtile-location">Grafrath</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">40 € VB</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/unsere-liebe-verschmuste-akira-ist-so-traurig-und-wehmuetig/1811089098-136-8273">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTYwMFgxMjAw/z/QHAAAOSwBRpg4Btx/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTYwMFgxMjAw/z/QHAAAOSwBRpg4Btx/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/unsere-liebe-verschmuste-akira-ist-so-traurig-und-wehmuetig/1811089098-136-8273">
                            Unsere liebe verschmuste Akira ist so traurig und wehmütig</a>
                    </h7>
                    <div class="itemtile-location">Wilhelmsdorf</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">130 €</span></div>
                    </div>
            </li><li class="itemtile-fullpic">
                <div class="itemtile-header">
                    <a href="/s-anzeige/lagerhelfer-m-w-d-auf-450-basis-nach-homburg-gesucht-/1811090159-107-372">
                        <img alt="" src="https://i.ebayimg.com/00/s/MTA5N1gxNTM2/z/8d0AAOSwD15g4B29/$_35.JPG" srcset="https://i.ebayimg.com/00/s/MTA5N1gxNTM2/z/8d0AAOSwD15g4B29/$_12.JPG 2x">
                    </a>
                </div>
                <div class="itemtile-body">
                    <h7 class="itemtile-title">
                        <a href="/s-anzeige/lagerhelfer-m-w-d-auf-450-basis-nach-homburg-gesucht-/1811090159-107-372">
                            Lagerhelfer (m/w/d) auf 450 € Basis nach Homburg gesucht!</a>
                    </h7>
                    <div class="itemtile-location">Homburg</div>
                    <div class="itemtile-ribbona"><span class="itemtile-price">130 €</span></div>
                    </div>
            </li></ul>
    </section>

    <section id="store-gallery" class="a-double-margin l-container-row tilesbox">
                <header class="tilesbox--header splitheader">
                    <h2 class="splitheader--title text-title-4">Unternehmensseiten in Deutschland</h2>
                    <a class="splitheader--addon" href="/s-unternehmensseiten-verzeichnis.html" data-gaevent="Homepage,BusinessPagesWidgetClick">
                        Alle anzeigen</a>
                </header>

                <ul id="home-gallery-list-shops" class="tilelist">
                    <li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/Nach-Hause-Immobilien" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/MTQxWDEwMjQ=/z/4uwAAOSw6QxeV9j-/$_2.PNG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/Nach-Hause-Immobilien" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    Nach Hause Immobilien GmbH &amp; Co. KG</a>
                            </h7>
                            <div class="itemtile-location">
                                Leipzig</div>
                        </div>
                    </li><li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/TMetz-Kfz-Service" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/NzVYMjk4/z/coMAAOSwL0xe61A6/$_2.JPG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/TMetz-Kfz-Service" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    T.Metz Kfz-Service</a>
                            </h7>
                            <div class="itemtile-location">
                                Sinzheim</div>
                        </div>
                    </li><li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/TUZA-What-You-Want" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/NTMzWDY5Nw==/z/yfYAAOSwlipgXw0v/$_2.JPG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/TUZA-What-You-Want" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    TUZA-What-You-Want</a>
                            </h7>
                            <div class="itemtile-location">
                                Coesfeld</div>
                        </div>
                    </li><li class="itemtile-condensed">
                        <div class="itemtile-header">
                            <a href="/pro/Premium-Jagd" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                <img alt="" src="https://i.ebayimg.com/00/s/NjYyWDY2Mg==/z/730AAOSwz7FfWyO8/$_2.PNG">
                            </a>
                        </div>
                        <div class="itemtile-body">
                            <h7 class="itemtile-title">
                                <a href="/pro/Premium-Jagd" data-gaevent="Homepage,BusinessPagesWidgetClick">
                                    K&amp;K Premium Jagd GmbH</a>
                            </h7>
                            <div class="itemtile-location">
                                Dortmund</div>
                        </div>
                    </li></ul>
        </section>
    <section id="home-topcitybx" class="l-container-row contentbox">
    <header class="boxheader splitheader">
        <h2 class="splitheader--title text-title-4">Top Städte</h2>
        <a class="splitheader--addon" href="/top-staedte.html">Alle ansehen</a>
    </header>
    <div>
        <ul class="list">
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/berlin/">Berlin</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/bremen (stadt)/">Bremen (Stadt)</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/dortmund/">Dortmund</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/dresden/">Dresden</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/duisburg/">Duisburg</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/duesseldorf/">Düsseldorf</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/essen/">Essen</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/frankfurt (main)/">Frankfurt (Main)</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/hamburg/">Hamburg</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/hannover/">Hannover</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/koeln/">Köln</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/leipzig/">Leipzig</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/muenchen/">München</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/nuernberg/">Nürnberg</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/saarbruecken/">Saarbrücken</a></li>
            <li class="l-quarter-width-floating"><a class="text-link-secondary j-location" data-gaevent="Homepage,CityOverviewWidgetClick" href="/stadt/stuttgart/">Stuttgart</a></li>
            </ul>

    </div>
    </section>
    </section>
    <div id="srp-btf-billboard" class="flex-right">
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
</div> --}}











































{{-- <div id="refreshusermarket">

    <div class="collan">
<div class="newbery">
<ha2 class="mb-1">RECENTLY <b>ADDED</b></ha2>
<div class="itemys">

    @foreach ($allads as $market)
      <div class="colty">
          <div class="thumb-wrapper">

          <div class="bg-white shadow-sm imgdiv"><i class="fas fa-globe-americas"></i> <span class="small text-uppercase text"></span><img src="" alt="{{ $market->title }}" style="height:200px; width:200px; object-fit:contain" class="imgadv">

          <h5 class="mb-1">{{ $market->title }}</h5>
          <div class="itemtile-ribbony"><span class="itemtile-price">{{ $market->price }} € VB</span></div>
          <i class="fas fa-map-marker-alt"></i>
          <span class="medium text-uppercase text">{{ $market->location }}</span>
          <span class="small text-uppercase text">{{ trans($market->description) }}</span> 
              </div>
          </div>
      </div>
      @endforeach
</div>
</div>



<script type="text/javascript">
    setInterval("marketnew();",30000);
    function marketnew(){
      $('#refreshmarket').load(location.href + ' #refreshmarket');
    }
</script> --}}

