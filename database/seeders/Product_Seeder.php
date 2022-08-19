<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name'=>'I Phone',
                'price'=>'1000',
                'category'=>'Mobile',
                'gellary'=>'https://www.google.com/search?q=iphone&rlz=1C1YTUH_enBD1014BD1014&sxsrf=ALiCzsbQZMCKWl8y8sajCpkEvUdBFLv3kg:1660898479908&source=lnms&tbm=isch&sa=X&ved=2ahUKEwipkZz_wNL5AhWi9zgGHeGyAZcQ_AUoAXoECAEQAw&biw=1366&bih=568&dpr=1#imgrc=0NceJ06qy9dKjM',
                'description'=>'a smart with 4 gb ram and much more feature',

            ],
            [
                'name'=>'Realme 8',
                'price'=>'25000',
                'category'=>'Mobile',
                'gellary'=>'https://www.google.com/search?q=realme+8&rlz=1C1YTUH_enBD1014BD1014&sxsrf=ALiCzsYE8LcojHUaL3uE1vk5bJmJiBVWOw:1660900668834&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjry_2SydL5AhW_yDgGHZP1CaMQ_AUoAXoECAEQAw&biw=1366&bih=568&dpr=1#imgrc=bdFXlDVBbGZiYM',
                'description'=>'a smart with 8 gb ram and much more feature',

            ],
            [
                'name'=>'Samsung',
                'price'=>'1000',
                'category'=>'Mobile',
                'gellary'=>'https://www.google.com/search?q=samsung&rlz=1C1YTUH_enBD1014BD1014&sxsrf=ALiCzsZxNmWIP2cnS3SoJL9WLfS9HYZOtQ:1660900747298&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiN27K4ydL5AhX9wzgGHclSDaQQ_AUoAXoECAIQAw&biw=1366&bih=568&dpr=1#imgrc=zJBFQ5ZVZnZ48M',
                'description'=>'a smart with 6 gb ram and much more feature',

            ],
            [
                'name'=>'oppo',
                'price'=>'1000',
                'category'=>'Mobile',
                'gellary'=>'https://www.google.com/search?q=oppo+f21+pro&rlz=1C1YTUH_enBD1014BD1014&sxsrf=ALiCzsZ2l15Tv4ATUJZ6Axf9ixgEsZtJTQ:1660900796239&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi7293PydL5AhW1wjgGHTPdAD0Q_AUoAXoECAEQAw&biw=1366&bih=568&dpr=1#imgrc=BXTI7dnQ85Dm2M',
                'description'=>'a smart with 12 gb ram and much more feature',

            ]
        ]);
    }
}
