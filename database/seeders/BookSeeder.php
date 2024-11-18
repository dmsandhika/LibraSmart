<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Tersedia', 'Tidak Tersedia', 'Coming Soon'];

        DB::table('book')->insert([
            [
                'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'author' => 'Robert C. Martin',
                'isbn' => '9780132350884',
                'cover' => 'clean_code.jpg',
                'category_id' => 1,
                'stock' => 10,
                'description' => 'A guide to writing clean and maintainable code.',
                'status' => $statuses[array_rand($statuses)], // Pilih status acak
            ],
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt and David Thomas',
                'isbn' => '9780201616224',
                'cover' => 'pragmatic_programmer.jpg',
                'category_id' => 1,
                'stock' => 8,
                'description' => 'Classic book on practical software development.',
                'status' => $statuses[array_rand($statuses)],
            ],
            [
                'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                'author' => 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides',
                'isbn' => '9780201633610',
                'cover' => 'design_patterns.jpg',
                'category_id' => 2,
                'stock' => 5,
                'description' => 'Introduction to common software design patterns.',
                'status' => $statuses[array_rand($statuses)],
            ],
            [
                'title' => 'You Don\'t Know JS Yet',
                'author' => 'Kyle Simpson',
                'isbn' => '9781091210093',
                'cover' => 'you_dont_know_js.jpg',
                'category_id' => 1,
                'stock' => 7,
                'description' => 'A deep dive into JavaScript concepts.',
                'status' => $statuses[array_rand($statuses)],
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein',
                'isbn' => '9780262033848',
                'cover' => 'introduction_to_algorithms.jpg',
                'category_id' => 3,
                'stock' => 4,
                'description' => 'Comprehensive book on algorithms.',
                'status' => $statuses[array_rand($statuses)],
            ],
        ]);
    }
}