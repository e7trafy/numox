<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class pagesTableSeeder extends Seeder
{
    public function run()
    {
        $slugs = ['general', 'home', 'products', 'partners', 'contact', 'aboutUs', 'pricing', 'faqs', 'resources', 'contactUs'];

        $name_ar = ['عامه', 'الصفحة الرئيسية', 'صفحة المنتجات', 'صفحة الشركاء', 'صفحة التواصل', 'صفحة من نحن', 'صفحة الأسعار', 'صفحة الأسئلة الشائعة', 'صفحة الموارد', 'صفحة اتصل بنا'];
        $name_en = ['general', 'home page', 'products page', 'partners page', 'contact page', 'about us page', 'pricing page', 'faqs page', 'resources page', 'contact us page'];

        // need to Add title & description to be shown in each page blue first card

        foreach ($name_ar as $key => $value) {

            $request = [
                'slug' => $slugs[$key],
                'name' => [
                    'ar' => $value,
                    'en' => $name_en[$key],
                ],
            ];

            $page = Page::create($request);
        }

        $this->call(generalSeeder::class);
        $this->call(homePageSeeder::class);
        $this->call(productsSeeder::class);
        $this->call(partnersSeeder::class);
        $this->call(pricingSeeder::class);
        $this->call(fqsSeeder::class);
        $this->call(systemUnitSeeder::class);
        $this->call(sourceSeeder::class);
        $this->call(aboutUsSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
