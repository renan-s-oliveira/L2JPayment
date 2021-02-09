<?php

namespace L2JPayment\Controllers;

use Illuminate\Routing\Controller as BaseController;

class OrderController extends BaseController
{
    public function show(Request $request)
    {
        return Helper::view('order');
    }

    public function order(Request $request)
    {
        Order::create([
            $request->all(),
            'transaction' => Str::uuid()
        ]);
    }

}