<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Miss Jane Moneypenny',
            'email' => 'jane@univex.co.uk',
            'password' => Hash::make('password'),
        ]);

        Book::factory(9)->create();
        foreach (Book::all() as $book) {
            $users = User::inRandomOrder()->take(rand(0, 5))->pluck('id');
            $book->users()->attach($users);
        }

        // Book::factory()->create([
        //     'title' => 'Book without authors',
        //     'excerpt' => 'Test book',
        //     'isbn' => '123456',
        // ]);
    }
}
