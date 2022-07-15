@extends('master')
@section('content')
<style>
   .price{
      text-align: center;
   }
   .card-text{
      max-height: 60px;
      line-height: 20px;
      font-size: 15px;
   }
   .space-5{
      padding-bottom: 8px;
   }
   .phantrang{
      display: block;
      text-align: center;
   }
   .phantrang .pagination{
      margin: 0 auto;
      justify-content: center;
   }
   .wdp-ribbon{
	display: inline-block;
    padding: 2px 15px;
	position: absolute;
    right: 0px;
    top: 20px;
    line-height: 24px;
	height:24px;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
	border-radius: 0;
    text-shadow: none;
    font-weight: bold;
    color: #5F4C0B;
    background-color: #5CF5EA !important;
}

.wdp-ribbon-two:before, .wdp-ribbon-two:before {
    display: inline-block;
    content: "";
    position: absolute;
    left: -14px;
    top: 0;
    border: 9px solid transparent;
    border-width: 12px 8px;
    border-right-color:  #5CF5EA;
}
.wdp-ribbon-two:before {
    border-color:  #5CF5EA;
    border-left-color: transparent!important;
    left: -9px;
}
</style>
<div>
    <div class="category-header" style="background-image:url({{url('source/image/Background/bg-cate1.jpg')}}); ">
        <h1 class="category-title">Khách Sạn 5 Sao</h1>
     </div>
     <div class="container">
        <ul class="breadcrumb pagina">
           <li class="breadcrumb-item"><a href="{{route('trang-chu')}}" class="pagina">Trang Chủ</a></li>
           <li class="breadcrumb-item pagina"> Khách Sạn</li>
           <li class="breadcrumb-item pagina">Khách Sạn 5 Sao</li>
        </ul>
     </div>
     <div class="container">
        <div class="meta-note">
           <div class="row">
                <div class="col-md-2"><span class="filter-title d-none d-md-block">
                    <i class="fas fa-sliders-h"></i>
                    Tìm theo:
                </span></div>
               
                <div class="col-md-6"><div class="filter-group filter-price">
                    <span class="filter-label">Theo Giá cả</span>
                    <div class="filter">
                        <form action="/khach-san-5-sao-nha-trang.htm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="filter-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check1" value="0,500000">
                                            <label class="custom-control-label" for="check1" onclick='window.location.assign(window.location.pathname + "/?startprice=1?endprice=499999")'>Từ 0 - 500k</label>
                                        </div>
                                    </div>
        
                                    <div class="filter-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" value="500000,1000000">
                                            <label class="custom-control-label" for="check2" onclick='window.location.assign(window.location.pathname + "/?startprice=500000?endprice=999999")'>Từ 500k - 1 triệu</label>
                                        </div>
                                    </div>
        
                                    <div class="filter-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check3" value="1000000,2000000">
                                            <label class="custom-control-label" for="check3" onclick='window.location.assign(window.location.pathname + "/?startprice=1000000?endprice=1999999")'>Từ 1 triệu - 2 triệu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="filter-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check4" value="2000000,3000000">
                                            <label class="custom-control-label" for="check4" onclick='window.location.assign(window.location.pathname + "/?startprice=2000000?endprice=2999999")'>Từ 2 triệu - 3 triệu</label>
                                        </div>
                                    </div>
        
                                    <div class="filter-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check5" value="3000000,5000000">
                                            <label class="custom-control-label" for="check5" onclick='window.location.assign(window.location.pathname + "/?startprice=3000000?endprice=5000000")'>Từ 3 triệu - 5 triệu</label>
                                        </div>
                                    </div>
                                
                                    <div class="filter-checkbox">
                         
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="check6" value="5000000">
                                             <label class="custom-control-label" for="check6" onclick='window.location.assign(window.location.pathname + "/?startprice=5000001?endprice=10000000")'>Từ 5 triệu trở lên</label>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div></div>
           </div>
        </div>
     </div>
     <div class="container">
         <div style="margin-top: 50px;" class=" row row-cols-1 row-cols-md-4">
         @foreach($loai_hotel as $ht5s)
            <div class="col-md-4 space-5">
                <div class="card h-100">
                   <img src="{{ asset('source/image/Khachsan/5sao/'. $ht5s->image) }}" class="card-img-top" alt="...">
                   <div class="card-body">
                      <a class="dat-tour" href="{{route('chitiet',$ht5s->id_hotel)}}">{{$ht5s->hotel_name}}</a>
                      <div class="price">
                         @if($ht5s->pricefree==0)
                             <br>
                            <p class="new-price">{{$ht5s->price_hotel}} vnđ </p>
                            @else
                            <p class="old-price"><del>{{$ht5s->price_hotel}} vnđ</del></p>
                            <p class="new-price">{{$ht5s->pricefree}} vnđ </p>
                            @endif
                        </div>    
                      <ul class="list-group list-group-flush">
                        <div class="star1"><li class="list-group-item"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></li></div>
                        <li class="list-group-item">
                          
                        </li>
                         <li class="list-group-item">
                            <p class="card-text"> <i class="fas fa-map-marker-alt"></i> Vị Trí: {{$ht5s->address}} </p>
                         </li>
                         
                      </ul>
                   </div>
                </div>
            </div>
            @endforeach
         </div>
         <div class="phantrang">{{$loai_hotel->appends(request()->input())->links('pagination::bootstrap-4')}}</div>
      </div>
</div>

<div class="container">
<h2 class="title " style="margin-top: 40px;">Top<span class="pink-color" style="color:#1ec6b6"> khách sạn 5 Sao</span> khuyến mãi</h2>
<div style="margin-top: 50px;" class=" row row-cols-1 row-cols-md-4">
         @foreach($free as $km)
            <div class="col-md-3 space-5">
                <div class="card h-100">
                <span class="wdp-ribbon wdp-ribbon-two">TOP</span>
                   <img src="{{ asset('source/image/Khachsan/5sao/'. $km->image) }}" class="card-img-top" alt="...">
                   <div class="card-body">
                      <a class="dat-tour" href="{{route('chitiet',$km->id_hotel)}}">{{$km->hotel_name}}</a>
                      <div class="price">
                            <p class="old-price"><del>{{$km->price_hotel}} vnđ</del></p>
                            <p class="new-price">{{$km->pricefree}} vnđ </p>
                        </div>    
                      <ul class="list-group list-group-flush">
                        <div class="star1"><li class="list-group-item"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></li></div>
                        <li class="list-group-item">
                          
                        </li>
                         <li class="list-group-item">
                            <p class="card-text"> <i class="fas fa-map-marker-alt"></i> Vị Trí: {{$km->address}} </p>
                         </li>
                         
                      </ul>
                   </div>
                </div>
            </div>
            @endforeach
         </div>
         <div class="phantrang">{{$free->links('pagination::bootstrap-4')}}</div>
</div>

<div class=" container">
    <div>
       <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Kinh Ngiệm</span> Đặt Phòng</h2>
    </div>
       <div  align="center">
          <div id="wp-slider">
             <div class="owl-carousel owl-theme">
                <div class="item">
                   <div class="card" style="width: 20rem;">
                      <img src="{{asset('source/image/Background/giadinh.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                         <h5 class="card-title">Đi cùng gia đình, nhóm bạn đông người luôn có lợi:</h5>
                         <ul class="list-group list-group-flush">
                         
                            <div class="price">
                               
                               <p class="new-price">Đọc thêm</p>
                            </div>
                         </ul>
                         
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="card" style="width: 20rem;">
                      <img src="{{asset('source/image/Background/dongho.png')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                         <h5 class="card-title">Lên kế hoạch và đặt phòng sớm</h5>
                         <ul class="list-group list-group-flush">
                          
                            <div class="price">
                               
                               <p class="new-price">Đọc thêm</p>
                            </div>
                         </ul>
                         
                      </div>
                   </div>
                </div>

                

                <div class="item">
                   <div class="card" style="width: 20rem;">
                      <img src="{{asset('source/image/Background/dongho.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                         <h5 class="card-title">Quan tâm đến thời gian check in và check out:</h5>
                         <ul class="list-group list-group-flush">
                         
                            <div class="price">
                              
                               <p class="new-price">Đọc Thêm</p>
                            </div>
                         </ul>
                        
                      </div>
                   </div>
                </div>

                <div class="item">
                   <div class="card" style="width: 20rem;">
                      <img src="{{asset('source/image/Background/unnamed.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                         <h5 class="card-title">Kiểm tra kỹ thông tin về khách sạn.</h5>
                         <ul class="list-group list-group-flush">
                          
                            <div class="price">
                               
                               <p class="new-price">Đọc thêm</p>
                            </div>
                         </ul>
                        
                      </div>
                   </div>
                </div>

                <div class="item">
                   <div class="card" style="width: 20rem;">
                      <img src="{{asset('source/image/Background/dichvu.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                         <h5 class="card-title">Cân nhắc đặt thêm các dịch vụ của khách sạn:</h5>
                         <ul class="list-group list-group-flush">
                        
                            <div class="price">
                            
                               <p class="new-price">Đọc thêm</p>
                            </div>
                         </ul>
                         
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
</div>
@endsection