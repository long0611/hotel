@extends('master')
@section('content')
<style>
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
    color: #FFFFFF;
    background-color: #FA5858 !important;
}

.wdp-ribbon-two:before, .wdp-ribbon-two:before {
    display: inline-block;
    content: "";
    position: absolute;
    left: -14px;
    top: 0;
    border: 9px solid transparent;
    border-width: 12px 8px;
    border-right-color:  #FA5858;
}
.wdp-ribbon-two:before {
    border-color:  #FA5858;
    border-left-color: transparent!important;
    left: -9px;
}
</style>
<div class="container-fluid">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="source/image/Khachsan/5sao/altarasuitescut.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="source/image/Khachsan/5sao/muongthanhcut.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="source/image/Khachsan/5sao/novoltelcut.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="source/image/Khachsan/5sao/godenbaycut.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="source/image/Khachsan/5sao/sheratoncut.png" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="source/image/Khachsan/5sao/monaquecut.jpg" style="width:100%">
  </div>
    
  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column1">
      <img class="demo cursor" src="source/image/Khachsan/5sao/altarasuitescut.jpg" style="width:100%" onclick="currentSlide(1)" alt="Altara suites">
    </div>
    <div class="column1">
      <img class="demo cursor" src="source/image/Khachsan/5sao/muongthanhcut.jpg" style="width:100%" onclick="currentSlide(2)" alt="Mường Thanh Luxury">
    </div>
    <div class="column1">
      <img class="demo cursor" src="source/image/Khachsan/5sao/novoltelcut.jpg" style="width:100%" onclick="currentSlide(3)" alt="NovoTel">
    </div>
    <div class="column1">
      <img class="demo cursor" src="source/image/Khachsan/5sao/godenbaycut.jpg" style="width:100%" onclick="currentSlide(4)" alt="Goden Bay">
    </div>
    <div class="column1">
      <img class="demo cursor" src="source/image/Khachsan/5sao/sheratoncut.png" style="width:100%" onclick="currentSlide(5)" alt="Sheraton Hotel">
    </div>    
    <div class="column1">
      <img class="demo cursor" src="source/image/Khachsan/5sao/monaquecut.jpg" style="width:100%" onclick="currentSlide(6)" alt="Monaque Hotel">
    </div>
  </div>
</div>
<div class="container form-booking">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="form-dk">
                <div class="form-demo">
                    <form class="form-search" method="GET" >
                        <div class="form-group">
                            <select name="vung" id="vung" class="form-control">
                                <option value="">Tất Cả Các Quận</option>
                                <option value="">Ngũ Hành Sơn</option>
                                <option value="">Hải Châu</option>
                                <option value="">Sơn Trà</option>
                                <option value="">Thanh Khê</option>
                                <option value="">Quận Cẩm Lệ</option>
                                <option value="">Liên Chiểu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="hotel" id="hotel" class="form-control">
                                <option value="">Tất cả khách sạn</option>
                                <option value="">Mường Thanh Luxury</option>
                                <option value="">NovoTel</option>
                                <option value="">Goden Bay</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <script type="text/javascript">
                                $(function () {  
                                $("#datepicker").datepicker({         
                                autoclose: true,         
                                todayHighlight: true 
                                });
                                });
                                </script>
                            <div>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> 
                                    <input class="form-control" readonly="" type="text" placeholder="Ngày đến"> 
                                    <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span> 
                                </div>	
                            </div>
                        </div>
                        <div class="form-group">
                            <script type="text/javascript">
                                $(function () {  
                                $("#datepicker1").datepicker({         
                                autoclose: true,         
                                todayHighlight: true 
                                });
                                });
                                </script>
                            <div>
                                <div id="datepicker1" class="input-group date" data-date-format="dd-mm-yyyy"> 
                                    <input class="form-control" readonly="" type="text" placeholder="Ngày đi"> 
                                    <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span> 
                                </div>	
                            </div>
                        </div>
                        <button type="submit" class="btn btn-style-book">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<div class="tieude" style="text-align: center; margin-top: 20px;">
    <h2 class="title text-center"><span class="pink-color">Khách Sạn 5 Sao</span> Giá Tốt</h2>
    <span class="cover-text thanhngang"><i class="fab fa-angellist"></i></span>
