<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            [
                'generalType' => 'about',
                'title' => 'السلام عليكم',
                'text' => 'سبحان الذي سخر لنا هذا وما كنا له مقرنين',
                'media1' => null,
                'mediaType1' => null,
                'media2' => "seed/about/about-cover-start.JPG",
                'mediaType2' => null,
                'media3' => null,
                'mediaType3' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'generalType' => 'about',
                'title' => null,
                'text' => 'نحن في متجرنا للمنتجات الإسلامية نفتخر بتقديم تشكيلة واسعة من المنتجات التي تعكس قيم وتراث الإسلام. نحرص على توفير منتجات ذات جودة عالية وتصاميم متميزة تحاكي الفخامة والروحانية. يتم اختيار منتجاتنا بعناية فائقة لضمان تلبية توقعات عملائنا، سواء كانوا يبحثون عن ملابس إسلامية أنيقة، أو هدايا رمزية تعبّر عن قيمهم الدينية. نحن هنا لخدمتكم بكل فخر ونسعى لتقديم تجربة تسوق فريدة ترتقي بتوقعاتكم في عالم الأناقة والتعبير عن الهوية الإسلامية.',
                'media1' => "seed/about/about-video-1.mp4",
                'mediaType1' => 'video',
                'media2' => null,
                'mediaType2' => null,
                'media3' => null,
                'mediaType3' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'generalType' => 'about',
                'title' => null,
                'text' => 'نحن في متجرنا نعتبر العميل محور اهتمامنا وأساس نجاحنا. ندرك أن رضا العملاء يشكل قوة دافعة لنا لتقديم خدمة على مستوى عالٍ. نحن نسعى جاهدين لفهم احتياجات وتوقعات عملائنا، ونعمل بجد لضمان توفير تجربة تسوق فريدة ومريحة. يتمثل هدفنا في تلبية طلبات العملاء بكفاءة عالية وتقديم منتجات تتماشى مع توقعاتهم. نحن نقدر تفاعل العملاء ونستمع إلى ملاحظاتهم بعناية لضمان استمرار تحسين خدماتنا وتلبية احتياجاتهم بشكل أفضل. في متجرنا، يعتبر العميل شريكًا في رحلتنا، ونسعى دائماً لخدمته بكل احترافية واهتمام.',
                'media1' => "seed/about/about-image-1.jpeg",
                'mediaType1' => 'image',
                'media2' => null,
                'mediaType2' => null,
                'media3' => null,
                'mediaType3' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],            [
                'generalType' => 'about',
                'title' => null,
                'text' => 'في متجرنا للمنتجات الإسلامية، نفتخر بتقديم منتجات تتسم بأعلى مستويات الجودة. نحن نضع المعايير القصوى لاختيار المواد والمكونات، مما يضمن للعملاء تلقي منتجات متينة وفعالة. نحن نعتبر الجودة هي عنصراً أساسياً في كل مرحلة من مراحل عملية التصنيع، من التصميم إلى التسليم. إن اهتمامنا بالجودة يعكس التزامنا بتلبية توقعات عملائنا وبناء علاقات طويلة الأمد معهم.',
                'media1' => null,
                'mediaType1' => null,
                'media2' => "seed/about/about-cover-1.jpg",
                'mediaType2' => null,
                'media3' => null,
                'mediaType3' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],            [
                'generalType' => 'about',
                'title' => null,
                'text' => 'نلتزم في متجرنا بمفهوم الاستدامة، حيث نسعى جاهدين للحفاظ على البيئة وتقديم منتجاتنا بطريقة تحترم البيئة. نحن نستخدم مواد صديقة للبيئة في التصنيع ونتبنى مبادئ الإنتاج الصديق للبيئة. نحن نعمل على تحقيق التوازن بين احتياجاتنا كمتجر والمسؤولية نحو البيئة، لضمان استمراريتنا والمساهمة في بناء مجتمع أكثر استدامة.',
                'media1' => null,
                'mediaType1' => null,
                'media2' => "seed/about/about-cover-2.jpg",
                'mediaType2' => null,
                'media3' => null,
                'mediaType3' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'generalType' => 'about',
                'title' => '❤❤❤',
                'text' => 'في ختام رحلتكم في متجرنا للمنتجات الإسلامية، نعدكم بتجربة تسوق فريدة تمزج بين الجودة العالية والاهتمام بالعميل. نحن هنا لتلبية احتياجاتكم بتفانٍ ومهنية، ونأمل أن تجدوا في تشكيلتنا المتنوعة ما يعبر عن قيمكم ويضيف قيمة إلى حياتكم اليومية. شكرًا لثقتكم بنا ونتطلع إلى خدمتكم مرارًا وتكرارًا.',
                'media1' => null,
                'mediaType1' => null,
                'media2' => "seed/about/about-about-end.png",
                'mediaType2' => null,
                'media3' => null,
                'mediaType3' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'generals' table
        DB::table('generals')->insert($data);
    }
}
