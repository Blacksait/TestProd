<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Add_Category extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Add_Category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new Categories';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categories = file_get_contents('categories.json');//находим json файл категорий
        $data_categories = json_decode($categories,true);//делаем из string массив

        $categories = file_get_contents('products.json');//находим json файл продукта
        $data_products = json_decode($categories,true);//делаем из string массив

        //Категории
        foreach ($data_categories as $el){
            $name = $el['name'];
            $external_id = $el['external_id'];

            DB::statement("INSERT INTO categories(name,label,external_id,parent_id,user_id) values('$name','$name',$external_id,1,1)");
        }

        //Продукты
        foreach ($data_products as $el_product){
            $name = $el_product['name'];
            $external_id = $el_product['external_id'];
            $price = $el_product['price'];
            $availability = $el_product['availability'];

            DB::statement("INSERT INTO products(external_id,name,description,price,user_id,availability) values('$external_id','$name','lorem',$price,1,'$availability')");
        }


    }
}
