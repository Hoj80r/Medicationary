   <!-- sidebar -->
   <button type="button" id="sidebarBtn" class="sidebar col-3 col-sm-2 h-auto p-2 btn btn-dark d-block d-lg-none m-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M20 17.5a1.5 1.5 0 0 1 .144 2.993L20 20.5H4a1.5 1.5 0 0 1-.144-2.993L4 17.5zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 0 1 0-3zm0-7a1.5 1.5 0 0 1 0 3H4a1.5 1.5 0 1 1 0-3z"/></g></svg>
   </button>

   <nav id="sidebarElements" class="sidebar d-none d-lg-block col-lg-3 col-md-4 col-12  position-fixed d-flex flex-column justify-content-center overflow-scroll z-3">
    <!-- sidebar title -->
    <div id="aide-header" class=" d-flex justify-content-center mt-lg-5 pt-lg-5 ">
      <a class="fs-4 mt-1" href="{{ route('admin.index.landscape') }}" title="برگشت به صفحه اصلی سایت" >Medicationary</a>
      <button type="button" class="btn me-2 mb-3 d-lg-none" id="sidebarCloseBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="white" d="m12 13.414l5.657 5.657a1 1 0 0 0 1.414-1.414L13.414 12l5.657-5.657a1 1 0 0 0-1.414-1.414L12 10.586L6.343 4.929A1 1 0 0 0 4.93 6.343L10.586 12l-5.657 5.657a1 1 0 1 0 1.414 1.414z"/></g></svg>
      </button>

    </div>
    <!-- menu items -->
    <div id="sidebar-items" class="d-flex flex-wrap justify-content-around">
      <!-- webinar menu -->
      <button type="button" id="web-btn" class="btn col-10 d-block mt-3 d-flex justify-content-around align-items-center" data-bs-toggle="collapse" data-bs-target="#webinar-item">
        <svg id="webinar-admin-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="32.2" viewBox="0 0 40 32.2">
          <g id="classroom" transform="translate(-4 -7.9)">
            <rect id="Rectangle_1113" data-name="Rectangle 1113" width="39" height="31.2" rx="2" transform="translate(4.5 8.4)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
            <rect id="Rectangle_1114" data-name="Rectangle 1114" width="31" height="23.2" rx="1" transform="translate(8.5 12.4)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
            <path id="Path_220" data-name="Path 220" d="M29.68,33.41H36.3V35.6H29.68ZM25.84,19a2.6,2.6,0,0,0-3.68,0h0a2.61,2.61,0,1,0,4.46,1.86,2.54,2.54,0,0,0-.8-1.86ZM22,25.53h4a3,3,0,0,1,3,3v1.21H19V28.53a3,3,0,0,1,3-3Zm-4.58-4.06a2,2,0,0,0-2.84,0h0a2.015,2.015,0,1,0,2.82.01Z" fill="rgba(255,255,255,0)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
            <path id="Path_221" data-name="Path 221" d="M19.34,27.14a2,2,0,0,0-1.47-.65H14.13a2,2,0,0,0-2,2v1.25H19m14.42-8.27a2,2,0,0,0-2.84,0h0a2.015,2.015,0,1,0,2.82.01ZM29,29.74h6.86V28.49a2,2,0,0,0-2-2H30.13a2,2,0,0,0-1.47.65" fill="rgba(255,255,255,0)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
          </g>
        </svg>

        <p class="d-inline text-center pt-3">وبینار</p>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.1" height="28.4" viewBox="0 0 18.1 28.4">
          <defs>
            <clipPath id="clip-path">
              <rect width="18.1" height="28.4" fill="none"/>
            </clipPath>
          </defs>
          <g id="Backward_arrow_small" data-name="Backward arrow small" clip-path="url(#clip-path)">
            <path id="Path_36" data-name="Path 36" d="M14.2,18.1,0,4.154,4.23,0,14.2,9.792,24.17,0,28.4,4.154Z" transform="translate(18.1) rotate(90)" fill="#fff"/>
          </g>
        </svg>


      </button>
      <!-- webinar items -->
      <div id="webinar-item" class="collap-data collapse text-center col-10">
        <ul>
          <!-- webinar upload -->
          <a href="{{route('admin.webinars.create')}}"><li id="webinar1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="15.999" viewBox="0 0 16 15.999">
            <defs>
              <clipPath id="clip-path">
                <rect width="16" height="15.999" fill="none"/>
              </clipPath>
            </defs>
            <g id="Add" clip-path="url(#clip-path)">
              <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="#fff"/>
            </g>
          </svg>
          افزودن وبینار</li></a>
          <!-- webinar list -->
          <a href=" {{ route('admin.webinars.landscape') }}"><li id="webinar2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
            <path id="list-sharp" d="M4,17a1,1,0,1,1,0-2,1,1,0,1,1,0,2Zm0-4a1,1,0,1,1,0-2,1,1,0,1,1,0,2ZM4,9A1,1,0,1,1,4,7,1,1,0,1,1,4,9Zm3,8V15H21v2Zm0-4V11H21v2ZM7,9V7H21V9Z" transform="translate(-3 -7)" fill="#fff"/>
          </svg>
          لیست وبینار‌ها</li></a>
          <!-- webinar category -->
          <a href="#"><li id="webinar3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28.015" viewBox="0 0 28 28.015">
            <path id="category" d="M27,22.141V18a2,2,0,0,0-2-2H17V12h2a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2H13a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h2v4H7a2,2,0,0,0-2,2v4.142a4,4,0,1,0,2,0V18h8v4.142a4,4,0,1,0,2,0V18h8v4.141a4,4,0,1,0,2,0ZM13,4h6v6H13ZM8,26a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm10,0a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm8,2a2,2,0,1,1,2-2A2,2,0,0,1,26,28Z" transform="translate(-2 -2)" fill="#fff"/>
          </svg>
          دسته‌بندی‌ها</li></a>
        </ul>
      </div>
      <!-- blog menu -->
      <button type="button" id="blog-btn" class="btn col-10 d-block mt-3 d-flex justify-content-around align-items-center" data-bs-toggle="collapse" data-bs-target="#blog-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="26.448" height="34.93" viewBox="0 0 26.448 34.93">
          <path id="articles" d="M277.206,12.724v2.121H260.241V12.724Zm-4.241-8.483V6.362H260.241V4.241Zm-4.241,25.448v-10.6h8.483v10.6Zm2.121-8.483v6.362h4.241V21.206Zm6.362-12.724V10.6H260.241V8.483ZM256,0h25.448V33.93H256Zm23.327,31.81V2.121H258.121V31.81ZM266.6,27.568v2.121h-6.362V27.568Zm0-8.483v2.121h-6.362V19.086Zm0,4.241v2.121h-6.362V23.327Z" transform="translate(-255.5 0.5)" fill="#fff" stroke="#04355c" stroke-width="1"/>
        </svg>


        <p class="d-inline text-center pt-3">مقالات</p>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.1" height="28.4" viewBox="0 0 18.1 28.4">
          <defs>
            <clipPath id="clip-path">
              <rect width="18.1" height="28.4" fill="none"/>
            </clipPath>
          </defs>
          <g id="Backward_arrow_small" data-name="Backward arrow small" clip-path="url(#clip-path)">
            <path id="Path_36" data-name="Path 36" d="M14.2,18.1,0,4.154,4.23,0,14.2,9.792,24.17,0,28.4,4.154Z" transform="translate(18.1) rotate(90)" fill="#fff"/>
          </g>
        </svg>


      </button>
      <!-- blog items -->
      <div id="blog-item" class="collap-data collapse text-center col-10">
        <ul id="side-item">
          <!-- blog upload -->
          <a href="{{ route('admin.post.create') }}"><li id="webinar1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="15.999" viewBox="0 0 16 15.999">
            <defs>
              <clipPath id="clip-path">
                <rect width="16" height="15.999" fill="none"/>
              </clipPath>
            </defs>
            <g id="Add" clip-path="url(#clip-path)">
              <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="#fff"/>
            </g>
          </svg>
          افزودن مقاله</li></a>
          <!-- blog list -->
          <a href="{{ route('admin.post.index') }}"><li id="webinar2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
            <path id="list-sharp" d="M4,17a1,1,0,1,1,0-2,1,1,0,1,1,0,2Zm0-4a1,1,0,1,1,0-2,1,1,0,1,1,0,2ZM4,9A1,1,0,1,1,4,7,1,1,0,1,1,4,9Zm3,8V15H21v2Zm0-4V11H21v2ZM7,9V7H21V9Z" transform="translate(-3 -7)" fill="#fff"/>
          </svg>
          لیست مقالات</li></a>
          <!-- blog category -->
          <a href="#"><li id="webinar3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28.015" viewBox="0 0 28 28.015">
            <path id="category" d="M27,22.141V18a2,2,0,0,0-2-2H17V12h2a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2H13a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h2v4H7a2,2,0,0,0-2,2v4.142a4,4,0,1,0,2,0V18h8v4.142a4,4,0,1,0,2,0V18h8v4.141a4,4,0,1,0,2,0ZM13,4h6v6H13ZM8,26a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm10,0a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm8,2a2,2,0,1,1,2-2A2,2,0,0,1,26,28Z" transform="translate(-2 -2)" fill="#fff"/>
          </svg>
          دسته‌بندی‌ها</li></a>
        </ul>
      </div>
      <!-- ask menu -->
      <button type="button" id="ask-btn" class="btn col-10 d-block mt-3 d-flex justify-content-around align-items-center" data-bs-toggle="collapse" data-bs-target="#ask-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="32.298" height="32.298" viewBox="0 0 32.298 32.298">
          <path id="person-question-mark-24-filled" d="M17.034,20a9.751,9.751,0,0,0,.854,11.644A19.73,19.73,0,0,1,14,32c-5.131,0-8.917-1.61-11.23-4.856A4.126,4.126,0,0,1,2,24.754v-1.38A3.374,3.374,0,0,1,5.378,20Zm8.217-3A8.251,8.251,0,1,1,17,25.251,8.251,8.251,0,0,1,25.251,17Zm0,11.628a.938.938,0,1,0,.938.938A.938.938,0,0,0,25.251,28.628Zm0-8.817a2.776,2.776,0,0,0-2.78,2.933.75.75,0,1,0,1.5-.015,1.28,1.28,0,0,1,1.28-1.418,1.327,1.327,0,0,1,1.281,1.425,1.269,1.269,0,0,1-.336.842l-.141.174-.15.17-.4.435-.206.237a2.75,2.75,0,0,0-.8,1.965.75.75,0,0,0,1.5,0,1.318,1.318,0,0,1,.36-.885l.126-.158.152-.173.4-.435.2-.234a2.716,2.716,0,0,0,.792-1.938,2.823,2.823,0,0,0-2.781-2.925ZM14,2A7.5,7.5,0,1,1,6.5,9.5,7.5,7.5,0,0,1,14,2Z" transform="translate(-1.604 -1.604)" fill="#fff" stroke="#04355c" stroke-width="0.8"/>
        </svg>


        <p class="d-inline text-center pt-3">پرسش‌ها</p>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.1" height="28.4" viewBox="0 0 18.1 28.4">
          <defs>
            <clipPath id="clip-path">
              <rect width="18.1" height="28.4" fill="none"/>
            </clipPath>
          </defs>
          <g id="Backward_arrow_small" data-name="Backward arrow small" clip-path="url(#clip-path)">
            <path id="Path_36" data-name="Path 36" d="M14.2,18.1,0,4.154,4.23,0,14.2,9.792,24.17,0,28.4,4.154Z" transform="translate(18.1) rotate(90)" fill="#fff"/>
          </g>
        </svg>


      </button>
      <!-- ask items -->
      <div id="ask-item" class="collap-data collapse text-center col-10">
        <ul id="side-item">
          <!-- ask upload -->
          <a href="{{ route('admin.inquiries.input') }}"><li id="webinar1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="15.999" viewBox="0 0 16 15.999">
            <defs>
              <clipPath id="clip-path">
                <rect width="16" height="15.999" fill="none"/>
              </clipPath>
            </defs>
            <g id="Add" clip-path="url(#clip-path)">
              <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="#fff"/>
            </g>
          </svg>
          لیست پرسش های دریافتی</li></a>
          <!-- ask list -->
          <a href="{{ route('admin.inquiries.landscape') }}"><li id="webinar2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
            <path id="list-sharp" d="M4,17a1,1,0,1,1,0-2,1,1,0,1,1,0,2Zm0-4a1,1,0,1,1,0-2,1,1,0,1,1,0,2ZM4,9A1,1,0,1,1,4,7,1,1,0,1,1,4,9Zm3,8V15H21v2Zm0-4V11H21v2ZM7,9V7H21V9Z" transform="translate(-3 -7)" fill="#fff"/>
          </svg>
          لیست پاسخ پرسش‌ها</li></a>
          <!-- ask category -->
          <a href="#"><li id="webinar3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28.015" viewBox="0 0 28 28.015">
            <path id="category" d="M27,22.141V18a2,2,0,0,0-2-2H17V12h2a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2H13a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h2v4H7a2,2,0,0,0-2,2v4.142a4,4,0,1,0,2,0V18h8v4.142a4,4,0,1,0,2,0V18h8v4.141a4,4,0,1,0,2,0ZM13,4h6v6H13ZM8,26a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm10,0a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm8,2a2,2,0,1,1,2-2A2,2,0,0,1,26,28Z" transform="translate(-2 -2)" fill="#fff"/>
          </svg>
          دسته‌بندی‌ها</li></a>
        </ul>
      </div>
      <!-- podcast menu -->
      <button type="button" id="pod-btn" class="btn col-10 d-block mt-3 d-flex justify-content-around align-items-center" data-bs-toggle="collapse" data-bs-target="#podcast-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="43.924" height="42.647" viewBox="0 0 43.924 42.647">
          <path id="podcast" d="M21.712,17.653a21.709,21.709,0,0,0-7.907,41.928V57.668a19.938,19.938,0,1,1,15.813,0v1.913a21.709,21.709,0,0,0-7.907-41.928ZM21.7,21.96a14.808,14.808,0,0,0-7.286,27.7V48.075a13.455,13.455,0,1,1,14.572,0v1.584A14.806,14.806,0,0,0,21.7,21.96Zm.007,4.8A8.844,8.844,0,0,0,15.55,41.95V39.869a7.494,7.494,0,1,1,12.331,0v2.073a8.844,8.844,0,0,0-6.169-15.185Zm0,4.614a4.231,4.231,0,1,0,4.234,4.234A4.235,4.235,0,0,0,21.712,31.371Zm0,9.557c-5.076,0-5.14,1.869-5.14,1.869a70.229,70.229,0,0,0,.438,8.308,83.173,83.173,0,0,0,2.365,8.7h4.672a83.884,83.884,0,0,0,2.365-8.717,70.091,70.091,0,0,0,.438-8.286s-.064-1.869-5.14-1.869Z" transform="translate(0.25 -17.403)" fill="#fff" stroke="#04355c" stroke-width="0.5"/>
        </svg>


        <p class="d-inline text-center pt-3">پادکست</p>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.1" height="28.4" viewBox="0 0 18.1 28.4">
          <defs>
            <clipPath id="clip-path">
              <rect width="18.1" height="28.4" fill="none"/>
            </clipPath>
          </defs>
          <g id="Backward_arrow_small" data-name="Backward arrow small" clip-path="url(#clip-path)">
            <path id="Path_36" data-name="Path 36" d="M14.2,18.1,0,4.154,4.23,0,14.2,9.792,24.17,0,28.4,4.154Z" transform="translate(18.1) rotate(90)" fill="#fff"/>
          </g>
        </svg>


      </button>
      <!-- poidcast items -->
      <div id="podcast-item" class="collap-data collapse text-center col-10">
        <ul id="side-item">
          <!-- podcast upload -->
          <a href="{{ route('admin.podcasts.create') }}"><li id="webinar1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="15.999" viewBox="0 0 16 15.999">
            <defs>
              <clipPath id="clip-path">
                <rect width="16" height="15.999" fill="none"/>
              </clipPath>
            </defs>
            <g id="Add" clip-path="url(#clip-path)">
              <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="#fff"/>
            </g>
          </svg>
          افزودن پادکست</li></a>
          <!-- podcast list -->
          <a href="{{ route('admin.podcasts.landscape') }}"><li id="webinar2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
            <path id="list-sharp" d="M4,17a1,1,0,1,1,0-2,1,1,0,1,1,0,2Zm0-4a1,1,0,1,1,0-2,1,1,0,1,1,0,2ZM4,9A1,1,0,1,1,4,7,1,1,0,1,1,4,9Zm3,8V15H21v2Zm0-4V11H21v2ZM7,9V7H21V9Z" transform="translate(-3 -7)" fill="#fff"/>
          </svg>
          لیست پادکست‌ها</li></a>
          <!-- podcast category -->
          <a href="#"><li id="webinar3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28.015" viewBox="0 0 28 28.015">
            <path id="category" d="M27,22.141V18a2,2,0,0,0-2-2H17V12h2a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2H13a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h2v4H7a2,2,0,0,0-2,2v4.142a4,4,0,1,0,2,0V18h8v4.142a4,4,0,1,0,2,0V18h8v4.141a4,4,0,1,0,2,0ZM13,4h6v6H13ZM8,26a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm10,0a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm8,2a2,2,0,1,1,2-2A2,2,0,0,1,26,28Z" transform="translate(-2 -2)" fill="#fff"/>
          </svg>
          دسته‌بندی‌ها</li></a>
        </ul>
      </div>
      <!-- users menu -->
      <button type="button" id="user-btn" class="btn col-10 d-block mt-3 d-flex justify-content-around align-items-center" data-bs-toggle="collapse" data-bs-target="#users-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="30.848" height="33.166" viewBox="0 0 30.848 33.166">
          <g id="Subtraction_3" data-name="Subtraction 3" transform="translate(4003.179 5542)" fill="#fff">
            <path d="M -4002.534423828125 -5509.4072265625 C -4002.630615234375 -5510.09716796875 -4002.67919921875 -5510.798828125 -4002.67919921875 -5511.4990234375 C -4002.67919921875 -5514.41845703125 -4001.84033203125 -5517.24755859375 -4000.253662109375 -5519.68115234375 C -3998.707275390625 -5522.052734375 -3996.53515625 -5523.93408203125 -3993.971923828125 -5525.12060546875 L -3993.299560546875 -5525.431640625 L -3993.839599609375 -5525.9384765625 C -3995.670654296875 -5527.658203125 -3996.67919921875 -5529.98828125 -3996.67919921875 -5532.49951171875 C -3996.67919921875 -5537.462890625 -3992.64208984375 -5541.50048828125 -3987.6796875 -5541.50048828125 C -3982.716552734375 -5541.50048828125 -3978.6787109375 -5537.462890625 -3978.6787109375 -5532.49951171875 C -3978.6787109375 -5529.98828125 -3979.687255859375 -5527.658203125 -3981.518310546875 -5525.9375 L -3982.05810546875 -5525.4306640625 L -3981.385986328125 -5525.11962890625 C -3979.142333984375 -5524.0810546875 -3977.168701171875 -5522.48388671875 -3975.6787109375 -5520.50048828125 C -3974.262939453125 -5518.6162109375 -3973.308837890625 -5516.41259765625 -3972.9033203125 -5514.1005859375 L -4002.534423828125 -5509.4072265625 Z" stroke="none"/>
            <path d="M -4002.100830078125 -5509.98193359375 L -3973.49267578125 -5514.513671875 C -3973.927978515625 -5516.56591796875 -3974.812255859375 -5518.5146484375 -3976.07861328125 -5520.2001953125 C -3977.51904296875 -5522.11767578125 -3979.427001953125 -5523.66162109375 -3981.595947265625 -5524.66552734375 L -3982.940185546875 -5525.2880859375 L -3981.86083984375 -5526.30224609375 C -3980.131103515625 -5527.9267578125 -3979.1787109375 -5530.1279296875 -3979.1787109375 -5532.49951171875 C -3979.1787109375 -5537.18701171875 -3982.9921875 -5541.00048828125 -3987.6796875 -5541.00048828125 C -3992.366455078125 -5541.00048828125 -3996.17919921875 -5537.18701171875 -3996.17919921875 -5532.49951171875 C -3996.17919921875 -5530.12744140625 -3995.226806640625 -5527.92724609375 -3993.497314453125 -5526.30322265625 L -3992.41748046875 -5525.2890625 L -3993.76171875 -5524.6669921875 C -3996.23974609375 -5523.51953125 -3998.339599609375 -5521.701171875 -3999.834716796875 -5519.40771484375 C -4001.368408203125 -5517.0556640625 -4002.17919921875 -5514.32080078125 -4002.17919921875 -5511.4990234375 C -4002.17919921875 -5510.9921875 -4002.15283203125 -5510.48486328125 -4002.100830078125 -5509.98193359375 M -4002.9501953125 -5508.8349609375 L -4002.951416015625 -5508.8359375 C -4003.1025390625 -5509.70947265625 -4003.17919921875 -5510.60546875 -4003.17919921875 -5511.4990234375 C -4003.17919921875 -5514.51513671875 -4002.3125 -5517.43896484375 -4000.67236328125 -5519.9541015625 C -3999.07470703125 -5522.40478515625 -3996.830322265625 -5524.34814453125 -3994.181884765625 -5525.57421875 C -3996.11474609375 -5527.38916015625 -3997.17919921875 -5529.84912109375 -3997.17919921875 -5532.49951171875 C -3997.17919921875 -5537.73828125 -3992.917724609375 -5542.00048828125 -3987.6796875 -5542.00048828125 C -3982.44091796875 -5542.00048828125 -3978.1787109375 -5537.73828125 -3978.1787109375 -5532.49951171875 C -3978.1787109375 -5529.84912109375 -3979.2431640625 -5527.38916015625 -3981.176025390625 -5525.5732421875 C -3978.857177734375 -5524.5 -3976.81787109375 -5522.84912109375 -3975.279052734375 -5520.80078125 C -3973.7138671875 -5518.7177734375 -3972.694580078125 -5516.25732421875 -3972.33154296875 -5513.68505859375 L -4002.9501953125 -5508.8349609375 Z" stroke="none" fill="#04355c"/>
          </g>
        </svg>


        <p class="d-inline text-center pt-3">کاربران</p>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.1" height="28.4" viewBox="0 0 18.1 28.4">
          <defs>
            <clipPath id="clip-path">
              <rect width="18.1" height="28.4" fill="none"/>
            </clipPath>
          </defs>
          <g id="Backward_arrow_small" data-name="Backward arrow small" clip-path="url(#clip-path)">
            <path id="Path_36" data-name="Path 36" d="M14.2,18.1,0,4.154,4.23,0,14.2,9.792,24.17,0,28.4,4.154Z" transform="translate(18.1) rotate(90)" fill="#fff"/>
          </g>
        </svg>


      </button>
      <!-- user items -->
      <div id="users-item" class="collap-data collapse text-center col-10">
        <ul id="side-item">
          <!-- add user -->
          <a href=" {{ route('admin.users.create') }}"><li id="webinar1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="15.999" viewBox="0 0 16 15.999">
            <defs>
              <clipPath id="clip-path">
                <rect width="16" height="15.999" fill="none"/>
              </clipPath>
            </defs>
            <g id="Add" clip-path="url(#clip-path)">
              <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="#fff"/>
            </g>
          </svg>
          افزودن کاربر</li></a>
          <!-- users list -->
          <a href="{{ route('admin.users.landscape') }}"><li id="webinar2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
            <path id="list-sharp" d="M4,17a1,1,0,1,1,0-2,1,1,0,1,1,0,2Zm0-4a1,1,0,1,1,0-2,1,1,0,1,1,0,2ZM4,9A1,1,0,1,1,4,7,1,1,0,1,1,4,9Zm3,8V15H21v2Zm0-4V11H21v2ZM7,9V7H21V9Z" transform="translate(-3 -7)" fill="#fff"/>
          </svg>
          لیست کاربران</li></a>
          <!-- users category -->
          <a href="#"><li id="webinar3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28.015" viewBox="0 0 28 28.015">
            <path id="category" d="M27,22.141V18a2,2,0,0,0-2-2H17V12h2a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2H13a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h2v4H7a2,2,0,0,0-2,2v4.142a4,4,0,1,0,2,0V18h8v4.142a4,4,0,1,0,2,0V18h8v4.141a4,4,0,1,0,2,0ZM13,4h6v6H13ZM8,26a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm10,0a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm8,2a2,2,0,1,1,2-2A2,2,0,0,1,26,28Z" transform="translate(-2 -2)" fill="#fff"/>
          </svg>
          دسته‌بندی‌ها</li></a>
        </ul>
      </div>
    </div>

   </nav>

