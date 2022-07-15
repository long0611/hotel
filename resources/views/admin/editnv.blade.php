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
    <h4 class="page-title">Nhân viên</h4>
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
            <a href="#">Nhân viên</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Sửa thông tin nhân viên</a>
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
                  @if (session('thongbao5'))
                    <div class="alert alert-danger">
                        {{session('thongbao5')}}
                    </div>
                  @elseif(Session::has('edit-nhanvien'))
                        <div class="alert alert-success">{{Session::get('edit-nhanvien')}}</div>
                  @endif
            <form method="post" enctype="multipart/form-data" action="{{url('quanly/editnv')}}/{{$user->id}}">
              @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputEmail4">Họ và tên</label>
                      <input type="text" class="form-control" id="namenv" name="namenv" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Email</label>
                        <input type="email" class="form-control" id="emailnv" name="emailnv" value="{{$user->email}}" >
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputPassword4">Số điện thoại</label>
                          <input type="text" class="form-control" id="sdtnv" name="sdtnv" value="0{{$user->phone}}" >
                      </div>
                </div>
                <div class="form-group">
                    <label for="">Quê quán</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}">
                </div>

                <div class="form-group row justify-content-end">
                    <label class="col-md-3 control-label">Chức vụ</label>
                    <div class="col-md-9">
                        <div class="checkbox-info">                   
                            <input id="radio1" type="radio" value="2" @if ($user->position == 2) {{'checked'}} @endif name="position">
                            <label for="radio1" id="pass"  onclick="myFunction();" class="btn btn-outline-info button
                            @if ($user->position == 2) {{'selected'}} @endif ">
                            Quản lý
                            </label>

                            <input id="radio2" type="radio" value="1" @if ($user->position == 1) {{'checked'}} @endif name="position">
                            <label class="btn btn-outline-info button @if ($user->position == 1) {{'selected'}} @endif
                            " onclick="myFunction();;"  for="radio2">
                                Nhân viên
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img  style="max-height: 100px;max-width: 100px;" src="source/images/nv/{{$user->image}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh" id="customFile">
                            <label class="custom-file-label"  for="customFile">Ảnh nhân viên</label>
                        </div>
                    </div>
                </div>
                
                <div style=" padding-bottom: 10px; padding-top: 5px;text-align: center;">
                    <button type="submit" class="btn btn-primary">Sửa Thông tin</button>
                </div>
                
              </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection