@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid position-relative">
        {{--page title --}}
        <nav aria-label="breadcrumb" class="ms-5 ps-2 mt-3
        float-start fs-3 fw-bold" dir="ltr">
            <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">لیست پرسش‌ها</li>
            </ol>
        </nav>
        <!-- main list table -->
        <div id="webinar-list" class="main-list col-9 float-start pe-5 ps-5">
            <!-- table title -->
            <div class="list-page-titles d-flex justify-content-start p-3 text-center">
                <div class="h4 col-1">#</div>
                <div class="h4 col-2">آیدی</div>
                <div class="h4 col-2">عنوان</div>
                <div class="h4 col-2">تاریخ ایجاد</div>
            </div>
            <!-- table elements each row -->
            <div class="list-page-items d-flex justify-content-start align-items-center mt-3 p-4 text-center">
                <div class="display-4 col-1">1</div>
                <div class="display-4 col-2">12345</div>
                <div class="display-4 col-2">مکنتبیمکنلستبلمکت</div>
                <div class="display-4 col-2">1402/05/23</div>
                <button type="button" class="btn btn-secondary col-2" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="bottom"
                        data-bs-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.">
                    توضیحات
                </button>
                <!-- icons -->
                <div class="list-icons d-flex justify-content-around col-3 pe-4 ps-4">
                    <!-- accept the item to show in site -->
                    <div class="list-accept">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                            <g fill="#04355c">
                                <path fill-rule="evenodd"
                                      d="M16 5h13l9 9v23a2 2 0 0 1-2 2H16a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm19 9l-6-6v5a1 1 0 0 0 1 1h5Zm-2.293 7.293a1 1 0 0 1 0 1.414L24 31.414l-4.707-4.707a1 1 0 0 1 1.414-1.414L24 28.586l7.293-7.293a1 1 0 0 1 1.414 0Z"
                                      clip-rule="evenodd"/>
                                <path d="M12 11h-2v27a5 5 0 0 0 5 5h19v-2H15a3 3 0 0 1-3-3V11Z"/>
                            </g>
                        </svg>
                    </div>
                    <!-- to download the file -->
                    <div class="list-down">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <path fill="#04355c"
                                  d="M74.34 85.66a8 8 0 0 1 11.32-11.32L120 108.69V24a8 8 0 0 1 16 0v84.69l34.34-34.35a8 8 0 0 1 11.32 11.32l-48 48a8 8 0 0 1-11.32 0ZM240 136v64a16 16 0 0 1-16 16H32a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h52.4a4 4 0 0 1 2.83 1.17L111 145a24 24 0 0 0 34 0l23.8-23.8a4 4 0 0 1 2.8-1.2H224a16 16 0 0 1 16 16Zm-40 32a12 12 0 1 0-12 12a12 12 0 0 0 12-12Z"/>
                        </svg>
                    </div>
                    <!-- to edit the item -->
                    <div class="list-edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.75" height="25" viewBox="0 0 23.75 25">
                            <path id="edit-document"
                                  d="M6.5,27A2.507,2.507,0,0,1,4,24.5V4.5a2.408,2.408,0,0,1,.735-1.766A2.4,2.4,0,0,1,6.5,2h10L24,9.5v3.875L14,23.344V27Zm10,0V24.344l6.438-6.469L25.625,20.5,19.156,27Zm10.031-7.375-2.656-2.656.875-.875a1.235,1.235,0,0,1,.906-.375,1.135,1.135,0,0,1,.875.375l.875.906a1.274,1.274,0,0,1,.344.891,1.163,1.163,0,0,1-.344.859l-.875.875ZM15.25,10.75H21.5L15.25,4.5Z"
                                  transform="translate(-4 -2)" fill="#04355c"/>
                        </svg>

                    </div>
                    <!-- to delete the item -->
                    <div class="list-del">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#04355c"
                                  d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                        </svg>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
