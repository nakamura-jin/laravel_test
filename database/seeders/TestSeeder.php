<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro_1@example.com'
        ];
        $test = new Test;
        $test->fill($param)->save();

        $param = [
            'name' => 'jiro',
            'email' => 'jiro_2@example.com'
        ];
        $test = new Test;
        $test->fill($param)->save();
    }
}
