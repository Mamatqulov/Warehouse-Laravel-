@extends("layouts.app")

@section('content')
    @if (count($products) > 1)
        @include("components.table", ["products" => $products])
        <span class="mt-4"></span>
        
            @include("components.pagination")
      
    @endif


@endsection
