@extends('pages.home')
@section('main')
<link rel="stylesheet" href="css/home.css">

<div class="products">
    <h3>sản phẩm nổi bật</h3>
    <div class="product-list row">
        @foreach($hot as $item)
        <div class="product-item col-md-3 col-sm-6 col-xs-12">
            <a href="#"><img src="<?= 'data:image;base64,' . $item->prod_img ?>" class="img-thumbnail"></a>
            <p><a href="#">{{$item->prod_name}}</a></p>
            <p class="price">{{number_format($item->prod_price,0,',','.',).'đ'}}</p>
            <div class="marsk">
                <a href="{{('detail-'.$item->prod_id)}}">Xem chi tiết</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="products">
    <h3>sản phẩm mới</h3>
    <div class="product-list row">
        @foreach($new as $item1)
        <div class="product-item col-md-3 col-sm-6 col-xs-12">
            <a href="#"><img src="<?= 'data:image;base64,' . $item1->prod_img ?>" class="img-thumbnail"></a>
            <p><a href="#">{{$item1->prod_name}}</a></p>
            <p class="price">{{number_format($item1->prod_price,0,',','.').'đ'}}</p>
            <div class="marsk">
                <a href="{{('detail-'.$item1->prod_id)}}">Xem chi tiết</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
