<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\systemUnit;
use Illuminate\Database\Seeder;

class systemUnitSeeder extends Seeder
{
    public function run()
    {

        // Titles (Features)
        $title_ar = [
            'إدارة التقارير والتحليلات',
            'إشعارات وتنبيهات آلية',
            'تكامل مع أنظمة الجهات الخارجية',
            'إدارة التوظيف والموارد البشرية',
            'نظام إدارة المستخدمين',
            'إدارة الحضور والغياب',
            'إدارة المكتبة الرقمية',
            'نظام الدفع الإلكتروني',
            'إدارة المناهج والجداول الدراسية',
            'إدارة الاختبارات والتقييمات',
        ];

        $title_en = [
            'Reports and Analytics Management',
            'Automatic Notifications and Alerts',
            'Third-party Systems Integration',
            'HR and Recruitment Management',
            'User Management System',
            'Attendance Management',
            'Digital Library Management',
            'E-Payment System',
            'Curriculum and Schedule Management',
            'Exams and Assessments Management',
        ];

        // Content (could be same as title if no additional content)
        $content_ar = $title_ar; // Using same as titles unless you have different content
        $content_en = $title_en; // Using same as titles unless you have different content

        // Descriptions
        $description_ar = [
            'نظام متكامل لإدارة التقارير المدرسية والتحليلات التعليمية',
            'نظام إشعارات ذكي للطلاب والمعلمين وأولياء الأمور',
            'إمكانية التكامل مع الأنظمة الحكومية والمنصات التعليمية الأخرى',
            'إدارة كاملة لشؤون الموظفين وعمليات التوظيف',
            'تحكم كامل في صلاحيات المستخدمين وتصنيفاتهم',
            'نظام متكامل لتسجيل حضور الطلاب والموظفين',
            'منظمة متكاملة للمصادر التعليمية والكتب الإلكترونية',
            'حلول دفع آمنة لجميع الرسوم المدرسية',
            'تخطيط وتنظيم المناهج والجداول المدرسية',
            'نظام متكامل لإدارة الاختبارات وتقييم الطلاب',
        ];

        $description_en = [
            'Integrated system for school reports management and educational analytics',
            'Smart notification system for students, teachers and parents',
            'Integration capability with government systems and other educational platforms',
            'Complete management of staff affairs and recruitment processes',
            'Full control over user permissions and classifications',
            'Integrated system for student and staff attendance recording',
            'Complete organization of educational resources and e-books',
            'Secure payment solutions for all school fees',
            'Planning and organization of curricula and school schedules',
            'Integrated system for exams management and student assessments',
        ];

        foreach ($title_ar as $key => $value) {
            systemUnit::create([
                'page_id' => Page::pricing,
                'name' => [
                    'ar' => $value,
                    'en' => $title_en[$key],
                ],
                'title' => [
                    'ar' => $value,
                    'en' => $title_en[$key],
                ],
                'description' => [
                    'ar' => $description_ar[$key],
                    'en' => $description_en[$key],
                ],
                'content' => [
                    'ar' => $content_ar[$key],
                    'en' => $content_en[$key],
                ],
            ]);
        }

    }
}
