<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{URL::to('/Trang-chu')}}">NonoFruits</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{URL::to('/Trang-chu')}}" class="nav-link">Trang chủ </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{URL::to('/Trang-chu')}}" id="dropdown04"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        @foreach ($brand as $key => $brand)
                        <a class="dropdown-item"
                            href="{{URL::to('/Xuat-su-trai-cay/'.$brand->brand_id)}}">{{$brand->brand_name}}</a>
                        @endforeach

                    </div>
                </li>
                <li class="nav-item"><a href="about.html" class="nav-link">Chúng tôi</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Liện hệ</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span
                            class="icon-shopping_cart"></span>Giỏ hàng[0]</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- END nav -->