@extends('frontend.layouts.appm')
@section('title', __('Market'))

@section('content')
    <section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    @if($categories)
        @foreach ($categories as $category)

            <div class="card">
                <div class="card-header">{{$category->name}} </div>
                <div class="card-body">

                    @if ($category->children->count() > 0)
                    @foreach ( $category->children as $child )
                                        
                        <div class="card-item">
                            child
                        </div>
                        @endforeach

                    @else
                        <div class="card-item font-bold bg-green-300">Products</div>

                        @foreach ($category->products as $product)

                            <div class="card-item">
                                {{$product->title}}
                            </div>
                            
                        @endforeach
                        
                    @endif

                </div>
            </div>


    
        @endforeach
    @endif
        


    </section>
@endsection