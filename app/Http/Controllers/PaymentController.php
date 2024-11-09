<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function showForm(int $applicationId)
    {
        $profile = Profile::where('applicationId', $applicationId)->first();
        return view('payment', ["profile"=> $profile]);
    }

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => 5000, // $50.00 this time
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => $request->stripeToken,
            ]);

            $profile = Profile::where("id", $request->id)->first();

            if ($profile) {
                $profile->updated_at = date("Y-m-d H:i:s");
                $profile->token =  $request->stripeToken;
                $profile->save();
            }


            return redirect('complete')->with(['success_message'=> 'Payment successful!','profile'=>$profile]);
        } catch (\Exception $e) {
            return back()->with('error_message', $e->getMessage());
        }
    }
}
