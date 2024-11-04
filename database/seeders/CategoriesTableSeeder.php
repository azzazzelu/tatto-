<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            'Новинки',
            'Наборы для татуировок',
            'Тату машинки',
            'Тату краски',
            'Тату иглы',
            'Тату держатели',
            'Тату наконечники',
            'Блоки питания',
            'Педали и провода',
            'Аксессуары',
            'Принтеры и планшеты',
            'Защита, ёмкости, расходные материалы',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
