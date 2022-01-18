<section id="home-ctgrs" class="l-container-row contentbox">

    <header class="boxheader-nomarginbottom splitheader">
        <h3 class="splitheader--title">Kategorien</h3>
        <a class="splitheader--addon" href="/s-kategorien.html">alle anzeigen</a>
    </header>

    @if ($categories)
    @foreach ($categories as $category)
        
    
        
    
    <div class="no-padding clearfix position-relative">
        <ul id="home-ul-ctgrs" class="itemlist-padded treelist">
            <li class="">
                <a class="treelist-headline" href="">
                    <h4>{{$category->name}}</h4></a>
            </li>

            
            @if ($category->children->count() > 0)
                        
            @foreach ($category->children as $child)
            <li class="">
                <a class="treelist-headline" href="">
                {{$child->name}}</a>
            @endforeach

                    

            @endif
            </li>
        </ul>
    </div>
    @endforeach
    @endif
</section>


</div>
    </div>
