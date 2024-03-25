@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid position-relative">
        <!-- main list table -->
        <div id="webinar-list" class="main-list col-9 float-start pe-5 ps-5">
            <!-- table title -->
            <div class="list-page-titles d-flex justify-content-start p-3 text-center">
                <div class="h4 col-1"></div>
                <div class="h4 col-2">آیدی</div>
                <div class="h4 col-3">نام و نام‌خوانوادگی</div>
                <div class="h4 col-2">سمت</div>
            </div>
            <!-- table elements each row -->
            <div class="list-page-items d-flex justify-content-start align-items-center mt-3 pt-5 pb-5 pe-2  text-center">
                <div class="display-4 col-1 p-1 ">
                    <img src="/images/1.jpg" class="img-thumbnail rounded-circle object-fit-contain " alt="...">
                </div>
                <div class="display-4 col-2">12345</div>
                <div class="display-4 col-3">حجت راستی</div>
                <div class="display-4 col-2">مهندس</div>
                <button type="button" class="btn btn-secondary col-2" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="bottom"
                        data-bs-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.">
                    توضیحات
                </button>
                <!-- icons -->
                <div class="list-icons d-flex justify-content-around col-2 pe-4 ps-4">

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
