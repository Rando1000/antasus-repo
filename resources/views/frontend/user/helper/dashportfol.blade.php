{{-- <div class="col-xl-8 col-md-6">
    <div class="Card_card__2R_D9 Dashboard_fullHeight__2OF4B d-none d-md-flex">
        <div class="Tabs_container__2F96j StoresNFT_fullWidth__2vIkb">
            <div class="Tabs_tabHead__wV5Kp pt-3 px-3">
                <div class="MultiToggle_container__2J6sj MultiToggle_underline__2dQTO Tabs_header__1OOhS">
                    <div data-testid="multitoggle-Stores" class="MultiToggle_item__trzL4 ">My Ad's</div>
                    <div data-testid="multitoggle-My NFTs" class="MultiToggle_item__trzL4">My Store</div>
                    <span class="MultiToggle_selector__gxE4y" style="width: 97.8px; transform: translateX(0px);"></span>
                </div>
                <div class="CarretButton_pointer__1Q762 ButtonGroup_buttonGroup__lO97p d-flex bg-white shadow-sm py-1">
                    <div class="px-3 flex-shrink-0">
                        <img src="/static/media/carret_right_icon.79884643.svg" class="img-fluid">
                    </div>
                </div>
            </div>
            
            <div class="Tabs_tab__1fMrP" style="transform: none;">
                <div class="Tabs_panel__1l37N StoresNFT_fullWidth__2vIkb py-4 justify-content-center">
                    <div class="Slider_scroll__3u9eI">
                        <div class="Slider_inner__2xZDA Slider_expandOnlyChild__3ienF">
                            @foreach ($listproducts as $product)
                            <div class="Square_square__36id1 embed-responsive embed-responsive-1by1" style="background-image: url('{{asset('storage/'.$product->pictures)}}')">
                                <div class="Square_overlay__2IA2u"></div>
                                    <div class="Square_content__dVXGJ">
                                        <span class="Square_title__1LvNo">{{ $product->category_name }}</span>
                                        <span class="Square_title__1LvNo">{{ $product->title }}</span>
                                        <span class="Square_subTitle__22CrN">BBB-SunnyBoy</span>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                        <div hidden class="Slider_inner__2xZDA">
                            <div class="Square_square__36id1 embed-responsive embed-responsive-1by1" style="background-image: url(&quot;https://d1iczm3wxxz9zd.cloudfront.net/700a5cfe-b88f-4907-8dd7-3c88f724fdfc/000000-000-0000-ba26-0000000000/6969/ITEM_PREVIEW1.gif&quot;);">
                                <div class="Square_overlay__2IA2u"></div>
                                <div class="Square_content__dVXGJ">
                                    <span class="Square_title__1LvNo">{{ $product->category_name }}</span>
                                    <span class="Square_title__1LvNo">BigBossBerlinBoyz</span>
                                    <span class="Square_subTitle__22CrN">BBB-SunnyBoy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div> --}}
