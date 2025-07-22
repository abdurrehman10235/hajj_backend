<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceArSeeder extends Seeder
{
    public function run()
    {
        // Get category IDs by slug
        $categories = DB::table('service_categories')->pluck('id', 'slug');

        DB::table('services_ar')->insert([
            // Hajj Application Process
            [
                'slug' => 'visit-agent',
                'name' => 'زيارة الوكيل',
                'description' => 'قم بزيارة وكلاء الحج المعتمدين لدينا لبدء عملية التقديم. سيرشدك وكلاؤنا ذوو الخبرة خلال جميع المتطلبات والوثائق اللازمة لرحلة الحج.',
                'price' => 0.00,
                'image_url' => '/services/visit_agent.jpg',
                'category_id' => $categories['hajj-application'],
            ],
            [
                'slug' => 'prepare-documents',
                'name' => 'تحضير الوثائق',
                'description' => 'جمع وتحضير جميع الوثائق الضرورية بما في ذلك جواز السفر والشهادات الطبية وسجلات التطعيم والإثبات المالي المطلوب لطلب الحج.',
                'price' => 50.00,
                'image_url' => '/services/prepare_documents.jpg',
                'category_id' => $categories['hajj-application'],
            ],
            [
                'slug' => 'payment-method',
                'name' => 'إعداد طريقة الدفع',
                'description' => 'تكوين طرق دفع آمنة لباقة الحج الخاصة بك بما في ذلك الإقامة والنقل والخدمات الأخرى. خيارات دفع متعددة متاحة.',
                'price' => 0.00,
                'image_url' => '/services/payment_method.jpg',
                'category_id' => $categories['hajj-application'],
            ],
            [
                'slug' => 'setup-hotel',
                'name' => 'إعداد الفندق',
                'description' => 'احجز وقم بتكوين إقامتك في مكة والمدينة. اختر من فئات فنادق مختلفة بناءً على القرب من الحرم والمرافق.',
                'price' => 1500.00,
                'image_url' => '/services/setup_hotel.jpg',
                'category_id' => $categories['hajj-application'],
            ],

            // Terms and Policies for Hajj
            [
                'slug' => 'hajj-guidelines',
                'name' => 'إرشادات وقواعد الحج',
                'description' => 'إرشادات شاملة لأداء الحج وفقاً للمبادئ الإسلامية واللوائح السعودية. تشمل قواعد اللباس وإرشادات السلوك والمواد المحظورة.',
                'price' => 0.00,
                'image_url' => '/services/hajj_guidelines.jpg',
                'category_id' => $categories['terms-policies'],
            ],
            [
                'slug' => 'visa-requirements',
                'name' => 'متطلبات التأشيرة',
                'description' => 'معلومات مفصلة حول متطلبات تأشيرة الحج وعملية التقديم وفترة الصلاحية ولوائح الدخول للدول المختلفة.',
                'price' => 200.00,
                'image_url' => '/services/visa_requirements.jpg',
                'category_id' => $categories['terms-policies'],
            ],
            [
                'slug' => 'health-regulations',
                'name' => 'لوائح الصحة والسلامة',
                'description' => 'متطلبات صحية مهمة تشمل التطعيمات الإجبارية والتأمين الصحي والفحوصات الطبية وبروتوكولات السلامة أثناء الحج.',
                'price' => 0.00,
                'image_url' => '/services/health_regulations.jpg',
                'category_id' => $categories['terms-policies'],
            ],
            [
                'slug' => 'financial-policies',
                'name' => 'السياسات المالية',
                'description' => 'فهم جداول الدفع وسياسات الاسترداد وشروط الإلغاء والمسؤوليات المالية لحج الحج.',
                'price' => 0.00,
                'image_url' => '/services/financial_policies.jpg',
                'category_id' => $categories['terms-policies'],
            ],

            // Routes of Religious Places
            [
                'slug' => 'kaaba-masjid-haram',
                'name' => 'الكعبة والمسجد الحرام',
                'description' => 'أقدس موقع في الإسلام، موطن الكعبة. أدِ الطواف والصلوات. يقع في قلب مكة مع مداخل ومستويات متعددة.',
                'price' => 0.00,
                'image_url' => '/services/kaaba_haram.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'mount-arafat',
                'name' => 'جبل عرفات (جبل الرحمة)',
                'description' => 'أهم موقع لحج الحج. قف في الصلاة والدعاء في يوم عرفة. يقع على بعد 20 كم جنوب شرق مكة.',
                'price' => 0.00,
                'image_url' => '/services/mount_arafat.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'muzdalifah',
                'name' => 'مزدلفة',
                'description' => 'منطقة مقدسة بين عرفات ومنى حيث يقضي الحجاج الليلة تحت النجوم ويجمعون الحصى لطقوس الرجم.',
                'price' => 0.00,
                'image_url' => '/services/muzdalifah.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'mina-jamarat',
                'name' => 'منى والجمرات',
                'description' => 'وادي منى حيث يقيم الحجاج في الخيام ويؤدون الرجم الرمزي للشيطان في أعمدة الجمرات الثلاثة.',
                'price' => 0.00,
                'image_url' => '/services/mina_jamarat.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'masjid-nabawi',
                'name' => 'المسجد النبوي (المدينة)',
                'description' => 'مسجد النبي في المدينة، ثاني أقدس مسجد في الإسلام. زر قبر النبي محمد وصل في الروضة.',
                'price' => 0.00,
                'image_url' => '/services/masjid_nabawi.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'mount-uhud',
                'name' => 'جبل أحد',
                'description' => 'جبل تاريخي في المدينة، موقع غزوة أحد. زر مقبرة الشهداء وتعلم عن التاريخ الإسلامي.',
                'price' => 0.00,
                'image_url' => '/services/mount_uhud.jpg',
                'category_id' => $categories['religious-places'],
            ],

            // Hajj Procedure
            [
                'slug' => 'ihram-preparation',
                'name' => 'تحضير الإحرام',
                'description' => 'تعلم كيفية دخول حالة الإحرام، بما في ذلك الملابس المناسبة والنيات والقيود التي تنطبق خلال هذه الحالة المقدسة.',
                'price' => 0.00,
                'image_url' => '/services/ihram_preparation.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'tawaf-procedure',
                'name' => 'إجراءات الطواف',
                'description' => 'دليل مفصل لأداء الطواف - الدورات السبع حول الكعبة، بما في ذلك موضع البداية والاتجاه والصلوات التي يجب تلاوتها.',
                'price' => 0.00,
                'image_url' => '/services/tawaf_procedure.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'sai-procedure',
                'name' => 'إجراءات السعي',
                'description' => 'دليل خطوة بخطوة للسعي - المشي سبع مرات بين تلتي الصفا والمروة، إحياءً لذكرى بحث هاجر عن الماء.',
                'price' => 0.00,
                'image_url' => '/services/sai_procedure.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'day-arafat',
                'name' => 'إجراءات يوم عرفة',
                'description' => 'دليل كامل لأهم يوم في الحج، بما في ذلك وقت الوصول والصلوات والأدعية وإجراءات المغادرة.',
                'price' => 0.00,
                'image_url' => '/services/day_arafat.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'stoning-jamarat',
                'name' => 'رمي الجمرات',
                'description' => 'تعليمات مفصلة لطقوس الرجم الرمزي، بما في ذلك التوقيت وعدد الحجارة وإجراءات السلامة.',
                'price' => 0.00,
                'image_url' => '/services/stoning_jamarat.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'sacrifice-ritual',
                'name' => 'طقوس الذبح (القرباني)',
                'description' => 'معلومات حول طقوس الذبح أثناء الحج، بما في ذلك خيارات الذبح الشخصي أو نظام القسائم.',
                'price' => 200.00,
                'image_url' => '/services/sacrifice_ritual.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],

            // Medical Help
            [
                'slug' => 'king-abdullah-medical-city',
                'name' => 'مدينة الملك عبدالله الطبية',
                'description' => 'مرفق طبي رئيسي في مكة يوفر خدمات رعاية صحية شاملة للحجاج. خدمات طوارئ متاحة على مدار الساعة.',
                'price' => 0.00,
                'image_url' => '/services/king_abdullah_medical.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'ajyad-emergency-hospital',
                'name' => 'مستشفى أجياد للطوارئ',
                'description' => 'مستشفى طوارئ متخصص بالقرب من الحرم، مجهز بمرافق حديثة وطاقم طبي متعدد اللغات.',
                'price' => 0.00,
                'image_url' => '/services/ajyad_hospital.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'madinah-general-hospital',
                'name' => 'مستشفى المدينة العام',
                'description' => 'المستشفى الرئيسي في المدينة يوفر خدمات طبية عامة ورعاية طوارئ وعلاجات متخصصة للحجاج.',
                'price' => 0.00,
                'image_url' => '/services/madinah_hospital.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'mobile-medical-units',
                'name' => 'الوحدات الطبية المتنقلة',
                'description' => 'وحدات رعاية صحية متنقلة متمركزة في جميع أنحاء مكة والمدينة توفر رعاية طبية أساسية وإسعافات أولية.',
                'price' => 0.00,
                'image_url' => '/services/mobile_medical.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'pharmacy-services',
                'name' => 'خدمات الصيدلية على مدار الساعة',
                'description' => 'خدمات صيدلية على مدار الساعة بالقرب من المواقع المقدسة توفر الأدوية الموصوفة والأدوية التي لا تستلزم وصفة طبية.',
                'price' => 0.00,
                'image_url' => '/services/pharmacy_services.jpg',
                'category_id' => $categories['medical-help'],
            ],

            // Route Back to Hotel
            [
                'slug' => 'makkah-hilton-route',
                'name' => 'الطريق إلى فندق مكة هيلتون',
                'description' => 'إرشادات طريق مباشر من الحرم إلى فندق مكة هيلتون. يشمل اتجاهات المشي ومواعيد الحافلات ومراجع المعالم.',
                'price' => 0.00,
                'image_url' => '/services/makkah_hilton_route.jpg',
                'category_id' => $categories['hotel-routes'],
            ],
            [
                'slug' => 'fairmont-clock-tower',
                'name' => 'الطريق إلى فيرمونت برج الساعة',
                'description' => 'مساعدة في التنقل إلى فيرمونت مكة برج الساعة الملكي. خيارات طرق متعددة ووسائل نقل متاحة.',
                'price' => 0.00,
                'image_url' => '/services/fairmont_route.jpg',
                'category_id' => $categories['hotel-routes'],
            ],
            [
                'slug' => 'conrad-makkah-route',
                'name' => 'الطريق إلى فندق كونراد مكة',
                'description' => 'اتجاهات مفصلة إلى فندق كونراد مكة مع أوقات المشي المقدرة وخيارات النقل البديلة.',
                'price' => 0.00,
                'image_url' => '/services/conrad_route.jpg',
                'category_id' => $categories['hotel-routes'],
            ],
            [
                'slug' => 'madinah-movenpick-route',
                'name' => 'الطريق إلى موفنبيك المدينة',
                'description' => 'إرشادات طريق كاملة من المسجد النبوي إلى فندق موفنبيك المدينة مع معلومات الحافلات والتاكسي.',
                'price' => 0.00,
                'image_url' => '/services/movenpick_route.jpg',
                'category_id' => $categories['hotel-routes'],
            ],
            [
                'slug' => 'general-hotel-navigation',
                'name' => 'التنقل العام للفنادق',
                'description' => 'مساعدة عامة في التنقل للعثور على طريقك إلى أي فندق في مكة أو المدينة باستخدام المعالم وإحداثيات GPS.',
                'price' => 0.00,
                'image_url' => '/services/general_navigation.jpg',
                'category_id' => $categories['hotel-routes'],
            ],
        ]);
    }
}