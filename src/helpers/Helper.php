<?php

namespace L2JPayment\Helpers;

class Helper
{
    public static function view(string $string)
    {
        return View::exists(config('l2jpayment.views' . $string)) ? view(config('l2jpayment.views' . $string)) : view('view::' . $string);
    }
}