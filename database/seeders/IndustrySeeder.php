<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Education', 'order' => 1],
            ['title' => 'Logistics', 'order' => 2],
            ['title' => 'Marketing', 'order' => 3],
            ['title' => 'Healthcare', 'order' => 4],
            ['title' => 'Finance', 'order' => 5],
            ['title' => 'Manufacturing', 'order' => 6],
            ['title' => 'E-commerce', 'order' => 7],
        ];

        foreach ($items as $item) {
            Industry::create([
                'title' => $item['title'],
                'is_active' => true,
                'sort_order' => $item['order'],
            ]);
        }
    }
}
