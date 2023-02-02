<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\MemberVerify;
use Str;
use Config;
use Mail;

class MemberController extends Controller
{
    public function index()
    {
        return view('pages.member.index');
    }

    public function signup()
    {
        return view('pages.member.signup');
    }

    public function store(Member $member, Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'street' => 'required',
                'postcode' => 'required',
                'city' => 'required',
                'phone' => 'required',
                'email' => 'required|email|unique:members',
                'message' => 'nullable|min:6|regex:/^[\pL\s\-]+$/u',
                'accept-statut' => 'accepted'
            ],
            [
                'name.required' => 'Ime i prezime obavezno unijeti.',
                'street.required' => 'Ulicu i broj (BiH) obavezno unijeti.',
                'postcode.required' => 'Poštanski broj (BiH) obavezno unijeti.',
                'city.required' => 'Općinu (BiH) obavezno unijeti.',
                'email.required' => 'eMail adresu obavezno unijeti.',
                'email.email' => 'eMail adresa nije validna.',
                'email.unique' => 'Unešena eMail adresa je već registrovana.',
                'phone.required' => 'Telefon / Mobitel (BiH) obavezno unijeti.',
                'message.sometimes' => 'Napišite nešto.',
                'message.min' => 'Napišite najmanje :min slova.',
                'message.regex' => 'Samo slova i brojevi dozvoljeno',
                'accept-statut.accepted' => 'Da bi nastavili sa Zahjtevom trebate prihvatiti Statut Udruženja',
            ]);

        if($validatedData)
        {
            new Member($validatedData);
            $member->name = $request->name;
            $member->street = $request->street;
            $member->postcode = $request->postcode;
            $member->city = $request->city;
            $member->email = $request->email;
            $member->phone = $request->phone;
            $member->message = $request->message;
            $member->phone_dijaspora = $request->phone_dijaspora;
            $member->ip = $request->ip();
            $member->save();

            $token = Str::random(64);

            MemberVerify::create([
                'member_id' => $member->id,
                'token' => $token
            ]);

            // EMAIL
            // ------------------------------------------------------

            $fromName = $request->name;
            $fromEmail = Config::get('company.mail-sender');
            $toName = $request->name;
            $toEmail = $request->email;
            $subject = "Vaš zahtjev za Članstvo ".Config::get('app.name');

            $data = array(
                'member_name' => $request->name,
                'member_email' => $request->email,
                'appname' => Config::get('app.name'),
                'appurl' => Config::get('app.url'),
                'logourl' => Config::get('company.logourl'),
                'token' => $token,
            );

            Mail::send('emails.member.activation-link-html', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){
                $message->from($fromEmail, $fromName);
                $message->to($toEmail, $toName);
                $message->subject($subject);
            });

            // ------------------------------------------------------
            // EMAIL END

            sleep(0.5);

            return redirect(route('member.signup'))->with(
                [
                    'status'=> 1,
                    'name'=> $request->name,
                    'email'=> $request->email,
                ]
            );
        }
    }



    public function verifyresult($message)
    {
        return view('pages.member.verify-result')->with('message', $message);
    }
}