<div class="col-xl-8 col-md-6">
    <div class="Card_card__2R_D9 Dashboard_fullHeight__2OF4B d-none d-md-flex">
        <div class="Tabs_container__2F96j StoresNFT_fullWidth__2vIkb">
            <div class="Tabs_tabHead__wV5Kp pt-3 px-3">
                <div class="MultiToggle_container__2J6sj MultiToggle_underline__2dQTO Tabs_header__1OOhS">
                    <div data-testid="multitoggle-Stores" class="MultiToggle_item__trzL4">Stores</div>
                    <div data-testid="multitoggle-My NFTs" class="MultiToggle_item__trzL4 MultiToggle_selected__27LAC">My NFTs</div>
                    <span class="MultiToggle_selector__gxE4y" style="width: 113.483px; transform: translateX(97.8px);"></span>
                </div>
                <div class="CarretButton_pointer__1Q762 ButtonGroup_buttonGroup__lO97p d-flex bg-white shadow-sm py-1">
                    <div class="px-3 flex-shrink-0">
                        <img src="/static/media/carret_right_icon.79884643.svg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="Tabs_tab__1fMrP" style="transform: none;">
                <div class="Tabs_panel__1l37N StoresNFT_fullWidth__2vIkb py-4 justify-content-center">
                    <div class="Slider_scroll__3u9eI">
                        <div class="Slider_inner__2xZDA">
                            @foreach ( $listproducts as $product )
                            <a href="/market/categories/{{$product->category_id}}/product/{{$product->id}}">
                            
                            <div class="Square_square__36id1 embed-responsive embed-responsive-1by1" style="background-image: url({{asset('storage/'.$product->pictures)}});">
                                <div class="Square_overlay__2IA2u">
                                    </div>
                                    <div class="Square_content__dVXGJ">
                                        <span class="Square_title__1LvNo">{{ $product->category_name }}</span>
                                        <span class="Square_title__1LvNo">{{ $product->title }}</span>
                                        <span class="Square_subTitle__22CrN">BBB-SunnyBoy</span>
                                    </div>
                                </div>
                                
                            </a>
                            @endforeach
                            {{-- @foreach ( $listproducts as $product )
                            <span class="Square_title__1LvNo">{{ $product->category_name }}</span>
                            <span class="Square_title__1LvNo">{{ $product->title }}</span>
                            <span class="Square_subTitle__22CrN">BBB-SunnyBoy</span>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-sm-none">
        <div class="Card_card__2R_D9 Dashboard_fullHeight__2OF4B mb-4 mb-sm-0">
            <div class="pb-3">
                <div class="Card_header__26XDH p-3">
                    <strong>Stores</strong>
                    <div class="CarretButton_pointer__1Q762 ButtonGroup_buttonGroup__lO97p d-flex bg-white shadow-sm py-1">
                        <div class="px-3 flex-shrink-0">
                            <img src="/static/media/carret_right_icon.79884643.svg" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="Slider_scroll__3u9eI">
                    <div class="Slider_inner__2xZDA"></div>
                </div>
            </div>
        </div>
        <div class="Card_card__2R_D9 Dashboard_fullHeight__2OF4B mb-4 mb-sm-0">
            <div>
                <div class="Card_header__26XDH p-3">
                    <strong>My NFTs</strong>
                    <div class="CarretButton_pointer__1Q762 ButtonGroup_buttonGroup__lO97p d-flex bg-white shadow-sm py-1">
                        <div class="px-3 flex-shrink-0">
                            <img src="/static/media/carret_right_icon.79884643.svg" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="pb-3 px-3">
                    @foreach ( $listproducts as $product )
                        
                    
                    <span class="Square_title__1LvNo">{{ $product->category_name }}</span>
                    <span class="Square_title__1LvNo">{{ $product->title }}</span>
                    <span class="Square_subTitle__22CrN">BBB-SunnyBoy</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
;(function () {
    var x = document.querySelectorAll('.Tabs_container__2F96j [data-testid]');
    for(i = 0; i < x.length ; i++) {
      x[i].addEventListener('click', function () {
      var expanded = this.getAttribute('data-testid')
      if (expanded === 'multitoggle-Stores') {
            this.setAttribute('data-testid', 'multitoggle-My NFTs')
          } else {
            this.setAttribute('data-testid', 'multitoggle-Stores')
          }
  
          var content = this.parentNode.parentNode.querySelector('.Slider_inner__2xZDA')
          if (content) {
            content.getAttribute('hidden')
            if (typeof content.getAttribute('hidden') === 'string') {
              content.removeAttribute('hidden')
            } else {
              content.setAttribute('hidden', 'hidden')
            }
          }
        })
    }
  })()
  
  
  
  </script> --}}



{{-- <script>

    ;(function () {
      var x = document.querySelectorAll('.MultiToggle_container__2J6sj [data-testid]');
      for( let element of x) {
        element.style.display = "none";
        }          
      }
    })()
    
    
    
    </script> --}}
    