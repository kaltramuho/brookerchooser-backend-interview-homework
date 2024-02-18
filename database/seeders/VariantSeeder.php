<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Test;
use App\Models\Variant;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $test = Test::where('name', 'Example Test')->first();

        if ($test) {
            Variant::create([
                'test_id' => $test->id,
                'name' => 'Variant A',
                'targeting_ratio' => 1
            ]);

            Variant::create([
                'test_id' => $test->id,
                'name' => 'Variant B',
                'targeting_ratio' => 2
            ]);
        }
    }
}
