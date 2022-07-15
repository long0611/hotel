<div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('trang-chu') }}" target="_blank"><img src=" {{asset('source/logo1.png')}}" alt=""></a>	
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{route('trang-chu')}}">Trang Chủ</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Khách Sạn</a>
                                    <div class="dropdown-menu">
                                        @foreach ($khachsan as $ks)
                                        <a class="dropdown-item" href="{{route('loaikhachsan',$ks->id_room)}}">{{$ks->type_room}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">Về chúng tôi</a>
                                </li>
                               
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{route('khuyenmai')}}">Khuyến Mãi</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">Liên hệ</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <button type="button" class="btn btn-outline-primary" ><a href="{{ route('datphong') }}" style="text-decoration: none;"> Đặt Phòng</a></button>
                                </li>
                           

                   
                                @if(session()->has('permission') && session()->get('permission') == 0)
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 account">
                                         <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-user far-account"></i></a>
                                         <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">{{session()->get('name')}}</a>
                                            <a class="dropdown-item" href="{{route('lichsu')}}">Lịch sử đặt phòng</a>
                                            <a class="dropdown-item" href="{{route('suathongtin')}}">Chỉnh sửa thông tin</a>
                                            <a class="dropdown-item" href="{{route('dangxuat')}}">Đăng xuất</a>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 account">
                                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-user far-account"></i></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('login1')}}">Đăng Nhập</a>
                                            <a class="dropdown-item" href="{{route('signin')}}">Đăng Ký</a>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div> 
                    </nav>		
                </div>
            </div>
        </div>
    </div>