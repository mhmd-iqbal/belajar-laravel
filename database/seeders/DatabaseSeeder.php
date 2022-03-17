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
		User::factory(5)->create();

		Post::factory(20)->create();

		// User::create([
		// 	'name' => 'Muhammad Iqbal',
		// 	'email' => 'mhmd.iqbal1599@gmail.com',
		// 	'password' => Hash::make('123456')
		// ]);

		// User::create([
		// 	'name' => 'Taufik Akbar',
		// 	'email' => 'tes@gmail.com',
		// 	'password' => Hash::make('123456')
		// ]);

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

		// Post::create([
		// 	'title' => 'Judul Post Pertama',
		// 	'slug' => 'judul-post-pertama',
		// 	'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet voluptatem deserunt, ullam fugit, ad nobis a recusandae laborum esse consequatur ipsum deleniti? Corrupti porro animi molestiae veniam harum provident ullam vitae corporis placeat atque, cumque dolorem non et at saepe cum. Beatae, blanditiis amet sint aliquid perspiciatis esse, eos dolore nihil neque sequi, laudantium ex eligendi. Ipsam, adipisci iure repellat a incidunt amet saepe repudiandae.</p><p>Eligendi laudantium ex, rem corrupti in ipsa exercitationem dolorem praesentium omnis eveniet dolor maxime delectus doloremque! Numquam et ut placeat hic accusamus. Aliquid, porro eum praesentium voluptate eligendi aperiam quibusdam.</p><p>Culpa quae nulla veniam soluta laboriosam laudantium distinctio, nam dolor deserunt nisi ducimus quaerat repudiandae explicabo rerum natus praesentium perferendis ullam accusamus. Laboriosam asperiores enim voluptates harum nesciunt illo nemo dicta eveniet illum aperiam consequuntur provident hic laborum inventore officiis nostrum accusantium, porro sequi corporis. Distinctio, adipisci, hic rerum itaque ullam sint impedit reiciendis fugiat necessitatibus, neque ut quos error?</p><p>Aut quos labore odio facere nobis cupiditate, magnam obcaecati! Ex perspiciatis veniam rem iste vitae, libero ad? At, tenetur similique recusandae repellendus autem sequi, accusamus in quos, molestiae excerpturi quod dicta qui praesentium voluptatibus eligendi rem natus. Repudiandae, earum commodi.</p>',
		// 	'category_id' => 1,
		// 	'user_id' => 1
		// ]);

		// Post::create([
		// 	'title' => 'Judul Post Kedua',
		// 	'slug' => 'judul-post-kedua',
		// 	'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet voluptatem deserunt, ullam fugit, ad nobis a recusandae laborum esse consequatur ipsum deleniti? Corrupti porro animi molestiae veniam harum provident ullam vitae corporis placeat atque, cumque dolorem non et at saepe cum. Beatae, blanditiis amet sint aliquid perspiciatis esse, eos dolore nihil neque sequi, laudantium ex eligendi. Ipsam, adipisci iure repellat a incidunt amet saepe repudiandae.</p><p>Eligendi laudantium ex, rem corrupti in ipsa exercitationem dolorem praesentium omnis eveniet dolor maxime delectus doloremque! Numquam et ut placeat hic accusamus. Aliquid, porro eum praesentium voluptate eligendi aperiam quibusdam.</p>',
		// 	'category_id' => 2,
		// 	'user_id' => 2
		// ]);

		// Post::create([
		// 	'title' => 'Judul Post Ketiga',
		// 	'slug' => 'judul-post-ketiga',
		// 	'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet voluptatem deserunt, ullam fugit, ad nobis a recusandae laborum esse consequatur ipsum deleniti? Corrupti porro animi molestiae veniam harum provident ullam vitae corporis placeat atque, cumque dolorem non et at saepe cum. Beatae, blanditiis amet sint aliquid perspiciatis esse, eos dolore nihil neque sequi, laudantium ex eligendi. Ipsam, adipisci iure repellat a incidunt amet saepe repudiandae.</p><p>Eligendi laudantium ex, rem corrupti in ipsa exercitationem dolorem praesentium omnis eveniet dolor maxime delectus doloremque! Numquam et ut placeat hic accusamus. Aliquid, porro eum praesentium voluptate eligendi aperiam quibusdam.</p><p>Culpa quae nulla veniam soluta laboriosam laudantium distinctio, nam dolor deserunt nisi ducimus quaerat repudiandae explicabo rerum natus praesentium perferendis ullam accusamus. Laboriosam asperiores enim voluptates harum nesciunt illo nemo dicta eveniet illum aperiam consequuntur provident hic laborum inventore officiis nostrum accusantium, porro sequi corporis. Distinctio, adipisci, hic rerum itaque ullam sint impedit reiciendis fugiat necessitatibus, neque ut quos error?</p>',
		// 	'category_id' => 3,
		// 	'user_id' => 1
		// ]);

		// Post::create([
		// 	'title' => 'Judul Post Keempat',
		// 	'slug' => 'judul-post-keempat',
		// 	'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam neque culpa impedit magni eveniet voluptatem deserunt, ullam fugit, ad nobis a recusandae laborum esse consequatur ipsum deleniti? Corrupti porro animi molestiae veniam harum provident ullam vitae corporis placeat atque, cumque dolorem non et at saepe cum. Beatae, blanditiis amet sint aliquid perspiciatis esse, eos dolore nihil neque sequi, laudantium ex eligendi. Ipsam, adipisci iure repellat a incidunt amet saepe repudiandae.</p><p>Eligendi laudantium ex, rem corrupti in ipsa exercitationem dolorem praesentium omnis eveniet dolor maxime delectus doloremque! Numquam et ut placeat hic accusamus. Aliquid, porro eum praesentium voluptate eligendi aperiam quibusdam.</p><p>Culpa quae nulla veniam soluta laboriosam laudantium distinctio, nam dolor deserunt nisi ducimus quaerat repudiandae explicabo rerum natus praesentium perferendis ullam accusamus. Laboriosam asperiores enim voluptates harum nesciunt illo nemo dicta eveniet illum aperiam consequuntur provident hic laborum inventore officiis nostrum accusantium, porro sequi corporis. Distinctio, adipisci, hic rerum itaque ullam sint impedit reiciendis fugiat necessitatibus, neque ut quos error?</p><p>Aut quos labore odio facere nobis cupiditate, magnam obcaecati! Ex perspiciatis veniam rem iste vitae, libero ad? At, tenetur similique recusandae repellendus autem sequi, accusamus in quos, molestiae excepturi quod dicta qui praesentium voluptatibus eligendi rem natus. Repudiandae, earum commodi.</p>',
		// 	'category_id' => 1,
		// 	'user_id' => 2
		// ]);
	}
}
