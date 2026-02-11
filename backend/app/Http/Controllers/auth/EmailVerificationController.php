<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Mail\WelcomeUserEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificationController extends Controller
{
    public function verify(Request $request, $id, $hash){
        
        $user = User::findOrFail((int) $id);

        if(!hash_equals((string) $hash, sha1($user->getEmailForVerification()))){
            return response()->json([
                'message' => 'hash invlaide'
            ], 400);
        }

        if($user->hasVerifiedEmail()){
            return response()->json([
                'message'=> 'email deja verifié'
            ],200);
        }

        $user->markEmailAsVerified();
        Mail::to($user->getEmailForVerification())->send(new WelcomeUserEmail() );

        return response()->json([
            'message'=> 'email vérifié avec success',
            'user' => new UserResource($user)
            ],200);
    }

      public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return response()->json([
            'message'=> 'un nouveau mail d activation vous a ete envoyé'
        ],200);
    }
}
