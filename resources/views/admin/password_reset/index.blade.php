<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password | Reset</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    {{-- < !-- Favicon icon --> --}}
    <link rel="icon" href="assets/s/favicon.ico" type="image/x-icon">
    {{-- < !-- Google font--> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    {{-- < !-- Required Fremwork --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/bootstrap/css/bootstrap.min.css') }}">
    {{-- < !-- themify-icons line icon --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/themify-icons/themify-icons.css') }}">
    {{-- < !-- ico font --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/icofont/css/icofont.css ') }}">
    {{-- < !-- Style.css --> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/jquery.mCustomScrollbar.css') }}">
</head>

<body>
    <div class="container-fluid m-0 p-0">
        {{-- Login Page Code Start here --}}
        <section class="gradient-custom background--smoke ">
            <div class="container py-5 h-100 ">
                <div class="row d-flex justify-content-center  h-100">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-5 box--shadow">
                        <h1 class="text-center loginText">암호를 재설정</h1>
                        @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                        @if(session()->has('alert'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session()->get('alert') }}
                        </div>
                        @endif
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <form method="POST" action="{{ route('password.reset.email') }}">
                                @csrf
                                <div class="form-outline form-white mb-3">
                                    <input type="email" id="emial" name="email"
                                        class="form-control form-control-lg loginform  rounded-border"
                                        placeholder="Email" />
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                            
                                        @enderror
                                </div>
                                <div class="form-outline form-white mb-4 ">
                                    <button type="submit" class="form-control form-control-lg bg-dark loginform border-0"> <span 
                                        class="text-white loginbtn">제출하다</span> </button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Login Page Code End here --}}
    </div>
    <script type="text/javascript" src="{{ asset('admin_assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- < !-- jquery slimscroll js --> --}}
    <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    {{-- < !-- modernizr js --> --}}
    <script type="text/javascript" src="{{ asset('admin_assets/js/modernizr/modernizr.js') }}"></script>
    {{-- < !-- am chart --> --}}
    <script src="{{ asset('admin_assets/pages/widget/amchart/amcharts.min.js') }}"></script>
    <script src="{{ asset('admin_assets/pages/widget/amchart/serial.min.js') }}"></script>
    {{-- < !-- Todo js --> --}}
    <script type="text/javascript " src="{{ asset('admin_assets/pages/todo/todo.js') }} "></script>
    {{-- < !-- Custom js --> --}}
    <script type="text/javascript" src="{{ asset('admin_assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/script.js') }}"></script>
    <script type="text/javascript " src="{{ asset('admin_assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/demo-12.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
</body>

</html>