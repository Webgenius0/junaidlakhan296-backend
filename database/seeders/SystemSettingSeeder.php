<?php

namespace Database\Seeders;

use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SystemSetting::create([
            'title' => 'Junaid Lakhan',
            'system_name' => 'Junaid Lakhan',
            'email' => '',
            'contact_number' => '',
            'company_open_hour' => '',
            'copyright_text' => '© Copyright 2023, All right reserved',
            'logo' => 'uploads/logos/logo.png',
            'favicon' => 'uploads/favicons/favicon.png',
            'address' => '',
            'description' => '',
        ]);
    }
}
