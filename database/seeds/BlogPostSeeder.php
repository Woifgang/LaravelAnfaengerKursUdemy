<?php

use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_post')->delete();
        DB::table('blog_post')->insert(array(
            0 => array(
                'titel' => "Erster Test",
                'text' => "Lorem ipsum bla bla bla",
                'status' => 1,
            ),
            1 => array(
                'titel' => "zweiter Test",
                'text' => "Lorem ipsum bla bla bla",
                'status' => 1,
            )
        ));
    }
}
