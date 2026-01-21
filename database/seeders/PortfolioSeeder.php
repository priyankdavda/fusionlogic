<?php
namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Chatbot and NLP projects',
                'short_description' =>
                    'We build smart chatbots and NLP tools that understand and respond naturally.',
                'services' => ['Data Processing'],
                'countries' => ['Germany'],
                'location' => 'Issum, Germany',
                'client_name' => 'Aivora',
                'featured_image' => 'portfolio/featured/project-img01.jpg',
            ],
            [
                'title' => 'E-commerce & marketing',
                'short_description' =>
                    'AI solutions that boost sales using recommendations and dynamic pricing.',
                'services' => ['Artificial Intelligence'],
                'countries' => ['Singapore'],
                'location' => 'Singapore',
                'client_name' => 'Aivora',
                'featured_image' => 'portfolio/featured/project-img02.jpg',
            ],
            [
                'title' => 'Computer vision projects',
                'short_description' =>
                    'AI systems that analyze and understand visual data accurately.',
                'services' => ['Computer Vision'],
                'countries' => ['United States'],
                'location' => 'United States',
                'client_name' => 'Aivora',
                'featured_image' => 'portfolio/featured/project-img03.jpg',
            ],
            [
                'title' => 'Data science analytics',
                'short_description' =>
                    'AI-powered analytics turning complex data into insights.',
                'services' => ['Data Science'],
                'countries' => ['Canada'],
                'location' => 'Canada',
                'client_name' => 'Aivora',
                'featured_image' => 'portfolio/featured/project-img04.jpg',
            ],
        ];

        foreach ($projects as $index => $project) {
            Portfolio::create([
                'title' => $project['title'],
                'slug' => Str::slug($project['title']),
                'short_description' => $project['short_description'],
                'full_description' =>
                    $project['short_description'] .
                    ' This project showcases our expertise and real-world implementation.',
                'client_name' => $project['client_name'],
                'services' => $project['services'],
                'countries' => $project['countries'],
                'location' => $project['location'],
                'completion_date' => Carbon::now()->subMonths(rand(3, 18)),
                'featured_image' => $project['featured_image'],
                'gallery_images' => [],
                'requirements' => [
                    ['requirement' => 'Scalable architecture'],
                    ['requirement' => 'High performance'],
                ],
                'solution_description' =>
                    'We delivered a scalable, optimized solution tailored to the client’s business goals.',
                'meta_title' => $project['title'],
                'meta_description' => $project['short_description'],
                'is_published' => true,
                'display_order' => $index + 1,
            ]);
        }
    }
}
