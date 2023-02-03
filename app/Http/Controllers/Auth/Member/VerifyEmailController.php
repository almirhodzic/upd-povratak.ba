<?php

    namespace App\Http\Controllers\Auth\Member;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use App\Models\MemberVerify;
    use App\Models\Member;
    use Session;
    use Config;
    use Hash;
    use Mail;

    class VerifyEmailController extends Controller
    {
        public function verifyemail(Member $member, $token)
        {
            $verifyMember = MemberVerify::where('token', $token)->first();
            $message = 'Aktivacijski link nije validan (404)';
            $status = 'notfound';

            if(!is_null($verifyMember)) {
                $member = $verifyMember->member;
                if (!$member->is_email_verified) {

                    $verifyMember->member->is_email_verified = 1;
                    $verifyMember->member->email_verified_at = date("Y-m-d H:i:s", strtotime('now'));
                    $verifyMember->member->active = 1;
                    $verifyMember->member->save();

                    $message = "Vaša eMail adresa je uspješno aktivirana!";
                    $status = 'success';

                    // EMAIL
                    // ------------------------------------------------------
                    /*$memberId = $verifyMember->id;
                    $memberName = $verifyMember->name;
                    $memberStreet = $verifyMember->street;
                    $memberPostcode = $verifyMember->postcode;
                    $memberCity = $verifyMember->city;
                    $memberCanton = $verifyMember->canton;
                    $memberCountry = $verifyMember->country;
                    $memberPhone = $verifyMember->phone;
                    $memberPhoneDijsaspora = $verifyMember->phone_dijaspora;
                    $memberEmail = $verifyMember->email;
                    $memberCreatedAt = $verifyMember->created_at;
                    $memberVerifiedAt = $verifyMember->email_verified_at;
                    $memberIp = $verifyMember->ip;
                    $memberMessage = $verifyMember->message;*/

                    $fromName = Config::get('app.name');
                    $fromEmail = Config::get('company.mail-sender');
                    $toName = 'Sekretariat '.Config::get('app.name');
                    $toEmail = Config::get('company.mail-office');
                    $subject = "Zahtjev za Članstvo ".Config::get('app.name')." (".$verifyMember->member->id.")";
                    $apptimezone = Config::get('app.timezone');

                    $data = array(
                        'appname' => Config::get('app.name'),
                        'appurl' => Config::get('app.url'),
                        'logourl' => Config::get('company.logourl'),
                        'memberId' => $verifyMember->member->id,
                        'memberName' => $verifyMember->member->name,
                        'memberStreet' => $verifyMember->member->street,
                        'memberPostcode' => $verifyMember->member->postcode,
                        'memberCity' => $verifyMember->member->city,
                        'memberCanton' => $verifyMember->member->canton,
                        'memberCountry' => $verifyMember->member->country,
                        'memberPhone' => $verifyMember->member->phone,
                        'memberPhoneDijsaspora' => $verifyMember->member->phone_dijaspora,
                        'memberEmail' => $verifyMember->member->email,
                        'memberCreatedAt' => $verifyMember->member->created_at,
                        'memberVerifiedAt' => $verifyMember->member->email_verified_at,
                        'memberIp' => $verifyMember->member->ip,
                        'memberMessage' => $verifyMember->member->message,
                        'timezone' => $apptimezone
                    );

                    Mail::send('emails.notify.admin.request-html', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){
                        $message->from($fromEmail, $fromName);
                        $message->to($toEmail, $toName);
                        $message->subject($subject);
                    });

                    Mail::send('emails.notify.member.confirm-verification-html', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){
                        $message->from($fromEmail, $fromName);
                        $message->to($toEmail, $toName);
                        $message->subject($subject);
                    });


                    // ------------------------------------------------------
                    // EMAIL END

                } else {
                    $message = "Vaša eMail adresa već je verifikovana.";
                    $status = 'verified';
                }
            }

            return view('pages.member.verify-result')->with([
                'message'=>$message,
                'status'=>$status
            ]);
        }
    }
