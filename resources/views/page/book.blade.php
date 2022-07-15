@extends('master')
@section('content')
<div class="category-header" style="background: url(source/image/Background/bg-cate1.jpg); ">
        <h1 class="category-title">Đặt phòng</h1>
     </div>
   
     <div id="booking" class="section">
        <div class="section-center">
          <div class="container">
            <div class="row">
              <div class="booking-form" style="background: url(source/image/Khachsan/5sao/muongthanh.jpg); ">

                <div>
                @if(Session::has('booked'))
							      <div class="alert alert-success">{{Session::get('booked')}}</div>
						  @endif
                </div>
                @if(session()->has('permission'))

                <form method="post" action="">
                {{ csrf_field() }}
         
                  <div class="form-group">
                  <select class="form-control" id="loaihotel" name="loaihotel" required>
                          <option value="" selected hidden>Loại phòng</option>
                          @foreach($loaihotel as $value)
                          <option value="{{ $value->id_room }}" class="select-option">{{$value->type_room}}</option>
                          @endforeach
                        </select>
                        <span class="select-arrow"></span>
                    <span class="form-label">Loại phòng</span>
                  </div>

                  <div class="form-group">
                  <select class="form-control" id="hotel" name="hotel" required>
                        <!-- <option class="select-option">Chọn khách sạn</option> -->

                  </select>
                        <span class="select-arrow"></span>
                    <span class="form-label">Khách sạn</span>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="date" name="checkin" id="date" required>
                          <span class="form-label">Check In</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="date" id="date" name="checkout" required>
                          <span class="form-label">Check Out</span>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control" id="thanhtoanqua" class="thanhtoanqua" name="thanhtoanqua" required>
                            <option value="" selected hidden>Thanh toán qua</option>
                            <option>Chuyển khoản</option>
                            <option>Thanh toán qua momo</option>
                            <option>Thanh toán trực tiếp</option>
                          </select>
                          <span class="select-arrow"></span>
                          <span class="form-label">Pays</span>
                        </div>
                      </div>
                  </div>
                  <div class="form-btn">
                    <button class="submit-btn" type="submit">Book Now</button>
                  </div>
                </form>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    

      <script>
        document.getElementById("loaihotel").onchange = listQ;
        function listQ(){
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:"{{ route('ajaxHotel') }}",
              method:"GET", 
              data:{query:this.value, _token:_token},
              success:function(data){ 
                document.getElementById('hotel').innerHTML = data;
              }
            });
    
        }

        $('.form-control').each(function () {
          floatedLabel($(this));
        });
    
        $('.form-control').on('input', function () {
          floatedLabel($(this));
        });
    
        function floatedLabel(input) {
          var $field = input.closest('.form-group');
          if (input.val()) {
            $field.addClass('input-not-empty');
          } else {
            $field.removeClass('input-not-empty');
          }
        }
      </script>
@endsection