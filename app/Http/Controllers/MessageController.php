<?php

namespace App\Http\Controllers;




use App\Events\GroupMessageEvent;
use App\Models\Message;
use App\Models\MessageGroup;
use App\Domains\Auth\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\PrivateMessageEvent;

class MessageController extends Controller
{
    public function conversation($userId) {
        $users = User::where('id', '!=', Auth::id())->get();
        $friendInfo = User::findOrFail($userId);
        $myInfo = User::find(Auth::id());
        $groups = MessageGroup::get();

        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['users'] = $users;
        $this->data['groups'] = $groups;

        return view('frontend.chat.message.conversation', $this->data);
    }

    public function sendMessage(Request $request) {
        $request->validate([
            'receiver_id' => 'required'
        ]);

        $sender_id = Auth::id();
        $receiver_id = $request->receiver_id;

        $message = new Message();
        $message->message = $request->message;

        if ($message->save()) {
            try {
                $message->users()->attach($sender_id, ['receiver_id' => $receiver_id]);
                $sender = User::where('id', '=', $sender_id)->first();

                $data = [];
                $data['sender_id'] = $sender_id;
                $data['sender_name'] = $sender->name;
                $data['receiver_id'] = $receiver_id;
                $data['content'] = $message->message;
                $data['created_at'] = $message->created_at;
                $data['message_id'] = $message->id;

                event(new PrivateMessageEvent($data));

                return response()->json([
                    'data' => $data,
                    'success' => true,
                    'message' => 'Message sent successfully'
                ]);
            } catch (\PDOException $e) {
                $message->delete();
            }
        }
    }

    public function sendGroupMessage(Request $request) {
        $request->validate([
            'message' => 'required',
            'message_group_id' => 'required'
        ]);

        $sender_id = Auth::id();
        $messageGroupId = $request->message_group_id;

        $message = new Message();
        $message->message = $request->message;

        if ($message->save()) {
            try {
                $message->users()->attach($sender_id, ['message_group_id' => $messageGroupId]);
                $sender = User::where('id', '=', $sender_id)->first();

                $data = [];
                $data['sender_id'] = $sender_id;
                $data['sender_name'] = $sender->name;
                $data['content'] = $message->message;
                $data['created_at'] = $message->created_at;
                $data['message_id'] = $message->id;
                $data['group_id'] = $messageGroupId;
                $data['type'] = 2;

                event(new GroupMessageEvent($data));

                return response()->json([
                    'data' => $data,
                    'success' => true,
                    'message' => 'Message sent successfully'
                ]);
            } catch (\PDOException $e) {
                $message->delete();
            }
        }
    }
}



// use App\Models\Message;
// use App\Domains\Auth\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Events\PrivateMessageEvent;
// use DB;

// class MessageController extends Controller
// {
    
//     public function conversation($userId) {
//         $users = User::where('id', '!=', Auth::id())->get();
//         $friendInfo = User::findOrFail($userId);
//         $myInfo = User::find(Auth::id());

//         $this->data['users'] =$users;
//         $this->data['friendInfo'] =$friendInfo;
//         $this->data['myInfo'] =$myInfo;
//         $this->data['users'] =$users;
//         $this->data['userId'] =$userId;

//         return view('frontend.chat.message.conversation', $this->data);
//     }


//     /**
//      * Display a listing of the resource.
//      * @param array $rules
//      * @param mixed ...$params
//      * @return array
//      * @var \Exceptions $e
//     */
//     public function sendMessage(Request $request, Message $message) {
//         $request->validate([
//             'message' => 'required',
//             'receiver_id' => 'required'
//         ]);

//         $sender_id = Auth::id();
//         $receiver_id = $request->receiver_id;

//         $message = new Message();
//         $message->message = $request->message;

//         if ($message->save()) {
//             try {
//                 $message->users()->attach($sender_id, ['receiver_id' => $receiver_id]);
//                 $sender = User::where('id', '=', $sender_id)->first();

//                 $data = [];
//                 $data['sender_id'] = $sender_id;
//                 $data['sender_name'] = $sender->name;
//                 $data['receiver_id'] = $receiver_id;
//                 $data['content'] = $message->message;
//                 $data['created_at'] = $message->created_at;
//                 $data['message_id'] = $message->id;

//                 event(new PrivateMessageEvent($data));

//                 return response()->json([
//                     'data' => $data,
//                     'success' => true,
//                     'message' => 'Message sent success!'
//                 ]);

//             } 
//             catch (\Exception $e) {
//                     $message->delete();
//                 }
//         }
//     }}

