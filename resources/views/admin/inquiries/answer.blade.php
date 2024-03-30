@extends('layouts.admin.master');

@section('content');
<div class="container-fluid position-relative">

    <div class="main-list col-9 float-start pe-5 ps-5 ">
        <div class="question-text p-3">
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،
                شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
        </div>

        <div class="answer-text mt-3 p-3">
            <form action="" class="answear-items">

                <div class="col-2 ">
                    <input type="text" class="form-control" placeholder="دسته‌بندی" aria-label="دسته یندی"
                           style="background-color: rgb(231, 231, 231); border: none;" required>
                </div>

                <div class="mt-3 col-8 m-auto">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" required
                              style="background-color: rgb(231, 231, 231); border: none;"
                              placeholder="جواب پرسش"></textarea>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <div class="mb-3 col-8">
                        <input class="form-control" type="file" id="formFileMultiple" multiple
                               style="background-color: rgb(231, 231, 231); border: none;">
                    </div>


                    <div class="col-2">
                        <button type="submit" class="btn mb-3"
                                style="background-color: rgb(231, 231, 231); border: none;">ثبت پاسخ
                        </button>
                    </div>

                </div>
            </form>
        </div>

    </div>

</div>
@endsection
