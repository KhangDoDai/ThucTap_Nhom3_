@section('main')
    <div class="khangrating">
        <div class="container px-8 px-lg-5 my-5">
            <div class="card-header" align="center" style="padding:10px">
                <span style="font-size:20px;  font-weight:bold ">
                    TOP 100 XẾP HẠNG LEVEL
                </span>
            </div>
            <ul class="nav nav-pills mb-3 container text-center text-md-start mt-1" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-Level-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Level"
                            type="button" role="tab" aria-controls="pills-Level" aria-selected="true">Level
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Toan-tab" data-bs-toggle="pill" data-bs-target="#pills-Toan"
                            type="button" role="tab" aria-controls="pills-Toan" aria-selected="false">Toán
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Ly-tab" data-bs-toggle="pill" data-bs-target="#pills-Ly"
                            type="button" role="tab" aria-controls="pills-Ly" aria-selected="false">Lý
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Hoa-tab" data-bs-toggle="pill" data-bs-target="#pills-Hoa"
                            type="button" role="tab" aria-controls="pills-Hoa" aria-selected="false">Hóa
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Sinh-tab" data-bs-toggle="pill" data-bs-target="#pills-Sinh"
                            type="button" role="tab" aria-controls="pills-Sinh" aria-selected="false">Sinh
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Anh-tab" data-bs-toggle="pill" data-bs-target="#pills-Anh"
                            type="button" role="tab" aria-controls="pills-Anh" aria-selected="false">Anh
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Su-tab" data-bs-toggle="pill" data-bs-target="#pills-Su"
                            type="button" role="tab" aria-controls="pills-Su" aria-selected="false">Sử
                    </button>
                </li>
            </ul>
            <div class="tab-content text-center text-md-start mt-1" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Level" role="tabpanel"
                     aria-labelledby="pills-Level-tab"
                     tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                            <tr class="menu">
                                <td>
                                    #
                                </td>
                                <td></td>
                                <td>Thành viên</td>
                                <td>Level</td>
                                <td>SP</td>
                                <td>Exp</td>
                                <td>BTĐL</td>
                                <td>Tỉnh / Thành</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="stt">1</td>
                                <td class="khoangcach"><img alt="" src="{{ asset('img/dk.jpg') }}"
                                                            class="rounded-circle anhxh"></td>
                                <td>
                                    <a class="tenxh">
                                        <strong>Dũy Khang</strong>
                                    </a>
                                    <br>
                                    Khanghiha
                                </td>
                                <td class="thanhtich">305</td>
                                <td class="thanhtich">94</td>
                                <td class="thanhtich">469611</td>
                                <td class="thanhtich">60547</td>
                                <td>Vĩnh Long</td>
                            </tr>
                            <tr>
                                <td class="stt">2</td>
                                <td class="khoangcach"><img
                                        src="{{ asset('img/dk.jpg') }}" class="rounded-circle anhxh"></td>
                                <td>
                                    <a class="tenxh">
                                        <strong>Tấn Đạt</strong>
                                    </a>
                                    <br>
                                    Dathaha
                                </td>

                                <td class="thanhtich">300</td>
                                <td class="thanhtich">90</td>
                                <td class="thanhtich">459611</td>
                                <td class="thanhtich">60447</td>
                                <td>Sóc Trăng</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-Toan" role="tabpanel" aria-labelledby="pills-Toan-tab"
                     tabindex="0">
                    Toán
                </div>
                <div class="tab-pane fade" id="pills-Ly" role="tabpanel" aria-labelledby="pills-Ly-tab"
                     tabindex="0">Lý
                </div>
                <div class="tab-pane fade" id="pills-Hoa" role="tabpanel" aria-labelledby="pills-Hoa-tab"
                     tabindex="0">
                    Hóa
                </div>
                <div class="tab-pane fade" id="pills-Sinh" role="tabpanel" aria-labelledby="pills-Sinh-tab"
                     tabindex="0">
                    Sinh
                </div>
                <div class="tab-pane fade" id="pills-Anh" role="tabpanel" aria-labelledby="pills-Anh-tab"
                     tabindex="0">
                    Anh
                </div>
                <div class="tab-pane fade" id="pills-Su" role="tabpanel" aria-labelledby="pills-Su-tab"
                     tabindex="0">Sử
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('Client.layout.master')
