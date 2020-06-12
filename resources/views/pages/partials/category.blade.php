
<div class="container">
    <div class="row">
        <div id="sidebar" class="col-md-3">
            <nav id="menu">
                <ul>
                    <li class="menu-item">danh mục sản phẩm</li>
                    @foreach($categories as $cate)
                <li class="menu-item"><a href="{{('category-'.$cate->id)}}" title="">{{$cate->name}}</a></li>
                    @endforeach
                </ul>
                <!-- <a href="#" id="pull">Danh mục</a> -->
            </nav>

            <div id="banner-l" class="text-center">
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
                </div>
            </div>
        </div>
