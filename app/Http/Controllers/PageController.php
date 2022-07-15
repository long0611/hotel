<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Detail_thanhtoan;
use App\Models\Slide;
use App\Models\Hotel;
use App\Models\Thanhtoan;
use App\Models\detail_booking;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\Detail_hotel;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\View as FacadesView;

class PageController extends Controller
{   


    
    public function __construct()
    {
        # code...
        $loaihotel = Detail_hotel::all();
        $hotel = Hotel::all();

        // return view('layout_page.master_view', ['tang' => $tang, 'phong' => $phong]);
        FacadesView::share('loaihotel', $loaihotel);
        FacadesView::share(['hotel' => $hotel]);
    }


    public function ajaxHotel(Request $res){
        $hotelList = Hotel::where('id_room',$res->get('query'))->get();
        foreach ($hotelList as $hotel){
            if($hotel->status == 0){
                echo '<option value = "' . $hotel->id_hotel . '">' . $hotel->hotel_name . '</option>';
            }
            
        }

    }
    public function khpage(){
        return view('page_user.index');
    }
    public function hisdatphong(){
        
        $getUser = detail_booking::where('id_customer' , session()->get('id_customer'))->get();
        return view('page_user.datphong',compact('getUser'));
    }
    public function editthongtin(){
        $edituser = Customer::where('id_customer' , session()->get('id_customer'))->first();
        return view('page_user.chinhsua',compact('edituser'));
    }
    public function postsua(Request $request){
        $edituser = Customer::where('id_customer' , session()->get('id_customer'))->first();
        $edituser->name_customer = $request->namecustomer;
        $edituser->gender = $request->gender;
        $edituser->sdt = $request->sdt;
        $edituser->email = $request->email;
        $edituser->address = $request->address;
        $this->validate($request,
        [
            'namecustomer'=> 'required',
            'sdt'         => 'required|min:10|max:10',
            'address'     => 'required',
            'email'       => 'required|unique:customer,email|min:10|max:255',
        ],
        [
            'namecustomer.required'  => 'Bạn chưa nhập tên khách sạn',
            'sdt.required'        => 'Bạn chưa nhập số điện thoại',
            'sdt.min'             => 'Nhập số điện thoại 10 số',
            'sdt.max'             => 'Nhập số điện thoại 10 số',
            'address.required'    => 'Bạn chưa nhập địa chỉ',
            'email.unique'        => 'email đã tồn tại',
            'email.required'      => 'Bạn chưa nhập email',
            'email.min'           => 'Vui lòng nhập đúng địa chỉ email',
            'email.max'           => 'Vui lòng nhập đúng địa chỉ email',
            
        ]);
        $edituser->save();
        return redirect()->back()->with('thanhcong2', 'Sửa thông tin thành công');
    }
    public function repass(){
        $editpass = Customer::where('id_customer' , session()->get('id_customer'))->first();
        return view('page_user.pass',compact('editpass'));
    }
    public function postrepass(Request $request){
        $editpass = Customer::where('id_customer' , session()->get('id_customer'))->first();
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
        if (FacadesHash::check($request->password, $editpass->password)) {
            # code...
            if ($request->repass == $request->passconfirm) {
                # code...
                $editpass->password = bcrypt($request->passconfirm);

            }
            else {
            return redirect()->back()->with('errorpass', 'Nhập lại mật khẩu không khớp');
            }
        }else{
            return redirect()->back()->with('checkpass', 'Mật khẩu cũ không khớp');
        }
        $editpass->save();
        return redirect()->back()->with('thanhcong3','Đổi mật khẩu thành công');
    }


    public function getIndex(){

        $slide = Slide::all();
        $hotel = Hotel::where('new',1)->get();
        return view('page.trangchu',compact('slide','hotel'));
    }

    public function getHotel(Request $res , $type){
        $startprice = "";
        $endprice = "";
        if ($res->startprice != ""){
            if (explode("=",explode("?", $res->query('startprice'))[1])[0] == "endprice"){
                $startprice = explode("=",explode("?", $res->query('startprice'))[0])[0];
                $endprice = explode("=",explode("?", $res->query('startprice'))[1])[1];
            }
        }

        if ($startprice != "" && $endprice != ""){
            $loai_hotel = Hotel::where('hotel_desc','5 sao')->where('price_hotel' , '>' , $startprice)->where('price_hotel' , '<' , $endprice)->paginate(6);
        }
        else {
            $loai_hotel = Hotel::where('hotel_desc','5 sao')->paginate(6);
        }
        $hotel_theoloai = Hotel::where('id_room',$type)->get();
  
        $free = Hotel::where('pricefree','<>',0)->where('hotel_desc','5 sao')->paginate(4);
        return view('page.hotel',compact('hotel_theoloai','loai_hotel','free'));
    }
    
