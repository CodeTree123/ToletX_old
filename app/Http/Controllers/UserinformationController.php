<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\UserInformation;
use App\Models\User;
use App\Models\Phoneotp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Validator;
use Image;

class UserinformationController extends Controller
{
    //
    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function check()
    {
        return view('check');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('index')->with('massage', 'Admin Logout Sucsessfully');
    }
    public function login_new(Request $request)
    {
        Log::info($request);
        if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
            // return Redirect::index();
            $user = Auth()->user()->role_id;
            if ($user == 1) {
                return redirect()->route('admin_index');
            } else {
                return redirect()->route('index');
            }
        }
    }

    public function loginWithOtp(Request $request)
    {
        Log::info($request);

        $phoneinfo = Phoneotp::where('phone_number', $request->phone)->first();

        $time = Carbon::now()->diffInSeconds($phoneinfo->updated_at);
        if ($time > 60) {
            return redirect()->route('loginotp')->with('Failed', 'your time is up!! Enter your mobile number again');
        }
        if ($phoneinfo && $phoneinfo->otp == $request->otp) {
            $phoneinfo->update([
                'otp' => '',
                'isverified' => 1
            ]);
            return redirect()->route('registration', ['phone' => $request->phone]);
        }
        return redirect()->back();
    }


    public function register(Request $request)
    {

        $custom_id = User::latest('id')->first();
        if (empty($custom_id)) {
            $k = 0;
        } else {
            $k = $custom_id->id;
        }
        $k++;
        $i = $k;
        $n = $request->name;
        $date = date('dmY');
        $view = $n . $date . $i;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'trems' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return back()->with('success', 'Are you Agree Our Terms And Conditon?');
        }
        $phone = Phoneotp::where(['phone_number' => $request->phone, 'isverified' => 1])->exists();
        if (!$phone) {
            return redirect()->back()->withErrors(['msg' => 'Phone is not verified']);
        }

        $check = User::where('phone', $request->phone)->first();
        if ($check) {
            return back()->with('success2', 'You Already have account');
        } else {

            $auth_image = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'photo' => $request->photo,
                'email' => $request->email,
                'nationality' => $request->nationality,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'n_photo1' => $request->n_photo1,
                'n_photo2' => $request->n_photo2,
                'password' => Hash::make($request['password']),
                'fav_qt1' => $request->fav_qt1,
                'fav_qt2' => $request->fav_qt2,
                'fav_qt3' => $request->fav_qt3,
                'fav_ans1' => $request->fav_ans1,
                'fav_ans2' => $request->fav_ans2,
                'fav_ans3' => $request->fav_ans3,
                'terms' => 1,
                'slug' => $view,
            ]);
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/registers/'), $filename);
                $auth_image['photo'] = $filename;
            }
            $auth_image->save();
            if ($request->file('n_photo1')) {
                $file = $request->file('n_photo1');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/registers/'), $filename);
                $auth_image['n_photo1'] = $filename;
            }
            $auth_image->save();
            if ($request->file('n_photo2')) {
                $file = $request->file('n_photo2');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/registers/'), $filename);
                $auth_image['n_photo2'] = $filename;
            }
            $auth_image->save();


            if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
                return redirect()->route('index')->with('success', 'Please Complete your profile information.');
            } else {
                return Redirect::back();
            }
        }
    }


    public function list_user()
    {

        $users = User::where('role_id', 2)->get();

        return view('user.user_list', compact('users'));
    }

    function user_edit($id)
    {
        $list = User::findOrFail($id);
        return view('user.single_user_list', compact('list'));
    }

    function user_update(Request $request)
    {
        $auth_image = User::findOrFail($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'date_of_birth' => $request->date_of_birth,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'gender' => $request->gender,
        ]);
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $request->id . '.' . $photo->getClientOriginalExtension();
            if (User::findOrFail($request->id)) {
                Image::make($photo)->resize(400, 450)->save(base_path("public/uploads/registers/" . $photoName), 100);
                User::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                (base_path("public/uploads/auths/" . $photoName));
                Image::make($photo)->resize(400, 450)->save(base_path("public/uploads/registers/" . $photoName), 100);
            }
        }
        return redirect()->route('profile')->with('success', 'User information have been successfully Updated.');
    }



    //user end
    //sms api
    function send_sms($phone, $otp)
    {
        $url = "http://202.164.208.226/smsapi";
        $data = [
            "api_key" => "C20013386235902a575991.44900461",
            "type" => "text",
            "contacts" => "88" . $phone,
            "senderid" => "8809612442105",
            "msg" => "Your ToletX verification code " . $otp,
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    //end sms api

    public function sendOtp(Request $request)
    {

        $otp = rand(1000, 9999);
        $response = $this->send_sms($request->phone, $otp);
        $phone = Phoneotp::where(['phone_number' => $request->phone])->first();
        if (!empty($phone)) {
            $phone->update([
                'isverified' => 0,
                'otp' => $otp
            ]);
        } else {
            $user = Phoneotp::create([
                'phone_number' => $request->phone,
                'otp' => $otp
            ]);
        }
        return redirect()->route('verify.otp', ['phone' => $request->phone]);
        return response()->json([$user], 200);
    }

    function indexotp()
    {
        return view('auth.OtpLogin');
    }
    public function verifyOtp()
    {
        return view('auth.verify-otp');
    }
    public function admin_verify($id)
    {
        $getStatus = User::find($id);
        if ($getStatus->admin_verify == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        if ($status == 1) {
            User::where('id', '=', $id)->update(['admin_verify' => $status]);
        } else {
            User::where('id', '=', $id)->update(['admin_verify' => $status]);
        }
        return back();
    }
    public function delete_user($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('massage', 'User deleted Successfully');
    }
}
