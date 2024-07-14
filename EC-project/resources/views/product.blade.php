@php $root = 'wordpress/wp-content/uploads/2024/07/'; @endphp
@foreach ($products as $product)
    <div>{{$product['title']['rendered']}}</div>
    @php $pattern = '/\/([^\/]+\.jpg)/'; @endphp
    @if (preg_match($pattern, $product['content']['rendered'], $matches)) 
        @php $img_src = $root . $matches[1] @endphp
        <div><img src="{{asset($img_src)}}"></div>
    @endif
@endforeach