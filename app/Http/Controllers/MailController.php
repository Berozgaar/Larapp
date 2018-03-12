<?php

namespace Larapp\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\ContactEmail as ContactEmail;
use App\mail\sendMail;
use App\Mailfile;
class MailController extends Controller
{
    public function compose()
{
  return view('pages.email');
}

public function send(Request $request)
{
  $this->validate($request, [
        'name' => 'required',
        'from' => 'required|email',
        'subject' => 'required',
        'to' => 'required|email',
        'msgbody' => 'required',

        ]);
    $data = array(
      'name' => $request->name,
      'from' =>$request->from,
      'to' =>$request->to,
      'subject' =>$request->subject,
      'msgbody' => $request->msgbody

    );
    Mail::send('email.mail', $data , function($mail) use($data) {
      $mail->from($data['from'], $data['name']);

      $mail->to($data['to'])->subject($data['subject']);



    });


    return redirect('/email')->with('flash_message', 'Your mail has been sent to '. $data['to'].'!');
    }
}
