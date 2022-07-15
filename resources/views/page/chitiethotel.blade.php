@extends('master')
@section('content')

<body  class="hero-anime">

    <div class="category-header" style="background-image:url({{url('source/image/Background/bg-cate1.jpg')}})" >
        <h1 class="category-title">Khách sạn {{$sanpham->hotel_name}}</h1>
        <button type="button" class="btn btn-light category-title1"  id="modalActivate"  data-toggle="modal" data-target="#exampleModalPreview"><i class="far fa-images"></i> Xem Album Ảnh</button>
        <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
         <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
             <div class="modal-content-full-width modal-content ">
                 <div class=" modal-header-full-width   modal-header text-center">
                    
                     <button type="button" class="close " data-dismiss="modal" aria-label="Close"></button>
                         <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
     
                 </div>                <!-- Header -->
<div class="header" id="myHeader">
   <h1>Một Số Hình Ảnh Về Khách Sạn</h1>
  
   <button class="btn" onclick="one()">1</button>
   <button class="btn active" onclick="two()">2</button>
   <button class="btn" onclick="four()">4</button>
 </div>
 
 <!-- Photo Grid -->
 <div class="row"> 
   <div class="column">
     <img src=" {{asset('source/image/Muongthanh/1.jpg')}}" style="width:100%">
     <img src="{{asset('source/image/Muongthanh/2.jpg')}}" style="width:100%">
     <img src="{{asset('source/image/Muongthanh/3.jpg')}}" style="width:100%">
     <img src="{{asset('source/image/Muongthanh/4.jpg')}}" style="width:100%">
     <img src="{{asset('source/image/Muongthanh/5.jpg')}}" style="width:100%">
     <img src="{{asset('source/image/Muongthanh/6.jpg')}}" style="width:100%">
     <img src="{{asset('source/image/Muongthanh/7.jpg')}}" style="width:100%">
   </div>
   <div class="column">
     <img src=" {{asset('source/image/Muongthanh/8.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/5.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/10.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/11.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/12.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/1.jpg')}}" style="width:100%">
   </div>  
   <div class="column">
      <img src=" {{asset('source/image/Muongthanh/1.jpg')}}" style="width:100%">
      <img src=" {{asset('source/image/Muongthanh/2.jpg')}}" style="width:100%">
      <img src=" {{asset('source/image/Muongthanh/3.jpg')}}" style="width:100%">
      <img src=" {{asset('source/image/Muongthanh/4.jpg')}}" style="width:100%">
      <img src=" {{asset('source/image/Muongthanh/5.jpg')}}" style="width:100%">
      <img src=" {{asset('source/image/Muongthanh/6.jpg')}}" style="width:100%">
      <img src=" {{asset('source/image/Muongthanh/7.jpg')}}" style="width:100%">
   </div>
   <div class="column">
     <img src=" {{asset('source/image/Muongthanh/8.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/5.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/10.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/11.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/12.jpg')}}" style="width:100%">
     <img src=" {{asset('source/image/Muongthanh/1.jpg')}}" style="width:100%">
