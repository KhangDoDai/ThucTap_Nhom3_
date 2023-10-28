@section('title','Thanh Toán')
<!-- / Top banner -->
@extends('client.layout.master')
@section('client-content')


<body ng-app="formvalidation">
    <section ng-controller="cntform">
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center pb-5">
                        <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
                            <div class="fw-bold fs-3 my-4">
                                Thanh toán
                            </div>
                            <form name="pay" novalidate>
                                <div class="mb-3">
                                    <label for="card-number" class="form-label">Họ và Tên </label>

                                    <input type="text" class="form-control" id="name" name="fullname"
                                        ng-model="user.fullname" ng-minlength="5" ng-pattern="/^[a-zA-Z]+$/" required>
                                    <div class="error" ng-show="pay.fullname.$invalid && pay.fullname.$dirty">
                                        <span ng-show="pay.fullname.$error.minlength">Họ và Tên phải hơn 5 ký tự </span>
                                        <span ng-show="pay.fullname.$error.pattern">Bắt buộc phải nhập chữ cái </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="card-cvv" class="form-label" required>Số điện thoại</label>
                                    <input type="tel" class="form-control" name="tel" ng-model="user.tel"
                                        ng-pattern="/^\d{10}$/" required>
                                    <div class="error" ng-show="pay.tel.$invalid && pay.tel.$dirty">
                                        <span ng-show="pay.tel.$error.pattern">
                                            Số điện thoại phải là 10 số
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="card-expiration" class="form-label"> Địa chỉ </label>
                                    <input type="text" class="form-control" id="Address" name="Address"
                                        ng-model="user.Address" ng-minlength="5" required>
                                    <span class="error" ng-show="pay.Address.$invalid && pay.Address.$dirty">
                                        Bắt buộc phải nhập đầy đủ địa chỉ
                                    </span>
                                </div>
                            </form>
                            <div class="pt-2">
                                <div class="fw-bold fs-3 mb-4">
                                    Phương thức thanh toán
                                </div>
                                <form class="pb-3">
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel1" value="" aria-label="..." checked />
                                        </div>
                                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                                            <p class="mb-0">
                                                <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Visa Debit
                                                Card
                                            </p>
                                            <div class="ms-auto">************3456</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel2" value="" aria-label="..." />
                                        </div>
                                        <div class="rounded border d-flex w-100 p-3 align-items-center">
                                            <p class="mb-0">
                                                <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                                                Office
                                            </p>
                                            <div class="ms-auto">************1038</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel2" value="" aria-label="..." />
                                        </div>

                                        <div class="rounded border d-flex w-100 p-3 align-items-center pe-2">
                                            <p class="mb-0 ">
                                                Thanh toán khi nhận hàng
                                            </p>
                                        </div>
                                    </div>
                                </form>
                                <button ng-disabled="pay.$invalid" type="button"
                                    class="btn btn-primary btn-lg w-100">
                                    Đặt Hàng
                                </button>
                            </div>
                        </div>
                        <div class="col-md-5 col-xl-4 offset-xl-1">
                            <div class="py-4 d-flex justify-content-end">
                                <a href="#!"><i class="bi bi-arrow-left-short text-dark fs-3"></i></a>
                            </div>
                            <div class="rounded d-flex flex-column p-2 border p-4">
                                <div class="p-2 me-3">
                                    <h5>Đơn Hàng Của Bạn</h5>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Tổng Tiền :</div>
                                    <div class="ms-auto">100.000 VND</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Sản Phẩm :</div>
                                    <div class="ms-auto">Sách Vật Lý</div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">Số Lượng :</div>
                                    <div class="ms-auto">1</div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8">Voucher giảm giá : </div>
                                    <div class="ms-auto">10.000 VND </div>
                                </div>
                                <div class="p-2 d-flex">
                                    <div class="col-8">
                                        Vận chuyển :
                                    </div>
                                    <div class="ms-auto">20.000 VND</div>
                                </div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="border-top px-2 mx-2"></div>
                                <div class="p-2 d-flex pt-3">
                                    <div class="col-8"><b>Tổng :</b></div>
                                    <div class="ms-auto"><b>110.000 VND </b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
@endsection