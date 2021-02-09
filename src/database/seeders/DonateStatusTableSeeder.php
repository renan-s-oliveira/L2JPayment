<?php

namespace L2JPayment\Database\Seeds;

use Illuminate\Database\Seeder;
use L2JPayment\Models\DonateStatus;

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
