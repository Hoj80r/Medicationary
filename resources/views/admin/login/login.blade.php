<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcationary-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>
<body>
  <section id="login-form" class="position-absolute start-50 translate-middle" >
    <div class="container py-5 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
          <div class="card " style="border-radius: 1rem;">
            <div class="card-body pe-5 ps-5 text-center ">

              <div class="">

                <h2 class="fw-bold text-uppercase">
                  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 48 48"><path fill="none" stroke="#04355c" stroke-linecap="round" stroke-linejoin="round" d="M20.026 6.049c-5.698.917-10.01 5.602-10.01 11.277c0 6.338 5.378 11.44 12.058 11.44l3.854-.001c6.68 0 12.056-5.103 12.056-11.44c0-3.877-2.013-7.292-5.092-9.388m-1.74-.99a12.723 12.723 0 0 0-3.656-1.073c.365-2.787-9.44-4.145-6.652 1.893c1.403 3.037 10.555 4.852 13.244-2.327c-4.059 3.538-8.648 3.114-9.81.832"/><path fill="none" stroke="#04355c" stroke-linecap="round" stroke-linejoin="round" d="M28.294 20.972c-.668 4.48-6.724 3.385-7.376.417c3.144.503 4.924.434 7.376-.417Zm4.125-2.36c0 .903-.571 1.635-1.276 1.635h0c-.704 0-1.275-.732-1.275-1.635h0c0-.903.57-1.635 1.275-1.635s1.276.732 1.276 1.635c0 0 0 0 0 0Zm-12.651.107c0 .903-.57 1.635-1.275 1.635h0c-.705 0-1.276-.732-1.276-1.635h0c0-.903.571-1.635 1.276-1.635c.704 0 1.275.732 1.275 1.635c0 0 0 0 0 0Zm9.235 9.735c2.738 1.83 2.56 5.458 2.683 8.752c-2.933 2.649-7.377 2.648-11.593 1.008l1.02-2.72"/><path fill="none" stroke="#04355c" stroke-linecap="round" stroke-linejoin="round" d="M22.244 31.624c2.965-1.245 6.181.45 4.214 2.52c-1.565 1.648-5.204 1.668-7.012.66c-2.03-1.13.733-5.376 2.798-3.18Z"/><path fill="none" stroke="#04355c" stroke-linecap="round" stroke-linejoin="round" d="M19.77 28.622c-1.096 1.344-1.09 3.88-1.004 4.732m12.194-2.87c1.775-.803 3.602-1.22 5.325-2.418c.434-.302 1.342-1.418.745-2.643c-.426-.876-1.065-.75-1.703-.693"/><path fill="none" stroke="#04355c" stroke-linecap="round" stroke-linejoin="round" d="M32.691 26.865c.262.419.798 1.392.35 2.415m-12.443 9.197c.245.182-.99 4.275-.87 5.05c1.564 1.07 3.424 1.1 5.362.856c.374-1.328.801-2.805 1.873-3.872"/><path fill="none" stroke="#04355c" stroke-linecap="round" stroke-linejoin="round" d="m26.395 41.465l.085 2.123c.68.936 3.392.617 4.775-.55c-.168-1.591-.272-3.268-.218-5.09"/></svg>
                </h2>
                  @include('errors.message')


            <form action="{{ route('admin.login.check') }}" method="post">
            @csrf
                <div class="input-group mb-4 mt-5" dir="ltr">
                  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                    <defs>
                      <clipPath id="clip-path">
                        <rect width="16" height="16" fill="none"/>
                      </clipPath>
                    </defs>
                    <g id="Component_1" data-name="Component 1" clip-path="url(#clip-path)">
                      <path id="Union_1" data-name="Union 1" d="M0,370v-2c0-2.2,3.6-4,8-4s8,1.8,8,4v2Zm4-12a4,4,0,1,1,4,4A4,4,0,0,1,4,358Z" transform="translate(0 -354)" fill="#04355c"/>
                    </g>
                  </svg>
                  </span>

                  <input type="email" name="email_X" id="typeEmailX" class="form-control form-control-lg text-center rounded-start-0" placeholder="ایمیل" />
                </div>

                <div class="input-group mb-4">
                  <input type="password" name="password_X" id="typePasswordX" class="form-control form-control-lg text-center" placeholder="رمزعبور" />
                  <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="29.493" height="16.087" viewBox="0 0 29.493 16.087">
                    <path id="password" d="M2.341,23.087V20.406H29.152v2.681Zm1.542-8.11L2.139,13.971,3.279,11.96H1V9.949H3.279L2.139,8.005,3.882,7,5.022,8.944,6.161,7,7.9,8.005,6.764,9.949H9.043V11.96H6.764L7.9,13.971,6.161,14.976,5.022,12.966,3.882,14.976Zm10.725,0-1.743-1.005L14,11.96H11.725V9.949H14L12.864,8.005,14.607,7l1.139,1.944L16.886,7l1.743,1.005L17.489,9.949h2.279V11.96H17.489l1.139,2.011-1.743,1.005-1.139-2.011Zm10.725,0-1.743-1.005,1.139-2.011H22.449V9.949h2.279L23.589,8.005,25.331,7l1.139,1.944L27.61,7l1.743,1.005L28.214,9.949h2.279V11.96H28.214l1.139,2.011L27.61,14.976l-1.139-2.011Z" transform="translate(-1 -7)" fill="#04355c"/>
                  </svg>
                  </span>

                </div>

                <button class="btn btn-lg px-5" id="log-btn" type="submit">ورود</button>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container-fluid text-center">
    <img src="/images/Group 26.png" alt="" class="rounded" id="login-img">
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

  </script>
</body>
</html>
