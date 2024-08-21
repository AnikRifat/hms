<?php

namespace Database\Seeders;

use App\Models\CurrencySetting;
use Illuminate\Database\Seeder;

class DefaultCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *å
     */
    public function run(): void
    {
        $input = [
            [
                'currency_name' => 'Bangladeshi Tk',
                'currency_icon' => '৳',
                'currency_code' => 'BDT',
            ],

        ];

        foreach ($input as $data) {
            CurrencySetting::create($data);
        }
    }
}
