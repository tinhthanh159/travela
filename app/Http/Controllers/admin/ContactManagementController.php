<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ContactManagementController extends Controller
{

    private $contact;

    public function __construct()
    {
        $this->contact = new ContactModel();
    }
    public function index()
    {
        $title = 'Liên hệ';

        $contacts = $this->contact->getContacts();
        // dd($contacts);

        return view('admin.contact', compact('title', 'contacts'));
    }

    public function replyContact(Request $request)
    {
        $contactId = $request->contactId;
        $emailReply = $request->email;
        $messageContent = $request->message;
        // Kiểm tra xem message có phải là chuỗi
        if (is_object($messageContent)) {
            $messageContent = (string) $messageContent; // Chuyển đối tượng thành chuỗi nếu cần
        }
        try {
            Mail::send('admin.emails.reply-contact', compact('messageContent'), function ($message) use ($emailReply) {
                $message->to($emailReply)
                    ->subject('Phản hồi liên lệ của khách hàng');
            });
            // Cập nhật trạng thái
            $dataUpdate = [
                'isReply' => 'y'
            ];
            $this->contact->updateContact($contactId, $dataUpdate);

            return response()->json([
                'success' => true,
                'message' => 'Phản hồi qua email thành công.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể gửi email: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function deleteContact($id)
    {
        try {
            $this->contact->deleteContact($id); // ← DÒNG NÀY bạn thêm vào

            return redirect()->back()->with('success', 'Đã xóa liên hệ thành công.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Xóa thất bại: ' . $e->getMessage());
        }
    }
}