</div>
 </dgiv>
 <script>
 // Get the elements with class="column"
 var elements = document.getElementsByClassName("column");
 
 // Declare a loop variable
 var i;
 
 // Full-width images
 function one() {
     for (i = 0; i < elements.length; i++) {
     elements[i].style.msFlex = "100%";  // IE10
     elements[i].style.flex = "100%";
   }
 }
 
 // Two images side by side
 function two() {
   for (i = 0; i < elements.length; i++) {
     elements[i].style.msFlex = "50%";  // IE10
     elements[i].style.flex = "50%";
   }
 }
 
 // Four images side by side
 function four() {
   for (i = 0; i < elements.length; i++) {
     elements[i].style.msFlex = "25%";  // IE10
     elements[i].style.flex = "25%";
   }
 }
 
 // Add active class to the current button (highlight it)
 var header = document.getElementById("myHeader");
 var btns = header.getElementsByClassName("btn");
 for (var i = 0; i < btns.length; i++) {
   btns[i].addEventListener("click", function() {
     var current = document.getElementsByClassName("active");
     current[0].className = current[0].className.replace(" active", "");
     this.className += " active";
   });
 }
 </script>
                    
                 </div>
                 
             </div>
         </div>
     </div>
        
     </div>
     <div class="container">
        <ul class="breadcrumb pagina">
           <li class="breadcrumb-item"><a href="{{route('trang-chu')}}" class="pagina">Trang Chủ</a></li>
           <li class="breadcrumb-item pagina"> Khách Sạn</li>
           <li class="breadcrumb-item pagina">Khách Sạn 5 Sao</li>
           <li class="breadcrumb-item pagina">Mường Thanh Luxury</li>
        </ul>
     </div>

    <div class="container">
        <div class="row">
           <div class="col-sm-10">
              <h1 class="magin">Khách sạn {{$sanpham->hotel_name}} </h1>
              <div>
                 <a class="menukhachsan" href="#Thongtinchung" >Thông Tin Chung</a>
                 <a class="menukhachsan" href="#cacloaiphong" >Các Loại Phòng</a>
                 <a class="menukhachsan" href="#tienich" >Các Tiện Ích</a>
                 <a class="menukhachsan" href="#cacdiemluutru" >Các Khách sạn Khác</a>
                 <a class="menukhachsan" href="#binhluan" >Bình Luận - Đánh GIá</a>
              </div>
              <div>
                <div>
                    <h2 class="title " id="thongtinchung" style="margin-top: 40px;"><span class="pink-color">Thông Tin</span> Chung</h2>
                 </div>
                 <p class="thongtin2">
                   Tọa lạc tại vị trí đắc địa nhất trên con đường vàng Trần Phú, phía trước mặt là Vịnh Nha Trang, một trong những vịnh biển đẹp nhất thế giới với bãi cát trắng mịn, nước biển trong như pha lê, và những rặng dừa xanh ngắt

                   Nằm cách bãi biển chỉ 200m, cách sân bay quốc tế khoảng 37km, và Quảng trường 2/4 tầm 300m. Khách sạn 5 sao cao cấp Mường Thanh Luxury sẽ luôn đem lại cho bạn sự tinh tế trong phục vụ, sự lãng mạn của không gian đẳng cấp và sự tiện nghi khi quý khách sử dụng các dịch vụ tại đây.
                 </p>
                 <figure class="figure">
                    <img src="{{ asset('source/image/Khachsan/5sao/'. $sanpham->image) }}" class="figure-img img-fluid rounded" alt="...">
                   
                 </figure>
              </div>
              <p class="thongtin2">
               Khách sạn Mường Thanh Luxury Nha Trang nổi bật với chiều cao 48 tầng, cung cấp 458 phòng lưu trú hướng biển, cùng hệ thống trang thiết bị, tiện ích hiện đại theo tiêu chuẩn 5 sao. Tòa nhà có thiết kế đặc biệt, chú trọng không gian mở với hệ thống vách kính trong mỗi phòng nghỉ
              </p>
              <div>
                <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Phòng Họp</span> & Hội Nghị</h2>
             </div>
              <p class="thongtin2">
               Phòng hội thảo với diện tích khác nhau được trang bị thiết bị nghe nhìn mới nhất sẽ cung cấp cho bạn sự lựa chọn đa dạng với sức chứa từ 50 - 1000 người. Tất cả sẽ giúp bạn tổ chức hội thảo, hội nghị cấp cao, họp báo, tiệc cưới, hay buổi ra mắt sản phẩm mới một cách hoàn hảo.
              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/hoinghi.jpg') }}" class="figure-img img-fluid rounded" alt="...">
              
              </figure>
              <div>
                <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Tiệc</span> Cưới</h2>
             </div>
              <p class="thongtin2">
               Dù bạn đang mơ ước đến một không gian cưới truyền thống, lãng mạn hay hiện đại trẻ trung, hệ thống sảnh tiệc cưới của chúng tôi sẽ cung cấp những bài trí phù hợp, thực đơn phong phú dành cho ngày trọng đại của bạn. Những nhân viên chuyên nghiệp của chúng tôi sẽ tư vấn cho bạn những phong cách bài trí phù hợp cùng với những thực đơn đặc sắc.
              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/tieccuoi.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                 <figcaption class="figure-caption text-right">New Sun</figcaption>
              </figure>


              <div>
                <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Spa</span></h2>
             </div>
              <p class="thongtin2">
               Với số lượng 26 phòng VIP và phòng luxury bạn có thể tận hưởng cảm giác nghỉ ngơi trọn vẹn, thả lỏng cơ thể và đầu óc với những liệu pháp làm đẹp chuyên nghiệp tại Trầm Hương Spa & massage. Các dịch vụ cung cấp:

                 • Massage theo phương pháp Đông-Tây kết hợp

                 • Sử dụng trị liệu đá nóng có tác dụng thông khí huyết, tuần hoàn máu trong cơ thể

                 • Massage chân

                 • Xông khô, xông ướt

                 • Dịch vụ massage VIP bao gồm massage, xông hơi, xục Jacuzzi

                 Giờ mở cửa: 10h00 – 23h00
              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/spa.jpg') }}" class="figure-img img-fluid rounded" alt="...">
               
              </figure>


              <div>
                <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Fitness</span> Center</h2>
             </div>
              <p class="thongtin2">
               Đầy đủ dụng cụ nhằm phục vụ nhu cầu luyện tập, nâng cao sức khỏe của quý khách. Những huấn luyện viên của chúng tôi sẽ hướng dẫn cho quý khách những bài tập an toàn và đầy hiệu quả, giúp quý khách có một ngày mới năng động và tràn đầy năng lượng.

               Giờ mở cửa : 06h00-22h00
              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/gym.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                
              </figure>



              <div>
                <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Karaoke</span></h2>
             </div>
              <p class="thongtin2">
               Được trang bị hệ thống âm thanh tiên tiến, khu vực Karaoke tại khách sạn là nơi giúp Quý khách tái tạo năng lượng, là không gian thư giãn, giải trí, ca hát cùng bạn bè và người thân.

                 Vị trí: Tầng 3

                 Giờ mở cửa: 9h00 – 22h00


              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/kara.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                
              </figure>




              <div>
                <h2 class="title " style="margin-top: 20px;"><span class="pink-color">Nhà Hàng</span>- Ẩm Thực</h2>
             </div>
              <p class="thongtin2">
               Nhà hàng Hòn Tre được thiết kế với nội thất và cách bài trí ấm cúng, sẽ mang đến cho quý khách những món ăn mang phong vị Âu Á tuyệt vời. Nhà hàng phục vụ buffet sáng với thực đơn Âu Á thay đổi hàng ngày, Bữa trưa và bữa tối phục vụ những thực đơn đa dạng và đặc sắc.

                 Nhà hàng phục vụ cả ngày với 3 phòng VIP.

                 Giờ mở cửa: 06h00 – 22h00

                 Sức chứa: 250 khách
              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/nhahang.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                
              </figure>




              <div>
                <h2 class="title " style="margin-top: 20px;"><span class="pink-color">Bar</span></h2>
             </div>
              <p class="thongtin2">
               Bar Hoa Lan phục vụ những thức uống pha chế độc đáo cùng những ly cà phê nóng hổi cho những buổi gặp gỡ bạn bè hay đối tác. Nhà hàng tọa lạc ngay tại tại tầng 6 với không gian mở ra bờ Vịnh Nha Trang thơ mộng.

                 Giờ mở cửa: 08h00 – 22h00

                 Sức chứa: 120 khách
              </p>
              <figure class="figure">
                 <img src="{{ asset('source/image/Khachsan/5sao/bar.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                
              </figure>
              <div style="background-color:rgba(30,198,182,.05); margin-top: 25px; padding: 15px;border: 1px solid rgba(20,132,121,.2);">
                <div>
                    <h2 class="title " id="cacloaiphong" style="margin-top: 40px;"><span class="pink-color">Các Loại</span> Phòng</h2>
                 </div>
                 <ul class="list-unstyled">
                    <li class="media caloaiphong">
                       <figure class="pakage-thumb">
                          <img src="{{ asset('source/image/Khachsan/5sao/deluxe.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                       </figure>
                    
                       <div class="media-body">
                          <h5 class="mt-0 mb-1">Phòng Deluxe King</h5>
                          <p> Diện tích phòng: 32 m², Loại giường: Double bed . Hướng phòng: Thành phố hoặc biển, nội thất sang trọng mà không kém phần ấm cúng trang nhã.</p>
                       </div>
                    </li>
                    <li  class="media  caloaiphong">
                       <div class="media position-relative">
                          <figure class="pakage-thumb">
                             <img src="{{ asset('source/image/Khachsan/5sao/twin.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                          </figure>
                          <div class="media-body">
                             <h5 class="mt-0">Phòng Deluxe Twin</h5>
                             <p>Diện tích phòng: 32 m², Loại giường: Twin bed. Hướng phòng: Thành phố hoặc biển, nội thất tron phòng sang trọng mà không kém phần ấm cúng trang nhã.</p>
                          </div>
                       </div>
                    </li>
                    <li  class="media caloaiphong">
                       <figure class="pakage-thumb">
                          <img src="{{ asset('source/image/Khachsan/5sao/family.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                       </figure>
                       <div class="media-body">
                          <h5 class="mt-0 mb-1">Phòng Deluxe Family Trip</h5>
                          <p> Diện tích phòng: 40 m², Loại giường: Double bed or Twin Bed .Hướng phòng: Thành phố hoặc biển, nội thất trong phòng sang trọng mà không kém phần ấm cúng trang nhã.

                          </div>
                    </li>
                    <li  class="media caloaiphong">
                       <figure class="pakage-thumb">
                          <img src="{{ asset('source/image/Khachsan/5sao/pre.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                       </figure>
                       <div class="media-body">
                          <h5 class="mt-0 mb-1">Phòng Presidential Suite</h5>
                          <p>Diện tích phòng: 425 m², Loại giường: Double bed and Twin bed. Hướng phòng: Vịnh Nha Trang, vị trí độc đáo duy nhất của toà nhà, với góc nhìn đẹp, không gian mở và lối thiết kế sáng tạo. gồm hai phòng ngủ, một phòng khách với bàn làm việc quầy bar, bếp, bàn ăn, sofa được thiết kế tinh xảo và đầy đủ tiện nghi với các trang thiết bị hiên đại khác như phòng quầy bar, phòng xông hơi, ...

                          </div>
                    </li>
                    <li  class="media caloaiphong">
                       <figure class="pakage-thumb">
                          <img src="{{ asset('source/image/Khachsan/5sao/royal.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                       </figure>
                       <div class="media-body">
                          <h5 class="mt-0 mb-1">Phòng Royal Suite</h5>
                          <p>Diện tích phòng: 160 m², Loại giường: Double bed . Hướng phòng: Thành phố và biển, phòng khách tiện nghi và trang thiết bị hiện đại, phòng tắm lớn với bồn tắm tạo sóng, vòi tắm hoa sen và tất cả các tính năng trong phòng

                          </div>
                    </li>
                 </ul>
              </div>
              <div>
                <h2 class="title " id="tienich" style="margin-top: 40px;"><span class="pink-color">Tiện ích</span>- Dịch vụ Mường Thanh Luxury</h2>
             </div>
              <div class="container">
                 <div class="row">
                    <div class="col-sm-4">
                       <p class="tienich"><i class="far fa-check-circle"></i> Sử dụng 4 ngôn ngữ: Việt, Anh, Trung, Nga</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"><i class="far fa-check-circle"></i> Dịch vụ đưa đón sân bay (có thu phí)</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Dịch vụ xe đưa đón (có thu phí)</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich">  <i class="far fa-check-circle"></i> Khu vực cho phép hút thuốc</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Phòng tiện nghi cho người khuyết tật</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Wifi tốc độ cao trong khuôn viên khách sạn</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Lễ tân & bảo vệ 24/24</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Thu đổi ngoại tệ</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Dịch vụ dọn phòng</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Dịch vụ giặt ủi</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Dịch vụ gửi hành lý</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Dịch vụ phòng</p>
                    </div>
                 </div>
              </div>
              <div>
                <h2 class="title " style="margin-top: 40px;"><span class="pink-color">Tiện ích</span> - Phòng</h2>
             </div>
              <div class="container">
                 <div class="row">
                    <div class="col-sm-4">
                       <p class="tienich"><i class="far fa-check-circle"></i> Giá để hành lý</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"><i class="far fa-check-circle"></i> Điều hòa nhiệt độ</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Miễn phí truy cập internet tốc độ cao</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich">  <i class="far fa-check-circle"></i> TV màu LCD Plasma</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Điện thoại</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Nước suối miễn phí 2 chai</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Ấm siêu tốc</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Trà + café hàng ngày</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Két an toàn</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i>Bàn làm việc</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Tủ quần áo</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Máy xấy tóc</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i>Dép đi trong nhà</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Minibar</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i>Áo choàng tắm</p>
                    </div>
                    <div class="col-sm-4">
                       <p class="tienich"> <i class="far fa-check-circle"></i> Vật dụng phòn tắm</p>
                    </div>
                 </div>
              </div>
              <div>
                <h2 class="title " style="margin-top: 10px;"><span class="pink-color">Quy Tắc</span> Khách Sạn</h2>
             </div>
              <div class="container">
                 <p class="tienich">-Nhận phòng sau 14h00</p>
                 <p class="tienich">-Trả phòng trước 12h00, nếu trả sau thời gian quy định sẽ phụ thu theo chính sách khách sạn</p>
                 <p class="tienich">-Trẻ em từ 5 tuổi trở xuống miễn phí ở chung với bố mẹ</p>
                 <p class="tienich">-Từ 6-11 tuổi phụ thu giá trẻ em và ở chung với bố mẹ</p>
                 <p class="tienich">-Từ 12 tuổi trở lên phụ thu phí, bắt buộc kê thêm giường phụ (phụ thu)</p>
                 <p class="tienich">-Đủ 18 tuổi mới được nhận phòng</p>
                 <p class="tienich">-Khách sạn chấp nhận các loại thẻ Visa hoặc Mastercard. Và giữ quyền khóa 1 tài khoản tiền tạm thời trước khi bạn đến nhận phòng.</p>
                 <p class="tienich">-Theo quy định của luật Việt Nam một khách nước ngoài + 1 khách Việt Nam phải có giấy đăng ký kết hôn khi sử dụng chung phòng.</p>
                 <p class="tienich">-Không được phép mang theo vật nuôi</p>
                 <p class="tienich">-Thực hiện đúng quy tắc của khách sạn</p>
              </div>
              <div>
              </div>
              <div id="binhluan" style="margin-top: 15px;">
    
   
               <h2 class="block"><b style="color: black;">Bình Luận</b></h2>
          
               <div style="background-color:rgba(30,198,182,.05); margin-top: 25px; padding: 15px;border: 1px solid rgba(20,132,121,.2);">
              
                   <ul>
                       <li><p><b>Hiếu Phạm</b> 4/5/2020 5:14 PM</p>
                       <p> <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
       
                       </p>
                       <p style="font-size: 20x;">Luxury booking hộ trợ khách hàng rất chu đáo</p>
                   </li>
                   <li><p><b>Hiếu Phạm</b> 4/5/2020 5:14 PM</p>
                       <p> <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
                           <i style="color: #f2d359" class="fa fa-star"></i> 
       
                       </p>
                       <p style="font-size: 20x;">Dịch Vụ khách sạn hoàn hảo</p>
                   </li>
                   </ul>
              
             </div>
       </div>  
              <div class=" container" style="margin-top: 30px; ">
                <div>
                    <h2 class="title " id="cacdiemluutru" style="margin-top: 40px;"><span class="pink-color">Các Khách Sạn</span> Khác</h2>
                 </div>
                 <div  style="margin-top: 55px;">
                    <div id="wp-slider">
                       <div class="owl-carousel owl-theme">
                          <div class="item">
                             <div class="card" style="width: 18rem;">
                                <img src="{{ asset('source/image/Khachsan/5sao/nalos.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                   <a href="#" class="dat-tour">Nalos Hotel</a>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="card" style="width: 18rem;">
                                <img src="{{ asset('source/image/Khachsan/5sao/pulchra.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                   <a href="#" class="dat-tour">Pulchra Da Nang</a>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="card" style="width: 18rem;">
                                <img src="{{ asset('source/image/Khachsan/5sao/sheraton.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                   <a href="#" class="dat-tour">Sheraton Hotel</a>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="card" style="width: 18rem;">
                                <img src="{{ asset('source/image/Khachsan/5sao/premiervillage.jpg') }}" class="card-img-top" >
                                <div class="card-body">
                                   <a href="#" class="dat-tour">Premiervillage Đà Nẵng
    
                                 </a>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="card" style="width: 18rem;">
                                <img src="{{ asset('source/image/Khachsan/5sao/novotel1.jpg') }}" class="card-img-top" >
                                <div class="card-body">
                                   <a href="#" class="dat-tour"> Novotel</a>          
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <script>
                 $(document).ready(function(){
                 $('.owl-carousel').owlCarousel({
                 loop:true,
                 margin:10,
                 nav:true,
                 autoplay:true,
                 autoplayTimeout:2000,
                 autoplayHoverPause:true,
                 responsive:{
                     0:{
                         items:1
                     },
                     600:{
                         items:2
                     },
                     1000:{
                         items:3
                     }
                 }
                 })
                 
                 }); 
              </script>
           </div>
           <div class="col-sm-2">
              <div class="card thanhtoan" style="width: 18rem;">
                 <div class="card-body">
                  @if($sanpham->pricefree==0)
                  <h5 class="card-title dat-tour" >{{$sanpham->price_hotel}}<sup>đ</sup></h5>
                 @else
                 <h5 class="card-title"><del>{{$sanpham->price_hotel}} <sup>đ</sup></del></h5>
                 <h5 class="card-title dat-tour" >{{$sanpham->pricefree}}<sup>đ</sup></h5>
                 @endif
                    
                   
                    <p><i style="color: red;" class="fas fa-exclamation-circle" &ens></i> phí đã bao gồm ăn sáng và đồ uống tại phòng</p>
                    <a  href="{{route('datphong')}}" class="thanhtoan ">Đặt online</a>
                 </div>
                 <div class="card-body">
                    <h5 style="text-align: center;" class="card-title"><i style="color: red;" class="fas fa-phone" ></i>HotLine 24/7</h5>
                    <h5 style="text-align: center;" class="card-title">028223042-28377234</h5>
                 </div>
              </div>
           </div>
        </div>
     </div>

@endsection