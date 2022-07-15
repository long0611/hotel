<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Hotel;
use App\Models\Detail_hotel;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Models\detail_booking;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class ADController extends Controller
{
    
    public function getMain(){
        return view('admin.main');
    }

    public function listHotel(){
        $hotel = Hotel::all();
        return view('admin.hotel',compact('hotel'));
    }    
    public function addHotel(){
        $them = Detail_hotel::all();
        $them1 = Hotel::all();
        return view('admin.addhotel',compact('them','them1'));
    }
    public function postaddHotel(Request $request){
        $this->validate($request,
        [

            'codehotel' => 'required|unique:hotel,hotel_code',
        ],
        [
            'codehotel.required' => 'Bạn chưa nhập Mã khách sạn',
            'codehotel.unique' => 'Mã khách sạn đã tồn tại',
        ]
    );
        $addhotel = new Hotel();
        $addhotel->hotel_name = $request->namehotel;
        $addhotel->hotel_code = $request->codehotel;
        $addhotel->id_room = $request->typehotel;
        $addhotel->address = $request->address;
        $addhotel->price_hotel = $request->pricehotel;
        $addhotel->pricefree = $request->free;
        $addhotel->status = $request->tinhtrang;
        $addhotel->hotel_desc = $request->danhgia;

        if($request->hasFile('hinh'))
            {
            $file = $request ->file('hinh'); //lưu hình vào trong biến file
            $duoi = $file ->getClientOriginalExtension();
            if($duoi !='jpg' && $duoi !='png' && $duoi !='PNG')
            {
                return redirect('quanly/addhotel')->with('thongbao','mời bạn chọn ảnh có đuôi png hoặc jpg');
            }

            $name = $file->getClientOriginalName();//lấy tên cái hình ra
            
            $file ->move("source/image/Khachsan/5sao",$name); //lưu hình lại
            $addhotel-> image = $name;
        }
        else
        {
            $addhotel-> image =" ";
        }
        $addhotel->save();
        return redirect()->back()->with('thanhcong', 'Thêm khách sạn thành công');
    }

    public function edithotel($id_hotel){
        $them = Detail_hotel::all();
        $edithotel = Hotel::where('id_hotel',$id_hotel)->first();
        return view('admin.edithotel',compact('edithotel','them'));
    }
    public function postedithotel(Request $request,$id_hotel){
       
        $edithotel = Hotel::where('id_hotel' ,$id_hotel)->first();

        $edithotel->hotel_name = $request->namehotel;
        $edithotel->hotel_code = $request->codehotel;
        $edithotel->id_room = $request->typehotel;
        $edithotel->address = $request->address;
        $edithotel->price_hotel = $request->pricehotel;
        // $edithotel->pricefree = $request->free;
        $edithotel->status = $request->tinhtrang;
        // $edithotel->hotel_desc = $request->danhgia;
        $this->validate($request,
        [
            'namehotel'  => 'required',
            'codehotel'  => 'required',
            'address'    => 'required',
            'pricehotel' => 'required',
            // 'free'       => 'required',
        ],
        [
            'namehotel.required'  => 'Bạn chưa nhập tên khách sạn',
            'codehotel.required'  => 'Bạn chưa nhập mã khách sạn',
            'address.required'    => 'Bạn chưa nhập địa chỉ',
            'pricehotel.required' => 'Bạn chưa nhập giá sân',
            // 'free.required'       => 'Giá khuyến mãi không được để trống',
            
        ]);
        if($request->hasFile('hinh'))
        {
            $file = $request ->file('hinh'); //lưu hình vào trong biến file
            $duoi = $file ->getClientOriginalExtension();
        if($duoi !='jpg' && $duoi !='png' && $duoi !='PNG')
        {
            return redirect('quanly/edithotel')->with('thongbao','mời bạn chọn ảnh có đuôi png hoặc jpg');
        }

        $name = $file->getClientOriginalName();//lấy tên cái hình ra
        
        $file ->move("source/image/Khachsan/5sao",$name); //lưu hình lại
        $edithotel-> image = $name;
        }
        else
        {
            $edithotel-> image =" ";
        }
        $edithotel->save();
        return redirect()->back()->with('thanhcong', 'Sửa thông tin sân thành công');
    }

    public function xoahotel($id_hotel){
        {
            $xoaHotel = Hotel::where('id_hotel' ,$id_hotel)->first();
            $xoaHotel->delete();
            return redirect('quanly/hotel')->with('delete-hotel', 'Xóa sân thành công');
        }
    }

    public function listkh(){
        $listkh = Customer::all();
        return view('admin_user.listkh',compact('listkh'));
    }

    public function lichsu(){
        $his = detail_booking::all();
        return view('admin_user.lichsu',compact('his'));
    }

    public function listnv(){
        $listnv = User::where('position','>',0)->get();
        return view('admin.listnv',compact('listnv'));
    }
    public function addnv(){
        return view('admin.addnv');
    }
    public function postaddnv(Request $request){
        $this->validate($request,
        [
            'namenv' => 'required|min:5',
            'emailnv' => 'required|unique:users,email|min:10',
            'sdtnv' => 'required|unique:users,phone|min:10|max:10',
            'address' => 'required',
            'position' => 'required',
        ],
        [
            'namenv.required' => 'Bạn chưa nhập họ tên',
            'namenv.min' => 'Nhập cả họ và tên',
            'emailnv.required' => 'Bạn chưa nhập email',
            'emailnv.unique' => 'Email đã tồn tại',
            'emailnv.min' => 'Nhập email lớn hơn 10 ký tự',
            'sdtnv.required' => 'Bạn chưa nhập số điện thoại',
            'sdtnv.unique' => 'Số điện thoại đã tồn tại',
            'sdtnv.min' => 'Số điện thoại tối đa 10 số',
            'sdtnv.max' => 'Số điện thoại tối đa 10 số',
            'address.required' => 'Bạn chưa nhập nơi hiện tại đang ở',
            'address.min' => 'Có thành phố nào ít hơn 5 ký hả',
            'position.required' => 'Bạn chưa chọn chức vụ',
        ]
    );
            $user = new User();
            $user->name = $request->namenv;
            $user->email = $request->emailnv;
            $user->phone = $request->sdtnv;
            $user->address = $request->address;
            $user->position = $request->position;
            if($request->hasFile('hinh'))
        {
            $file = $request ->file('hinh'); //lưu hình vào trong biến file
            $duoi = $file ->getClientOriginalExtension();
        if($duoi !='jpg' && $duoi !='png' && $duoi !='PNG')
        {
            return redirect('quanly/addnv')->with('thongbao4','mời bạn chọn ảnh có đuôi png hoặc jpg');
        }

        $name = $file->getClientOriginalName();//lấy tên cái hình ra
        
        $file ->move("source/images/nv",$name); //lưu hình lại
        $user-> image = $name;
        }
        else
        {
            $user-> image =" ";
        }
        $user->save();
        return redirect()->back()->with('addnv', 'Thêm nhân viên '.$user->name.' thành công');
    }

    public function editnv($id){
        $user = User::find($id);
        return view('admin.editnv',compact('user'));
    }
    public function posteditnv(Request $request,$id){
        $user = User::find($id);
        $this->validate($request,
        [
            'namenv' => 'required|min:5',
            'address' => 'required',

        ],
        [
            'namenv.required' => 'Bạn chưa nhập họ tên',
            'namenv.min' => 'Nhập cả họ và tên',
            'address.required' => 'Bạn chưa nhập nơi hiện tại đang ở',
        ]
        );
        $user->name = $request->namenv;
        $user->email = $request->emailnv;
        $user->phone = $request->sdtnv;
        $user->address = $request->address;
        $user->position = $request->position;
        if($request->hasFile('hinh'))
        {
            $file = $request ->file('hinh'); //lưu hình vào trong biến file
            $duoi = $file ->getClientOriginalExtension();
        if($duoi !='jpg' && $duoi !='png' && $duoi !='PNG')
        {
            return redirect('quanly/editnv')->with('thongbao5','mời bạn chọn ảnh có đuôi png hoặc jpg');
        }

        $name = $file->getClientOriginalName();//lấy tên cái hình ra
        
        $file ->move("source/images/nv",$name); //lưu hình lại
        $user-> image = $name;
        }
        else
        {
            $user-> image =" ";
        }
        $user->save();
        return redirect()->back()->with('edit-nhanvien', 'Sửa nhân viên '.$user->name.' thành công');

    }
    public function xoanhanvien($id)
    {
        # code...
        $xoaUser = User::find($id);
        $xoaUser->delete();
        return redirect('quanly/listnv')->with('delete-nhanvien', 'Đã đuổi việc '.$xoaUser->name);
    }

    public function repassadmin(){
        $pass =  User::where('id' , FacadesAuth::user()->id)->first();
        return view('admin.adminpass',compact('pass'));
    }
    public function postrepassadmin(Request $request){
        $pass = User::where('id' , FacadesAuth::user()->id)->first();
        $this->validate($request,
                [
                    'password' => 'required',
                    'repass' => 'required|min:3|max:100',
                    'passconfirm' => 'required',

                ],
                [
                    'password.required' => 'Bạn chưa nhập mật khẩu cũ',
                    'repass.required' => 'Bạn chưa nhập mật khẩu mới',
                    'passconfirm.required' => 'Bạn chưa nhập lại mật khẩu',
                    'repass.min' => 'Nhập mật khẩu mới lớn hơn 3 ký tự',
                    'repass.max' => 'Nhập lại mật khẩu mới nhỏ hơn 100 ký tự'

                ]
            );
        if (FacadesHash::check($request->password, $pass->password)) {
            # code...
            if ($request->repass == $request->passconfirm) {
                # code...
                $pass->password = bcrypt($request->passconfirm);

            }
            else {
            return redirect()->back()->with('errorpass', 'Nhập lại mật khẩu không khớp');
            }
        }else{
            return redirect()->back()->with('checkpass', 'Mật khẩu cũ không khớp');
        }
        $pass->save();
        return redirect()->back()->with('thanhcong3','Đổi mật khẩu thành công');
    }








    public function adminLogin(){
        return view('view_admin.login');
    }
    public function adminPostLogin(Request $request)
    {
      # code...
      $this->validate($request ,
            [
                'password' => 'min:3|max:100'
            ],

            [
                'password.min' => 'Nhập mật khẩu hơn 3 ký tự',
                'password.max' => 'Nhập mật khẩu ít hơn 100 ký tự'
            ]
        );

        if (FacadesAuth::attempt(['email' => $request->username, 'password' => $request->password], $request->has('remember'))) {
            # code...
            return redirect('quanly/tongquan');
        }else{
            return redirect()->back()->with('errorno', 'Sai email, số điện thoại hoặc mật khẩu');
        }
    }
    public function logout()
    {
        # code...
        FacadesAuth::logout();
        return redirect('quanly/tongquan');
    }
}
