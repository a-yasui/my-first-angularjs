<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();

        $this->call('BlogSeeder');
        $this->command->info('Blog table seeded.');

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
