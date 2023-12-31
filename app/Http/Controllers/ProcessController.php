<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProcessController extends Controller
{
    function send_message(Request $request)
    {
        $rules = [
            'name' => 'string|required|min:5|max:200',
            'email' => 'email|string|required|min:5|max:50',
            'message' => 'required|string|min:10|max:2000',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('contact')->withErrors($validator)->withInput();
        } else {
            try {
                //code...
                DB::beginTransaction();

                $data = new Message();

                $data->name = $request->data('name');
                $data->email = $request->data('email');
                $data->message = $request->data('message');
                $data->save();
                // $mailto = 'info@cloudstechn.com';
                // Mail::to($mailto)->send(new MessageReceived($data));

                DB::commit();

                session()->flash('success', 'Your Message has been sent successiful, We will come back to you soon');
                return redirect()->route('contact');
            } catch (\Exception $e) {

                DB::rollBack();

                return redirect('contact')->with('error', 'Sorry, your message could not be sent rightnow, we are under maintenance');
            }
        }
    }
}