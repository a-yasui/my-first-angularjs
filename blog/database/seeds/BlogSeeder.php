<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'blog' )->delete();

        \App\Blog::create( array(
            'title' => 'Chris Sevilleja',
            'slag'  => "Chris_Sevilleja",
            'header'  => 'Look I am a test comment.',
            'description' => '',
        ) );

        \App\Blog::create( array(
            'title' => 'Nick Cerminara',
            'slag'  => "Nick_Cerminara",
            'header'  => 'This is going to be super crazy.',
            'description' => '',
        ) );

        \App\Blog::create( array(
            'title' => 'Holly Lloyd',
            'slag'  => "Holly_Lloyd",
            'header'  => 'I am a master of Laravel and Angular.',
            'description' => '',
        ) );
    }
}
