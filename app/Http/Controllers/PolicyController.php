<?php

namespace App\Http\Controllers;


class PolicyController extends Controller
{
    public function privacyPolicy(){
        return view('user.pages.policies.privacy_policy');
    }

    public function termsCondition(){
        return view('user.pages.policies.terms_condition');
    }

    public function cancelRefund(){
        return view('user.pages.policies.cancellation_refund');
    }

    public function shippingDelievery(){
        return view('user.pages.policies.shipping_refund');
    }
}
