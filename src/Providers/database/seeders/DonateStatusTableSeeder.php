<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use L2JPayment\Models\PaymentMethod;

class DonateStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonateStatus::create([
            'status' => 'pending',
        ]);
        DonateStatus::create([
            'status' => 'done',
        ]);      
    }
}
