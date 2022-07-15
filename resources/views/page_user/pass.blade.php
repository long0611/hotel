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
            <a href="#">Đổi mật khẩu</a>
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
                  @if(Session::has('errorpass'))
                        <div class="alert alert-danger">{{Session::get('errorpass')}}</div>
                  @endif
                  @if(Session::has('checkpass'))
                        <div class="alert alert-danger">{{Session::get('checkpass')}}</div>
                  @endif
                  @if(Session::has('thanhcong3'))
                        <div class="alert alert-success">{{Session::get('thanhcong3')}}</div>
                  @endif
            <form method="post"  action="{{route('repass')}}">
              @csrf
                <div class="form-group">
                    <label for="">Mật khẩu hiện tại</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu mới</label>
                    <input type="password" name="repass" id="repass" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Nhập lại mật khẩu mới</label>
                    <input type="password" name="passconfirm" id="passconfirm" class="form-control" placeholder="">
                </div>
               
               
                <div style=" padding-bottom: 10px; padding-top: 5px;text-align: center;">
                    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                </div>
                
              </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection