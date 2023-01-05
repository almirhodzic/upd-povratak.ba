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

                    $message = "Vasa eMail adresa je uspjesno aktivirana!";
                    $status = 'success';


                } else {
                    $message = "Vasa eMail adresa vec je verifikovana.";
                    $status = 'verified';
                }
            }

            return view('pages.member.verify-result')->with([
                'message'=>$message,
                'status'=>$status
            ]);
        }
    }