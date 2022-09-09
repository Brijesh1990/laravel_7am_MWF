<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feedback;
class Feedbacks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            'name' => 'manthan',
            'email' => 'manthan.pandey@gmail.com',
            'subject' =>'hi',
            'comment'=>'hi i am just store bulk of data'
        ]);
    }
}
