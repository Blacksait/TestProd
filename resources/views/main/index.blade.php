@extends('layout.main')

@section('content')
    <div style="padding: 3%;">
        <h1>Описание выполненной работы:</h1>
        <br>
        За основу html/css/js был взят код из другой работы,чтобы ускорить процесс выполнения задания
        <br>
        сделал отношения многи ко многим (category_product)
        <br>
        <br>
        №1
        <br>
        Создал две нужные таблицы (products и categories)
        <br>
        <br>
        №2
        <br>
        Сделал контроллеры для отображения,создания,редактирования и удаления категорий и товаров(было использовано 2 resources контроллера)
        <br>
        Сделал сортировку: по цене (возрастание/убывание) и по дате создания (возрастание/убывание)
        <br>
        Сделал фильтрацию по категориям,добавил возможность поиска по цене и по ключевому слову
        <br>
        <br>
        №3
        <br>
        Команда для активации -  <strong>php artisan Add_Category</strong>
        <br>
        Думаю получился хардкод,задание выполнено
        <br>
        Создал 2 файла(categories.json и products.json)походу выполнения работы,не указал в миграциях дефолтные значения, пришлость изменить некоторые.
        <br>
        <br>
        Из дополнительного:
        <br>
        Добавил пользователей и привязал их к товарам, и категориям при создании последних
    </div>

@endsection