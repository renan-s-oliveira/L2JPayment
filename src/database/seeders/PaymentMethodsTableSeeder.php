<?php

namespace L2JPayment\Database\Seeders;

use Illuminate\Database\Seeder;
use L2JPayment\Models\PaymentMethod;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'name' => 'Mercado Pago',
            'description' => 'Método de pagamento usando o mercado pago',
            'status' => 0
        ]);

        PaymentMethod::create([
            'name' => 'PagSeguro',
            'description' => 'Método de pagamento usando o pagseguro',
            'status' => 1
        ]);

        PaymentMethod::create([
            'name' => 'PayPal',
            'description' => 'Método de pagamento usando o paypal',
            'status' => 0
        ]);

        PaymentMethod::create([
            'name' => 'PicPay',
            'description' => 'Método de pagamento usando o paypal',
            'status' => 0
        ]);
    }
}
