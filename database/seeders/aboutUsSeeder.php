<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Page;
use Illuminate\Database\Seeder;

class aboutUsSeeder extends Seeder
{
    public function run()
    {

        // معلومات عن نومو ايكس
        $content = Content::create([
            'page_id' => Page::aboutUs,
            'name' => [
                'ar' => 'معلومات عن نومو إديو إكس',
                'en' => 'About Nomo Edu X',
            ],
            'title' => [
                'ar' => 'نومو إديو إكس - الحل المتكامل لإدارة المؤسسات التعليمية',
                'en' => 'Nomo Edu X - The Integrated Solution for Educational Institutions Management',
            ],
            'description' => [
                'ar' => 'نومو إديو إكس هو نظام متكامل لإدارة التعليم. مصمم كحلقة لدعم نمو المؤسسات الأكاديمية وتعزيز كفاءة العمليات التعليمية والإدارية. يجمع بين أحدث التقنيات الذكية، أنظمة التعلم الإلكتروني، والتطبيقات المتقدمة لتقديم تجربة تعليمية متطورة وسلسة للطلاب، المعلمين، والإداريين.',
                'en' => 'Nomo Edu X is an integrated education management system. Designed as a solution to support the growth of academic institutions and enhance the efficiency of educational and administrative processes. It combines the latest smart technologies, e-learning systems, and advanced applications to provide a sophisticated and seamless educational experience for students, teachers, and administrators.',
            ],
            'image' => '',
            'extra_data' => [
                'pages' => [Page::aboutUs],
            ],
        ]);

        // Start:  رسالتنا
        $content = Content::create([
            'page_id' => Page::aboutUs,
            'name' => [
                'ar' => 'رسالتنا',
                'en' => 'Our Mission',
            ],
            'title' => [
                'ar' => 'رسالتنا',
                'en' => 'Our Mission',
            ],
            'description' => [
                'ar' => 'نحو تجربة تعليمية أكثر كفاءة وتكاملية',
                'en' => 'Towards a More Efficient and Integrated Educational Experience',
            ],
            'content' => [
                'ar' => 'في نومو إديو أكس، نؤمن بأن التكنولوجيا هي المفتاح لتطوير التعليم وتحقيق التميز الأكاديمي. رسالتنا هي تمكين المؤسسات التعليمية من خلال حلول ذكية ومتكاملة، تساهم في تحسين الكفاءة، تعزيز التفاعل، وتقديم تجربة تعليمية متطورة تلبي احتياجات العصر الرقمي. نعمل على توفير منصة متكاملة لإدارة التعليم لتحقيق التحول الرقمي وتعزيز الاستدامة والتطوير المستمر.',
                'en' => 'At Nomo Edu X, we believe technology is the key to developing education and achieving academic excellence. Our mission is to empower educational institutions through smart, integrated solutions that improve efficiency, enhance engagement, and deliver advanced educational experiences that meet the needs of the digital age. We provide a comprehensive education management platform to achieve digital transformation and promote sustainability and continuous development.',
            ],
            'image' => '',
            'extra_data' => [
                'pages' => [Page::aboutUs],
            ],
        ]);

        // Start : رؤيتنا
        $content = Content::create([
            'page_id' => Page::aboutUs,
            'name' => [
                'ar' => 'رؤيتنا',
                'en' => 'Our Vision',
            ],
            'title' => [
                'ar' => 'تمكين التعليم من خلال التكنولوجيا الذكية',
                'en' => 'Empowering Education Through Smart Technology',
            ],
            'description' => [
                'ar' => 'أن يكون نومو إديو إكس الحل الرائد عالميًا في إدارة التعليم',
                'en' => 'For Nomo Edu X to become the global leader in education management',
            ],
            'content' => [
                'ar' => 'أن يكون نومو إديو إكس الحل الرائد عالميًا في إدارة التعليم، من خلال تقديم أنظمة متكاملة وذكية تسهم في تحقيق التحول الرقمي في المؤسسات الأكاديمية، وتعزز الكفاءة، والاستدامة في العملية التعليمية. نطمح إلى مستقبل تعليم أكثر تطورًا، حيث يندمج التعليم بالتكنولوجيا لخلق بيئة أكاديمية مبتكرة.',
                'en' => 'For Nomo Edu X to become the global leader in education management by providing integrated, intelligent systems that contribute to digital transformation in academic institutions, enhancing efficiency and sustainability in the educational process. We aspire to a more advanced educational future where education merges with technology to create an innovative academic environment.',
            ],
            'image' => '',
            'extra_data' => [
                'pages' => [Page::aboutUs],
            ],
        ]);

        // start : ما الذي يميزنا؟
        $content = Content::create([
            'page_id' => Page::aboutUs,
            'name' => [
                'ar' => 'ما الذي يميزنا؟',
                'en' => 'What Makes Us Special?',
            ],
            'title' => [
                'ar' => 'نومو إديو إكس - كل ما تحتاجه لإدارة تعليمك بذكاء وسهولة!',
                'en' => 'Nomo Edu X - Everything You Need to Manage Your Education Smartly and Easily!',
            ],
            'description' => [
                'ar' => 'نظام تعليمي متكامل يجمع بين إدارة التعلم، إدارة المعلومات الأكاديمية، التطبيقات الذكية والمدفوعات الإلكترونية في منصة واحدة',
                'en' => 'An integrated educational system that combines learning management, academic information systems, smart applications and electronic payments in one platform',
            ],
            'content' => [
                'ar' => 'نومو إديو إكس هو نظام تعليمي متكامل يجمع بين إدارة التعلم (LMS)، إدارة المعلومات الأكاديمية (SIS)، التطبيقات الذكية والمدفوعات الإلكترونية في منصة واحدة. يتميز بالمرونة والتخصيص ليتناسب مع مختلف المؤسسات التعليمية، مع أدوات تحليل البيانات واتخاذ القرار لتحسين الأداء الأكاديمي. يوفر النظام آتمتة ذكية للعمليات الإدارية لتوفير الوقت والجهد، إلى جانب واجهة مستخدم سلسة مصممة وفق أفضل معايير UX/UI. يعتمد على أعلى معايير الأمان لحماية البيانات، ويأتي مع دعم فني واستشارات مستمرة لضمان أفضل تجربة استخدام. نقدم حلولاً ذكية تدعم نمو التعليم وتطويره الرقمي بكل كفاءة وسهولة!',
                'en' => 'Nomo Edu X is a comprehensive educational system that combines Learning Management (LMS), Student Information System (SIS), smart applications and electronic payments in a single platform. It offers flexibility and customization to suit various educational institutions, along with data analysis and decision-making tools to improve academic performance. The system provides smart automation of administrative processes to save time and effort, coupled with a smooth user interface designed according to the best UX/UI standards. It relies on the highest security standards to protect data, and comes with continuous technical support and consultations to ensure the best user experience. We provide smart solutions that support the growth and digital development of education with full efficiency and ease!',
            ],
            'image' => '',
            'extra_data' => [
                'pages' => [Page::aboutUs],
            ],
        ]);

    }
}
