<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organizers;

class OrganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Organizers::create([
            'name' => 'Southern Sydney University',
            'facebook_link' => 'http://m.facebook.com/dummy',
            'x_link' => 'http://x.com/dummy',
            'website_link' => 'http://dummy.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat massa vel orci blandit, pellentesque convallis mi tempus. Nulla neque mauris, pretium in mattis eu, tristique a sem. In hac habitasse platea dictumst. Aenean eget nisi tempor, mollis sem vitae, venenatis mauris. Integer dignissim mollis nisi, at sodales justo sagittis non. Proin blandit nunc turpis, non rhoncus quam tincidunt eu. Morbi fermentum magna neque, nec finibus arcu rutrum quis. Sed maximus magna non imperdiet rutrum. Vivamus ornare consectetur quam. Aliquam semper vulputate eros, quis tempus quam fringilla nec. In elementum tortor nec ipsum tempus lacinia.',
            'active' => 1,
        ]);

        Organizers::create([
            'name' => 'MSW Global',
            'facebook_link' => 'http://m.facebook.com/dummy',
            'x_link' => 'http://x.com/dummy',
            'website_link' => 'http://dummy.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat massa vel orci blandit, pellentesque convallis mi tempus. Nulla neque mauris, pretium in mattis eu, tristique a sem. In hac habitasse platea dictumst. Aenean eget nisi tempor, mollis sem vitae, venenatis mauris. Integer dignissim mollis nisi, at sodales justo sagittis non. Proin blandit nunc turpis, non rhoncus quam tincidunt eu. Morbi fermentum magna neque, nec finibus arcu rutrum quis. Sed maximus magna non imperdiet rutrum. Vivamus ornare consectetur quam. Aliquam semper vulputate eros, quis tempus quam fringilla nec. In elementum tortor nec ipsum tempus lacinia.',
            'active' => 1,
        ]);

        Organizers::create([
            'name' => 'Debindo',
            'facebook_link' => 'http://m.facebook.com/dummy',
            'x_link' => 'http://x.com/dummy',
            'website_link' => 'http://dummy.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat massa vel orci blandit, pellentesque convallis mi tempus. Nulla neque mauris, pretium in mattis eu, tristique a sem. In hac habitasse platea dictumst. Aenean eget nisi tempor, mollis sem vitae, venenatis mauris. Integer dignissim mollis nisi, at sodales justo sagittis non. Proin blandit nunc turpis, non rhoncus quam tincidunt eu. Morbi fermentum magna neque, nec finibus arcu rutrum quis. Sed maximus magna non imperdiet rutrum. Vivamus ornare consectetur quam. Aliquam semper vulputate eros, quis tempus quam fringilla nec. In elementum tortor nec ipsum tempus lacinia.',
            'active' => 1,
        ]);

        Organizers::create([
            'name' => 'Bermuda',
            'facebook_link' => 'http://m.facebook.com/dummy',
            'x_link' => 'http://x.com/dummy',
            'website_link' => 'http://dummy.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat massa vel orci blandit, pellentesque convallis mi tempus. Nulla neque mauris, pretium in mattis eu, tristique a sem. In hac habitasse platea dictumst. Aenean eget nisi tempor, mollis sem vitae, venenatis mauris. Integer dignissim mollis nisi, at sodales justo sagittis non. Proin blandit nunc turpis, non rhoncus quam tincidunt eu. Morbi fermentum magna neque, nec finibus arcu rutrum quis. Sed maximus magna non imperdiet rutrum. Vivamus ornare consectetur quam. Aliquam semper vulputate eros, quis tempus quam fringilla nec. In elementum tortor nec ipsum tempus lacinia.',
            'active' => 1,
        ]);

        Organizers::create([
            'name' => 'Triangle',
            'facebook_link' => 'http://m.facebook.com/dummy',
            'x_link' => 'http://x.com/dummy',
            'website_link' => 'http://dummy.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat massa vel orci blandit, pellentesque convallis mi tempus. Nulla neque mauris, pretium in mattis eu, tristique a sem. In hac habitasse platea dictumst. Aenean eget nisi tempor, mollis sem vitae, venenatis mauris. Integer dignissim mollis nisi, at sodales justo sagittis non. Proin blandit nunc turpis, non rhoncus quam tincidunt eu. Morbi fermentum magna neque, nec finibus arcu rutrum quis. Sed maximus magna non imperdiet rutrum. Vivamus ornare consectetur quam. Aliquam semper vulputate eros, quis tempus quam fringilla nec. In elementum tortor nec ipsum tempus lacinia.',
            'active' => 1,
        ]);

    }
}
