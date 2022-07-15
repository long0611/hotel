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
    <h4 class="page-title">Sân</h4>
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
            <a href="#">Thêm sân</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Thêm sân</a>
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
            <form method="post" enctype="multipart/form-data" action="{{url('quanly/addhotel')}}">
              @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Tên sân</label>
                      <input type="text" class="form-control" id="namehotel" name="namehotel" placeholder="Tên khách sạn">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Mã sân</label>
                      <input type="text" class="form-control" id="codehotel" name="codehotel" placeholder="Mã khách sạn">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="">Địa chỉ</label>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Giá Sân</label>
                    <input type="text" class="form-control" name="pricehotel" id="pricehotel" placeholder="Giá gốc">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Tình trạng</label>
                    <select id="inputState" name="tinhtrang" class="form-control">
                        <option value="" selected></option>
                      <option value="0">Còn sân</option>
                      <option value="1">Hết sân</option>
                    </select>
                  </div>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="hinh" id="customFile">
                    <label class="custom-file-label"  for="customFile">Ảnh sân</label>
                </div>
                <div style=" padding-bottom: 10px; padding-top: 5px;text-align: center;">
                    <button type="submit" class="btn btn-primary">Thêm sân</button>
                </div>
                
              </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection