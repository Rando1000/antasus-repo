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
                {{-- <div id="vap-brdcrmb" itemscope="" itemtype="" class="breadcrump">
                    
                    

                            <div id="vap-brdcrmb" itemscope="" itemtype="" class="breadcrump">
                                
                                    <a class="breadcrump-link" itemprop="url" href=""><span itemprop="title">{!! $categories->first()->breadcrumb() !!}</span></a>
                                </div>
                            </div> --}}
                        
                            {{-- <div id="browser-unsupported-warning" class="outcomebox-error" hidden="">
                                <header><h1>Bitte aktualisiere deinen Browser</h1></header>
                                <div class="outcomebox--body">
                                    <div><img src="/static/img/common/illustrations/connection-issue.19tgaem4ty5h3.png" alt="" width="79" height="77"></div>
                                    <p>Viele Deals wurden auf eBay Kleinanzeigen gemacht, seit dein Browser das Licht der Welt erblickt hat. Um weiterhin alle Funktionen einwandfrei nutzen zu können, solltest du ihn aktualisieren.
                                    Wir empfehlen <a href="https://www.google.com/intl/de/chrome/" target="_blank" rel="nofollow">Google Chrome</a>, <a href="https://www.mozilla.org/de/firefox/new/" target="_blank" rel="nofollow">Mozilla Firefox</a>,
                                        <a href="https://www.microsoft.com/de-de/edge" target="_blank" rel="nofollow">Microsoft Edge</a> oder <a href="https://support.apple.com/de-de/HT204416" target="_blank" rel="nofollow">Safari</a>, falls du macOS benutzt.
                                    </p>
                                </div>
                            </div> --}}
                        
                        
                    
            <header class="boxheader-nomarginbottom splitheader">
                <div id="vap-brdcrmb" itemscope="" itemtype="" class="breadcrump">



                    <div id="vap-brdcrmb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrump">
                        <a class="breadcrump-link" itemprop="url" href="/" title="Kleinanzeigen ">
                            <span itemprop="title"></span>
                        </a>
                            <a class="breadcrump-link" itemprop="url" href=""><span itemprop="title">{!! $categories->first()->breadcrumb2() !!}</span></a>
                        </div>
                    </div>
            </header>
                
            <div id="postad-category-select-box" class="l-row"> 
                           
                <div class="category-selection-col a-span-6 and-pushed l-col">
                                
                        
                    @if($categories->count())
                        @foreach ($categories as $category)
                        <ul class="category-selection-list">
                            
                            <li class="category-selection-list-item is-parent ">
                                        
                                <a id="name" href="{{route('frontend.advertcreate', ["id" => $category->id])}}" name="" class="category-selection-list-item-link">
                                {{$category->name}}
                                </a>
                                        
                            </li>
                                
                        </ul>
                            
                        @endforeach
                    @endif
                    </div>
                    @if ($category->children)
                    <div class="category-selection-col a-span-6 and-pushed l-col">
                        
                            @foreach ( $category->children as $child )
                                <ul class="category-selection-list">
                                    <li class="category-selection-list-item is-parent ">
                                        <a id="title" href="{{route('frontend.advertcreate', ["id" => $child->id])}}" class="category-selection-list-item-link">
                                            {{$child->name}}
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        
                    </div>
                    @endif
            </div>
                
            
            @if ($categories->first()->isLeaf())
                        <div class="flex justify-end mb-3 create-btn">
                            <a href=" {{route('frontend.categories.product.create', $category->id)}} " class="btn btn-xs btn-primary btn-create">WEITER</a>    
                        </div>     
                    @endif
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