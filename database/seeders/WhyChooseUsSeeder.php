<?php

namespace Database\Seeders;

use App\Models\WhyChooseUs;
use Illuminate\Database\Seeder;

class WhyChooseUsSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            [
                'title' => 'Smarter insights',
                'description' =>
                    'Make faster, data-driven decisions powered by real-time AI analysis.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Integrated AI solutions',
                'description' =>
                    'No extra tools needed. Built-in scalable AI from day one.',
                'sort_order' => 2,
            ],
            [
                'title' => 'End-to-end automation',
                'description' =>
                    'Eliminate bottlenecks with intelligent workflows.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Secure architecture',
                'description' =>
                    'Enterprise-grade security with scalable infrastructure.',
                'sort_order' => 4,
            ],
            [
                'title' => 'Custom strategies',
                'description' =>
                    'Tailored AI strategies aligned with your business goals.',
                'sort_order' => 5,
            ],
            [
                'title' => 'Continuous optimization',
                'description' =>
                    'We refine systems continuously for maximum performance.',
                'sort_order' => 6,
            ],
        ];

        foreach ($features as $feature) {
            WhyChooseUs::create([
                'title' => $feature['title'],
                'description' => $feature['description'],
                'icon_svg' => null,
                'is_active' => true,
                'sort_order' => $feature['sort_order'],
            ]);
        }
    }
}
