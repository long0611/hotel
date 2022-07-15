@extends('admin.admin')
@section('content')

<style>
    .add{
    border-radius: 5px;
    background-color: #fff;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 1px 15px 1px rgba(69,65,78,.08);
    -moz-box-shadow: 0 1px 15px 1px rgba(69,65,78,.08);
    box-shadow: 0 1px 15px 1px rgba(69,65,78,.08);
    border: 0;
    }
    .add label{
        font-size: 15px!important;
    }
    .add form{
        margin: 20px 40px 20px 40px;
    }
</style>
<div class="page-header">
    <h4 class="page-title">Khách sạn</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Sân</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Sửa thông tin</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="add">
                  @if (count($errors) > 0)
                    @foreach ($errors->all() as $value)
                      <div class="alert alert-danger">
                          {{$value}}
                      </div>
                    @endforeach
                  @endif
                  @if (session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                  @elseif(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                  @endif
            <form method="post" enctype="multipart/form-data" action="{{url('quanly/edithotel')}}/{{$edithotel->id_hotel}}">
              @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Tên sân</label>
                      <input type="text" class="form-control" id="namehotel" name="namehotel" value="{{$edithotel->hotel_name}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Mã sân</label>
                      <input type="text" class="form-control" id="codehotel" name="codehotel" value="{{$edithotel->hotel_code}}">
                    </div>
                    <!-- <div class="form-group col-md-3">
                        <label for="inputPassword4">Loại phòng</label>
                            <select name="typehotel" class="form-control" id="typehotel" >
                                @if($edithotel->id_room == 1)
                                <option value="1">Thường</option>
                                @elseif($edithotel->id_room == 2)
                                <option value="2">Suite</option>
                                @elseif($edithotel->id_room == 3)
                                <option value="3">King size</option>
                                @elseif($edithotel->id_room == 4)
                                <option value="4">Deluxe</option>
                                @elseif($edithotel->id_room == 5)
                                <option value="5">Luxury</option>
                                @endif
                                <option value=""></option>
                                @foreach ($them as $item)
                                <option value="{{$item->id_room}}">{{$item->type_room}}</option>
                            @endforeach
                            </select>
                      </div> -->
                  </div>
                  <div class="form-group">
                      <label for="">Địa chỉ</label>
                      <input type="text" name="address" id="address" class="form-control" value="{{$edithotel->address}}">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Giá sân</label>
                    <input type="text" class="form-control" name="pricehotel" id="pricehotel" value="{{$edithotel->price_hotel}}">
                  </div>
                  <!-- <div class="form-group col-md-6">
                    <label for="inputPassword4">Giá khuyến mãi</label>
                    <input type="text" class="form-control" name="free" id="free" value="{{$edithotel->pricefree}}">
                  </div> -->
                  <div class="form-group col-md-6">
                    <label for="inputState">Tình trạng</label>
                    <select id="inputState" name="tinhtrang" class="form-control">
                        @if($edithotel->status == 0)
                            <option value="0">Còn sân</option>
                        @elseif($edithotel->status == 1)
                            <option value="1">Hết sân</option>
                        @endif
                        <option value=""></option>
                        <option value="0">Còn sân</option>
                        <option value="1">Hết sân</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  
                  <!-- <div class="form-group col-md-6">
                    <label for="danhgia">Đánh giá</label>
                    <select id="danhgia" name="danhgia" class="form-control">
                      <option value="" selected></option>
                      <option value="1 Sao" >1 Sao</option>
                      <option value="2 Sao">2 Sao</option>
                      <option value="3 Sao">3 Sao</option>
                      <option value="4 Sao">4 Sao</option>
                      <option value="5 Sao">5 Sao</option>
                    </select>
                  </div> -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img  style="max-height: 100px;max-width: 100px;" src="source/image/khachsan/5sao/{{$edithotel->image}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="custom-file row">
                            <input type="file" class="custom-file-input" name="hinh" id="customFile">
                            <label class="custom-file-label"  for="customFile">Ảnh khách sạn</label>                 
                    </div>
                    </div>
                </div>
               
                <div style=" padding-bottom: 10px; padding-top: 5px;text-align: center;">
                    <button type="submit" class="btn btn-primary">Sửa thông tin sân</button>
                </div>
                
              </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection