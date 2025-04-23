<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Content;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Review;
use Illuminate\Database\Seeder;

class generalSeeder extends Seeder
{
    public function run()
    {

        // Numbers
        $content = Content::create([
            'page_id' => 1,
            'name' => [
                'ar' => 'أرقام نومو إديو إكس',
                'en' => 'Nomo Edu X Numbers',
            ],
            'title' => [
                'ar' => 'أرقام نومو إديو إكس',
                'en' => 'Nomo Edu X Numbers',
            ],
            'description' => [
                'ar' => 'كوار تعليمية، تقديم خدمات استشارية، بوابة إلكترونية للشراكات التربوية والتعليمية، منصة إلكترونية مبرمجة بأحدث التقنيات',
                'en' => 'Educational squares, providing advisory services, an electronic portal for educational partnerships, a digitally programmed platform with the latest technologies',
            ],
            'image' => '',
            'extra_data' => [
                'pages' => [Page::home, Page::aboutUs],
            ],
        ]);

        $feature_title_ar = ['فروع في جميع أنحاء المملكة', 'شركات دولية', 'عقد دولي ومحلي'];
        $feature_title_en = ['branches around the kingdom', 'international companies', 'contract international and local'];

        $description_ar = ['+8', '+4', '+24'];
        $description_en = ['+8', '+4', '+24'];

        foreach ($feature_title_ar as $key => $value) {
            $content->features()->create([
                'title' => [
                    'ar' => $value,
                    'en' => $feature_title_en[$key],
                ],
                'description' => [
                    'ar' => $description_ar[$key],
                    'en' => $description_en[$key],
                ],
            ]);
        }

        // Start: Reviews
        Review::create([
            'reviewer_name' => 'ا.د/ ابراهيم محمد الخليفى',
            'reviewer_description' => 'رئيس مجلس اداره شركه حلول للتقنيه',
            'review' => [
                'ar' => 'موظفون ودودون للغاية، وتواصل غير معقد وتنظيم احترافي. ملتزم جدًا بالمشاكل بجميع أنواعها. موظفون ودودون للغاية، وتواصل غير معقد وتنظيم احترافي. ملتزم جدًا بالمشاكل بجميع أنواعها. موظفون ودودون للغاية، وتواصل غير معقد وتنظيم احترافي.',
                'en' => 'Extremely friendly staff, straightforward communication, and professional organization. Highly committed to solving all kinds of problems. Extremely friendly staff, straightforward communication, and professional organization.
                Highly committed to solving all kinds of problems. Extremely friendly staff, straightforward communication, and professional organization.',
            ],
        ]);

        // Start: Clients
        $name_ar = [
            'المركز الوطني للتعلم الإلكتروني', 'المفتاحان التجارية', 'FILMFINITEZ', 'JADEER - إدارة الشخصية', 'JADEER - إدارة التطبيقات', 'HyperPay - إدارة التصنيف', 'JADEER - إدارة التطبيقات', 'FILMFINITEZ', 'Caravan',
            'إدارة الشخصية', 'إدارة التطبيقات', 'إدارة التصنيف', 'العملية والتحقيق والتموين', 'الموضوعية والتعامل بالتأكد الدولي', 'التنمية المستهدفة', 'مجالات الجهاز المالية',
        ];

        $name_en = [
            'National E-Learning Center', 'Commercial Keys', 'FILMFINITEZ', 'JADEER - Personality Management', 'JADEER - Applications Management', 'HyperPay - Classification Management', 'JADEER - Applications Management', 'FILMFINITEZ', 'Caravan',
            'Personality Management', 'Applications Management', 'Classification Management', 'Operations, Investigation and Supply', 'Objectivity and International Verification Dealings', 'Targeted Development', 'Financial Device Fields',
        ];
        foreach ($name_ar as $key => $value) {
            Client::create([
                'name' => [
                    'ar' => $value,
                    'en' => $name_en[$key],
                ],
                'description' => [
                    'ar' => $value,
                    'en' => $name_en[$key],
                ],
            ]);
        }

        // Start: Partners
        $name_ar = [
            'ORACLE', 'مؤسسة التدريب المهني', 'وزارة التعليم', 'المركز الوطني للمعاير',
        ];

        $name_en = [
            'ORACLE', 'Vocational Training Corporation', 'Ministry of Education', 'National Laboratory Center',
        ];

        foreach ($name_ar as $key => $value) {
            Partner::create([
                'page_id' => 1,
                'name' => [
                    'ar' => $value,
                    'en' => $name_en[$key],
                ],
                'description' => [
                    'ar' => $value,
                    'en' => $name_en[$key],
                ],
                'image' => 'partner'.($key + 1).'.png',
            ]);
        }

    }
}
