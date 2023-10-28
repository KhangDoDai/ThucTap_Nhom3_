
@section('title','Thanh Toán')
<!-- / Top banner -->
@extends('client.layout.master')
@section('client-content')



<body>

    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MOON.VN </a>
            <a class="navbar-brand" href="#"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasNavbarLabel"> Tài Khoản</h4>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-5 pe-4 ">
                        <li class="nav-item">
                            <h5> <img
                                    src="https://moon.vn/uploads/small/2023/9/dd4252c5-bb59-427a-a702-72aa5a01f159.jpg"
                                    class="nav-icon rounded-circle mr-2" style="height:25px;width:25px">
                                Nguyen Hai Duong (FPL CT) (Level 0, SP 100, Exp 4)</h5>
                            <hr>
                            <a><img src="https://moon.vn/svg/payment_black_24dp.svg" alt="" height="25" class="mr-2">
                                Nạp tiền
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a><img src="https://moon.vn/svg/build_black_24dp.svg" alt="" height="25" class="mr-2"> Kích
                                hoạt sách ID
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a><img src="https://moon.vn/svg/play_circle_red_24dp.svg" alt="" height="25" class="mr-2">
                                Khóa học đã đăng ký
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a>
                                <!--!--><img src="https://moon.vn/svg/lock_black_24dp.svg" alt="" height="25"
                                    class="mr-2"> Đổi mật khẩu
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a><img src="https://moon.vn/svg/logout_black_24dp.svg" alt="" height="25" class="mr-2">
                                Đăng xuất
                            </a>
                        </li>


                </div>
            </div>
        </div>
    </nav>

</body>
@endsection