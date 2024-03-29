<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCodeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function sendCodeVerification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()->first(),
            ]);
        }
        try {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Email not found',
                ]);
            }

            $codeVerification = Str::random(6);
            $user->password = Hash::make($codeVerification);
            $user->update();

            Mail::raw("This is your verification code $codeVerification, don't give it to anyone", function ($message) use ($request) {
                $message->to($request->email)->subject('Code Verification');
            });

            return response()->json([
                'status' => 200,
                'message' => 'We have sent you a verification code',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function verify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code_verification' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()->first(),
            ]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->code_verification])) {
            return response()->json([
                'status' => 200,
                'message' => 'Verification successful',
            ]);
        }

        return response()->json([
            'status' => 422,
            'message' => 'Code verification is invalid',
        ]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()->first(),
            ]);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->update();
        return response()->json([
            'status' => 200,
            'message' => 'Password changed successfully',
        ]);
    }
}
