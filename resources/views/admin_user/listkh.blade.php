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
                    <h4 class="card-title">Khách hàng</h4>
                    <a href="{{url('quanly/addhotel')}}" class="add">
                    <button class="btn btn-primary btn-round ml-auto" >
                        <i class="fa fa-plus"></i>
                       Thêm khách hàng 
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
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Giới tính</th>
                                <th>Số điện thoại</th>
                                <!-- <th>Email</th> -->
                                <th>Địa chỉ</th>
                               
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                @foreach ($listkh as $kh)
                                <td>{{$kh->id_customer}}</td>
                                <td>{{$kh->name_customer}}</td>
                                <td>{{$kh->gender}}</td>
                                <td>0{{$kh->sdt}}</td>
                                <!-- <td>{{$kh->email}}</td> -->
                                <td>{{$kh->address}}</td>
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
