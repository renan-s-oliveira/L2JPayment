<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configuration tokens
    |--------------------------------------------------------------------------
    |
    */
    
    'pagseguro_token' => '', 
    'pagseguro_email' => '', 
    'paypal_token' => '',
    'mercadopago_token' => '', 
    'picpay_token' => '', 
    
    /*
    |--------------------------------------------------------------------------
    | Configuration url callback
    |--------------------------------------------------------------------------
    |
    */
    'url_callback_pagseguro' => '/pagseguro/callback/',
    'url_callback_paypal' => '/paypal/callback/',
    'url_callback_mercadopago' => '/mercadopago/callback/',
    'url_callback_picpay' => '/picpay/callback/',
    
];
