<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceEnSeeder extends Seeder
{
    public function run()
    {
        // Get category IDs from the service_categories table
        $categories = DB::table('service_categories')->pluck('id', 'slug');

        DB::table('services_en')->insert([
            // Hajj Application Process
            [
                'slug' => 'visit-agent',
                'name' => 'Visit the Agent',
                'description' => 'Visit our certified Hajj agents to begin your application process. Our experienced agents will guide you through all requirements and documentation needed for your Hajj journey.',
                'price' => 0.00,
                'image_url' => '/services/visit_agent.jpg',
                'category_id' => $categories['hajj-application'],
            ],
            [
                'slug' => 'prepare-documents',
                'name' => 'Prepare Documents',
                'description' => 'Gather and prepare all necessary documents including passport, medical certificates, vaccination records, and financial proof required for Hajj application.',
                'price' => 50.00,
                'image_url' => '/services/prepare_documents.jpg',
                'category_id' => $categories['hajj-application'],
            ],
            [
                'slug' => 'payment-method',
                'name' => 'Setup Payment Method',
                'description' => 'Configure secure payment methods for your Hajj package including accommodation, transportation, and other services. Multiple payment options available.',
                'price' => 0.00,
                'image_url' => '/services/payment_method.jpg',
                'category_id' => $categories['hajj-application'],
            ],
            [
                'slug' => 'setup-hotel',
                'name' => 'Setup the Hotel',
                'description' => 'Book and configure your accommodation in Makkah and Madinah. Choose from various hotel categories based on proximity to Haram and amenities.',
                'price' => 1500.00,
                'image_url' => '/services/setup_hotel.jpg',
                'category_id' => $categories['hajj-application'],
            ],

            // Terms and Policies for Hajj
            [
                'slug' => 'hajj-guidelines',
                'name' => 'Hajj Guidelines and Rules',
                'description' => 'Comprehensive guidelines for performing Hajj according to Islamic principles and Saudi Arabian regulations. Includes dress codes, behavior guidelines, and prohibited items.',
                'price' => 0.00,
                'image_url' => '/services/hajj_guidelines.jpg',
                'category_id' => $categories['terms-policies'],
            ],
            [
                'slug' => 'visa-requirements',
                'name' => 'Visa Requirements',
                'description' => 'Detailed information about Hajj visa requirements, application process, validity period, and entry regulations for different countries.',
                'price' => 200.00,
                'image_url' => '/services/visa_requirements.jpg',
                'category_id' => $categories['terms-policies'],
            ],
            [
                'slug' => 'health-regulations',
                'name' => 'Health and Safety Regulations',
                'description' => 'Important health requirements including mandatory vaccinations, health insurance, medical examinations, and safety protocols during Hajj.',
                'price' => 0.00,
                'image_url' => '/services/health_regulations.jpg',
                'category_id' => $categories['terms-policies'],
            ],
            [
                'slug' => 'financial-policies',
                'name' => 'Financial Policies',
                'description' => 'Understanding payment schedules, refund policies, cancellation terms, and financial responsibilities for Hajj pilgrimage.',
                'price' => 0.00,
                'image_url' => '/services/financial_policies.jpg',
                'category_id' => $categories['terms-policies'],
            ],

            // Routes of Religious Places
            [
                'slug' => 'kaaba-masjid-haram',
                'name' => 'Kaaba and Masjid al-Haram',
                'description' => 'The holiest site in Islam, home to the Kaaba. Perform Tawaf (circumambulation) and prayers. Located in the heart of Makkah with multiple entrances and levels.',
                'price' => 0.00,
                'image_url' => '/services/kaaba_haram.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'mount-arafat',
                'name' => 'Mount Arafat (Jabal al-Rahmah)',
                'description' => 'The most important site for Hajj pilgrimage. Stand in prayer and supplication on the Day of Arafat. Located 20km southeast of Makkah.',
                'price' => 0.00,
                'image_url' => '/services/mount_arafat.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'muzdalifah',
                'name' => 'Muzdalifah',
                'description' => 'Sacred area between Arafat and Mina where pilgrims spend the night under the stars and collect pebbles for the stoning ritual.',
                'price' => 0.00,
                'image_url' => '/services/muzdalifah.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'mina-jamarat',
                'name' => 'Mina and Jamarat',
                'description' => 'Valley of Mina where pilgrims stay in tents and perform the symbolic stoning of the devil at the three Jamarat pillars.',
                'price' => 0.00,
                'image_url' => '/services/mina_jamarat.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'masjid-nabawi',
                'name' => 'Masjid an-Nabawi (Madinah)',
                'description' => 'The Prophet\'s Mosque in Madinah, second holiest mosque in Islam. Visit the tomb of Prophet Muhammad and pray in the Rawdah.',
                'price' => 0.00,
                'image_url' => '/services/masjid_nabawi.jpg',
                'category_id' => $categories['religious-places'],
            ],
            [
                'slug' => 'mount-uhud',
                'name' => 'Mount Uhud',
                'description' => 'Historic mountain in Madinah, site of the Battle of Uhud. Visit the martyrs\' cemetery and learn about Islamic history.',
                'price' => 0.00,
                'image_url' => '/services/mount_uhud.jpg',
                'category_id' => $categories['religious-places'],
            ],

            // Hajj Procedure
            [
                'slug' => 'ihram-preparation',
                'name' => 'Ihram Preparation',
                'description' => 'Learn how to enter the state of Ihram, including proper clothing, intentions (niyyah), and restrictions that apply during this sacred state.',
                'price' => 0.00,
                'image_url' => '/services/ihram_preparation.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'tawaf-procedure',
                'name' => 'Tawaf Procedure',
                'description' => 'Detailed guide on performing Tawaf - the seven circuits around the Kaaba, including starting position, direction, and prayers to recite.',
                'price' => 0.00,
                'image_url' => '/services/tawaf_procedure.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'sai-procedure',
                'name' => 'Sa\'i Procedure',
                'description' => 'Step-by-step guide for Sa\'i - walking seven times between the hills of Safa and Marwah, commemorating Hagar\'s search for water.',
                'price' => 0.00,
                'image_url' => '/services/sai_procedure.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'day-arafat',
                'name' => 'Day of Arafat Procedures',
                'description' => 'Complete guide for the most important day of Hajj, including arrival time, prayers, supplications, and departure procedures.',
                'price' => 0.00,
                'image_url' => '/services/day_arafat.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'stoning-jamarat',
                'name' => 'Stoning of Jamarat',
                'description' => 'Detailed instructions for the symbolic stoning ritual, including timing, number of stones, and safety procedures.',
                'price' => 0.00,
                'image_url' => '/services/stoning_jamarat.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],
            [
                'slug' => 'sacrifice-ritual',
                'name' => 'Sacrifice Ritual (Qurbani)',
                'description' => 'Information about the sacrifice ritual during Hajj, including options for personal sacrifice or voucher system.',
                'price' => 200.00,
                'image_url' => '/services/sacrifice_ritual.jpg',
                'category_id' => $categories['hajj-procedure'],
            ],

            // Medical Help
            [
                'slug' => 'king-abdullah-medical-city',
                'name' => 'King Abdullah Medical City',
                'description' => 'Major medical facility in Makkah providing comprehensive healthcare services for pilgrims. 24/7 emergency services available.',
                'price' => 0.00,
                'image_url' => '/services/king_abdullah_medical.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'ajyad-emergency-hospital',
                'name' => 'Ajyad Emergency Hospital',
                'description' => 'Specialized emergency hospital near Haram, equipped with modern facilities and multilingual medical staff.',
                'price' => 0.00,
                'image_url' => '/services/ajyad_hospital.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'madinah-general-hospital',
                'name' => 'Madinah General Hospital',
                'description' => 'Main hospital in Madinah providing general medical services, emergency care, and specialized treatments for pilgrims.',
                'price' => 0.00,
                'image_url' => '/services/madinah_hospital.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'mobile-medical-units',
                'name' => 'Mobile Medical Units',
                'description' => 'Mobile healthcare units stationed throughout Makkah and Madinah providing basic medical care and first aid.',
                'price' => 0.00,
                'image_url' => '/services/mobile_medical.jpg',
                'category_id' => $categories['medical-help'],
            ],
            [
                'slug' => 'pharmacy-services',
                'name' => '24/7 Pharmacy Services',
                'description' => 'Round-the-clock pharmacy services near holy sites providing prescription medications and over-the-counter drugs.',
                'price' => 0.00,
                'image_url' => '/services/pharmacy_services.jpg',
                'category_id' => $categories['medical-help'],
            ],

            // Forgot my Route - Emergency Contact Services
            [
                'slug' => 'emergency-location',
                'name' => 'Emergency GPS Location',
                'description' => 'Your current emergency location in Jeddah. Use this location to share with emergency contacts or navigation services.',
                'price' => 0.00,
                'image_url' => '/services/emergency_location.jpg',
                'category_id' => $categories['forgot-route'],
                'gps_latitude' => 21.4858,
                'gps_longitude' => 39.1925,
            ],
            [
                'slug' => 'contact-group',
                'name' => 'Contact Group',
                'description' => 'Emergency contact for your travel group. Call this number if you are lost or need assistance from your group leader.',
                'price' => 0.00,
                'image_url' => '/services/contact_group.jpg',
                'category_id' => $categories['forgot-route'],
                'phone_number' => '+966-12-345-6789',
                'contact_type' => 'group',
            ],
            [
                'slug' => 'contact-hotel',
                'name' => 'Contact Hotel',
                'description' => 'Direct contact to your hotel reception. Use this to get assistance with directions back to your hotel or transportation arrangements.',
                'price' => 0.00,
                'image_url' => '/services/contact_hotel.jpg',
                'category_id' => $categories['forgot-route'],
                'phone_number' => '+966-12-987-6543',
                'contact_type' => 'hotel',
            ],
        ]);
    }
}