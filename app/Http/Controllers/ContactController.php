<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Config;
use Mail;

class ContactController extends Controller
{
   public function index()
   {
      return view('pages.contact');
   }

    public function store(Contact $contact, Request $request)
    {
        $validatedData = $request->validate(
            [
            'name' => 'required',
            'email' => 'required|email|min:5',
            'message' => 'required'
        ],
            [
            'name.required' => 'Ime i prezime obavezno unijeti.',
            'email.required' => 'eMail adresu obavezno unijeti.',
            'email.email' => 'eMail adresa nije validna.',
            'message.required' => 'Napišite par riječi ili poruku.',
        ]);

        $contact = new Contact($validatedData);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $fromName = $request->name;
        $subject = "Kontakt-forma upd-povratak.ba";
        $data = array(
            'fromsname' => $request->name,
            'fromsemail' => $request->email,
            'messages' => $request->message,
            'appname' => Config::get('app.name'),
            'logo' => Config::get('company.logourl'),

        );

        $fromEmail = $request->email;

        $toName = config('app.name');
        $toEmail = config('company.mail-office');

        Mail::send('emails.contact.html', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){
            $message->from($fromEmail, $fromName);
            $message->to($toEmail, $toName);
            $message->bcc(config('company.mail-bcc'), 'Admin');
            $message->subject($subject);
        });

        return redirect(route('contact.index'))->with('status','Poštovani '.$request->name.', poruku ste uspješno poslali. Hvala!');

    }
}
