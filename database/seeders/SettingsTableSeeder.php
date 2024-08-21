<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageUrl = ('web/img/logo.-dhcjpg');

        Setting::create(['key' => 'app_name', 'value' => 'DHC']);
        Setting::create(['key' => 'app_logo', 'value' => $imageUrl]);
        Setting::create(['key' => 'company_name', 'value' => 'ডেলটা হেলথ কেয়ার, চিটাগাং লিমিটেড']);
        Setting::create(['key' => 'current_currency', 'value' => 'BDT']);
        Setting::create(['key' => 'hospital_address', 'value' => ' ২৮, কাতালগঞ্জ, পাঁচলাইশ, চট্টগ্রাম']);
        Setting::create(['key' => 'hospital_email', 'value' => 'deltahc.ctg2012@yahoo.com']);
        Setting::create(['key' => 'hospital_phone', 'value' => '+8801841906090']);
        Setting::create(['key' => 'hospital_from_day', 'value' => '7 Days']);
        Setting::create(['key' => 'hospital_from_time', 'value' => '24 Hour']);
    }
}
