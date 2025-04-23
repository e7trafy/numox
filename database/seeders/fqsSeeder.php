<?php

namespace Database\Seeders;

use App\Models\Fqs;
use App\Models\Page;
use Illuminate\Database\Seeder;

class fqsSeeder extends Seeder
{
    public function run()
    {

        $questions_ar = [
            'ما هو أفضل برنامج إدارة الكليات؟',
            'ما هي الميزات الرئيسية لبرنامج إدارة الكليات؟',
            'ما هو برنامج إدارة الكليات؟',
            'كم تبلغ تكلفة برنامج إدارة الكليات؟',
        ];

        $questions_en = [
            'What is the best college management software?',
            'What are the main features of college management software?',
            'What is college management software?',
            'How much does college management software cost?',
        ];

        $answers_ar = [
            'أورزم إيسوم هو نص شكلي (معنى أن الغاية هي الشكل وليس المحتوى) وتستخدم في صناعات المطابع والنشر. كان أورزم إيسوم وما يزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة بطباعته.',
            '',
            '',
            '',
        ];

        $answers_en = [
            'Lorem Ipsum is simply dummy text (meaning the focus is on form rather than content) used in the printing and publishing industry. Lorem Ipsum has been the industry standard dummy text since the 15th century when an unknown printer took a galley of type and scrambled it.',
            '',
            '',
            '',
        ];

        foreach ($questions_ar as $key => $question) {

            Fqs::create([
                'page_id' => Page::pricing,
                'name' => ['ar' => 'fqs', 'en' => 'fqs'],
                'question' => ['ar' => $question, 'en' => $questions_en[$key]],
                'answer' => ['ar' => $answers_ar[$key], 'en' => $answers_en[$key]],
                'extra_data' => [
                    'pages' => [Page::pricing],
                ],
            ]);
        }

    }
}
