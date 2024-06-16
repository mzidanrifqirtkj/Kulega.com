<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
// use Mailjet\LaravelMailjet\Facades\Mailjet;
use Mailjet\Resources;

class ContactController extends Controller
{

    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $topic = $request->input('topic');
        $messages = $request->input('message');

        Mail::to('mzidanrifqirtkj@gmail.com')->send(new SendEmail($name, $email, $phone, $topic, $messages));

        return "Email has been sent successfully!";
        //     $input = $request->all();

        //     $validator = Validator::make($input, [
        //         'name' => 'required|string',
        //         'email' => 'required|string|email|max:255',
        //         'phone' => 'required|string|digits:10|max:10',
        //     ]);

        //     if ($validator->fails()) {
        //         return redirect()->back()->withErrors($validator)->withInput();
        //     }

        //     $formdata = $request->except('_token');

        //     $mj = Mailjet::getClient();

        //     $body = [
        //         'FromEmail' => 'email@yourverifieddomain.com',
        //         'FromName' => 'From name to be displayed in Inbox',
        //         'Subject' => 'New Website Enquiry',
        //         'MJ-TemplateID' => 6026024, // Replace with your actual template ID
        //         'MJ-TemplateLanguage' => true,
        //         'Vars' => json_decode(json_encode($formdata), true),
        //         'Recipients' => [['Email' => 'mzidanrifqirtkj@email.com']],
        //     ];

        //     $response = $mj->post(Resources::$Email, ['body' => $body]);

        //     if ($response->success()) {
        //         // Success event callback
        //         return redirect()->back()->with('success', 'Your message has been sent successfully!');
        //     } else {
        //         // Failure event callback
        //         return redirect()->back()->with('error', 'Failed to send the message. Please try again later.');
        //     }
    }
}
