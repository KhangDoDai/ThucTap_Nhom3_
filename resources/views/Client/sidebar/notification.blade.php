@section('title', 'Thanh Toán')
<!-- / Top banner -->
@extends('client.layout.master')
@section('client-content')




    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MOON.VN </a>
            {{-- <a class="navbar-brand" href="#"> </a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasNavbarLabel"> Thông báo</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <aside class="mud-drawer mud-drawer-fixed mud-drawer-pos-right mud-drawer--open mud-drawer-md mud-drawer-clipped-never mud-elevation-1 mud-drawer-temporary">

                    <div class="card-body"><a>
                        <table >
                            <tr valign="top">
                                <td ><img
                                        src="https://www.svgrepo.com/show/384674/account-avatar-profile-user-11.svg"
                                        class="rounded-circle" style="width:45px; height:45px"></td><!--!-->

                                <td ><strong>Admin</strong><!--!-->
                                    <span><!--!--> Đơn hàng của bạn sắp đến nơi</span><!--!-->
                                    <br>
                                    <br>
                                    <span class="text-muted" ><!--!--><i
                                            class="far fa-clock mr-1"></i>10 phút</span>
                                </td>
                            </tr>
                        </table>  
                            <table >
                                <tr valign="top">
                                    <td ><img
                                            src="https://moon.vn/uploads/small/2023/8/b8e49fef-b6bc-4500-8508-0e08e02b5f26.jpg"
                                            class="rounded-circle" style="width:45px; height:45px"></td><!--!-->

                                    <td ><strong>Hiền Võ</strong><!--!-->
                                        <span><!--!--> đã bình luận "sao video 1 từ phút 13 bị đứng vậy ạ?"</span><!--!-->
                                        <br>
                                        <span class="text-muted" ><!--!--><i
                                                class="far fa-clock mr-1"></i> 3 ngày</span>
                                    </td>
                                </tr>
                            </table>
                      
                            <table>
                                <tr valign="top">
                                    <td ><img
                                            src="https://moon.vn/uploads/small/2023/7/15708c8d-3826-4145-b344-b16ae8a0c70a.jpg"
                                            class="rounded-circle" style="width:45px; height:45px"></td><!--!-->

                                    <td ><strong>thiện thái</strong><!--!-->
                                        <span><!--!--> đã bình luận "sao từ phút 13:36 nó bị đứng vậy ạ"</span><!--!-->
                                        <br>
                                        <span class="text-muted" style="font-size:13px"><!--!--><i
                                                class="far fa-clock mr-1"></i> 4 ngày</span>
                                    </td>
                                </tr>
                            </table>
                       
                            <table>
                                <tr valign="top">
                                    <td style="width:55px;"><img
                                            src="https://moon.vn/uploads/small/avatar/dieulinh99/IMG_0050.JPG"
                                            class="rounded-circle" ></td><!--!-->

                                    <td><strong>Hoàng Lê Diệu Linh</strong><!--!-->
                                        <span><!--!--> đã bình luận "phần 1 từ phút 13 trở đi không xem đc ạ"</span><!--!-->
                                        <br>
                                        <span class="text-muted" ><!--!--><i
                                                class="far fa-clock mr-1"></i> 5 ngày </span>
                                    </td>
                                </tr>
                            </table>
                      
                       
                            <table style="width:100%">
                                <tr valign="top">
                                    <td style="width:55px;"><img
                                            src="https://moon.vn/uploads/small/2022/6/38617ddb-b8ad-44c1-987a-0f030955261b.jpg"
                                            class="rounded-circle" style="width:45px; height:45px"></td><!--!-->

                                    <td ><strong>Thảo Vy</strong><!--!-->
                                        <span><!--!--> đã bình luận "sao video đầu coi khúc sau nó bị đứng
                                            vậy"</span><!--!-->
                                        <br>
                                        <span class="text-muted"><!--!--><i
                                                class="far fa-clock mr-1"></i> 7 ngày</span>
                                    </td>
                                </tr>
                            </table>
                        </a><!--!-->
                        
                    </div>
            </div>
        </div>
        </aside>
        </div>
    </nav>
@endsection