    public function getChiTiet($id){
        $sanpham = Hotel::where('id_hotel',$id)->first();
        return view('page.chitiethotel',compact('sanpham'));
    }

    public function getFree(){
      
        return view('page.free');
    }
    
    public function getBooking(){
        
        return view('page.book');
    }

    public function postBooking(Request $request)
    {
       
        # code...
        // $booking = KhachHang::find($id);
        // $booking = Customer::find(session()->get('id_customer'));
        $hotel = Hotel::where('id_hotel' , $request->hotel)->first();
        if ($hotel->status == 0){
            Hotel::where('id_hotel' , $request->hotel)->update(['status' => 1]);
            $bookUser = Customer::where('id_customer' , session()->get('id_customer'))->first();
            $updateDetailBooking = new detail_booking();
            $updateDetailBooking->id_hotel = $request->hotel;
            $updateDetailBooking->checkin = $request->checkin;
            $updateDetailBooking->checkout = $request->checkout;
            $updateDetailBooking->id_customer = session()->get('id_customer');
            $updateDetailBooking->thanhtoanqua = $request->thanhtoanqua;
            $updateDetailBooking->save();
            return redirect()->back()->with('booked', 'Bạn đã đặt phòng thành công');
        }
        else {
            return redirect('index');
        }
    
    }



    public function getLogin(){
        return view('dangnhap.login1');
    }
    public function postLogin(Request $req){
        $this->validate($req ,
        [
            'email'=>'required|email',    
            'pass' => 'min:3|max:100'
        ],

        [   
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Vui lòng nhập đúng định dạng',
            'pass.min' => 'Nhập mật khẩu hơn 3 ký tự',
            'pass.max' => 'Nhập mật khẩu ít hơn 100 ký tự'
        ]
    );
    
        $user = Customer::where('email' , $req->email)->first();
        if( $user != null){
            if(FacadesHash::check($req->password, $user->password)) {
                session()->put('name' , $user->name_customer);
                session()->put('permission' , $user->permission);
                session()->put('id_customer' , $user->id_customer);
                if ($user->permission == 0){
                    return redirect('index');
                }
                else if ($user->permission = 1){
                    return redirect('admin');
                }
                
            } 
            else {
                return redirect()->back()->with('thatbai', 'Sai email hoặc mật khẩu');
            }
        }else{
            return redirect()->back()->with('thatbai', 'Tài khoản không tồn tại');
        }
        

      
        // if (Auth::guard('loyal_customer')->attempt(['email' => $req->email, 'password' => $req->password])) {
           
        //     // return redirect('free');
        //    return redirect('index');
        // } else {
        //     return redirect()->back()->with('thatbai', 'Sai email hoặc mật khẩu');
        // }
    }


    public function getDangky(){
        return view('dangnhap.dangky');
    }
    public function postDangky(Request $req){
        $this->validate($req,
        [
            'name' => 'min:5|max:100',
            'phone' => 'unique:customer,sdt|min:10|max:10',
            'email' => 'unique:customer,email|min:10|max:255',
            'address' => 'min:5|max:255',
            'password' => 'min:3|max:50',
        ],
        [
            'name.min' => 'Vui lòng nhập đầy đủ họ tên',
            'name.max' => 'Vui lòng nhập tên dưới 100 chữ',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.min' => 'Vui lòng nhập đúng số điện thoại',
            'phone.max' => 'Vui lòng nhập đúng số điện thoại',
            'email.unique' => 'Email đã tồn tại',
            'email.min' => 'Vui lòng nhập đúng địa chỉ email',
            'email.max' => 'Vui lòng nhập đúng địa chỉ email',
            'password.min' => 'Vui lòng nhập mật khẩu trên 3 ký tự',
            'password.max' => 'Vui lòng nhập mật khẩu dưới 50 ký tự',
        ]
        );
        $newKH = new Customer();
        $newKH->name_customer = $req->name;
        $newKH->gender = $req->gender;
        $newKH->permission = 0;
        $newKH->sdt = $req->sdt;
        $newKH->email = $req->email;
        $newKH->address = $req->address;
        if($req->password = $req->passconfirm){
            $newKH->password = bcrypt($req->passconfirm);
        }else{
            return redirect()->back()->with('errorpass','Mật khẩu không khớp');
        }
        $newKH->save();
        return redirect('dang-nhap')->with('thanhcong','Bạn đã đăng ký thành công, mời đăng nhập');
    }
}
