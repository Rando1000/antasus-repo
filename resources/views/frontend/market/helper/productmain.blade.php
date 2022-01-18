
<div class="site-base">

<div class="site-base--left-banner">
    <div class="site-base--left-banner--full">
        <div id="banner-skyscraper-left" class="">
            <div data-liberty-position-name="vip_pro-sky-atf-left" class="l-container" id="liberty-vip_pro-sky-atf-left"></div>
        </div>
    </div>
</div>

<div class="site-base--content">
    <div id="site-content" class="l-page-wrapper l-container-row  ">
@csrf
        <div class="l-container-row">
        <div id="vap-brdcrmb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrump">
            <a class="breadcrump-link" itemprop="url" href="/" title="Kleinanzeigen ">
                <span itemprop="title"></span>
            </a>
            <a class="breadcrump-link" itemprop="url" href="/s-haus-garten/nordrhein-westfalen/c80l928"><span itemprop="title">Haus &amp; Garten</span></a>
                <a class="breadcrump-link" itemprop="url" href="/s-dienstleistungen-haus-garten/nordrhein-westfalen/c239l928"><span itemprop="title">Dienstleistungen Haus &amp; Garten</span></a>
            </div>
        </div>



    

<section id="viewad-main" itemscope="" itemtype="http://data-vocabulary.org/Product" class="l-container-row">
    <meta itemprop="category" content="Dienstleistungen Haus &amp; Garten">
    <section id="viewad-cntnt" class="l-row a-double-margin l-container-row">
        <section class="a-span-16 l-col">
            <article id="viewad-product" class="l-container-row no-overflow">
                 
                 
                     
                 
                     
                 
                     
                      
                <div class="galleryimage-large l-container-row j-gallery-image">
                    <div class="galleryimage-element current" data-ix="0">
                        <div class="galleryimage-large--cover j-ad-image-selected" style="background-image: url();"></div>
                        <img src="{{asset('storage/'.$product->pictures)}}" data-imgsrc="" alt="{{$product->title}}" title="Tor+Doppelstabmattenzaun Montage Günstig 656 1,23x30 in Olfen" itemprop="image" data-inlinepreload="true" id="viewad-image">
                    </div>
                    
                
                    
                        <div class="galleryimage--navigation--prev j-vip-gallery-prev"></div>
                        <div class="galleryimage--navigation--next j-vip-gallery-next"></div>
                        <div class="galleryimage--info j-gallery-info">
                            <span class="j-current-image">1</span>/10</div>
                    </div>
        
                    
           
                <div class="contentbox boxedarticle no-shadow l-container-row" itemprop="offerDetails" id="viewad-main-info" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                    <meta itemprop="price" content="410.00">
                        <meta itemprop="currency" content="EUR">
                    <h1 id="viewad-title" class="boxedarticle--title" itemprop="name">{!! $product->title !!}</h1>
                    <h2 class="boxedarticle--price" id="viewad-price">{!! $product->price !!} €</h2>
                    <div class="boxedarticle--details">
                        <div itemprop="address" itemscope="" itemtype="http://data-vocabulary.org/Address" class="boxedarticle--details--full">
                            <i class="icon icon-small icon-location-pin-filled"></i>
                            <span id="viewad-locality" itemprop="locality">{!! $product->location !!}</span>
                        </div>
                        <div id="viewad-extra-info" class="boxedarticle--details--full">
                            <div><i class="icon icon-small icon-calendar-gray-simple"></i><span>{!! $product->created_at !!}</span></div>
                            <div id="viewad-cntr" class="textcounter">
                                <span id="viewad-cntr-num">15</span>
                            </div>
                            <div class="align-right">Artikelnummer: {!! $product->id !!}</div>
                        </div>
                    </div>
                </div>

                
                
                <div class="splitlinebox l-container-row" id="viewad-details">
                    <h2 class="sectionheadline-underlined text-title-4">Details</h2>
                    <ul class="addetailslist">
                        <li class="addetailslist--detail">
                            Art: <span class="addetailslist--detail--value">
                                {!! $product->category_name !!}</span>
                        </li>
                    </ul>
                </div>

                <div id="viewad-description" class="splitlinebox l-container-row">
                    <h2 class="sectionheadline-underlined text-title-4">Beschreibung</h2>
                    <div class="l-container">
                        <p id="viewad-description-text" class="text-force-linebreak " itemprop="description">
                            {!! $product->description!!}
                        </p>
                        </div>
                </div>

                <section class="splitlinebox l-container-row" id="viewad-contact-bottom">
                    <header id="viewad-contact-bottom-header" class="l-container-row">
                        <h2 class="sectionheadline-underlined text-title-4">Nachricht schreiben</h2>
                    </header>
                    <div class="l-container">
                        <button id="viewad-contact-button-login" class="viewad-contact-button-login button-iconized taller" type="button">
                            <i class="button-icon  far fa-envelope-open"></i>
                            <span>Nachricht schreiben</span>
                        </button>
                    </div>
                
                </section>
            </article>

        </section>



        <aside id="viewad-sidebar" class="a-span-8 l-col">
            <div id="viewad-contact-box" class="l-container-row j-sidebar-content">
                <div id="viewad-user-actions">
                    <div class="l-container-row">
                        <ul class="iconlist">
                            <li><button data-gaevent="VIP,R2SEmailBegin" id="viewad-contact-button-login-modal" class="button full-width taller viewad-contact-button-login" type="button">
                                    <i class="button-icon  far fa-envelope-open"></i>
                                    <span>Nachricht schreiben</span>
                                </button>
                            </li>
                            <li id="viewad-action-watchlist"><a id="viewad-lnk-watchlist" class="button-tertiary full-width taller j-lnk-watchlist" data-ajaxurl="/m-merkliste-bearbeiten.html" data-action="add" data-add="Zur Merkliste hinzufügen" data-remove="Von Merkliste entfernen">
                                <i class="button-icon fas fa-star"></i><span>Zu Favoriten hinzufügen</span></a></li>
                        </ul>
                    </div>
                    <div id="viewad-action-box" class="inline-separated">
                        <div id="viewad-watchlist-errmsg" class="modal-dialog mfp-popup-small mfp-hide">
                            
                        </div>

                        <button class="button-tertiary full-width taller j-share-ad">
                            <i class="button-icon fas fa-share-square"></i>
                            <span>Anzeige teilen</span>
                        </button>

                        
                    </div>
                </div>
            </div>
                
            

        <div id="viewad-profile-box" class="l-container-row contentbox no-shadow j-sidebar-content">

            <div id="viewad-bizteaser" class="l-container-row bizteaser">
                <div class="bizteaser--header">
                    <a class="bizteaser--logo" href="">
                        <img src="{{asset('storage/'.$product->salerdashpic)}}" class="img-fluid rounded-circle">
                    </a>
                    <div class="bizteaser--info">
                        <h2 id="viewad-bizteaser--title" class="bizteaser--title ">
                            <a data-gaevent="VIP,ClickStoreWidget" href="/pro/maxhome-GmbH">ANTASUS.COM</a>
                        </h2>
                        <a href="" data-gaevent="VIP,FollowUserBegin" id="follow-user-button" class="follow-user-button" title="Folgen">
                <i class="button-icon  button-icon fas fa-user-plus"></i>
                <span>Folgen</span>
                </a>
        </div>
                </div>
            </div>

            <div id="viewad-contact">
                <div class="l-container-row">
                    <ul class="iconlist">
                        <li>
                                <i class="iconlist-icon-big" style="background-image: src('/public/img/brand/logo-zerissen.png')">
                                    <span class="badge user-profile-vip-badge">{!! makeImageFromName($product->user_name) !!}</span>
                                </i>
                                <span class="iconlist-text">
                                    <span class="text-body-regular-strong text-force-linebreak">
                                            {{$product->user_name}}</span>
                                    <br>
                                    <span class="userbadges-vip userbadges-profile-rating">
                                            <i class="far fa-smile" badge-level="2"></i>
                                                    <span>Zufriedenheit: TOP</span>
                                                </span>
                                        <br>
                                    <span class="userbadges-vip userbadges-profile-friendliness">
                                            <i class="fas fa-star-half-alt" badge-level="2"></i>
                                                    <span>Besonders freundlich</span>
                                                </span>
                                     
                            </li>
                        </ul>
                </div>
            </div>

            <hr class="a-horizontal and-grey separator">
                <div>
                    <div class="bizteaser--preview" id="viewad-bizteaser--preview">
                        <a href="/pro/maxhome-GmbH" class="bizteaser--preview--more">
                            <span class="bizteaser--numads">
                                {{$products->userproductsCount()}}</span><br>
                                weitere Anzeigen online
                        </a>
                    </div>
                </div>
            </div>
        <div id="viewad-sidebar-banner" class="align-center l-container-row">
        <div data-liberty-position-name="vip_pro-sky-atf-right-sidebar" class="" id="liberty-vip_pro-sky-atf-right-sidebar"></div>
            </div>

        <ul class="iconlist">
        <li>
            <a id="viewad-action-flag-link" class="button-ghost full-width taller" data-gaevent="VIP,ReportAdBegin" data-gaevent-direct="true" title="Anzeige melden" href="/m-einloggen.html?targetUrl=%2Fs-anzeige%2Ftor-doppelstabmattenzaun-montage-guenstig-656-1-23x30%2F1804416304-239-1375%3Ffl%3Dtrue%26csrf%3D16aa89d6-d418-4006-a51b-7892267403c1">
                <i class="button-icon icon-flagad-green"></i>
                <span>Anzeige melden</span>
            </a>
        </li>
        <li>
            <a id="viewad-action-prnt" class="button-ghost full-width taller j-print-ad" data-printurl="/s-druckansicht.html?adId=1804416304" title="Anzeige drucken">
                <i class="button-icon icon-print-green"></i>
                <span>Anzeige drucken</span>
            </a>
        </li>
        </ul>
        </aside>


</section>
    </section>
    
            
    </div>
</div>
<div class="site-base--right-banner">
    <div class="site-base--right-banner--full">
        <div id="banner-skyscraper" class=""></div>
    </div>
</div>
</div>

