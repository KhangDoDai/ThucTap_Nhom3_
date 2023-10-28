<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href={{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}>


    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>


    <title>@yield('title')
    </title>
    @include('Client.Components.style')
</head>

<body>
@include('Client.Components.navbar')
<!-- Main Section-->

<div class="container-fluid">
    <div class="row">
        @yield('main')
    </div>
</div>
<section>
    @yield('client-content')
</section>
<!-- / Main Section-->
@include('Client.Components.footer')

<script src={{ asset('bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src={{ asset('angular-1.8.2/angular.min.js') }}></script>
<script>
    var app = angular.module('formvalidation', []);
    app.controller('validateform', ($scope) => {
        $scope.confirmPass = function () {
            if ($scope.user.signupPassword !== $scope.user.signupConfirmPassword) {
                $scope.signupForm.signupPassword.$error.notMatch = true;
                console.log($scope.signupForm.signupPassword.$error);
            }
        }
    })
</script>
<script>
    var app = angular.module('formvalidation', [])
    app.controller('cntform', function ($scope) {
        $scope.pay = {};
    });
</script>
@include('Client.Components.script')
</body>

</html>
