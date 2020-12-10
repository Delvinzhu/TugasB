<?php

use Illuminate\Database\Seeder;
use App\Product;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flower = [
            [
                'name' => 'Flower 1',
                'price' => '20000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga monstera imitasi, mortensia, lily, anyelir, seruni dan babys breath. Buket cantik ini melambangkan kasih sayang, kesucian, kerendahan hati, serta keanggunan. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '1.jpg'
            ],
            [
                'name' => 'Flower 2',
                'price' => '25000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar, hortensia, daun palem, daun ruskus dan babys breath. Buket cantik ini melambangkan cinta, kesucian, kemurnian, kejujuran dan rasa terima kasih. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '2.jpg'
            ],
            [
                'name' => 'Flower 3',
                'price' => '22000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '3.jpg'
            ],
            [
                'name' => 'Flower 4',
                'price' => '12000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '4.jpg'
            ],
            [
                'name' => 'Flower 5',
                'price' => '13000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '5.jpg'
            ],
            [
                'name' => 'Flower 6',
                'price' => '21000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '6.jpg'
            ],
            [
                'name' => 'Flower 7',
                'price' => '20000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '7.jpg'
            ],
            [
                'name' => 'Flower 8',
                'price' => '5000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '8.jpg'
            ],
            [
                'name' => 'Flower 9',
                'price' => '15000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '9.jpg'
            ],
        ];


        foreach($flower as $u){
            $product = Product::create($u);
            $product->units()->attach(1);
        }
        $flower2 = [
            [
                'name' => 'Flower 10',
                'price' => '20000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga monstera imitasi, mortensia, lily, anyelir, seruni dan babys breath. Buket cantik ini melambangkan kasih sayang, kesucian, kerendahan hati, serta keanggunan. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '1.jpg'
            ],
            [
                'name' => 'Flower 11',
                'price' => '25000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar, hortensia, daun palem, daun ruskus dan babys breath. Buket cantik ini melambangkan cinta, kesucian, kemurnian, kejujuran dan rasa terima kasih. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '2.jpg'
            ],
            [
                'name' => 'Flower 12',
                'price' => '22000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '3.jpg'
            ],
            [
                'name' => 'Flower 13',
                'price' => '12000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '4.jpg'
            ],
            [
                'name' => 'Flower 14',
                'price' => '13000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '5.jpg'
            ],
            [
                'name' => 'Flower 15',
                'price' => '21000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '6.jpg'
            ],
            [
                'name' => 'Flower 16',
                'price' => '20000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '7.jpg'
            ],
            [
                'name' => 'Flower 17',
                'price' => '5000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '8.jpg'
            ],
            [
                'name' => 'Flower 18',
                'price' => '15000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '9.jpg'
            ],
        ];
        foreach($flower2 as $u){
            $product = Product::create($u);
            $product->units()->attach(2);
        }
        $flower3 = [
            [
                'name' => 'Flower 19',
                'price' => '20000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga monstera imitasi, mortensia, lily, anyelir, seruni dan babys breath. Buket cantik ini melambangkan kasih sayang, kesucian, kerendahan hati, serta keanggunan. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '1.jpg'
            ],
            [
                'name' => 'Flower 20',
                'price' => '25000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar, hortensia, daun palem, daun ruskus dan babys breath. Buket cantik ini melambangkan cinta, kesucian, kemurnian, kejujuran dan rasa terima kasih. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '2.jpg'
            ],
            [
                'name' => 'Flower 21',
                'price' => '22000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '3.jpg'
            ],
            [
                'name' => 'Flower 22',
                'price' => '12000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '4.jpg'
            ],
            [
                'name' => 'Flower 23',
                'price' => '13000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '5.jpg'
            ],
            [
                'name' => 'Flower 24',
                'price' => '21000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '6.jpg'
            ],
            [
                'name' => 'Flower 25',
                'price' => '20000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '7.jpg'
            ],
            [
                'name' => 'Flower 26',
                'price' => '5000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '8.jpg'
            ],
            [
                'name' => 'Flower 27',
                'price' => '15000000',
                'description' => 'Curahkan perasaan Anda dalam rangkaian cantik bunga mawar merah muda dan babys breath ini. Bunga mawar merah muda akan melambangkan kekaguman dan kebahagiaan Anda, serta melambangkan betapa anggun penerima bunga ini. Anda pun dapat menuliskan pesan yang ingin Anda sampaikan untuk orang terkasih yang menerima buket ini.',
                'image' =>  '9.jpg'
            ],
        ];
        foreach($flower3 as $u){
            $product = Product::create($u);
            $product->units()->attach(3);
        }
    }
}
