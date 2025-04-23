<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Page;
use Illuminate\Database\Seeder;

class homePageSeeder extends Seeder
{
    public function run()
    {

        // first section (all in one)
        Content::create([
            'page_id' => Page::home,
            'name' => [
                'ar' => 'السيكشن الاول الكل فى واحد',
                'en' => 'first section all in one',
            ],
            'title' => [
                'ar' => 'نظام متكامل مصمم لدعم نومو اديو اكس المؤسسات التعليميه و الارتقاء بها من خلال حلول تقنيه متطوره. ',
                'en' => 'A complete system designed to support online audio education institutions and their growth through advanced technological solutions.',
            ],
            'description' => [
                'ar' => 'نظام متكامل مصمم لدعم نومو إديو إكس المؤسسات التعليمية والارتفاء بها من خلال حلول تقنية متطورة.
                 يجمع بين الإدارة الأكاديمية الذكية والتعليم الإلكتروني المبتكر، مما يسهم في تحسين كفاءة العملية التعليمية وتقديم تجربة متكاملة للمؤسسات التعليمية والعائب والمحلمين.',
                'en' => 'An integrated system designed to support Nomo Edu X educational institutions and elevate them through advanced technological solutions. It combines smart academic management and innovative e-learning,
                contributing to the improvement of educational process efficiency and delivering a comprehensive experience for educational institutions, families, and learners.',
            ],
            'image' => 'home-first-section.jpg',
            'extra_data' => [
                'order' => 1,
            ],
        ]);

        // Start: second section (collages management)
        $content = Content::create([
            'page_id' => Page::home,
            'name' => [
                'ar' => 'نظام تومو إدبي إكس لإدارة الكليات',
                'en' => 'Tomo Edbi X College Management System',
            ],
            'title' => [
                'ar' => 'نظام تومو إدبي إكس لإدارة الكليات',
                'en' => 'Tomo Edbi X College Management System',
            ],
            'description' => [
                'ar' => 'حلول شاملة لإدارة وتطوير التعليم عن بعد. هو نظام متكامل لتلبية احتياجات الكليات التطبيقية في التعليم عن بعد وإدارة العملية الأكاديمية. النظام يعتمد على التقنيات الحديثة ويوفر حلول شاملة لإدارة جميع جوانب التعليم من الطالب وأعضاء هيئة التدريس إلى إدارة المقررات والاختبارات.',
                'en' => 'Comprehensive solutions for managing and developing distance education. An integrated system that meets the needs of applied colleges in distance education and academic process management. The system relies on modern technologies and provides comprehensive solutions for managing all aspects of education, from students and faculty members to course and exam management.',
            ],
        ]);

        $feature_title_ar = [
            'إدارة الاختبارات بالذكاء الوصطناعي', 'دعم الهتماد الأكاديمي والجودة', 'إدارة التعليم والتدريس', 'نظام قبول الطالب', 'جدولة آلية للمقررات والجداول', 'إصدار الشهادات والتحقق عبر CODE', 'نظام دعم ذي للطالب وأعضاء هيئة التدريس',
            'إدارة أعضاء هيئة التدريس', 'إدارة البرامج التعليمية',
        ];

        $feature_title_en = [
            'AI-powered test management', 'Support for academic accreditation and quality', 'Education and teaching management', 'Student admission system', 'Automatic course and schedule scheduling',
            'Certificate issuance and verification via CODE', 'AI support system for students and faculty', 'Faculty management', 'Educational programs management',
        ];

        foreach ($feature_title_ar as $key => $value) {
            $content->features()->create([
                'title' => [
                    'ar' => $value,
                    'en' => $feature_title_en[$key],
                ],
            ]);

        }

        // Start: how to work
        $content = Content::create([
            'page_id' => Page::home,
            'name' => [
                'ar' => 'كيفية العمل',
                'en' => 'How to work',
            ],
            'title' => [
                'ar' => 'كيفية العمل',
                'en' => 'How to work',
            ],
            'description' => [
                'ar' => 'تعرف على أهم توجهات الأعمال في المجالات المختلفة',
                'en' => 'Discover the most important business trends in various fields',
            ],
        ]);

        $feature_title_ar = [
            'دعم العملاء عبر الإنترنت والموقع', 'ميزات قوية لمؤسستك', 'سريع وسهل الاستخدام للمعلمين',
        ];
        $feature_title_en = [
            'Online and On-site Customer Support', 'Powerful Features for Your Institution', 'Fast and Easy-to-Use for Teachers',
        ];

        $description_ar = [
            'إلى جانب الدعم عبر الإنترنت وفي الموقع، نقدم أيضاً تدريباً عند الطلب وقائماً على الاحتياجات', 'نوفر كل ما ستحتاجه إدارة المؤسسة التعليمية. لا حاجة لتخصيصات معقدة', 'مصمم بناءً على احتياجات المعلمين وأولياء الأمور. لا حاجة لخبرة تقنية لبدء المهمة بسرعة',
        ];
        $description_en = [
            'In addition to online and on-site support, we also provide on-demand and needs-based training', 'We provide everything an educational institution management needs. No complex customizations required', 'Designed based on teachers\' and parents\' needs. No technical expertise needed to quickly start tasks',
        ];

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

    }
}
