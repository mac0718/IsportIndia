<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{env('APP_NAME')}} - Sign in</title>

  @include('admin.layout.css')
</head>

<body>
  <script>
    if (JSON.parse(localStorage.getItem('darkMode'))) {
        document.body.classList.add("dark");
        document.addEventListener("DOMContentLoaded", function() {
          document.querySelector('#switch-theme-input').checked = true;
        });
      }
  </script>
  <div>
    <div class="sign-up d-flex">
      <div class="sign-up-col sign-up-page min-vh-100 w-100">
        <div class="sign-up-body d-flex justify-content-center align-items-center h-100 py-8">
          <div class="sign-up-wrapper">
            <a class="logo d-block mb-6" href="index.html">
              <img class="logo-dark" src="{{ asset('admin/img/logo-dark.png') }}">
              <img class="logo-light" src="{{ asset('admin/img/logo-light.png') }}">
            </a>
            <div class="h2 mb-6">Sign in</div>
            <div class="sign-up-entry">
              {{-- <div class="text-semibold-2 mb-5">Sign up with Open account</div> --}}
              {{-- <div class="row gx-2 d-flex flex-nowrap mb-6">
                <button class="btn-stroke col mx-1">
                  <svg class="icon icon-google me-2">
                    <use xlink:href="#icon-google"></use>
                  </svg>Google
                </button>
                <button class="btn-stroke col mx-1">
                  <svg class="icon icon-apple me-2">
                    <use xlink:href="#icon-apple"></use>
                  </svg>Apple ID
                </button>
              </div> --}}
              <div class="border-bottom border-2 mb-6"></div>
              <div class="text-semibold-2 mb-5">Or continue with email address</div>
              <form action="{{ route('login.submit') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <button class="input-group-text transparent">
                    <svg class="icon icon-mail">
                      <use xlink:href="#icon-mail"></use>
                    </svg>
                  </button>
                  <input class="form-control rounded-2" type="text" placeholder="Your mail" name="email" value="admin@gmail.com">
                </div>
                @error('email')
                  <p class="text-red">{{ $message }}</p>
                @enderror
                <div class="input-group mb-3">
                  <button class="input-group-text transparent">
                    <svg class="icon icon-lock">
                      <use xlink:href="#icon-lock"></use>
                    </svg>
                  </button>
                  <input class="form-control rounded-2" type="password" placeholder="Password" name="password" value="123456">
                </div>
                @error('password')
                  <p class="text-red">{{ $message }}</p>
                @enderror
                <button class="btn w-100" type="submit">Sign in</button>
              </form>
              {{-- <div class="text-semibold-2 text-shades-1 mt-6">This site is protected by reCAPTCHA and the Google
                Privacy Policy.</div> --}}
              {{-- <div class="mt-6"> <span class="caption text-shades-1 pe-2">Don’t have an account?</span><a
                  class="caption text-reset fw-bold" href="sign-up.html">Sign up</a></div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('admin/js/lib/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/slick.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/moment.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/jquery.daterangepicker.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/jquery.richtext.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/jquery.tagify.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/wNumb.js') }}"></script>
  <script src="{{ asset('admin/js/lib/nouislider.min.js') }}"></script>
  <script src="{{ asset('admin/js/lib/quill.core.js') }}"></script>
  <script src="{{ asset('admin/js/charts.js') }}"></script>
  <script src="{{ asset('admin/js/app.js') }}"></script>
  <div style="display: none"><svg width="0" height="0">
      <symbol id="icon-mail" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M5 6H19C19.3862 6 19.7213 6.21897 19.8879 6.53954L12.5547 11.4283C12.2188 11.6523 11.7812 11.6523 11.4453 11.4283L4.11209 6.53953C4.27868 6.21896 4.61377 6 5 6ZM4 8.8685V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V8.86852L13.6641 13.0924C12.6564 13.7642 11.3436 13.7642 10.3359 13.0924L4 8.8685ZM2 7C2 5.34315 3.34315 4 5 4H19C20.6569 4 22 5.34315 22 7V17C22 18.6569 20.6569 20 19 20H5C3.34315 20 2 18.6569 2 17V7Z" />
      </symbol>
      <symbol id="icon-lock" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M13 15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V15.7324Z" />
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M7 8V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V8C18.6569 8 20 9.34315 20 11V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V11C4 9.34315 5.34315 8 7 8ZM9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7V8H9V7ZM6 11C6 10.4477 6.44772 10 7 10H17C17.5523 10 18 10.4477 18 11V19C18 19.5523 17.5523 20 17 20H7C6.44772 20 6 19.5523 6 19V11Z" />
      </symbol>
    </svg>
  </div>
</body>

</html>