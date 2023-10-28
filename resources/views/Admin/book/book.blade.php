<!-- Page Content Goes Here -->
@section('title','Trang chủ')
<!-- / Top banner -->
@extends('admin.layout.master')
@section('admin-content')

    <!--begin::Tables Widget 9-->
    <div class="card" ng-controller="editBookController" ng-app="editBook">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <div class="card-title">
                <!--begin::Search-->
                <!--end::Search-->
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal"
                    data-bs-target="#adduser">
                Thêm sách
            </button>
        </div>
        {{--        form add--}}
        <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="adduserLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adduserLabel">Thêm Sách</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--begin:Form-->
                        <form method="POST" action="{{route('book.create')}}">
                            @csrf
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="title" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tên sách</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="title" placeholder=""
                                       name="title"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="author" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tác giả</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="author" placeholder=""
                                       name="author"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="description" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Mô tả</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="description"
                                       placeholder=""
                                       name="description"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="price" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Giá</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" id="price"
                                       placeholder=""
                                       name="price"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="discount" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Giảm giá</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" id="discount"
                                       placeholder=""
                                       name="discount"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="quantity" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Số lượng</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" id="quantity"
                                       placeholder=""
                                       name="quantity"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                    <span class="indicator-label">Lưu thay đỏi</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!--end:Form-->
                    </div>
                </div>
            </div>
        </div>
        {{-- form edit--}}
        <div class="modal fade" id="edituser" tabindex="-1" aria-labelledby="edituserLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edituserLabel">Sửa thành viên</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--begin:Form-->
                        <form method="POST" method="post" ng-submit="submitForm(book[0].id)">
                            @csrf
                            @method('PUT')
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="title" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tên sách</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="title" placeholder=""
                                       name="title" ng-model="book[0].title" value="@{{ book[0].title }}"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="author" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tác giả</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="author" placeholder=""
                                       name="author" ng-model="book[0].author" value="@{{ book[0].author }}"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="description" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Mô tả</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="description"
                                       placeholder=""
                                       name="description" ng-model="book[0].description"
                                       value="@{{ book[0].description }}"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="price" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Giá</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" id="price"
                                       placeholder=""
                                       name="price" ng-model="book[0].price" value="@{{ book[0].price }}"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="discount" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Giảm giá</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" id="discount"
                                       placeholder=""
                                       name="discount" ng-model="book[0].discount" value="@{{ book[0].discount }}"/>
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label for="quantity" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Số lượng</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" id="quantity"
                                       placeholder=""
                                       name="quantity" ng-model="book[0].quantity" value="@{{ book[0].quantity }}"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                    <span class="indicator-label">Lưu thay đỏi</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!--end:Form-->
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-muted">
                        <th class="w-25px">
                            <div
                                class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"
                                       data-kt-check="true" data-kt-check-target=".widget-9-check"/>
                            </div>
                        </th>
                        <th class="min-w-250px">Tên Sách</th>
                        <th class="min-w-70px">Tác giả</th>
                        <th class="min-w-100px">Mô tả</th>
                        <th class="min-w-140px">Giá</th>
                        <th class="min-w-140px">Giảm giá</th>
                        <th class="min-w-140px">Số lượng</th>
                        <th class="min-w-140px">Trạng thái</th>

                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>
                                <div
                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox"
                                           value="1"/>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fw-bolder fs-6">{{$book->title}}</span>
                                </div>
                            </td>
                            <td>
                                <span class="fw-bolder fs-6">{{$book->author}}</span>
                            </td>
                            <td>
                                <span class="fw-bolder fs-6">{{$book->description}}</span>
                            </td>
                            <td>
                                <span class="fw-bolder fs-6">{{$book->price}}</span>
                            </td>
                            <td>
                                <span class="fw-bolder fs-6">{{$book->discount}}</span>
                            </td>
                            <td>
                                <span class="fw-bolder fs-6">{{$book->quantity}}</span>
                            </td>
                            <td>
                                <span
                                    class="badge badge-light-{{$book->status == 0 ? "success" : "danger"}} fw-bolder">{{$book->status == 0 ? "Hiện" : "Ẩn"}}</span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-end ">
                                    <div>
                                        <button
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#edituser"
                                            ng-click="updateBook({{$book->id}})"
                                        >
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                    <form action="{{route('book.delete',['id'=> $book->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                                class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 9-->
@endsection
@push('scripts')
    <script>
        const app = angular.module('editBook', []);
        app.controller('editBookController', ($scope, $http) => {
            $scope.book = [];

            $scope.updateBook = function (id) {
                fetch(`http://127.0.0.1:8000/api/admin/book/${id}`)
                    .then((res) => res.json())
                    .then(function (data) {
                        $scope.book = data;
                        $scope.$digest();
                        console.log($scope.book);
                    })
                    .catch(function (error) {
                        // Handle the error
                        console.error('Error updating resource:', error);
                    });
            };
            $scope.submitForm = function (id) {
                const currentDate = new Date();

                const year = currentDate.getFullYear();
                const month = String(currentDate.getMonth() + 1).padStart(2, '0');
                const day = String(currentDate.getDate()).padStart(2, '0');
                const hours = String(currentDate.getHours()).padStart(2, '0');
                const minutes = String(currentDate.getMinutes()).padStart(2, '0');
                const seconds = String(currentDate.getSeconds()).padStart(2, '0');

                const formattedDateTime = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                var url = `http://127.0.0.1:8000/api/admin/book/${id}`;

                var data = {
                    title: $scope.book[0].title,
                    author: $scope.book[0].author,
                    description: $scope.book[0].description,
                    price: $scope.book[0].price,
                    discount: $scope.book[0].discount,
                    quantity: $scope.book[0].quantity,
                    updated_at: formattedDateTime,
                };


                $http({
                    method: 'PUT',
                    url: url,
                    data: data
                })
                    .then(function (response) {
                        // Handle success response
                        console.log('PUT request successful:', response.data);
                        location.reload();
                    })
                    .catch(function (error) {
                        // Handle error response
                        console.error('Error making PUT request:', error);
                    });

            };
        })
    </script>
@endpush
