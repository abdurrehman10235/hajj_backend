<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('service_categories')->insertOrIgnore([
            ['slug' => 'hajj-application', 'name_en' => 'Hajj Application Process', 'name_ar' => 'عملية تقديم طلب الحج'],
            ['slug' => 'terms-policies', 'name_en' => 'Terms and Policies for Hajj', 'name_ar' => 'الشروط والسياسات للحج'],
            ['slug' => 'religious-places', 'name_en' => 'Routes of Religious Places', 'name_ar' => 'مسارات الأماكن الدينية'],
            ['slug' => 'hajj-procedure', 'name_en' => 'Hajj Procedure', 'name_ar' => 'إجراءات الحج'],
            ['slug' => 'medical-help', 'name_en' => 'Medical Help', 'name_ar' => 'المساعدة الطبية'],
            ['slug' => 'forgot-route', 'name_en' => 'Forgot my Route', 'name_ar' => 'نسيت طريقي'],
        ]);
    }
}