{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ArchitectUI HTML Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/base.min.css">

</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider .autoplay">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1" >
                                        <div class="slide-img-bg" style="background-image: url('{{ asset('dashboard') }}/assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content"><h3>Perfect Balance</h3>
                                            <p>ArchitectUI is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('{{ asset('dashboard') }}/assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('{{ asset('dashboard') }}/assets/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content"><h3>Complex, but lightweight</h3>
                                            <p>We've included a lot of components that cover almost all use cases for any type of application.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Welcome back,</span>
                                <span>Please sign in to your account.</span></h4>
                            <h6 class="mt-3">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6>
                            <div class="divider row"></div>
                            <div>
                                <form  method="POST" action="{{ route('login') }}" class="">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">{{ __('Email Address') }}</label>
                                                <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control  @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="password" class="">Password</label>

                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                                            <button class="btn btn-primary btn-lg">Login to Dashboard</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!--SCRIPTS INCLUDES-->

<!--CORE-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/app.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/demo.js"></script>

<!--CHARTS-->

<!--Apex Charts-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/charts/apex-charts.js"></script>

<script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/apex-charts.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/apex-series.js"></script>

<!--Sparklines-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/charts/charts-sparklines.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/charts-sparklines.js"></script>

<!--Chart.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/chartsjs-utils.js"></script>

<!--FORMS-->

<!--Clipboard-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/clipboard.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/clipboard.js"></script>

<!--Datepickers-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/datepicker.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/daterangepicker.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/moment.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/datepicker.js"></script>

<!--Multiselect-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/bootstrap-multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/input-select.js"></script>

<!--Form Validation-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/form-validation.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/form-validation.js"></script>

<!--Form Wizard-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/form-wizard.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/form-wizard.js"></script>

<!--Input Mask-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/input-mask.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/input-mask.js"></script>

<!--RangeSlider-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/wnumb.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/range-slider.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/range-slider.js"></script>

<!--Textarea Autosize-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/textarea-autosize.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/textarea-autosize.js"></script>

<!--Toggle Switch -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/toggle-switch.js"></script>


<!--COMPONENTS-->

<!--BlockUI -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/blockui.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/blockui.js"></script>

<!--Calendar -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/calendar.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/calendar.js"></script>

<!--Slick Carousel -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/carousel-slider.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/carousel-slider.js"></script>

<!--Circle Progress -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/circle-progress.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/circle-progress.js"></script>

<!--CountUp -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/count-up.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/count-up.js"></script>

<!--Cropper -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/cropper.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/vendors/jquery-cropper.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/image-crop.js"></script>

<!--Maps -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/gmaps.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/vendors/jvectormap.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/maps-word-map.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/maps.js"></script>

<!--Guided Tours -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/guided-tours.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/guided-tours.js"></script>

<!--Ladda Loading Buttons -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/ladda-loading.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/vendors/spin.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/ladda-loading.js"></script>

<!--Rating -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/rating.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/rating.js"></script>

<!--Perfect Scrollbar -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/scrollbar.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/scrollbar.js"></script>

<!--Toastr-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/toastr.js"></script>

<!--SweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/sweet-alerts.js"></script>

<!--Tree View -->
<script src="{{ asset('dashboard') }}/assets/js/vendors/treeview.js"></script>
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/treeview.js"></script>


<!--TABLES -->
<!--DataTables-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>

<!--Bootstrap Tables-->
<script src="{{ asset('dashboard') }}/assets/js/vendors/tables.js"></script>

<!--Tables Init-->
<script src="{{ asset('dashboard') }}/assets/js/scripts-init/tables.js"></script>
<!--
<script>
    console.log('hello');
    let nextbtn = document.querySelector(".slick-next")
    console.log(nextbtn)
  $('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
</script> -->

<!-- <script type="text/javascript">
    $(document).ready(function(){
      $('.autoplay').slick({
        slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
      });
    });
  </script> -->

</body>
</html>

