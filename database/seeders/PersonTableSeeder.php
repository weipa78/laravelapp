<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'nakata',
            'mail' => 'nakata@yyy.com',
            'age' => 25,
        ];
        $person = new Person;
        $person->fill($param)->save();
        
        $param = [
            'name' => 'yamada',
            'mail' => 'yyy@taka.com',
            'age' => 53
        ];
        $person = new Person;
        $person->fill($param)->save();
    }
}
