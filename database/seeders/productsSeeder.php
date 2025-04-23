<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    public function run()
    {
        // First in home page اهم مميزات النظام ف الرئيسيه && product Page
        $products = [
            [
                'name_ar' => 'إدارة البرامج التعليمية',
                'name_en' => 'Educational Programs Management',
                'features_ar' => [
                    'تنظيم البرامج الأكاديمية بما يتوافق مع معايير التعليم العالي',
                    'تطوير البرامج لتلبية متطلبات سوق العمل',
                    'توافق البرامج مع متطلبات الاعتماد الأكاديمي',
                ],
                'features_en' => [
                    'Organizing academic programs according to higher education standards',
                    'Developing programs to meet labor market requirements',
                    'Program alignment with academic accreditation requirements',
                ],
            ],
            [
                'name_ar' => 'التعليم الإلكتروني',
                'name_en' => 'E-Learning',
                'features_ar' => [
                    'تقديم مقررات دراسية تفاعلية عن بعد باستخدام MOODLE',
                    'دعم أعضاء هيئة التدريس في إنشاء وتحديث المقررات بسهولة',
                ],
                'features_en' => [
                    'Providing interactive distance learning courses using MOODLE',
                    'Supporting faculty in easily creating and updating courses',
                ],
            ],
            [
                'name_ar' => 'جدولة آلية للمقررات والجداول',
                'name_en' => 'Automatic Course Scheduling',
                'features_ar' => [
                    'جدولة المقررات الدراسية بشكل آلي',
                    'توزيع المقررات بشكل منظم على مدار العام',
                    'توافق الجداول مع أعضاء هيئة التدريس لضمان أفضل استفادة',
                ],
                'features_en' => [
                    'Automatic scheduling of study courses',
                    'Organized distribution of courses throughout the year',
                    'Schedule compatibility with faculty for optimal utilization',
                ],
            ],
            [
                'name_ar' => 'إدارة التعليم والتدريس',
                'name_en' => 'Education and Teaching Management',
                'features_ar' => [
                    'تقديم محتوى تعليمي تفاعلي متكامل',
                    'إدارة عملية التدريس والتقييم بشكل مركزي',
                ],
                'features_en' => [
                    'Providing comprehensive interactive educational content',
                    'Centralized management of teaching and assessment processes',
                ],
            ],
            [
                'name_ar' => 'إدارة الاختبارات بالذكاء الاصطناعي',
                'name_en' => 'AI-Powered Exam Management',
                'features_ar' => [
                    'مراقبة الاختبارات عن بعد باستخدام الذكاء الاصطناعي',
                    'ضمان نزاهة الاختبارات من خلال تقنيات المراقبة المتقدمة',
                    'تحليل أداء الطلاب باستخدام الذكاء الاصطناعي',
                ],
                'features_en' => [
                    'Remote exam monitoring using artificial intelligence',
                    'Ensuring exam integrity through advanced monitoring technologies',
                    'Analyzing student performance using AI',
                ],
            ],
            [
                'name_ar' => 'دعم الاعتماد الأكاديمي والجودة',
                'name_en' => 'Academic Accreditation and Quality Support',
                'features_ar' => [
                    'تلبية متطلبات هيئات الاعتماد الأكاديمي',
                    'إدارة معايير الجودة الأكاديمية',
                    'توفير التقارير اللازمة للاعتماد',
                ],
                'features_en' => [
                    'Meeting requirements of academic accreditation bodies',
                    'Managing academic quality standards',
                    'Providing necessary accreditation reports',
                ],
            ],
            [
                'name_ar' => 'إدارة أعضاء هيئة التدريس',
                'name_en' => 'Faculty Management',
                'features_ar' => [
                    'ربط أعضاء هيئة التدريس بالمقررات والجداول',
                    'توزيع الأحمال التدريسية بشكل عادل ومنظم',
                    'إدارة معلومات ومؤهلات أعضاء هيئة التدريس',
                ],
                'features_en' => [
                    'Linking faculty members to courses and schedules',
                    'Fair and organized distribution of teaching loads',
                    'Managing faculty information and qualifications',
                ],
            ],
            [
                'name_ar' => 'نظام دعم ذكي',
                'name_en' => 'Smart Support System',
                'features_ar' => [
                    'دعم الطلاب وأعضاء هيئة التدريس باستخدام الذكاء الاصطناعي',
                    'حل المشكلات الأكاديمية والتقنية بسرعة',
                    'تقديم إجابات ذكية للاستفسارات الشائعة',
                ],
                'features_en' => [
                    'AI-powered support for students and faculty',
                    'Quick resolution of academic and technical issues',
                    'Providing smart answers to common inquiries',
                ],
            ],
            [
                'name_ar' => 'نظام قبول الطلاب',
                'name_en' => 'Student Admission System',
                'features_ar' => [
                    'نظام قبول إلكتروني متكامل',
                    'إدارة بيانات الطلاب بشكل آمن',
                    'تسهيل عملية التسجيل للطلاب الجدد',
                ],
                'features_en' => [
                    'Comprehensive electronic admission system',
                    'Secure management of student data',
                    'Simplifying registration for new students',
                ],
            ],
            [
                'name_ar' => 'إصدار الشهادات والتحقق عبر QR',
                'name_en' => 'Certificate Issuance and QR Verification',
                'features_ar' => [
                    'إصدار شهادات إلكترونية معتمدة',
                    'إمكانية التحقق من صحة الشهادات عبر QR CODE',
                    'ضمان مصداقية وسهولة التحقق من الشهادات',
                ],
                'features_en' => [
                    'Issuing accredited electronic certificates',
                    'Certificate verification via QR CODE',
                    'Ensuring certificate authenticity and easy verification',
                ],
            ],
        ];

        foreach ($products as $index => $product) {
            $content = Product::create([
                'page_id' => Page::home,
                'name' => [
                    'ar' => $product['name_ar'],
                    'en' => $product['name_en'],
                ],
                'title' => [
                    'ar' => $product['name_ar'],
                    'en' => $product['name_en'],
                ],
                'description' => [
                    'ar' => $product['name_ar'],
                    'en' => $product['name_en'],
                ],
                'image' => '',
                'extra_data' => [
                    'pages' => [Page::home, Page::products],
                ],
            ]);

            foreach ($product['features_ar'] as $key => $feature) {
                $content->features()->create([
                    'title' => [
                        'ar' => $feature,
                        'en' => $product['features_en'][$key],
                    ],
                ]);
            }
        }
    }
}
