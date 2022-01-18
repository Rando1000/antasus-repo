<div id="refreshusermarket">

    <div class="collan">
<div class="newbery">
<ha2 class="mb-1">RECENTLY <b>ADDED</b></ha2>
<div class="itemys">
@foreach ($new as $market)

      <div class="colty">
          <div class="thumb-wrapper">

          <div class="bg-white shadow-sm imgdiv"><i class="fas fa-globe-americas"></i> <span class="small text-uppercase text"></span><img src="{{ $market->pictures }}" alt="{{ $market->title }}" style="height:200px; width:200px; object-fit:contain" class="imgadv">

          <h5 class="mb-1">{!! $market->title !!}</h5>
          <div class="itemtile-ribbony"><span class="itemtile-price">{!! $market->price !!} € VB</span></div>
          <i class="fas fa-map-marker-alt"></i>
          <span class="medium text-uppercase text">{!! $market->location !!}</span>
          <!-- <span class="small text-uppercase text">{!! trans($market->desc) !!}</span> -->

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
</script>

