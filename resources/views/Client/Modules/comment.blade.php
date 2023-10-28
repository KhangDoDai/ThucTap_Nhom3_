@section('meta_title')
    @section('main')
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header text-center">
                            Bạn chưa đăng ký khóa học! <a href="#" class="text-decoration-none text-body">Click đăng
                                ký.</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="media mb-4 ">
                                <img
                                    src="https://moon.vn/uploads/medium/avatarai/e062308a-5286-4293-972c-a61a163a7701.jpg"
                                    alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>Lý thuyết Âm /l/</h6>
                                    <i class="bi bi-play-circle-fill custom-icon "></i>
                                    Tiếng Anh cho người bắt đầu
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="mb-4 fs-4">Để lại đánh giá*</span>
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Đánh giá của bạn* :</p>
                                <div class="text-warning">
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <textarea id="message" rows="1" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-light"><img src="">Gửi</button>
                                </div>
                            </form>
                            <div class="media mb-4 my-5">
                                <img
                                    src="https://moon.vn/uploads/medium/avatarai/e062308a-5286-4293-972c-a61a163a7701.jpg"
                                    alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <span>Tấn Đạt<small> - <i>10/5/2023</i></small></span>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no
                                        at.
                                        Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @extends('Client.layout.master')
