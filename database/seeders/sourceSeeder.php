<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Source;
use Illuminate\Database\Seeder;

class sourceSeeder extends Seeder
{
    public function run()
    {

        $name_ar = [
            'الندوات والدورات التدريبية',
            'المقالات والتحديثات',
            'أولى خطوات الاستخدام',
            'دراسات الحالة وقصص النجاح',
        ];

        $name_en = [
            'Webinars and Training Courses',
            'Articles and Updates',
            'Getting Started',
            'Case Studies and Success Stories',
        ];

        $description_ar = [
            'تعلم من خبرائنا عبر ندوات مباشرة حول أحدث ميزات نظام نومو إديو وأفضل الممارسات في إدارة التعليم الإلكتروني',
            'تابع مقالات حول أحدث الاتجاهات في التعليم الرقمي والإدارة الأكاديمية',
            'إرشادات تفصيلية حول استخدام نظام نومو إديو بكفاءة من الإعداد إلى الإدارة',
            'كيف ساعد نظام نومو إديو المؤسسات التعليمية في التحول الرقمي',
        ];

        $description_en = [
            'Learn from experts through live sessions about Nomo Edu features and best e-learning practices',
            'Stay updated with articles on digital education trends and academic management',
            'Detailed guidance for efficient use of Nomo Edu from setup to administration',
            'How Nomo Edu helped educational institutions achieve digital transformation',
        ];

        $feature_ar = [
            [
                'إعداد وإدارة نظام التعلم الإلكتروني (LMS)',
                'تحليل بيانات الطالب وتحسين الأداء الأكاديمي',
            ],
            [],
            [],
            [],
        ];

        $feature_en = [
            [
                'Learning Management System (LMS) setup and administration',
                'Student data analysis and academic performance improvement',
            ],
            [],
            [],
            [],
        ];

        foreach ($name_ar as $key => $value) {

            //            'page_id', 'name', 'title', 'description', 'image', 'is_available', 'extra_data',
            $source = Source::create([
                'page_id' => Page::resources,
                'name' => [
                    'ar' => 'المصادر',
                    'en' => 'sources',
                ],
                'title' => [
                    'ar' => $name_ar[$key],
                    'en' => $name_en[$key],
                ],
                'description' => [
                    'ar' => $description_ar[$key],
                    'en' => $description_en[$key],
                ],
            ]);

            if (!empty($feature_ar[$key])) {
                //                    'title', 'description', 'content',
                foreach ($feature_ar[$key] as $key2 => $value2) {

                    $source->features()->create([
                        'title' => [
                            'ar' => $value2,
                            'en' => $feature_en[$key][$key2],
                        ],
                        'description' => [
                            'ar' => $value2,
                            'en' => $feature_en[$key][$key2],
                        ],
                        'content' => [
                            'ar' => $value2,
                            'en' => $feature_en[$key][$key2],
                        ],
                    ]);
                }

            }

        }

    }
}
