<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorBookSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'books' => [
                    ['title' => 'Laravel Basics', 'description' => 'Intro to Laravel fundamentals.'],
                    ['title' => 'Eloquent Relationships', 'description' => 'One-to-many, many-to-many and more.'],
                ],
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'books' => [
                    ['title' => 'PHP Clean Code', 'description' => 'Writing maintainable PHP code.'],
                    ['title' => 'Building REST APIs', 'description' => 'Designing and implementing APIs in Laravel.'],
                ],
            ],
            [
                'name' => 'Alex Brown',
                'email' => 'alex@example.com',
                'books' => [
                    ['title' => 'Database Design', 'description' => 'Schema design, keys, indexes.'],
                    ['title' => 'Testing Laravel Apps', 'description' => 'Feature and unit testing in Laravel.'],
                ],
            ],
        ];

        foreach ($authors as $a) {
            $author = Author::create([
                'name' => $a['name'],
                'email' => $a['email'],
            ]);

            foreach ($a['books'] as $b) {
                Book::create([
                    'title' => $b['title'],
                    'description' => $b['description'],
                    'author_id' => $author->id,
                ]);
            }
        }
    }
}
