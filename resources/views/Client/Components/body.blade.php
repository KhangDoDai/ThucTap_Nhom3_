<!-- Page Content Goes Here -->
@section('title','Trang chủ')
<!-- / Top banner -->
@extends('Client.layout.master')
@section('client-content')

    <?php
    if (!function_exists('currency_format')) {

        function currency_format($number, $suffix = 'đ')
        {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }

    }
    ?>
    {{-- advertisement --}}
    <section>
        <div class="container">
            <div class="d-md-flex justify-content-center gap-3 mt-3 mb-5">
                <div class="box-img">
                    <img class="img-fluid" src="{{ asset('imgs/doanvien.jpg') }}" alt="">
                </div>
                <div class="box-img">
                    <img class=" img-fluid " src="{{ asset('imgs/combohoa.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- books pro --}}
    <section>
        <div class="container">
            <div class="d-flex flex-column justify-content-between">
                <p class="text-uppercase fw-bold ">BỘ SÁCH PRO S - KÈM KHÓA HỌC - LUYỆN THI ĐẠI HỌC 2024</p>
                <div class="row g-3">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Khóa học PROS cập nhật theo tiến độ, bám sát chương trình học trên trường và chương trình luyện
                        thi
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Có group hỗ trợ giải đáp
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Khóa học có cập nhật đề thi giữa kì, cuối kì, kiến thức ĐGNL và các xu hướng ra đề mới nhất của
                        BGD
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Đối tượng: Học sinh các trình độ muốn học theo một lộ trình bài bản, có thời gian, kế hoạch học
                        tập
                        cụ thể
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Kèm theo 04 - 05 sách (tùy theo từng môn) làm tài liệu theo khóa học tương ứng
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Mục tiêu: Điểm 9+
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Có đề thi online sau mỗi bài giảng lý thuyết, được chấm, trả điểm, xếp hạng
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Khai giảng: 15/06/2023
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--All 79k books --}}
    <section class="py-5">
        <div class="container">
            <p class="text-uppercase fw-bold ">SÁCH ĐỒNG GIÁ 79K - ƯU ĐÃI LỚN NHẤT NĂM</p>
            <div class="row my-4">
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">{{currency_format(799000)}}</span>
                                <span class="text-decoration-line-through">-20%</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-danger">Thêm vào giỏ</a>
                                <a href="#" class="btn btn-danger">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- combo 5tr --}}
    <section>
        <div class="container">
            <ul class="nav nav-underline text-primary" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="lives-tab" data-bs-toggle="tab" data-bs-target="#lives-tab-pane"
                            type="button" role="tab" aria-controls="lives-tab-pane" aria-selected="true">LIVE S -TOÁN LÝ
                        HÓA
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active border" id="lives-tab-pane" role="tabpanel"
                     aria-labelledby="lives-tab" tabindex="0">
                    <div class="border-bottom">
                        <p class="p-3 m-0"></p>
                    </div>
                    <div class="row my-4 mx-2">
                        <div class="col-md row">
                            <div class="col">
                                <img class="img-thumbnail rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">0đ</span></p>
                            </div>
                        </div>
                        <div class="col-md row">
                            <div class="col">
                                <img class="img-thumbnail rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <p class="p-3 m-0 text-center">Học phí combo: <span
                                class="text-danger fw-bold">{{currency_format(5000000)}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3 combo --}}
    <section class="py-5">
        <div class="container">
            <ul class="nav nav-underline border" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-md-2 px-md-5 px-2 active" id="combo6-tab" data-bs-toggle="tab"
                            data-bs-target="#combo6-tab-pane" type="button" role="tab" aria-controls="combo6-tab-pane"
                            aria-selected="true">COMBO 6
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-md-2 px-md-5 px-2" id="combo7-tab" data-bs-toggle="tab"
                            data-bs-target="#combo7-tab-pane" type="button" role="tab" aria-controls="combo7-tab-pane"
                            aria-selected="false">COMBO 7
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-md-2 px-md-5 px-2" id="combo8-tab" data-bs-toggle="tab"
                            data-bs-target="#combo8-tab-pane" type="button" role="tab" aria-controls="combo8-tab-pane"
                            aria-selected="false">COMBO 8
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active border" id="combo6-tab-pane" role="tabpanel"
                     aria-labelledby="combo6-tab" tabindex="0">
                    <div class="border-bottom">
                        <p class="p-3 m-0"></p>
                    </div>
                    <div class="row my-4 gap-3 mx-2">
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">0đ</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <p class="p-3 m-0 text-center">Học phí combo: <span
                                class="text-danger fw-bold">{{currency_format(5000000)}}</span>
                            <button class="btn btn-danger shadow-sm">Đăng ký</button>
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="combo7-tab-pane" role="tabpanel" aria-labelledby="combo7-tab"
                     tabindex="0">
                    <div class="border-bottom">
                        <p class="p-3 m-0"></p>
                    </div>
                    <div class="row my-4 gap-3 mx-2">
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">0đ</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <p class="p-3 m-0 text-center">Học phí combo: <span
                                class="text-danger fw-bold">{{currency_format(5000000)}}</span>
                            <button class="btn btn-danger shadow-sm">Đăng ký</button>
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="combo8-tab-pane" role="tabpanel" aria-labelledby="combo8-tab"
                     tabindex="0">
                    <div class="border-bottom">
                        <p class="p-3 m-0"></p>
                    </div>
                    <div class="row my-4 gap-3 mx-2">
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">0đ</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 row">
                            <div class="col">
                                <img class="img-fluid rounded-2" src={{ asset('imgs/teacher.jpg') }} alt="" srcset={{
                                asset('imgs/teacher.jpg') }}>
                            </div>
                            <div class="col">
                                <p class="lead-lg fw-bold">Live S - Toán Lý Hóa 2024</p>
                                <p>MoonTV</p>
                                <p>Học phí: <span class="fw-bold text-danger">{{currency_format(800000)}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <p class="p-3 m-0 text-center">Học phí combo: <span
                                class="text-danger fw-bold">{{currency_format(5000000)}}</span>
                            <button class="btn btn-danger shadow-sm">Đăng ký</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
