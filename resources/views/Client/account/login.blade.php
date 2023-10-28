@section('title','Đăng nhập')
<!-- / Top banner -->
@extends('client.layout.master')
@section('client-content')
<section ng-app="formvalidation">
    <div ng-controller="validateform" class="container">
        <div class="p-5 shadow-sm mx-auto">
            <ul class="nav nav-underline mb-3" id="pills-tab" role="tablist">
                <li class="nav-item lead" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Đăng nhập</button>
                </li>
                <li class="nav-item lead" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Đăng ký</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <form name="loginForm">
                        <div class="form-floating mb-3">
                            <input name="loginEmail" ng-model="user.loginEmail" type="email" class="form-control"
                                id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Tài khoản hoặc email</label>
                            <span class="text-danger"
                                ng-show="loginForm.loginEmail.$dirty && loginForm.loginEmail.$error.required">Không
                                được
                                để trống</span>
                            <span class="text-danger"
                                ng-show="loginForm.loginEmail.$dirty && loginForm.loginEmail.$error.email">Email không
                                hợp
                                lệ</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="loginPassword" ng-model="user.loginPassword" type="password"
                                class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Mật khẩu</label>
                            <span class="text-danger"
                                ng-show="loginForm.loginPassword.$dirty && loginForm.loginPassword.$error.required">Mật
                                khẩu được để trống</span>
                            <div class="form-text" id="basic-addon4">
                                <a href="#" class="text-primary link-underline link-underline-opacity-0">Quên mật
                                    khẩu?</a>
                            </div>
                        </div>
                        <button type="submit" ng-disabled="loginForm.$invalid" class="btn btn-dark btn-lg w-100">Đăng
                            nhập</button>
                        <p class="text-divider"><span class="lead">HOẶC BẰNG</span></p>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-danger btn-lg w-100"><i
                                    class="bi bi-google mx-2"></i>Google</button>
                            <button type="submit" class="btn btn-primary btn-lg w-100"><i
                                    class="bi bi-facebook mx-2"></i>Facebook</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <form name="signupForm">
                        <div class="form-floating mb-3">
                            <input name="signupEmail" ng-model="user.signupEmail" type="email" class="form-control"
                                id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail">Email</label>
                            <span class="text-danger"
                                ng-show="signupForm.signupEmail.$dirty && signupForm.signupEmail.$error.required">Không
                                được để trống</span>
                            <span class="text-danger"
                                ng-show="signupForm.signupEmail.$dirty && signupForm.signupEmail.$error.email">Email
                                không hợp lệ</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="signupUsername" ng-model="user.signupUsername" type="text" ng-minlength="10"
                                class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Tài khoản</label>
                            <span class="text-danger"
                                ng-show="signupForm.signupUsername.$dirty && signupForm.signupUsername.$error.required">Không
                                được để trống</span>
                            <span class="text-danger"
                                ng-show="signupForm.signupUsername.$dirty && signupForm.signupUsername.$error.minlength">Tài
                                khoản ít nhất 10 kí tự</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="signupPassword" ng-model="user.signupPassword" type="password" ng-minlength="6"
                                class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Mật khẩu</label>
                            <span class="text-danger"
                                ng-show="signupForm.signupPassword.$dirty && signupForm.signupPassword.$error.required">Không
                                được để trống</span>
                            <span class="text-danger"
                                ng-show="signupForm.signupPassword.$dirty && signupForm.signupPassword.$error.minlength">Mật
                                khẩu ít nhất 6 kí tự</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="signupConfirmPassword" ng-model="user.signupConfirmPassword" type="password"
                                class="form-control" id="floatingConfirmPassword" placeholder="Password" required>
                            <label for="floatingConfirmPassword">Xác nhận mật khẩu</label>
                            <span class="text-danger"
                                ng-show="signupForm.signupConfirmPassword.$dirty && signupForm.signupConfirmPassword.$error.required">Không
                                được để trống</span>
                            <span class="text-danger"
                                ng-show="signupForm.signupConfirmPassword.$dirty && user.signupPassword !== user.signupConfirmPassword">Mật
                                khẩu không khớp</span>
                        </div>
                        <button type="submit" ng-disabled="signupForm.$invalid" ng-click="confirmPass()"
                            class="btn btn-primary btn-lg w-100">Đăng ký</button>
                        <p class="text-divider"><span class="lead">HOẶC BẰNG</span></p>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-danger btn-lg w-100"><i
                                    class="bi bi-google mx-2"></i>Google</button>
                            <button type="submit" class="btn btn-primary btn-lg w-100"><i
                                    class="bi bi-facebook mx-2"></i>Facebook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection