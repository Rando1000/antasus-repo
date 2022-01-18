




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
                                
                        <div class="bg-white shadow-sm imgdiv"><a href="{!! route('frontend.categories.product.show', ["category" => $category->id, "product" => $product->id]) !!}"><img src="{{asset('storage/'.$product->pictures)}}" alt="/public/img/brand/logo-zerissen.png" style="height:170px; width:100%; object-fit:contain" class="imgadv"></a>
                    
                            <h8 class="mb-1"> <a href="{!! route('frontend.categories.product.show', ["category" => $category->id, "product" => $product->id]) !!}">{!! $product->title !!}</a></h8>
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