<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'name' => 'Riya Mehta',
                'designation' => 'Manager',
                'company' => 'Trendico',
                'quote' => 'Boosted engagement and sales perfectly.',
                'order' => 1,
            ],
            [
                'name' => 'Miguel Torres',
                'designation' => 'CEO',
                'company' => 'DocFlow',
                'quote' => 'Fast, accurate NLP tool saved hours.',
                'order' => 2,
            ],
            [
                'name' => 'Sebastian Clark',
                'designation' => 'Manager',
                'company' => 'SwiftLogix',
                'quote' => 'Automation delivered immediate ROI.',
                'order' => 3,
            ],
            [
                'name' => 'Priya Ramirez',
                'designation' => 'CEO',
                'company' => 'BrightNest',
                'quote' => 'Chatbot transformed customer service.',
                'order' => 4,
            ],
        ];

        foreach ($items as $item) {
            Testimonial::create([
                'name' => $item['name'],
                'designation' => $item['designation'],
                'company' => $item['company'],
                'quote' => $item['quote'],
                'is_active' => true,
                'sort_order' => $item['order'],
            ]);
        }
    }
}
