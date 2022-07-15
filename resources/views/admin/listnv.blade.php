@extends('admin.admin')
@section('content')
<style>
     .add{
        margin-left: auto!important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Danh sách nhân viên</h4>
                    <a href="{{url('quanly/addnv')}}" class="add">
                    <button class="btn btn-primary btn-round ml-auto" >
                        <i class="fa fa-plus"></i>
                       Thêm nhân viên
                    </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->

                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                     @if (Session::has('delete-nhanvien'))
                         <div class="alert alert-success">
                            {{Session::get('delete-nhanvien')}}
                         </div>
                     @endif
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Ảnh</th>
                                <th>Chức vụ</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($listnv as $nv)
                              
                            <tr>
                                <td>{{$nv->id}}</td>
                                <td>{{$nv->name}}</td>
                                <td><img style="max-width: 100px;max-height: 100px;" src="source/images/nv/{{$nv->image}}" alt=""></td>
                                <td>@if ($nv->position == 2)
                                        {{'Quản Lý'}}
                                    @elseif($nv->position == 1)
                                        {{'Nhân viên'}}
                                    @endif
                                </td>
                                <td>{{$nv->email}}</td>
                                <td>0{{$nv->phone}}</td>
                                <td>{{$nv->address}}</td>
                                <td>
                                    <div class="form-button-action">
                                        @if ($nv->id == Auth::user()->id || $nv->position == 2)
                                                <a href="{{url('quanly/editnv')}}/{{$nv->id}}">
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Sửa thông tin">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Không thể xóa">
                                                    <i class="fas fa-ban"></i>
                                                </button>
                                        @elseif($nv->id == Auth::user()->id || $nv->position == 1 )
                                        <a href="{{url('quanly/editnv')}}/{{$nv->id}}">
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Sửa thông tin">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{url('quanly/xoanv')}}/{{$nv->id}}">
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Đuổi việc">
                                                <i class="fas fa-user-slash"></i>
                                            </button>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@push('scripts')
<script src="admin/assets/js/plugin/datatables/datatables.min.js"></script>
<script >
    $(document).ready(function() {
        $('#add-row').DataTable();
    });
</script>
@endpush