</div>
<div class=" container-fluid">
    
    <div  align="center">
       <div id="wp-slider">
          <div class="owl-carousel owl-theme">
             @foreach($hotel as $ht)
             <div class="item">
                <div class="card" style="width: 20rem;">
                   <div class="card h-100">
                       @if($ht->pricefree!=0)
                   <span class="wdp-ribbon wdp-ribbon-two">SALE</span>
                   @endif
                    <img src="source/image/Khachsan/5sao/{{$ht->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <a class="dat-tour" href="chitietmuongthanh.html">{{$ht->hotel_name}}</a>    
                       <ul class="list-group list-group-flush">
                         <div class="star"><li class="list-group-item"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></li></div>
                         <div class="price">
                             @if($ht->pricefree==0)
                             <br>
                            <p class="new-price">{{$ht->price_hotel}} vnđ <span>/đêm</span></p>
                            @else
                            <p class="old-price"><del>{{$ht->price_hotel}} vnđ</del></p>
                            <p class="new-price">{{$ht->pricefree}} vnđ <span>/đêm</span></p>
                            @endif
                        </div>
                        <div align="center">
                            <a href="{{ route('datphong')}}" class=" btnbook btn btn-outline-info stretched-link" >Đặt Phòng</a>
                         </div>
                          
                       </ul>
                    </div>
                 </div>
                </div>
             </div>
              @endforeach               
          </div>
       </div>
    </div>
 </div>

 <div class="targets">
    <div class="container">
        
        <div class="tieude" style="text-align: center;">
            <h2 class="title text-center"><span class="pink-color">Vì Sao</span> Chọn Chúng Tôi</h2>
            <span class="cover-text thanhngang"><i class="fab fa-angellist"></i></span>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="target">
                    
                    <div class="content">
                        <i class="fas fa-trophy"></i><h4 class="target-name">Đặt Phòng</h4>
                        <p>Số 1 tại Việt Nam. Ứng dụng công nghệ mới nhất</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="target">
                  
                    <div class="content">
                        <i class="fas fa-money-check-alt"></i> <h4 class="target-name">Thanh Toán</h4>
                        <p>An toàn và linh hoạt. Liên kết các tổ chức tài chính uy tín</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="target">
                   
                    <div class="content">
                        <i class="fas fa-hand-holding-usd"></i> <h4 class="target-name">Giá Cả</h4>
                       <p>Luôn là rẻ nhất, cam kết mức giá tiết kiệm nhất</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="target">
                    
                    <div class="content">
                        <i class="far fa-smile-beam"></i>  <h4 class="target-name">Sản Phẩm - Dịch Vụ</h4>
                        <p>Đảm bảo cung cấp dịch vụ chất lượng tốt nhất, không cắt giảm chi phí</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="target">
                   
                    <div class="content">
                        <i class="far fa-thumbs-up"></i><h4 class="target-name">Đặt Tour</h4>
                        <p>Dễ dàng, nhanh chóng, tiện lợi. Chỉ trong vòng 30s</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="target">
                    
                    <div class="content">
                        <i class="far fa-question-circle"></i> <h4 class="target-name">Hỗ Trợ</h4>
                        <p>24/7. Hotline và hỗ trợ trực tuyến</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div style="margin-top: 20px;">
    <div class="tieude" style="text-align: center;">
        <h2 class="title text-center"><span class="pink-color">Các Địa Điểm</span> Trung Tâm</h2>
        <span class="cover-text thanhngang"><i class="fab fa-angellist"></i></span>
    </div>
<div class="Como-list-location">
    <article>
        <div class="List-Location">
            <a href="#">
                <div class="Row-hexagon">
                    <div class="Border-hexagon"></div>
                    <div class="location-image" style="background-image: url(source/image/quan/Nui-Ngu-Hanh-Son.png);"></div>
                    <div class="Location-dist">Ngũ hành sơn</div>
                </div>
                <div class="Location-address">
                    <div class="Location-address-content">
                        hello
                    </div>
                </div>
            </a>
        </div>
        
    </article>
    <article>
        <div class="List-Location">
            <a href="#">
                <div class="Row-hexagon">
                    <div class="Border-hexagon"></div>
                    <div class="location-image" style="background-image: url(source/image/quan/caurong.jpg);"></div>
                    <div class="Location-dist">Quận Hải Châu</div>
                </div>
                <div class="Location-address">
                    <div class="Location-address-content">
                        hello
                    </div>
                </div>
            </a>
        </div>
        
    </article>
    <article>
        <div class="List-Location">
            <a href="#">
                <div class="Row-hexagon">
                    <div class="Border-hexagon"></div>
                    <div class="location-image" style="background-image: url(source/image/quan/camle.jpg);"></div>
                    <div class="Location-dist">Cẩm lệ</div>
                </div>
                <div class="Location-address">
                    <div class="Location-address-content">
                        hello
                    </div>
                </div>
            </a>
        </div>
        
    </article>
    <article>
        <div class="List-Location">
            <a href="#">
                <div class="Row-hexagon">
                    <div class="Border-hexagon"></div>
                    <div class="location-image" style="background-image: url(source/image/quan/sontra.jpg);"></div>
                    <div class="Location-dist">Sơn Trà</div>
                </div>
                <div class="Location-address">
                    <div class="Location-address-content">
                        hello
                    </div>
                </div>
            </a>
        </div>
        
    </article>
</div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.226679614505!2d108.24517491466321!3d16.05372264411795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177a5081b45b%3A0x1dba027958889476!2zTcaw4budbmcgVGhhbmggTHV4dXJ5IMSQw6AgTuG6tW5nIEhvdGVs!5e0!3m2!1svi!2s!4v1596473159194!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

@endsection