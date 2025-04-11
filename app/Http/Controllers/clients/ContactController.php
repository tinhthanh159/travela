<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'Liên hệ';
        return view('clients.contact', compact('title'));
    }

    public function createContact(Request $req){
        $dataContact = [
            'fullName'    => $req->name,
            'phoneNumber' => $req->phone_number,
            'email'       => $req->email,
            'message'     => $req->message,
            'isReply'     => 'n',
        ];
    
        $createContact = DB::table('tbl_contact')->insert($dataContact); 
    
        if ($createContact) {
            return response()->json(['success' => true, 'message' => 'Gửi thành công. Chúng tôi sẽ sớm liên hệ tới bạn!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra. Xin vui lòng thử lại.'], 500);
        }
    }
    
}