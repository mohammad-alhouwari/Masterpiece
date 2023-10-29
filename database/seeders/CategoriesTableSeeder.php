<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'كتب دينية',
                'video' => 'seed/video1.mp4',
                'description' => ' تتضمن مصاحف وكتب تفسير وفقه وتاريخ الديانات. تعزز الروحانية وتوفر معرفة دينية وأخلاقية.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ثياب شرعية',
                'video' => 'seed/video2.mp4',
                'description' => 'تصاميم محتشمة وتناسب الشريعة الإسلامية، توفر للنساء والرجال خيارات محتشمة وأنيقة.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'مناسبات إسلامية',
                'video' => 'seed/video3.mp4',
                'description' => ' تضمن مستلزمات لأعياد ومناسبات دينية كأعياد الفطر والأضحى، بما في ذلك الزينة والهدايا والديكور الإسلامي.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}