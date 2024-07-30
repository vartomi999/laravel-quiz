<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'What is the capital of France?',
                'answers' => [
                    ['answer' => 'Paris', 'is_correct' => true],
                    ['answer' => 'London', 'is_correct' => false],
                    ['answer' => 'Berlin', 'is_correct' => false],
                    ['answer' => 'Madrid', 'is_correct' => false],
                ],
            ],
            [
                'question' => 'What is 2 + 2?',
                'answers' => [
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => false],
                ],
            ],
            // Add more questions here
        ];

        foreach ($questions as $data) {
            $question = Question::create(['question' => $data['question']]);
            foreach ($data['answers'] as $answer) {
                $question->answers()->create($answer);
            }
        }
    }
}
