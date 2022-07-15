@extends('admin.admin')
@section('content')
<style>
    .conphong{
        color: #35cd3a!important;
    
    }
    .hetphong{
        color: red;
    }
    .add{
        margin-left: auto!important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Danh sách sân</h4>
                    <a href="{{url('quanly/addhotel')}}" class="add">
                    <button class="btn btn-primary btn-round ml-auto" >
                        <i class="fa fa-plus"></i>
                       Thêm sân 
                    </button>
                </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                    New</span> 
                                    <span class="fw-light">
                                        Row
                                    </span>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Create a new row using this form, make sure you fill them all</p>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input id="addName" type="text" class="form-control" placeholder="fill name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer no-bd">
                                <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                     @if (Session::has('delete-hotel'))
                         <div class="alert alert-success">
                            {{Session::get('delete-hotel')}}
                         </div>
                     @endif
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sân</th>
                                <th>Mã sân</th>
                                <th>Giá sân</th>
                                <th>Tình trạng</th>
                                <th>Địa chỉ</th>
                                <th>Ảnh</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên sân</th>
                                <th>Mã sân</th>
                                <th>Giá sân</th>
                                <th>Tình trạng</th>
                                <th>Địa chỉ</th>
                                <th>Ảnh</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($hotel as $value)
                            <tr>
                                <td>{{$value->id_hotel}}</td>
                                <td>{{$value->hotel_name}}</td>
                                <td>{{$value->hotel_code}}</td>
                                <td>{{$value->price_hotel}}</td>
                                @if ($value->status==0)
                                <td><i class="fas fa-check-circle conphong" > On</i></td>
                                @else
                                <td><i class="fas fa-times-circle hetphong"> Off</i></td>
                                @endif
                               
                                <td>{{$value->address}}</td>
                                <td><img style="max-width: 80px;max-height: 50px;" src="source/image/Khachsan/5sao/{{$value->image}}" alt=""></td>
                                <td>
                                    <div class="form-button-action">
                                        <a href="{{url('quanly/edithotel')}}/{{$value->id_hotel}}">
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Sửa thông tin">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{url('quanly/xoahotel')}}/{{$value->id_hotel}}">
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </a>
                                        
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
