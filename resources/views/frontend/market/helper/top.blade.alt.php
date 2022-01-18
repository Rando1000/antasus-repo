<div id="refreshtop">


<div class="colla">

<div class="newber">
<ha2 class="mb-1">TOP <b>PRODUCTS</b></ha2>
<div class="itemy">
@foreach ($top as $market)

      <div class="colty">
          <ul class="thumb-wrapper">
            <li class="bg-white"
          <div class="bg-white shadow-sm imgdiv"><img src="{{ $market->pictures }}" alt="{{ $market->title }}" style="height:200px; width:200px; object-fit:contain" class="imgadv">

          <h5 class="mb-1">{!! $market->title !!}</h5>
          <div class="itemtile-ribbon"><span class="itemtile-price">{!! $market->price !!} € VB</span></div>
          <i class="fas fa-map-marker-alt"></i>
          <span class="medium text-uppercase text">{!! $market->location !!}</span>
          <!-- <span class="small text-uppercase text">{!! trans($market->desc) !!}</span> -->

            </li>
        </div>
          </ul>
      </div>


@endforeach
</div>
</div>


<script type="text/javascript">
    setInterval("markettop();",60000);
    function markettop(){
      $('#refreshtop').load(location.href + ' #refreshtop');
    }
</script>

