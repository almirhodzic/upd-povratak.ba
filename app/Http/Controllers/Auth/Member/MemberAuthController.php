<?php

    namespace App\Http\Controllers\Auth\Member;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use App\Models\Member;
    use App\Models\MemberVerify;
    use Session;
    use Hash;
    use Mail;

    class MemberAuthController extends Controller
    {
        /**
         * Write code on Method
         *
         * @return response()
         */

        public function login()
        {
            return view('pages.member.login');
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function registration()
        {
            return view('pages.member.signup');
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function postLogin(Request $request)
        {
            /*$request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')
                    ->withSuccess('You have Successfully loggedin');
            }*/

            return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function postRegistration(Request $request)
        {
            return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function dashboard()
        {
            /*if(Auth::check()){
                return view('dashboard');
            }*/

            return redirect("login")->withSuccess('Opps! You do not have access');
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function create(array $data)
        {
            return redirect(route('member.signup'));
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function logout() {
            Session::flush();
            Auth::logout();
            return Redirect('login');
        }

    }