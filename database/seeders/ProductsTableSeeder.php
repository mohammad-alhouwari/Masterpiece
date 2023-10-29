<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'العباءة لون جميل بصلي للصلاة للنساء',
                'category_id' => 2,
                // Assuming you have a category with id 1
                'image' => 'seed/11.jpg',
                'description' => 'هذه العباءة مصممة خصيصاً للنساء المسلمات لاستخدامها خلال أداء الصلاة. تتميز بتصميمها الواحد والذي يجعلها سهلة الارتداء ومريحة خلال الصلاة. تأتي مع غطاء للرأس (هود) لتوفير الخصوصية خلال الصلاة',
                'longDescription' => 'هذه العباءة الواحدة للصلاة مصممة بعناية لتلبية احتياجات النساء المسلمات في المملكة العربية السعودية. تأتي بتصميم واحد يجعلها مريحة وسهلة الارتداء، مما يسهل على المرأة القيام بواجبها الديني بكل يسر وسلاسة. العباءة مصنوعة من مواد عالية الجودة توفر الراحة والتهوية أثناء الصلاة. كما أنها مجهزة بغطاء للرأس (هود) يوفر الخصوصية التامة خلال الصلاة.',
                'stock_quantity' => 10,
                'price' => 20,
                'image1' => 'seed/12.jpg',
                'image2' => 'seed/13.jpg',
                'image3' => 'seed/14.jpg',
                'image4' => 'seed/15.jpg',
                // 'image5' => 'image5p1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'العباءة لون جميل أسود لخارج المنزل',
                'category_id' => 2,
                // Assuming you have a category with id 1
                'image' => 'seed/21.jpg',
                'description' => 'هذه العباءة مصممة خصيصاً للنساء المسلمات لاستخدامها خلال أداء الصلاة. تتميز بتصميمها الواحد والذي يجعلها سهلة الارتداء ومريحة خلال الصلاة. تأتي مع غطاء للرأس (هود) لتوفير الخصوصية خلال الصلاة',
                'longDescription' => 'هذه العباءة الواحدة للصلاة مصممة بعناية لتلبية احتياجات النساء المسلمات في المملكة العربية السعودية. تأتي بتصميم واحد يجعلها مريحة وسهلة الارتداء، مما يسهل على المرأة القيام بواجبها الديني بكل يسر وسلاسة. العباءة مصنوعة من مواد عالية الجودة توفر الراحة والتهوية أثناء الصلاة. كما أنها مجهزة بغطاء للرأس (هود) يوفر الخصوصية التامة خلال الصلاة.',
                'stock_quantity' => 10,
                'price' => 30,
                'image1' => 'seed/22.jpg',
                'image2' => 'seed/23.jpg',
                'image3' => 'seed/24.jpg',
                'image4' => 'seed/25.jpg',
                // 'image5' => 'image5p1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'العباءة لون جميل للصلاة للنساء',
                'category_id' => 2,
                // Assuming you have a category with id 1
                'image' => 'seed/31.jpg',
                'description' => 'هذه العباءة مصممة خصيصاً للنساء المسلمات لاستخدامها خلال أداء الصلاة. تتميز بتصميمها الواحد والذي يجعلها سهلة الارتداء ومريحة خلال الصلاة. تأتي مع غطاء للرأس (هود) لتوفير الخصوصية خلال الصلاة',
                'longDescription' => 'هذه العباءة الواحدة للصلاة مصممة بعناية لتلبية احتياجات النساء المسلمات في المملكة العربية السعودية. تأتي بتصميم واحد يجعلها مريحة وسهلة الارتداء، مما يسهل على المرأة القيام بواجبها الديني بكل يسر وسلاسة. العباءة مصنوعة من مواد عالية الجودة توفر الراحة والتهوية أثناء الصلاة. كما أنها مجهزة بغطاء للرأس (هود) يوفر الخصوصية التامة خلال الصلاة.',
                'stock_quantity' => 10,
                'price' => 30,
                'image1' => 'seed/32.jpg',
                'image2' => 'seed/33.jpg',
                'image3' => 'seed/34.jpg',
                'image4' => 'seed/35.jpg',
                // 'image5' => 'image5p1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
        ]);
    }

}
