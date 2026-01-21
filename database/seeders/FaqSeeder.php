<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'question' => 'How long does it take to train the chatbot?',
                'answer' => '
                    <p>Just provide your website URL. The chatbot automatically scrapes and trains itself.</p>
                    <ul>
                        <li><i class="far fa-check"></i> Instant setup with your URL</li>
                        <li><i class="far fa-check"></i> Self-learning from real questions</li>
                        <li><i class="far fa-check"></i> Improves with more data</li>
                    </ul>
                ',
            ],
            [
                'question' => 'How can I embed the AI assistant on my website?',
                'answer' => '
                    <p>You can embed it using a simple script or plugin provided by us.</p>
                    <ul>
                        <li><i class="far fa-check"></i> Easy embed script</li>
                        <li><i class="far fa-check"></i> Works on all platforms</li>
                        <li><i class="far fa-check"></i> No coding required</li>
                    </ul>
                ',
            ],
            [
                'question' => 'Does it support other languages than English?',
                'answer' => '
                    <p>Yes, it supports multiple languages and keeps improving.</p>
                    <ul>
                        <li><i class="far fa-check"></i> Multi-language support</li>
                        <li><i class="far fa-check"></i> Auto language detection</li>
                        <li><i class="far fa-check"></i> Expandable anytime</li>
                    </ul>
                ',
            ],
            [
                'question' => 'Can I take control of a conversation if needed?',
                'answer' => '
                    <p>Yes, you can jump in anytime and manage conversations manually.</p>
                    <ul>
                        <li><i class="far fa-check"></i> Manual override</li>
                        <li><i class="far fa-check"></i> Conversation history</li>
                        <li><i class="far fa-check"></i> Agent takeover</li>
                    </ul>
                ',
            ],
        ];

        foreach ($items as $index => $item) {
            Faq::create([
                'heading' => 'FAQs',
                'sub_heading' => 'Have a question? Look here',
                'question' => $item['question'],
                'answer' => $item['answer'],
                'order' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
