<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('posts')->truncate();
    	
    	$books = [
    		['The Revenge', 'This book is about the shit and diamonds', 'Fantasy'],
    		['Harry Potter', 'This book is about the shit and diamonds', 'Tech'],
    		['50 Shades of Sky', 'This book is about the shit and diamonds', 'World'],
    		['Dalai Lama', 'This book is about the shit and ', 'SCifi'],

    	];

        DB::table('posts')->insert([
            'title' => 'The Laravvel Book',
            'content' => 'About Laravel',
            'category' => 'PHP',
        ]);
        DB::table('posts')->insert([
            'title' => 'The Symfony Book',
            'content' => 'About Dymfony',
            'category' => 'PHP',
        ]);
        DB::table('posts')->insert([
            'title' => 'Dalai Lama',
            'content' => 'Lorem Ipsum terei lorem deksum',
            'category' => 'Life',
        ]);
        DB::table('posts')->insert([
            'title' => 'The Life of Gregorz',
            'content' => 'Fake Story about',
            'category' => 'World',
        ]);

    }
}
