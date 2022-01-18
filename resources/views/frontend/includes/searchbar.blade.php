
<asidee>
  
    {{-- <form id="search-bar" class="search-bar"type="get" action=" {{ url('/markets/search/') }} ">
      <input type="search" placeholder="Search..." id="myInput" name="query" onkeyup="filterFunction()"/>
        <div id="close" class="toggle"></div></input>
    </form>
  


  <div class="drop-select" style="width:200px;">
      <select>
       
        <option value=""><a href="">Categories</a></option>
        <option value=""><a href=""></a></option>
        {{-- <option value="10"><a href="#studio">Studio</a></option>
        <option value="20"><a href="#contact">Merchandise</a></option>
        <option value="30"><a href="#warehouse">General warehouses</a></option>
        <option value="50"><a href="#hall">Industry</a></option>
        <option value="100"><a href="#place">Places</a></option> --}}
        
      {{-- </select>
  </div>

  <div class="placer">
      <div id="search-place" class="search-place">
        <input type="text" placeholder="PLZ oder Ort" id="myplace" onkeyup="filterFunction()"/></input>
      </div>

      <div class="custom-select" style="width:200px;">
      <select>
        <option value="0"><a>Ganzer Ort</a></option>
        <option value="5"><a>+ 5 km</a></option>
        <option value="10"><a>+ 10 km</a></option>
        <option value="20"><a>+ 20 km</a></option>
        <option value="30"><a>+ 30 km</a></option>
        <option value="50"><a>+ 50 km</a></option>
        <option value="100"><a>+ 100 km</a></option>
        <option value="150"><a>+ 150 km</a></option>
        <option value="200"><a>+ 200 km</a></option>
      </select>
    </div>
  </div>

  <button type="submit" class="searching">GO!</button> --}} 

  {{-- @if($categories)--}}
  
   

    
  @include('frontend.market.helper.entrysearch')
@if (\Request::is('advertise'))
  

  <button type="submit" type="hide" class="advert"><a href="{{ route('frontend.advert')}}">advertise now
  </a></button>

@else 

  <button type="submit" class="advert"><a href="{{ route('frontend.advert')}}">advertise now
  </a></button>

  
@endif

    @if ($logged_in_user)
      
    
  
  <button type="submit" class="advert"><a href="{{ route('frontend.portfolio')}}">My Ads
  </a></button>
  @endif

  </asidee>

