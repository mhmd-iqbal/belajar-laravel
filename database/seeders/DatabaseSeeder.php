<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'Muhammad Iqbal',
			'username' => 'mhmd-iqbal',
			'email' => 'mhmd.iqbal1599@gmail.com',
			'password' => Hash::make('password'),
		]);

		User::factory(5)->create();

		Post::factory(20)->create();

		Category::create([
			'name' => 'Programming',
			'slug' => 'programming'
		]);

		Category::create([
			'name' => 'Web Design',
			'slug' => 'web-design'
		]);

		Category::create([
			'name' => 'Personal',
			'slug' => 'personal'
		]);
	}
}
