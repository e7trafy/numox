<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Page;
use Illuminate\Database\Seeder;

class partnersSeeder extends Seeder
{
    public function run()
    {
        // first Section : كن جزء من نجاح نومو
        Content::create([
            'page_id' => Page::partners,
            'name' => [
                'ar' => 'كن جزءًا من نجاح نظام نومو إدريا أكس!',
                'en' => 'Be part of Nomo Edrea X system success!',
            ],
            'title' => [
                'ar' => 'كن جزءًا من نجاح نظام نومو إدريا أكس!',
                'en' => 'Be part of Nomo Edrea X system success!',
            ],
            'content' => [
                'ar' => 'نظام نومو إدريا أكس هو منصة تعليمية متكاملة، مصممة خصيصًا لمساعدة المؤسسات الأكاديمية على تيسيط عملياتها الإدارية، تحسين جودة التعليم، وتعزيز تجربة التعلم باستخدام أحدث التقنيات الذكية. مع التقدم المستمر في مجال التكنولوجيا التعليمية (EDTECH) أصبح التحول الرقمي في المؤسسات التعليمية ضرورة لا غنى عنها.
                 ومن خلال نظام نومو إدريا أكس، نوفر للمؤسسات الأكاديمية حلولاً مبتكرة تساهم في أتمتة العمليات، تحسين إدارة الطلاب وأعضاء هيئة التدريس، وتقديم تجربة تعليمية أكثر كفاءة وشمولية.
                نبحث عن شركاء موثوقين لديهم الرغبة في العمل معنا لتقديم حلول ذكية وفعالة للمدارس، الجامعات، والمراكز التدريبية، سواء كانوا:
                - مطوري برامج
                - مستشارين تعليميين
                - موزعي حلول برمجيات
                - متخصصين في تقنيات التعليم',

                'en' => 'Nomo Edrea X is an integrated educational platform, specifically designed to help academic institutions streamline administrative processes, improve education quality, and enhance learning experiences using the latest smart technologies. With continuous advancements in educational technology (EDTECH), digital transformation in educational institutions has become indispensable. Through Nomo Edrea X
                , we provide academic institutions with innovative solutions that contribute to process automation, improved management of students and faculty, and delivery of a more efficient and comprehensive educational experience.
                    We seek reliable partners who are eager to collaborate with us in delivering smart and effective solutions to schools, universities, and training centers, including:
                    - Software developers
                    - Educational consultants
                    - Software solutions distributors
                    - Educational technology specialists',
            ],
        ]);

        // scend section مميزات
        $content = Content::create([
            'page_id' => Page::partners,
            'name' => [
                'ar' => 'المميزات',
                'en' => 'Advantages',
            ],
            'title' => [
                'ar' => 'المميزات',
                'en' => 'Advantages',
            ],
            'description' => [
                'ar' => 'عند انضمامك كشريك OEM نومو إديو اكس',
                'en' => 'When you join as an OEM partner of Nomo Edu X',
            ],
        ]);

        $feature_title_ar = [
            'الوصول إلى الشيفرة المصدرية لـ نومو إديو أكس', 'مصدر إضافي لزيادة الإيرادات', 'توسع فعال في سوق تكنولوجيا التعليم',
        ];

        $feature_title_en = [
            'Access to Nomo Edu X Source Code', 'Additional revenue stream', 'Effective expansion in EdTech market',
        ];

        $description_ar = [
            'تحقيق الشروط والأحكام', 'يمكنك تحقيق أرباح إضافية من خلال بيع التراخيص، تقديم الاستشارات أو التدريب للمؤسسات التعليمية', 'دخول سوق التعليم الرقمي وتقديم حلول ذكية للمؤسسات التعليمية يساعد على توسع أعمالك',
        ];
        $description_en = [
            'Meeting terms and conditions', 'You can generate extra profits by selling licenses, providing consultations or training to educational institutions', 'Entering the digital education market and providing smart solutions to educational institutions helps expand your business',
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

        // third section وسع نطاق عملك
        Content::create([
            'page_id' => Page::partners,
            'name' => [
                'ar' => 'وسع نطاق عملك وحقق المزيد من المبيعات من خلال دمج "نومو إديو أكس" في حلولك',
                'en' => 'Expand your business scope and achieve more sales by integrating "Nomo Edu X" into your solutions',
            ],
            'title' => [
                'ar' => 'وسع نطاق عملك وحقق المزيد من المبيعات من خلال دمج "نومو إديو أكس" في حلولك',
                'en' => 'Expand your business scope and achieve more sales by integrating "Nomo Edu X" into your solutions',
            ],
            'content' => [
                'ar' => 'في بيئة تنافسية اليوم تحتاج كل مدرسة أو جامعة إلى حلول ذكية يمكن دمجها بسهولة. تبحث المؤسسات التعليمية عن برامج مرنة وفعالة تساعدها على زيادة الإنتاجية، وتحليل البيانات بذكاء وتقليل التكاليف التشغيلية.
مع أكثر من 40,000 مؤسسة تعليمية تستخدم نومو إديو أكس، تضمن تجربة عالمية المستوى لكل عميل. هذا يفتح فرصًا هائلة للشركاء OEM سواء من خلال مشاريع حكومية لمرة واحدة أو نماذج أعمال مستدامة.                ',
                'en' => 'In today\'s competitive environment, every school or university needs smart solutions that can be easily integrated. Educational institutions are looking for flexible and effective programs that help increase productivity, analyze data intelligently, and reduce operational costs.
                With over 40,000 educational institutions using Nomo Edu X, we guarantee a world-class experience for every customer. This opens tremendous opportunities for OEM partners, whether through one-time government projects or sustainable business models.',
            ],
        ]);

        // third section     'ar' => 'مهاراتك التسويقية + مربعاتك = نجاح باهر',
        Content::create([
            'page_id' => Page::partners,
            'name' => [
                'ar' => 'مهاراتك التسويقية + مربعاتك = نجاح باهر',
                'en' => 'Your marketing skills + your boxes = success',
            ],
            'title' => [
                'ar' => 'مهاراتك التسويقية + مربعاتك = نجاح باهر',
                'en' => 'Your marketing skills + your boxes = success',
            ],
            'content' => [
                'ar' => 'نعمل مع العديد من شركاء OEM حول العالم لتصميم وتطوير وتقديم حلول متكاملة وإبداعية للمدارس باستخدام نومو إديو إكس. مما يحقق قيمة حقيقية لعملك ومنحك ميزة تنافسية قوية.
كن جزءًا من برنامج شركاء نومو إديو إكس OEM اليوم، واستفد بجميع مزاياها دون الحاجة إلى كتابة سطر واحد من الكود أو توظيف مطورين!
بصفتك شريك OEM ستحصل على أحدث التحسينات والتطويرات في نظام نومو إديو إكس. بينما تركز على مهاراتك في التسويق والمبيعات لتحقيق النجاح.                            ',

                'en' => 'We work with many OEM partners worldwide to design, develop, and deliver integrated, creative school solutions using Nomo Edu X, creating real value for your business and giving you a strong competitive advantage.
                            Join the Nomo Edu X OEM Partner Program today and enjoy all its benefits without needing to write a single line of code or hire developers!
                            As an OEM partner, you\'ll receive the latest enhancements and developments in the Nomo Edu X system while you focus on your marketing and sales skills to achieve success.',
            ],
        ]);

        // forth section  الفوائد
        $content = Content::create([
            'page_id' => Page::partners,
            'name' => [
                'ar' => 'الفوائد',
                'en' => 'Benefits',
            ],
            'title' => [
                'ar' => 'الفوائد',
                'en' => 'Benefits',
            ],
            'content' => [
                'ar' => 'فوائد مثبتة لشراكتك مع نومو إديو إكس',
                'en' => 'Proven benefits for your partnership with Nomo Edu X',
            ],
        ]);

        $feature_title_ar = [
            'منصة مصممة تناسب السوق',
            'عائد استثمار مضمون',
            'التحكم الكامل بكل شيء',
            'تحديثات تلقائية',
            'لوحة تحكم الشركاء',
            'دعم على مدار الساعة',
            'ترخيص مفتوح المصدر تجاري',
        ];

        $feature_title_en = [
            'Market-tailored platform',
            'Guaranteed ROI',
            'Full control over everything',
            'Automatic updates',
            'Partner dashboard',
            '24/7 support',
            'Commercial open-source license',
        ];

        $description_ar = [
            'تم تطوير نومو إديو أكس ببنية مرنة وقابلة للتخصيص، مع واجهات برمجة تطبيقات (APIs) قوية مصممة خصيصاً لسوق تكنولوجيا التعليم',
            'حوالي 58% من الشركاء يستعيدون استثماراتهم خلال السنة الأولى، والعديد يحققون إيرادات بملايين الدولارات بفضل نظام نومو إديو أكس',
            'بصفتك شريك OEM، أنت من يحدد الأسعار والشروط الخاصة بعملائك بينما نوفر لك البنية التحتية والدعم الفني الفوري عند الحاجة',
            'كونك شريكاً معتمداً، ستتلقى أحدث التحديثات والتطورات لنظام نومو إديو أكس بشكل تلقائي',
            'احصل على وصول حصري إلى لوحة تحكم الشركاء حيث يمكنك إنشاء وتخصيص الحلول الخاصة بك بسهولة دون الحاجة إلى خبرة تقنية',
            'استفد من دعمنا على مدار الساعة من فريق نومو إديو أكس، مما يمكنك من تسويق منتجاتك وخدماتك بثقة',
            'يوفر لك نومو إديو أكس ترخيصاً تجارياً آمناً وقانونياً، مع الحرية الكاملة لتعديل الكود وامتلاك حقوق الملكية الفكرية',
        ];

        $description_en = [
            'Nomo Edu X was developed with a flexible and customizable architecture, featuring powerful APIs specifically designed for the EdTech market',
            'About 58% of partners recover their investments within the first year, with many generating millions in revenue thanks to the Nomo Edu X system',
            'As an OEM partner, you set the prices and terms for your customers while we provide the infrastructure and instant technical support when needed',
            'As a certified partner, you\'ll automatically receive the latest updates and developments for the Nomo Edu X system',
            'Get exclusive access to the partner dashboard where you can easily create and customize solutions without technical expertise',
            'Benefit from our 24/7 support from the Nomo Edu X team, enabling you to market your products and services with confidence',
            'Nomo Edu X provides a secure and legal commercial license with full freedom to modify the code and retain your intellectual property rights',
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
