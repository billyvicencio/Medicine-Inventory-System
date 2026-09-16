<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['brand_name' => 'Paracetamol', 'category' => 'Analgesic', 'stock_quantity' => 100],
            ['brand_name' => 'Amoxicillin', 'category' => 'Antibiotic', 'stock_quantity' => 50],
            ['brand_name' => 'Cetirizine', 'category' => 'Antihistamine', 'stock_quantity' => 75],
        ] as $medicine) {
            Medicine::updateOrCreate(['brand_name' => $medicine['brand_name']], $medicine);
        }
    }
}
