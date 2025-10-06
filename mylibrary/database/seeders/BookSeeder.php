<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'published_date' => '1925-04-10',
                'genre' => 'Fiction',
                'pages' => 218,
                'isbn' => '9780743273565',
            ]
        );

        Book::create(
            [
                'title' => 'Harry Potter and the Prisoner of Azkaban',
                'author' => 'J.K. Rowling',
                'published_date' => '1999',
                'genre' => 'Fantasy',
                'pages' => 317,
                'isbn' => '9780439136365',
            ]
        );

        Book::create(
            [
                'title' => 'Caraval',
                'author' => 'Stephanie Garber',
                'published_date' => '2017',
                'genre' => 'Fantasy',
                'pages' => 416,
                'isbn' => '9781250105636',
            ]
        );

        Book::create(
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'published_date' => '1813',
                'genre' => 'Romance',
                'pages' => 279,
                'isbn' => '9781503290563',
            ]
        );

        Book::create(
            [
                'title' => 'Iron flame',
                'author' => 'Rebecca Yarros',
                'published_date' => '2022',
                'genre' => 'Romance',
                'pages' => 432,
                'isbn' => '9781250279239',
            ]
        );

        Book::create(
            [
                'title' => 'Vampire Diaries',
                'author' => 'L.J. Smith',
                'published_date' => '1991',
                'genre' => 'Fantasy',
                'pages' => 320,
                'isbn' => '9781416509595',
            ]
        );

        Book::create(
            [
                'title' => 'IT',
                'author' => 'Stephen King',
                'published_date' => '1986',
                'genre' => 'Horror',
                'pages' => 1138,
                'isbn' => '9781501142970',
            ]
        );
    }
}
