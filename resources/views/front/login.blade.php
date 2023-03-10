@extends('layouts.layout')
@section('container')
{{-- kakoa login checking
<script src="https://t1.kakaocdn.net/kakao_js_sdk/2.1.0/kakao.min.js"
  integrity="sha384-dpu02ieKC6NUeKFoGMOKz6102CLEWi9+5RQjWSV0ikYSFFd8M3Wp2reIcquJOemx" crossorigin="anonymous"></script>
<script>
  Kakao.init('34b1ab32e1fdafdff8b88bfe1e069c35'); // Enter your app's JavaScript key
</script> --}}
<div class="container-fluid m-0 p-0">
    {{-- Login Page Code Start here --}}
    <section class="gradient-custom background--smoke ">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center  h-100">
                <div class="col-12 col-md-6 col-lg-6 col-xl-5 box--shadow">

                    @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <h1 class="text-center loginText">로그인</h1>
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <form method="POST" action="{{ route('front.user_login') }}">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="email" id="emial" name="email"
                                    class="form-control form-control-lg loginform  rounded-border"
                                    placeholder="여기로 이메일 보내기" />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password" name="password"
                                    class="form-control  form-control-lg loginform  rounded-border"
                                    placeholder="이메일 비밀번호" />
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-outline form-white mb-4">
                                <button type="submit" class="form-control form-control-lg bg-dark loginform border-0">
                                    <span class="text-white loginbtn">로그인</span> </button>
                            </div>
                        </form>
                        <div class="form-outline form-white mb-4 ">
                            <button type="submit"
                                class="form-control form-control-lg  loginform rounded-border bg-naver border-0">
                                <div class="naver">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="paeqmul3mu" x="0px"
                                        y="0px" width="100%" height="100%" viewBox="0 0 85.5 85.375"
                                        enable-background="new 0 0 85.5 85.375" xml:space="preserve" isInit="true"
                                        preserveAspectRatio="none" opacity="1">
                                        <g isInit="true">
                                            <g isInit="true">
                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff"
                                                    d="M84.967,21.219c0,14.2,0,28.396,0,42.605    c-0.011,0.067-0.027,0.146-0.027,0.206c-0.095,0.798-0.135,1.599-0.257,2.393c-0.791,4.857-2.953,9.023-6.493,12.422    c-3.646,3.52-8.007,5.53-13.04,6.077c-0.453,0.037-0.926,0.075-1.382,0.122c-14.193,0-28.383,0-42.571,0    c-0.064-0.017-0.122-0.027-0.176-0.041c-0.902-0.102-1.807-0.139-2.692-0.293c-5.047-0.894-9.294-3.237-12.717-7.055    c-3.146-3.523-4.97-7.654-5.49-12.354C0.074,64.868,0.041,64.436,0,64.007c0-14.324,0-28.652,0-42.966    c0.007-0.087,0.027-0.183,0.034-0.26c0.094-0.828,0.145-1.672,0.297-2.487c0.807-4.605,2.861-8.588,6.176-11.869    c3.668-3.635,8.077-5.726,13.208-6.3C20.142,0.078,20.581,0.033,21.017,0c14.3,0,28.618,0,42.922,0    c0.077,0.014,0.162,0.021,0.243,0.033c0.919,0.112,1.835,0.173,2.733,0.328c5.864,1.146,10.544,4.155,14.01,9.007    c2.236,3.121,3.52,6.627,3.906,10.462C84.892,20.284,84.933,20.754,84.967,21.219z M19.169,7.561    C12.318,8.909,7.271,15.034,7.271,22.037c0,13.622-0.007,27.267,0.007,40.902c0,0.908,0.087,1.827,0.247,2.729    c1.23,6.994,7.391,12.159,14.517,12.159c13.636,0,27.294,0,40.925,0c1.129,0,2.224-0.131,3.317-0.377    c6.795-1.619,11.471-7.538,11.471-14.548c0-6.784,0-13.554,0-20.341c0-6.828,0-13.628,0-20.446c0-0.97-0.088-1.943-0.288-2.899    c-1.405-6.98-7.456-11.95-14.566-11.95"
                                                    origin_fill="#231f20" isInit="true"></path>
                                                <g isInit="true">
                                                    <g isInit="true">
                                                        <path fill="#ffffff"
                                                            d="M23.304,23.683h11.588l15.118,22.243V23.683h11.7v40.209h-11.7L34.973,41.817v22.074H23.304V23.683z"
                                                            origin_fill="#231f20" isInit="true"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <defs></defs>
                                    </svg>
                                    <span>네이버 간편가입</span>
                                </div>
                            </button>
                        </div>
                        <div class="form-outline form-white mb-4 ">
                            <button type="submit"
                                class="form-control form-control-lg  kakoa loginform rounded-border bg-kakoa border-0">
                                <div class="kakao_talk">
                                    {{-- <a id="add-channel-button" href="javascript:addChannel()"> --}}

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" id="kahw7qv11x" x="0px" y="0px" width="30"
                                        viewBox="0 0 85.5 85.375" enable-background="new 0 0 85.5 85.375"
                                        xml:space="preserve" isInit="true" preserveAspectRatio="none" opacity="1">
                                        <g isInit="true">
                                            <g isInit="true">
                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#595959"
                                                    d="M85.523,21.313c0,14.277,0,28.553,0,42.849    c-0.011,0.063-0.027,0.142-0.027,0.208c-0.096,0.799-0.137,1.607-0.259,2.404c-0.796,4.892-2.973,9.085-6.536,12.509    c-3.668,3.544-8.059,5.561-13.125,6.115c-0.456,0.033-0.933,0.074-1.392,0.122c-14.286,0-28.567,0-42.849,0    c-0.064-0.021-0.123-0.031-0.178-0.037c-0.908-0.109-1.819-0.143-2.71-0.303c-5.08-0.898-9.354-3.257-12.8-7.097    c-3.166-3.55-5.002-7.706-5.525-12.439C0.075,65.211,0.041,64.772,0,64.335C0,49.93,0,35.526,0,21.131    c0.007-0.085,0.027-0.177,0.034-0.251c0.095-0.83,0.147-1.68,0.3-2.501c0.812-4.635,2.88-8.627,6.215-11.924    c3.693-3.661,8.131-5.754,13.296-6.333c0.429-0.046,0.871-0.09,1.31-0.121C35.549,0,49.96,0,64.358,0    c0.078,0.008,0.162,0.019,0.244,0.031c0.926,0.109,1.848,0.165,2.751,0.328c5.903,1.149,10.614,4.17,14.102,9.051    c2.252,3.13,3.544,6.665,3.932,10.514C85.448,20.379,85.488,20.853,85.523,21.313z M19.294,7.595    c-6.896,1.35-11.977,7.51-11.977,14.548c0,13.698-0.006,27.413,0.007,41.13c0,0.908,0.088,1.833,0.248,2.741    c1.239,7.042,7.44,12.235,14.612,12.235c13.725,0,27.473,0,41.194,0c1.136,0,2.238-0.127,3.339-0.377    c6.839-1.63,11.545-7.594,11.545-14.638c0-6.831,0-13.638,0-20.467c0-6.852,0-13.701,0-20.547c0-0.981-0.089-1.957-0.289-2.916    c-1.415-7.019-7.505-12.004-14.663-12.004"
                                                    origin_fill="#231f20" isInit="true"></path>
                                                <g isInit="true">
                                                    <g isInit="true">
                                                        <path fill="#595959"
                                                            d="M43.167,24.113c-14.071,0-25.478,8.318-25.478,18.581c0,5.315,3.061,10.12,7.976,13.504l-3.387,8.307      c-0.042,0.1-0.011,0.205,0.057,0.279c0.049,0.048,0.109,0.082,0.184,0.082c0.027,0,0.069-0.007,0.089-0.027l11.616-4.73      c2.782,0.766,5.788,1.173,8.943,1.173c14.058,0,25.462-8.324,25.462-18.587S57.225,24.113,43.167,24.113z M31.21,38.508h-1.238      c-0.204,0.007-0.435,0.01-0.656,0.01h-0.391c0.006,0.32,0.014,0.663,0.014,1.003c0,0.445-0.007,0.952-0.014,1.544      c-0.006,0.591-0.014,1.275-0.02,2.047c-0.007,0.779-0.007,1.673-0.007,2.693v1.435c0,0.136,0.007,0.197,0.014,0.228l0.007,0.047      v0.142c0,0.058-0.007,0.133-0.027,0.211c-0.021,0.105-0.038,0.224-0.049,0.361c0,0.064-0.006,0.139-0.023,0.214      c-0.017,0.075-0.042,0.143-0.068,0.218l-0.064,0.088c-0.007,0.007-0.01,0.011-0.01,0.024l-0.017,0.017l-0.055,0.116      c-0.084,0.173-0.224,0.319-0.441,0.459l-0.023,0.021c-0.214,0.095-0.446,0.153-0.691,0.153c-0.121,0-0.254-0.014-0.387-0.044      c-0.259-0.024-0.449-0.109-0.599-0.221l-0.026-0.018c-0.133-0.132-0.231-0.275-0.293-0.418      c-0.081-0.129-0.136-0.295-0.153-0.432c-0.044-0.13-0.061-0.269-0.061-0.419v-9.392h-0.213c-0.239,0-0.497-0.006-0.756-0.006      c-0.275-0.003-0.54-0.017-0.775-0.031c-0.251-0.013-0.421-0.024-0.507-0.041l-0.357-0.061c-0.163-0.02-0.298-0.044-0.411-0.075      c-0.31-0.088-0.554-0.238-0.731-0.438c-0.19-0.214-0.282-0.446-0.282-0.711v-0.231c0-0.099,0.017-0.19,0.048-0.272      c0.058-0.214,0.197-0.384,0.412-0.521c0.043-0.034,0.129-0.088,0.251-0.146c0.115-0.067,0.244-0.115,0.367-0.142      c0.15-0.051,0.354-0.096,0.592-0.116c0.112-0.014,0.224-0.027,0.333-0.027h1.565c0.395,0,0.816-0.007,1.237-0.02      c0.732-0.01,1.457-0.013,2.184-0.007c0.707,0.007,1.438,0.02,2.156,0.043c0.17,0.014,0.347,0.038,0.5,0.065      c0.167,0.027,0.344,0.078,0.507,0.152c0.102,0.031,0.23,0.082,0.339,0.14c0.136,0.085,0.245,0.18,0.327,0.295      c0.16,0.198,0.259,0.416,0.259,0.65c0,0.089-0.007,0.17-0.014,0.255c0,0.091-0.014,0.18-0.027,0.251      c-0.058,0.197-0.16,0.374-0.316,0.531L32.59,38.15c-0.132,0.095-0.299,0.173-0.517,0.214c-0.081,0.017-0.18,0.047-0.274,0.058      c-0.086,0.014-0.17,0.034-0.259,0.051l-0.031,0.007C31.414,38.498,31.319,38.508,31.21,38.508z M43.472,49.032      c-0.048,0.068-0.109,0.146-0.19,0.224c-0.082,0.072-0.173,0.129-0.279,0.184c-0.286,0.143-0.578,0.224-0.884,0.224      c-0.082,0-0.173-0.01-0.262-0.013l-0.037-0.017c-0.208-0.051-0.395-0.153-0.565-0.286l0.13-0.224l0,0l-0.137,0.21      c-0.047-0.027-0.092-0.067-0.129-0.125c-0.007-0.011-0.014-0.031-0.027-0.031l-0.034-0.038      c-0.075-0.071-0.133-0.143-0.184-0.208c-0.04-0.068-0.075-0.13-0.115-0.187l-0.021-0.037c-0.013-0.072-0.051-0.116-0.068-0.167      c-0.037-0.044-0.068-0.109-0.101-0.157c-0.028-0.068-0.055-0.109-0.083-0.149c-0.026-0.058-0.058-0.123-0.075-0.191      c-0.051-0.112-0.077-0.216-0.102-0.305l-0.316-0.745c-0.799,0-1.608,0.014-2.397,0.018c-0.81,0.003-1.613,0.003-2.421-0.003      l-0.327,0.765c-0.021,0.033-0.035,0.047-0.035,0.071c-0.006,0.088-0.026,0.16-0.068,0.242c-0.024,0.051-0.041,0.075-0.057,0.115      c-0.024,0.051-0.052,0.105-0.079,0.163c-0.046,0.069-0.074,0.133-0.102,0.178c-0.034,0.058-0.061,0.119-0.101,0.183      c-0.032,0.064-0.069,0.139-0.109,0.208c-0.048,0.065-0.103,0.136-0.181,0.208l-0.044,0.038c-0.006,0-0.014,0.02-0.024,0.031      c-0.03,0.047-0.064,0.084-0.104,0.112l-0.034,0.027c-0.167,0.133-0.357,0.235-0.565,0.286l-0.033,0.017      c-0.398,0.055-0.782-0.021-1.139-0.211c-0.106-0.055-0.205-0.112-0.279-0.184c-0.092-0.078-0.153-0.156-0.208-0.231      c-0.102-0.16-0.163-0.347-0.163-0.544c0-0.098,0-0.187,0.009-0.258c0.007-0.082,0.018-0.156,0.035-0.238      c0.027-0.139,0.061-0.258,0.098-0.377l0.061-0.176l3.908-9.617l0.112-0.292c0.024-0.078,0.068-0.176,0.112-0.255      c0.024-0.037,0.044-0.088,0.068-0.17c0.076-0.18,0.144-0.343,0.236-0.483c0.037-0.071,0.081-0.16,0.146-0.235l0.15-0.187      c0.092-0.129,0.233-0.23,0.414-0.313c0.221-0.085,0.453-0.122,0.718-0.122c0.255,0,0.49,0.037,0.687,0.112      c0.201,0.092,0.347,0.193,0.438,0.326c0.092,0.116,0.194,0.251,0.299,0.411c0.084,0.146,0.159,0.296,0.228,0.483      c0.02,0.089,0.048,0.14,0.068,0.177c0.055,0.079,0.095,0.177,0.123,0.262l0.109,0.289l3.9,9.61l0.064,0.18      c0.041,0.12,0.069,0.238,0.095,0.357c0.021,0.103,0.027,0.177,0.035,0.258c0.006,0.071,0.014,0.16,0.014,0.258      C43.649,48.678,43.595,48.865,43.472,49.032z M53.864,48.434c0,0.135-0.027,0.265-0.086,0.384      c-0.051,0.115-0.111,0.214-0.189,0.312c-0.126,0.177-0.34,0.317-0.596,0.409c-0.326,0.116-0.646,0.167-0.931,0.167      c-0.229,0.026-0.559,0.003-0.834,0.051l-0.118,0.01c-0.96,0.01-1.966,0.01-2.993,0c-0.262-0.014-0.517-0.014-0.822,0      c-0.12,0.01-0.246,0.01-0.364,0.01c-0.201,0-0.402-0.01-0.599-0.024c-0.333-0.034-0.632-0.123-0.905-0.251      c-0.302-0.15-0.52-0.385-0.638-0.711c-0.024-0.075-0.044-0.153-0.069-0.221c-0.017-0.061-0.023-0.135-0.023-0.204      c-0.055-0.436-0.075-0.87-0.055-1.285c0.01-0.418,0.017-0.823,0.017-1.217l0.038-2.728v-2.509c0-0.449,0.003-0.847,0.006-1.207      c0.006-0.344,0.017-0.731,0.034-1.163v-0.075c0.008-0.153,0.028-0.275,0.028-0.394c0.003-0.123,0.003-0.238,0.003-0.364      c0.028-0.333,0.112-0.619,0.235-0.843c0.098-0.221,0.258-0.429,0.489-0.561c0.191-0.133,0.436-0.208,0.714-0.208      c0.102,0,0.19,0,0.271,0.013c0.092,0.007,0.184,0.014,0.259,0.035c0.103,0.02,0.197,0.048,0.299,0.102      c0.075,0.05,0.167,0.101,0.259,0.184l0.023,0.03c0.092,0.092,0.173,0.221,0.249,0.364v0.031c0.067,0.16,0.103,0.316,0.115,0.479      c0.007,0.064,0.021,0.139,0.035,0.217c0.013,0.085,0.02,0.177,0.02,0.266l-0.014,0.085c-0.014,0.048-0.02,0.095-0.02,0.146V38.3      l-0.075,8.589l4.343,0.031c0.078,0,0.166,0.01,0.254,0.023c0.103,0,0.198,0.007,0.289,0.024c0.096,0.01,0.188,0.027,0.262,0.027      c0.089,0.021,0.174,0.047,0.273,0.075c0.156,0.04,0.313,0.125,0.431,0.248c0.161,0.15,0.279,0.319,0.327,0.479      c0.036,0.074,0.058,0.19,0.058,0.347V48.434z M64.039,49.168c-0.075,0.062-0.153,0.116-0.208,0.167      c-0.085,0.051-0.167,0.092-0.255,0.123c-0.178,0.099-0.384,0.126-0.605,0.099c-0.109,0-0.193-0.017-0.285-0.055      c-0.082-0.024-0.157-0.071-0.226-0.116c-0.061-0.038-0.129-0.078-0.203-0.119c-0.075-0.051-0.149-0.105-0.218-0.167      c-0.075-0.058-0.149-0.12-0.211-0.167c-0.067-0.047-0.129-0.126-0.204-0.187c-0.059-0.068-0.115-0.146-0.17-0.204      c-0.04-0.055-0.089-0.109-0.129-0.153l-0.231-0.249l-3.148-3.298l0.04,3.298c0,0.061-0.007,0.136-0.031,0.204      c-0.006,0.064-0.009,0.115-0.033,0.18c-0.04,0.184-0.085,0.34-0.146,0.473c-0.027,0.098-0.074,0.18-0.143,0.261      c-0.044,0.062-0.103,0.105-0.156,0.167c-0.17,0.157-0.38,0.252-0.619,0.272c-0.156,0.054-0.306,0.078-0.449,0.078      c-0.048,0-0.095,0-0.146-0.01c-0.18-0.021-0.37-0.075-0.551-0.163l-0.031-0.006c-0.156-0.096-0.299-0.255-0.421-0.467      c-0.021-0.043-0.028-0.051-0.034-0.061l0.006-0.007l-0.06-0.157c0,0.027,0,0.038,0,0.038c0-0.01-0.008-0.038-0.021-0.058      c-0.084-0.16-0.126-0.317-0.137-0.459c-0.006-0.082-0.017-0.146-0.022-0.204c0-0.064-0.018-0.129-0.031-0.193      c-0.003-0.045-0.021-0.12-0.021-0.194l0.007-0.198c0.014-0.051,0.014-0.078,0.014-0.112v-0.15l-0.021-1.483l-0.013-2.764      c0-0.789-0.021-1.666-0.056-2.578c-0.014-0.469-0.02-0.871-0.02-1.221c0-0.343,0.006-0.745,0.02-1.187v-0.067v-0.042      c0.021-0.129,0.034-0.238,0.034-0.35c0-0.15,0.008-0.286,0.021-0.404c0-0.283,0.064-0.565,0.196-0.834      c0.089-0.244,0.248-0.431,0.49-0.577c0.118-0.076,0.244-0.125,0.367-0.15c0.103-0.021,0.189-0.044,0.307-0.064h0.05      c0.106,0,0.201,0,0.3,0.02l0.237,0.024c0.207,0.037,0.396,0.125,0.569,0.272c0.07,0.068,0.114,0.123,0.162,0.183      c0.034,0.068,0.067,0.133,0.096,0.222c0.074,0.122,0.122,0.296,0.156,0.51c0.007,0.068,0.017,0.146,0.024,0.228      c0.006,0.092,0.006,0.174,0.006,0.275v0.762l0.017,1.725c0.051-0.058,0.115-0.106,0.163-0.157      c0.191-0.183,0.374-0.388,0.56-0.585c0.35-0.354,0.686-0.704,1.012-1.044c0.333-0.327,0.674-0.656,1.007-0.993l0.058-0.047      c0.105-0.095,0.207-0.201,0.323-0.296l0.3-0.259c0.204-0.241,0.463-0.401,0.769-0.5c0.214-0.136,0.469-0.187,0.751-0.164      c0.133,0.021,0.266,0.051,0.374,0.096c0.112,0.048,0.221,0.112,0.323,0.18l0.041,0.027c0.048,0.058,0.095,0.095,0.143,0.133      c0.082,0.054,0.156,0.129,0.211,0.194c0.122,0.136,0.207,0.313,0.245,0.534v0.038c0,0.173-0.038,0.333-0.103,0.469l-0.014,0.031      l-0.115,0.198c-0.041,0.071-0.092,0.132-0.15,0.207c-0.06,0.078-0.115,0.146-0.162,0.204c-0.055,0.065-0.12,0.137-0.181,0.201      c-0.059,0.071-0.119,0.133-0.18,0.194c-0.052,0.038-0.085,0.078-0.137,0.133l-0.014,0.02l-0.241,0.249l-3.329,3.403l0.408,0.415      c0.204,0.204,0.404,0.401,0.592,0.605l0.53,0.538c0.156,0.16,0.299,0.313,0.408,0.418c0.34,0.347,0.667,0.703,0.979,1.047      c0.319,0.347,0.626,0.7,0.932,1.05l0.033,0.034c0.112,0.115,0.212,0.221,0.307,0.34c0.096,0.109,0.17,0.207,0.252,0.316      c0.193,0.214,0.339,0.466,0.425,0.741c0.119,0.248,0.132,0.52,0.017,0.755C64.358,48.838,64.225,49.039,64.039,49.168z"
                                                            origin_fill="#231f20" isInit="true"></path>
                                                        <path fill="#595959"
                                                            d="M38.177,42.408c-0.166-0.391-0.35-0.785-0.533-1.187c-0.021-0.03-0.041-0.084-0.055-0.132      c-0.027,0.044-0.044,0.092-0.057,0.132c-0.194,0.402-0.371,0.796-0.535,1.187c-0.166,0.385-0.339,0.765-0.5,1.125L36.3,44.006      h2.568l-0.194-0.479C38.511,43.173,38.344,42.792,38.177,42.408z"
                                                            origin_fill="#231f20" isInit="true"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <defs></defs>
                                    </svg>
                                {{-- </a> --}}
                                    <span>카카오톡 가입</span>
                                </div>
                            </button>
                        </div>
                        <div class="form-outline form-white mb-4 ">
                            <button type="submit"
                                class="form-control form-control-lg loginform google rounded-border bg-google border-0">
                                <div class="google_search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="fcxgslfzvt" x="0px"
                                        y="0px" viewBox="0 0 800 800" enable-background="new 0 0 800 800"
                                        xml:space="preserve">
                                        <g isInit="true">
                                            <path
                                                d="M463.3,370.6h-66.2l-0.2-0.1c0,0.1,0.1,0.1,0.1,0.3H283.8v72.5h102.5c-0.2,12-4.6,22-12.3,31.3c-21.4,26-54,42.7-90.4,42.7   c-64.8,0-117.3-52.5-117.3-117.2s52.5-117.2,117.3-117.2c28.8,0,55.1,10.4,75.5,27.7l50.1-52.7c-33.4-29.6-77.4-47.6-125.5-47.6   c-104.9,0-189.9,85-189.9,189.8c0,104.9,85,189.9,189.9,189.9c36.6,0,70.7-10.4,99.7-28.3c54-33.4,82.3-93.3,82.3-161.6   C465.6,390,464.9,380.2,463.3,370.6"
                                                fill="#ffffff" origin_fill="#000000" isInit="true"></path>
                                            <polygon
                                                points="706.2,366 629.7,366 629.7,289.5 578.2,289.5 578.2,366 501.8,366 501.8,417.5 578.2,417.5 578.2,493.9    629.7,493.9 629.7,417.5 706.2,417.5  "
                                                fill="#ffffff" origin_fill="#000000" isInit="true"></polygon>
                                        </g>
                                        <defs></defs>
                                    </svg>
                                    <span>구글 간편가입</span>

                                </div>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between responsive">
                            <p class="new_to_insta">인스타그램을 처음 접하다 ?</p>
                            <a href="{{ route('front.usersignup') }}"><span class="signup">가입하기 ?</span></a>
                        </div>
                        <div class="d-flex justify-content-between responsive">
                            <p class="new_to_insta">계정을 잊어버리세요 ?</p>
                            <a href="#"><span class="signup">비밀번호 초기화 ?</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Login Page Code End here --}}

</div>


    {{-- <script>

        $('.kakoa').on("click", (event) => {
            window.location.href = "https://kauth.kakao.com/oauth/authorize?client_id=971ab799aa742e1f80c80c23e9c672ab&redirect_uri=http://127.0.0.1:8000/auth/kako&response_type=code";
        });

    </script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
          $("#owl-row-1").owlCarousel();
      });
      $('#owl-row-1').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 1
              },
              1000: {
                  items: 1
              }
          }
      })
</script>


{{-- <script>
    function addChannel() {
      Kakao.Channel.addChannel({
        channelPublicId: '_ZeUTxl',
      });
    }
  </script> --}}
@endsection