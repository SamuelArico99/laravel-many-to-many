<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Tag;

// Helpers

use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Hasaki',
            'PS5',
            'Spoiler',
            'PC',
            'Mobile',
            'Xbox',
            'Android'

        ];

        foreach ($tags as $tag) {
            $newTag = Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
        }
    }
}
