
<header class="site-header" id="site-header">
    <div class="top-header d-xl-none d-lg-none d-md-none">
        <div class="content">
            <div class="logotext">
                <a class="logokhedmat" href="{{url('/')}}">
                    <img src="{{asset('frontend/img/logo-single.png')}}" alt="خدمت از ما">
                </a>

                <div class="text">
                    <p class="title">اپلیکیشن خدمت از ما</p>
                    <p class="caption">تمام خدمات منزل</p>
                    <p class="category">کارواش | نظافت | تعمیرات</p>
                </div>
            </div>

            <a class="btn btn-success btn-sm btn-app-download" id="add-download-header" href="https://tracker.metrix.ir/wz1zeb/">دریافت اپلیکیشن</a>
            <!--            <a class="btn btn-success btn-sm btn-app-download" href="https://tracker.metrix.ir/wz1zeb/">دریافت اپلیکیشن</a>-->
        </div>

        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMSIgaGVpZ2h0PSIyMSIgdmlld0JveD0iMCAwIDIxIDIxIj4KICA8cGF0aCBmaWxsPSIjOUQ5RDlEIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yMS4yNDg2NDMxLDEwMy43ODk4MzMgQzE1Ljc0ODY0MzEsMTAzLjc4OTgzMyAxMS4yNDg2NDMxLDk5LjI4OTgzMyAxMS4yNDg2NDMxLDkzLjc4OTgzMyBDMTEuMjQ4NjQzMSw4OC4yODk4MzMgMTUuNzQ4NjQzMSw4My43ODk4MzMgMjEuMjQ4NjQzMSw4My43ODk4MzMgQzI2Ljc0ODY0MzEsODMuNzg5ODMzIDMxLjI0ODY0MzEsODguMjg5ODMzIDMxLjI0ODY0MzEsOTMuNzg5ODMzIEMzMS4yNDg2NDMxLDk5LjI4OTgzMyAyNi43NDg2NDMxLDEwMy43ODk4MzMgMjEuMjQ4NjQzMSwxMDMuNzg5ODMzIEwyMS4yNDg2NDMxLDEwMy43ODk4MzMgWiBNMjYuMjQ4NjQzMSw5MC4xODk4MzMgTDI0Ljg0ODY0MzEsODguNzg5ODMzIEwyMS4yNDg2NDMxLDkyLjM4OTgzMyBMMTcuNjQ4NjQzMSw4OC43ODk4MzMgTDE2LjI0ODY0MzEsOTAuMTg5ODMzIEwxOS44NDg2NDMxLDkzLjc4OTgzMyBMMTYuMjQ4NjQzMSw5Ny4zODk4MzMgTDE3LjY0ODY0MzEsOTguNzg5ODMzIEwyMS4yNDg2NDMxLDk1LjE4OTgzMyBMMjQuODQ4NjQzMSw5OC43ODk4MzMgTDI2LjI0ODY0MzEsOTcuMzg5ODMzIEwyMi42NDg2NDMxLDkzLjc4OTgzMyBMMjYuMjQ4NjQzMSw5MC4xODk4MzMgTDI2LjI0ODY0MzEsOTAuMTg5ODMzIFoiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIC0xIC0xMSAxMDQuNTgpIi8+Cjwvc3ZnPgo="
             alt="بستن" class="app-close">
    </div>

    <nav class="navbar main-menu navbar-expand-lg navbar-light">
        <div class="navbar-brand">
            <a href="{{url('/')}}">
                <img src="{{asset('frontend/img/logo-top-menu.svg')}}" alt="خدمت از ما">
            </a>

            <div class="input-group input-group-city input-group-lg" data-toggle="modal" data-target="#modal-location">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fi fi-location"></i></span>
                </div>

                <select name="city_id" class="form-control" readonly>
                    <option value="3" data-name-en="tehran">تهران</option>
                </select>
            </div>
        </div>

        <div class="menu-toggle">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id="dismiss">
                <i class="fi fi-left-big"></i>
            </div>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">خانه</a>
                </li>

                {{--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">خدمات پرطرفدار</a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">نظافت منزل</a>
                    </div>
                </li>--}}

                <li class="nav-item">
                    <a class="nav-link" id="make_money" href="{{url('/')}}">کسب درآمد</a>
                </li>

                {{--<li class="d-lg-none d-xl-none nav-item">
                    <a rel="nofollow" class="nav-link" href="">درباره ما</a>
                </li>

                <li class="d-lg-none d-xl-none nav-item">
                    <a rel="nofollow" class="nav-link" href="">قوانین و مقررات</a>
                </li>--}}

                {{--<li class="d-lg-none d-xl-none nav-item phone-in-mobile">
                    <a rel="nofollow" class="nav-link" href="tel:02162829000"><span class="d-inline-block" dir="ltr">021 - 62829000</span><i class="fi fi-phone mr-3"></i></a>
                </li>--}}

                {{--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=""><i class="fi fi-user ml-2"></i>پروفایل</a>
                        <a class="dropdown-item" href=""><i class="fi fi-logout ml-2"></i>خروج</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">پیگیری سفارش</a>
                </li>--}}
                <li class="nav-item login-item">
                    <button class="btn-login btn mybtn-outline btn-lg" data-toggle="modal"
                            data-target="#modal-login"><i class="fi fi-user fi-before"></i>ورود / ثبت نام
                    </button>
                </li>

                <li class="d-lg-none d-xl-none nav-item text-center mt-4">
                    <!--					دانلود اپ منو سایت-->
                    <a rel="nofollow" class="btn mybtn" href="https://tracker.metrix.ir/dz1utb/">دانلود اپلیکیشن</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
