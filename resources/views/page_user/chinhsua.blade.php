@extends('page_user.index')
@section('content1')

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
    <h4 class="page-title">Thông tin cá nhân</h4>
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
            <a href="#">Thông tin</a>
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
                  @if(Session::has('thanhcong2'))
                        <div class="alert alert-success">{{Session::get('thanhcong2')}}</div>
                  @endif
            <form method="post"  action="{{route('suathongtin')}}">
              @csrf
                <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputEmail4">Họ tên</label>
                      <input type="text" class="form-control" id="namecustomer" name="namecustomer" placeholder="{{$edituser->name_customer}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Giới tính</label>
                            <select name="gender" class="form-control" id="gender" >
                                <option value="{{$edituser->gender}}">{{$edituser->gender}}</option>
                                <option value=""></option>
                               <option value="Nam">Nam</option>
                               <option value="Nữ">Nữ</option>
                            </select>
                      </div>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Số điện thoại</label>
                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="0{{$edituser->sdt}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{$edituser->email}}">
                  </div>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="{{$edituser->address}}">
                </div>
               
               
                <div style=" padding-bottom: 10px; padding-top: 5px;text-align: center;">
                    <button type="submit" class="btn btn-primary">Sửa thông tin</button>
                </div>
                
              </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection