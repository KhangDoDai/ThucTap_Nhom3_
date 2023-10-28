@section('title')
    Giỏ hàng
@endsection
@section('main')
    @include('Client.components.sidebar')
    <div class="container col my-3" ng-app="formvalidation">
        <div class="row" ng-controller="cntform">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <span class="mb-0">Nhà sách MoonBook / Giỏ hàng</span>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table  border my-2">
                        <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="selectAll"
                                           onclick="checkAll()">
                                    <label class="form-check-label" for="selectAll">
                                        Chọn tất cả
                                    </label>
                                </div>
                            </th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="flexCheckDefault1">
                                    </div>
                                    <div>
                                        <img
                                            src="https://moonbook.vn/content/uploads/book/204/21fc1235-c9bc-4c28-a6d0-5e89ff7d2135.jpg?width=400&height=400&quality=100"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                    </div>
                                    <div class="ms-3">
                                        <h6>Tự học Toán học - Tập 5 - Hình tọa độ OXYZ</h6>
                                        <p><span class="text-danger">79.000</span> <span
                                                class="text-muted text-decoration-line-through"> 200.000</span>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="quantity">
                                    <input id="form1" min="1" name="qty" value="1"
                                           type="number" class="form-control form-control-sm"/>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <span>$4798.000000000</span>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card rounded-3">
                    <div class="card-header">
                        <h5 class="bi bi-geo-alt">Địa chỉ nhận hàng</h5>
                    </div>
                    <div class="card-body">
                        <form name="addres" novalidate>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Họ và tên</label>
                                        <input type="text" class="form-control" name="name" placeholder=""
                                               ng-model="user.name"
                                               ng-pattern="/^[a-zA-ZÀ-ỹà-ỹĂ-Ẽă-ẽĐđĨ-ỹĩ-ỹƠ-ỹơ-ỹƯ-ửư-ử\s]*$/" required>
                                        <div class="errortext" ng-show="addres.name.$dirty && addres.name.$invalid">
                                            <span ng-show="addres.name.$error.required">Tên là bắt buộc</span>
                                            <span
                                                ng-show="addres.name.$error.pattern && !addres.name.$error.minlength && !addres.name.$error.maxlength">
                                                    Chỉ cho phép chữ cái</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Số điện thoại</label>
                                        <input class="form-control" name="phone" placeholder="" ng-model="user.phone"
                                               ng-pattern="/^[0-9]*$/" ng-minlength="7" ng-maxlength="10" required>
                                        <div class="errortext" ng-show="addres.phone.$dirty && addres.phone.$invalid">
                                                <span ng-show="addres.phone.$error.required">Số điện thoại là bắt
                                                    buộc</span>
                                            <span ng-show="addres.phone.$error.minlength">Phải chứa ít nhất 7 ký
                                                    tự</span>
                                            <span ng-show="addres.phone.$error.maxlength">Không được lớn hơn 10 ký
                                                    tự</span>
                                            <span
                                                ng-show="addres.phone.$error.pattern && !addres.phone.$error.minlength && !addres.phone.$error.maxlength">Chỉ
                                                    cho phép số</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <select class="custom-select custom-select-sm" ng-model="province"
                                                ng-required="true" required>
                                            <option value="" disabled selected>Tỉnh/Thành</option>
                                            <option value="1">Cần Thơ</option>
                                            <option value="2">Hậu Gian</option>
                                            <option value="3">Sóc Trăng</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <select class="custom-select custom-select-sm" ng-model="district"
                                                ng-required="true" required>
                                            <option value="" disabled selected>Quận/Huyện</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <select class="custom-select custom-select-sm" ng-model="ward"
                                                ng-required="true" required>
                                            <option value="" disabled selected>Xã/Phường</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div ng-show="addres.$submitted && addres.$invalid" class="alert alert-danger">Vui
                                        lòng chọn giá trị cho tất cả các trường!
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" ng-model="acceptTerms" ng-required="true"> Tôi
                                            chấp
                                            nhận điều khoản sử dụng và chính sách quyền riêng tư
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Thành tiền</span>
                                        <span class="mb-2">4798.000000000</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Phí vận chuyển</span>
                                        <span class="mb-2">4798.000000000</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <span>Tổng số tiền (Gồm VAT)</span>
                                        <span class="mb-2">4798.000000000</span>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-lg btn-block"
                                                ng-disabled="addres.$invalid || !acceptTerms" ng-click="submit()"><span
                                                class="glyphicon glyphicon-check"></span> XÁC NHẬN GIỎ HÀNG
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('Client.layout.master')
