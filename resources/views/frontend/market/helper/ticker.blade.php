 @if($newads->count())
<div class="ticker-wrap" >
    <div class="ticker">
        
            
       @foreach ($newads as $product)
      <div class="ticker__item" id="refreshmarket">
        
        
        <a data-item="0" draggable="false"  href="{!! route('frontend.categories.product.show', ["category" => $product->id, "product" => $product->id]) !!}" title="{!! $product->title !!}" class="item">
            <img draggable="false" src="{{asset('storage/'.$product->pictures)}}" alturl="https://s20.directupload.net/images/210703/e2c2bncb.png" />
            <div class="aditem-main--bottom">
            <span>{!! $product->title !!}</span></div>
          </a>
      </div>
      @endforeach
    
    </div>
    
    </div>
    {{-- <script type="text/javascript">
      setInterval("marketnew();",3000);
      function marketnew(){
        $('#refreshmarket').load(location.href + ' #refreshmarket');
      }
  </script> --}}
    @endif

    