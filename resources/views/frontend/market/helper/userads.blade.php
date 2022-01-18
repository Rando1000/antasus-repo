<div class="site-base">

    <div class="site-base--left-banner">
        <div class="site-base--left-banner--full">
            <div id="banner-skyscraper-left" class="">
                <div data-liberty-position-name="vip_pro-sky-atf-left" class="l-container" id="liberty-vip_pro-sky-atf-left"></div>
            </div>
        </div>
    </div>
    
    <div class="site-base--content">
        <div id="site-content" class="l-page-wrapper l-container-row">
            
            
            <section class="myads" id="myadverts">
              
              <ul class="myadlist" id="malist">
                @foreach ($listproducts as $product)
                <li class="myarticles" id="myarticle">
                  <article class="manageads" id="managementads">
                    <section class="myitems">
                      
                      <section class="itemimg">
                        <a href="/market/categories/{{$product->category_id}}/product/{{$product->id}}" class="adimage">
                          <div class="adimagebox" id="srpimagebox">
                            <div class="adimg"></div>
                            <img src="{{asset('storage/'.$product->pictures)}}" alt="/public/img/brand/logo-zerissen.png" class="itemimage">
                          </div>
                        </a>
                        
                      </section>
                      
                        
                     
                      <section class="itemad">
                        <a href="/market/categories/{{$product->category_id}}/product/{{$product->id}}" class="itemtitle">
                        
                        <div class="adcategory" id="category_name"> {{ $product->category_name }} </div>
                        <h2 class="myitem-header">
                          <div class="elips">
                            <div class="itetitle"> {{ $product->title }}</div>
                            </a>
                          </div>
                        </h2>
                        <ul class="adlists">
                          <li class="itemprice">{{ $product->price }} €</li>
                          <li class="expiration">endet am:
                            <span class="enddater">enddatum</span>
                          </li>
                        </ul>
                        <section class="jsx-2982763758 manageaditem-stats">
                          <ul class="jsx-2982763758 list-horizontal">
                            <li class="jsx-2982763758">
                              <i class="jsx-2982763758 icon icon-link-icon icon-eye-gray600">
                                </i>74 Besucher
                              </li>
                            <li class="jsx-2982763758">
                              <i class="jsx-2982763758 icon icon-link-icon icon-star-open-gray600-small">
                                </i>2 mal gemerkt
                              </li>
                          </ul>
                        </section>
                        
                      </section>
                      
                      <section class="itemfeatures">
                        <table class="featureland">
                          <tbody class="features">
                            <tr class="feature">
                              
                            </tr>
                          </tbody>
                        </table>
                      </section>

                    </section>
                    <footer class="adfooters" id="adsfooters">
                      <section class="itemaction">
                        <ul class="itemactionlinks">
                          <li class="itemactionlink">
                            <a href="/market/categories/{{$product->category_id}}/product/{{$product->id}}/edit" class="button-tertiary button-small">
                              <i class="icon button-icon fas fa-edit" href="" ></i>
                              <span class="editing">Bearbeiten</span>
                            </a>
                          </li>
                          <li class="itemactionlink">
                            <a href="" class="button-tertiary button-small">
                              <i class="icon button-icon fas fa-flag" href="" ></i>
                              <span class="editing" id="reservation">Reservieren</span>
                            </a>
                          </li>
                          <li class="itemactionlink">
                            <a href="" class="button-tertiary button-small">
                              <i class="icon button-icon fas fa-flag-checkered" href="" ></i>
                              <span class="editing" id="sold">Verkauft</span>
                            </a>
                          </li>
                          
                            
                          
                          <li class="itemactionlink">
                            <form action="/market/categories/{{$product->category_id}}/product/{{$product->id}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input class="btn btn-danger button-small icon fas fa-trash-alt" type="submit" name="submit" value="Löschen">
                            {{-- <button><a class="button-tertiary button-small" >
                              <i class="icon button-icon fas fa-trash-alt"  ></i>
                              <span class="editing" id="delete">Löschen</span>
                            </a>
                          </button> --}}
                        </form>
                            <div class="col-sm-12">
                            
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
      @if(session()->get('error'))
      <div class="alert alert-error">
        {{ session()->get('error') }}
        
      @endif
      </div>
    </div>
  @endif
</div>
                          </li>
                          
                          <li class="itemactionlink">
                            <a href="" class="button-tertiary button-small">
                              <i class="icon button-icon fas fa-angle-double-right" href="" ></i>
                              <span class="editing" id="extend">Verlängern</span>
                            </a>
                          </li>
                        </ul>
                      </section>
                    </footer>
                  </article>


                </li>
                @endforeach
              </ul>
              



            </section>
            
        </div>
    </div>
    

    <div class="site-base--right-banner">
        <div class="site-base--right-banner--full">
            <div id="banner-skyscraper" class=""></div>
        </div>
    </div>
</div>