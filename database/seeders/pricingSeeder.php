<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Pricing;
use Illuminate\Database\Seeder;

class pricingSeeder extends Seeder
{
    public function run()
    {

        $package_name_ar = [
            'باقة الأساسية', 'باقة المؤسسات', 'باقة المتميزة', 'باقة الاحترافية',
        ];
        $package_name_en = [
            'Basic Package', 'Enterprise Package', 'Premium Package', 'Professional Package',
        ];

        $package_price = 2400;

        $package_period = 'yearly';

        $package_description_ar = [
            'مثالية للمؤسسات الصغيرة التي تبحث عن حلول أساسية لإدراك التعليم',
            'حلول مخصصة بالكامل للمؤسسات التعليمية الكبرى التي تحتاج إلى إدارة متكاملة ومتطورة',
            'مثالية للمؤسسات الكبيرة التي تتطلب حلولاً متطورة وشاملة لإدراك التعليم',
            'مثالية للمؤسسات المتوسطة التي تحتاج إلى مزيد من التكامل والذكاء في الإدارة التعليمية',
        ];

        $package_description_en = [
            'Ideal for small institutions seeking basic EdTech solutions',
            'Fully customized solutions for large educational institutions requiring integrated, advanced management',
            'Ideal for large institutions requiring comprehensive, advanced EdTech solutions',
            'Ideal for medium institutions needing more integration and intelligence in educational management',
        ];

        $features = [
            [
                'items_ar' => [
                    'حلول مخصصة بالكامل للمؤسسات التعليمية الكبرى',
                    'إدارة متكاملة ومتطورة',
                    'تخصيص متقدم للوظائف والتصميم',
                    'دعم شخصي ومدير حساب مخصص',
                    'تدريب واستشارات متقدمة',
                ],
                'items_en' => [
                    'Fully customized solutions for large educational institutions',
                    'Integrated and advanced management',
                    'Advanced customization of functions and design',
                    'Personal support and dedicated account manager',
                    'Advanced training and consultations',
                ],
            ],
            [
                'items_ar' => [
                    'حلول متطورة وشاملة لإدارة التعليم',
                    'تكامل مع أنظمة أخرى عبر API',
                    'تخصيص كامل للمنصة وفق احتياجات المؤسسة',
                    'دعم مخصص على مدار الساعة',
                ],
                'items_en' => [
                    'Comprehensive advanced education management solutions',
                    'Integration with other systems via API',
                    'Complete platform customization according to institution needs',
                    '24/7 dedicated support',
                ],
            ],
            [
                'items_ar' => [
                    'مزيد من التكامل والذكاء في الإدارة التعليمية',
                    'نظام تقييم متقدم وتحليلات أداء',
                    'تقارير ولوحات تحكم ذكية',
                    'دعم عبر البريد الإلكتروني والدردشة المباشرة',
                ],
                'items_en' => [
                    'Enhanced integration and intelligence in educational management',
                    'Advanced evaluation system and performance analytics',
                    'Smart reports and dashboards',
                    'Email and live chat support',
                ],
            ],
            [
                'items_ar' => [
                    'نظام إدارة التعلم (LMS)',
                    'إدارة الطالب والمنهج (SS)',
                    'أدوات تقييم أساسية',
                    'دعم عبر البريد الإلكتروني',
                ],
                'items_en' => [
                    'Learning Management System (LMS)',
                    'Student and Curriculum Management (SS)',
                    'Basic assessment tools',
                    'Email support',
                ],
            ],
        ];

        foreach ($package_name_ar as $key => $value) {
            $pricing = Pricing::create([
                'page_id' => Page::pricing,
                'name' => [
                    'ar' => $value,
                    'en' => $package_name_en[$key],
                ],
                'description' => [
                    'ar' => $package_description_ar[$key],
                    'en' => $package_description_en[$key],
                ],
                'price' => $package_price,
                'period' => $package_period,
                'is_available' => 'available',
            ]);

            foreach ($features[$key]['items_ar'] as $key2 => $value2) {
                $pricing->features()->create([
                    'title' => [
                        'ar' => $value2,
                        'en' => $features[$key]['items_en'][$key2],
                    ],
                    'description' => [
                        'ar' => $value2,
                        'en' => $features[$key]['items_en'][$key2],
                    ],
                    'content' => [
                        'ar' => $value2,
                        'en' => $features[$key]['items_en'][$key2],
                    ],
                ]);

            }

        }

    }
}
