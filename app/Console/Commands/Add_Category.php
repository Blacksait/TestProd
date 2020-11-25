<?php

namespace App\Console\Commands;

use App\Product;
use App\Category;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


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
        $default_value = 1;

        //Продукты
        foreach ($data_products as $el_product){
            $validator = Validator::make($el_product,[//валидация
                'name' => 'required|max:20|unique:products',
                'price' => 'required|max:20',
                'availability' => 'required|max:2',
                'user_id' => 'required|max:2',
                'external_id' => 'required|max:2',

            ]);

            if ($validator->fails()) {//выводим ошибку
                $this->error('Product not created');//выводим ошибки валидации
                foreach ($validator->errors()->all() as $error){
                    $this->comment($error);
                }
                die;
            }

            $product = new Product();
            $product->name = $el_product['name'];
            $product->external_id = $el_product['external_id'];
            $product->price = $el_product['price'];
            $product->availability = $el_product['availability'];
            $product->description = $default_value;
            $product->user_id = $default_value;
            $product->save();
        }

        //Категории
        foreach ($data_categories as $el){
            $validator = Validator::make($el,[//валидация
                'name' => 'required|max:20|unique:categories',
                'external_id' => 'required|max:20',
            ]);

            if ($validator->fails()) {//выводим ошибку
                $this->error('Category not created');//выводим ошибки валидации
                foreach ($validator->errors()->all() as $error){
                    $this->comment($error);
                }
                die;
            }

            $category = new Category();
            $category->name = $el['name'];
            $category->label = $el['name'];
            $category->external_id = $el['external_id'];
            $category->parent_id = $default_value;
            $category->user_id = $default_value;
            $category->save();
        }
    }
}
