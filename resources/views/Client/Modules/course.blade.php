@section('meta_title')
@endsection
@section('main')
    @include('Client.components.sidebar')
    <div class="container col my-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5>Tiếng Anh cho người bắt đầu</h5>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-4">
                                <img class="img-fluid rounded  mb-lg-0"
                                     src="https://moon.vn/baigiangvideo/Image/1936.jpg"
                                     alt="..."/>
                            </div>
                            <div class="col-lg-6">
                                <p class="fs-6 text-break text-wrap mb-0">ID: 200000</p>
                                <p class="fs-6 text-break text-wrap mb-0">Tác giả:<strong>Cô Trang Anh & Cô Minh
                                        Trang</strong></p>
                                <p class="fs-6 text-break text-wrap mb-0">Số Trang:<strong>460</strong></p>
                                <p class="fs-6 text-break text-wrap mb-0">Kích thước:<strong>19x27cm</strong></p>
                                <p class="fs-6 text-break text-wrap mb-0">Số lần tra cứu:<strong>Không giới
                                        hạn</strong></p>
                                <p class="fs-6 text-break text-wrap mb-0">Giá: <strong
                                        class="text-danger">150.000VNĐ</strong></p> <br>
                                <button class="btn btn-danger">Mua sách</button>
                            </div>
                        </div>
                        <div class="my-3">
                            <a href="#" class="text-decoration-none text-dark ">Xem bản đọc thử tại đây!!!</a>
                            <p class="fs-6 text-break text-wrap mb-0 text-start ">Hầu hết người bắt đầu học Tiếng
                                Anh đều gặp
                                khó khăn trong việc xác định nội dung và phương pháp học tập hiệu quả. Câu hỏi được
                                đặt ra là:
                            </p>
                            <p class="fs-6 text-break text-wrap mb-0 text-start bi bi-question-lg ">Nên bắt đầu học
                                từ đâu?</p>
                            <p class="fs-6 text-break text-wrap mb-0 text-start bi bi-question-lg">Nên học những nội
                                dung gì?
                            </p>
                            <p class="fs-6 text-break text-wrap mb-0 text-start bi bi-question-lg ">Nên học phần gì
                                trước phần
                                gì sau?</p>
                            <a href="#" class="text-decoration-none text-primary" id="viewMore">Xem thêm</a>
                            <br>
                            <p class="fs-6 text-break text-wrap mb-0 text-start bi bi-box-arrow-in-right hidden-content ">
                                Cuốn
                                sách gồm có 30 bài, trong đó mỗi bài lại đều được chia thành các phần: nghe- nói-
                                đọc- viết và
                                ngữ pháp. Điểm đặc biệt của cuốn sách này là khai thác ý nghĩa và cách dùng của ngữ
                                pháp tiếng
                                Anh, rồi từ chính việc nắm được ngữ pháp tiếng Anh sẽ giúp người học vận dụng nó để
                                nói đúng
                                trong giao tiếp. Các tình huống giao tiếp được xây dựng dựa trên các cách dùng của
                                các hiện
                                tượng ngữ pháp và từ các chủ đề giao tiếp sẽ phát triển vốn từ vựng theo chủ đề. Khi
                                đã có vốn
                                từ vựng và ngữ pháp thì người học sẽ được đi vào rèn luyện các kĩ năng nghe- nói-
                                đọc- viết. Tất
                                cả những điều đó được tích hợp trong từng đơn vị bài học của cuốn sách. Bên cạnh một
                                hệ thống
                                bài học được xây dựng logic, khoa học và dễ hiểu, thì cuốn sách còn có lời giải chi
                                tiết cho
                                từng câu bài tập và có file nghe được thu âm bởi chính giáo viên bản xứ.</p>
                            <br>
                            <p class="fs-6 text-break text-wrap mb-0 text-start bi bi-box-arrow-in-right hidden-content">
                                Cuốn
                                sách giúp khắc phục nhược điểm trong thói quen học ngoại ngữ của người học; đó là sợ
                                nói sai,
                                dùng sai ngữ pháp và cũng chính vì nỗi sợ đó mà cản trở sự tự tin trong việc sử dụng
                                ngôn ngữ.
                                Cuốn sách bắt đầu đi từ ngữ pháp, nhưng từ ngữ pháp hướng tới việc phát triển đầy đủ
                                các kĩ năng
                                ngôn ngữ cho người học và giúp người học tự tin sử dụng tiếng Anh trong công việc
                                cũng như trong
                                cuộc sống hàng ngày.</p>
                            <br>
                            <p class="fs-6 text-break text-wrap mb-0 text-start bi bi-box-arrow-in-right hidden-content">
                                Với
                                một cuốn sách được thiết kế như vậy, chắc chắn sẽ làm thoả mãn nhu cầu tự học tiếng
                                Anh của tất
                                cả người học.</p>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionList">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingVowel">
                                    <button class="accordion-button collapsed text-info text-uppercase"
                                            type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseOne">Nguyên âm: Lý thiếu và thực hành
                                        <span class="badge rounded-pill bg-danger Structures">10</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingVowel" data-bs-parent="#accordionList">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th scope="row">1 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành Âm
                                                        /w/
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">2 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết Âm
                                                        /w/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">3 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành Âm
                                                        /r/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">4 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết Âm
                                                        /r/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">5 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành Âm
                                                        /l/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">6 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết Âm
                                                        /l/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">7 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành Âm
                                                        /ŋ/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">8 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết Âm
                                                        /ŋ/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">9 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành Âm
                                                        /n/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">10<a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết Âm
                                                        /n/</a></th>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingConsonant">
                                    <button class="accordion-button collapsed text-info text-uppercase"
                                            type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseTwo">Phụ âm: Lý thiếu và thực hành
                                        <span class="badge rounded-pill bg-danger Structures">7</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingConsonant" data-bs-parent="#accordionList">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th scope="row">1 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /w/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">2 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /w/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">3 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /r/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">4 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /r/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">5 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /l/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">6 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /l/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">7 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /ŋ/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">8 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /ŋ/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">9 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /n/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">10<a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /n/</a></th>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingStructure">
                                    <button class="accordion-button collapsed text-info text-uppercase"
                                            type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">UNIT 1 - câu
                                        trúc câu
                                        trong ta
                                        <span class="badge rounded-pill bg-danger Structures">15</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingStructure" data-bs-parent="#accordionList">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th scope="row">1 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /w/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">2 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /w/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">3 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /r/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">4 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /r/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">5 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /l/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">6 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm /l/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">7 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /ŋ/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">8 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /ŋ/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">9 <a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Thực
                                                        hành
                                                        Âm
                                                        /n/</a></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">10<a href="#"
                                                                     class="text-decoration-none text-dark">
                                                        <i class="bi bi-play-circle-fill custom-icon "></i> Lý
                                                        thuyết
                                                        Âm
                                                        /n/</a></th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class=" justify-content-between align-items-center mb-4">
                            <h5>Bài mới phát hành</h5>
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">1 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực
                                    hành Âm /w/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">2 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý
                                    thuyết Âm /w/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">3 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực
                                    hành Âm /r/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">4 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý
                                    thuyết Âm /r/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">5 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực
                                    hành Âm /l/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">6 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý
                                    thuyết Âm /l/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">7 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực
                                    hành Âm /ŋ/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">8 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý
                                    thuyết Âm /ŋ/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">9 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực
                                    hành Âm /n/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">10 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý
                                    thuyết Âm /n/</a></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Top bài chưa học</h5>
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">1 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực hành Âm
                                    /w/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">2 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý thuyết Âm
                                    /w/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">3 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực hành Âm
                                    /r/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">4 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý thuyết Âm
                                    /r/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">5 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực hành Âm
                                    /l/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">6 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý thuyết Âm
                                    /l/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">7 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực hành Âm
                                    /ŋ/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">8 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý thuyết Âm
                                    /ŋ/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">9 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực hành Âm
                                    /n/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">10 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý thuyết Âm
                                    /n/</a></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h5>Top đã học</h5>
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">1 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Thực hành Âm
                                    /j/</a></th>
                        </tr>
                        <tr>
                            <th scope="row">2 <a href="#" class="text-decoration-none text-dark"> <i
                                        class="bi bi-play-circle-fill custom-icon "></i> Lý thuyết Âm
                                    /j/</a></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <p class="text-uppercase fw-bold ">SẢN PHẨM LIÊN QUAN</p>
            <div class="row my-4">
                <div class="col-md-6 col-lg-3">
                    <div class="shadow-sm card mb-3">
                        <img src="{{ asset('imgs/book.jpg') }}" class="img-thumbnail" alt="...">
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">79000</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">97000</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">99900</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">90000</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">79000</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">97000</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">99900</span>
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
                        <div class="card-body px-2 py-3">
                            <h5 class="card-title text-center">Combo Pro S Sinh 8+ 2024</h5>
                            <p class="card-text text-center"><span
                                    class="text-danger">90000</span>
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
@endsection
@extends('Client.layout.master')
