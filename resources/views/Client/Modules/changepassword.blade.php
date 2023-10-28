@extends('Client.layout.master')
@section('meta_title')
@section('main')
@include('Client.components.sidebar')
    <!DOCTYPE html>
<html lang="en" ng-app="formvalidation">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body ng-controller="cntform">
<div class="container col">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info text-white fs-5">
                    Đổi mật khẩu - Tài khoản datttpc02990@fpt.edu.vn
                </div>
                <div class="card-body login-card-body">
                    <form name="addres" novalidate>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Mật khẩu hiện tại"
                                   name="CurrentPassword" ng-model="user.CurrentPassword" required>
                            <div class="errortext" ng-show="addres.name.$dirty && addres.name.$invalid">
                                <span ng-show="addres.name.$error.required">Chưa nhập mật khẩu hiện tại</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Mật khẩu mới"
                                   name="Newpassword" ng-model="user.Newpassword" required>
                            <div class="errortext" ng-show="addres.name.$dirty && addres.name.$invalid">
                                <span ng-show="addres.name.$error.required">Chưa nhập mật khẩu mới</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới"
                                   name="Newpassword2" ng-model="user.Newpassword2" required>
                            <div class="errortext" ng-show="addres.name.$dirty && addres.name.$invalid">
                                <span ng-show="addres.name.$error.required">Chưa nhập lại mật khẩu mới</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary btn-block"
                                        ng-disabled="addres.$invalid" ng-click="submit()"><span
                                        class="glyphicon glyphicon-check"></span> XÁC NHẬN GIỎ HÀNG
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
@endsection
