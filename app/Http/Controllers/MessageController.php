<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;
use App\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $message = Message::all();
        return view('admin.message.index',compact('message','user_id'));
    }
    public function read() {
        return view('admin.message.read');
    }
    public function write() {
        $user = User::all();
        return view('admin.message.write',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail=$request->summernoteInput;
        $status = $request->status;
        $title = $request->title;
        $sender_id = Auth::user()->id;
        $receiver_id = $request->receiver_id;
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getelementsbytagname('img');

        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }

        $detail = $dom->savehtml();
        $summernote = new Message;
        $summernote->body = $detail;
        $summernote->status = $status;
        $summernote->sender_id = $sender_id;
        $summernote->receiver_id = $receiver_id;
        $summernote->title = $title;
        $summernote->save();
        return redirect('admin/message');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {

        $sender_name = Message::with('users')->where('sender_id', $message->sender_id)->first();
//         Message::with('users')->get();
        return view('admin.message.read',compact('message','sender_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('admin.message.edit',compact('message'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //Validate
        $request->validate([
            'status' => 'required',
        ]);
        $message->status = $request->status;
        $message->save();
        $request->session()->flash('message', 'تغییر وضعیت با موفقیت انجام شد');
        return redirect('admin/message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
