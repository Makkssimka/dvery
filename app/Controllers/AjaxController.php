<?php

namespace App\Controllers;

use Core\Request;
use Config;

class AjaxController
{
    public function sendMail(Request $request){
        $name = $request->input('name');
        $tel = $request->input('tel');

        $to = Config::$email;
        $subject = "Заявка на двери";
        $message = "
            <h2>Новая заявка на двери</h2>
            <p>Имя: <strong>$name</strong></p>
            <p>Телефон: <strong>$tel</strong></p>
        ";

        $headers  = "Content-type: text/html; charset=utf-8";

        mail($to, $subject, $message, $headers);
    }

    public function getDoorsSite(Request $request){
        //if(!$request->isAjax()) die('Ошибка доступа');

        $doorArray = [

            ['id' => 1, 'colorType'=>'black', 'doorType'=> 'interior', 'name' => 'Петрушкин темный темный', 'vendor' => 'петрушкин завод', 'price' => '27 000', 'example' => ['белый', 'зеленый', 'синий', 'черный'], 'alias' => 'petrushkin', 'image' => '1-example.jpg'],
            ['id' => 2, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Иванов венге', 'vendor' => 'иванов завод', 'price' => '78 000', 'example' => ['белый', 'зеленый', 'черный'], 'alias' => 'ivanov', 'image' => '2-example.jpg'],
            ['id' => 3, 'colorType'=>'black', 'doorType'=> 'interior', 'name' => 'Сидоров дуб', 'vendor' => 'сидоров завод', 'price' => '57 000', 'example' => ['белый', 'зеленый', 'синий', 'черный', 'венге'], 'alias' => 'sidorov', 'image' => '3-example.jpg'],
            ['id' => 4, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Белая сосна', 'vendor' => 'сосновый завод', 'price' => '107 000', 'example' => ['белый', 'черный'], 'alias' => 'sosna', 'image' => '4-example.jpg'],
            ['id' => 5, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Петрушкин темный', 'vendor' => 'петрушкин завод', 'price' => '27 000', 'example' => ['белый', 'зеленый', 'синий', 'черный'], 'alias' => 'petrushkin', 'image' => '1-example.jpg'],
            ['id' => 6, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Иванов венге', 'vendor' => 'иванов завод', 'price' => '78 000', 'example' => ['белый', 'зеленый', 'черный'], 'alias' => 'ivanov', 'image' => '2-example.jpg'],
            ['id' => 7, 'colorType'=>'withe', 'doorType'=> 'entry', 'name' => 'Сидоров дуб', 'vendor' => 'сидоров завод', 'price' => '57 000', 'example' => ['белый', 'зеленый', 'синий', 'черный', 'венге'], 'alias' => 'sidorov', 'image' => '3-example.jpg'],
            ['id' => 8, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Белая сосна', 'vendor' => 'сосновый завод', 'price' => '107 000', 'example' => ['белый', 'черный'], 'alias' => 'sosna', 'image' => '4-example.jpg'],
            ['id' => 9, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Петрушкин темный', 'vendor' => 'петрушкин завод', 'price' => '27 000', 'example' => ['белый', 'зеленый', 'синий', 'черный'], 'alias' => 'petrushkin', 'image' => '1-example.jpg'],
            ['id' => 10, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Иванов венге', 'vendor' => 'иванов завод', 'price' => '78 000', 'example' => ['белый', 'зеленый', 'черный'], 'alias' => 'ivanov', 'image' => '2-example.jpg'],
            ['id' => 11, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Сидоров дуб', 'vendor' => 'сидоров завод', 'price' => '57 000', 'example' => ['белый', 'зеленый', 'синий', 'черный', 'венге'], 'alias' => 'sidorov', 'image' => '3-example.jpg'],
            ['id' => 12, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Белая сосна', 'vendor' => 'сосновый завод', 'price' => '107 000', 'example' => ['белый', 'черный'], 'alias' => 'sosna', 'image' => '4-example.jpg'],
            ['id' => 13, 'colorType'=>'withe', 'doorType'=> 'entry', 'name' => 'Петрушкин темный', 'vendor' => 'петрушкин завод', 'price' => '27 000', 'example' => ['белый', 'зеленый', 'синий', 'черный'], 'alias' => 'petrushkin', 'image' => '1-example.jpg'],
            ['id' => 14, 'colorType'=>'black', 'doorType'=> 'interior', 'name' => 'Иванов венге', 'vendor' => 'иванов завод', 'price' => '78 000', 'example' => ['белый', 'зеленый', 'черный'], 'alias' => 'ivanov', 'image' => '2-example.jpg'],
            ['id' => 15, 'colorType'=>'black', 'doorType'=> 'interior', 'name' => 'Сидоров дуб', 'vendor' => 'сидоров завод', 'price' => '57 000', 'example' => ['белый', 'зеленый', 'синий', 'черный', 'венге'], 'alias' => 'sidorov', 'image' => '3-example.jpg'],
            ['id' => 16, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Белая сосна', 'vendor' => 'сосновый завод', 'price' => '107 000', 'example' => ['белый', 'черный'], 'alias' => 'sosna', 'image' => '4-example.jpg'],
            ['id' => 17, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Петрушкин темный', 'vendor' => 'петрушкин завод', 'price' => '27 000', 'example' => ['белый', 'зеленый', 'синий', 'черный'], 'alias' => 'petrushkin', 'image' => '1-example.jpg'],
            ['id' => 18, 'colorType'=>'black', 'doorType'=> 'interior', 'name' => 'Иванов венге', 'vendor' => 'иванов завод', 'price' => '78 000', 'example' => ['белый', 'зеленый', 'черный'], 'alias' => 'ivanov', 'image' => '2-example.jpg'],
            ['id' => 19, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Сидоров дуб', 'vendor' => 'сидоров завод', 'price' => '57 000', 'example' => ['белый', 'зеленый', 'синий', 'черный', 'венге'], 'alias' => 'sidorov', 'image' => '3-example.jpg'],
            ['id' => 20, 'colorType'=>'black', 'doorType'=> 'entry', 'name' => 'Белая сосна', 'vendor' => 'сосновый завод', 'price' => '107 000', 'example' => ['белый', 'черный'], 'alias' => 'sosna', 'image' => '4-example.jpg'],
            ['id' => 21, 'doorType'=> 'entry', 'name' => 'Петрушкин темный', 'vendor' => 'петрушкин завод', 'price' => '27 000', 'example' => ['белый', 'зеленый', 'синий', 'черный'], 'alias' => 'petrushkin', 'image' => '1-example.jpg'],
            ['id' => 22, 'colorType'=>'withe', 'doorType'=> 'entry', 'name' => 'Иванов венге', 'vendor' => 'иванов завод', 'price' => '78 000', 'example' => ['белый', 'зеленый', 'черный'], 'alias' => 'ivanov', 'image' => '2-example.jpg'],
            ['id' => 23, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Сидоров дуб', 'vendor' => 'сидоров завод', 'price' => '57 000', 'example' => ['белый', 'зеленый', 'синий', 'черный', 'венге'], 'alias' => 'sidorov', 'image' => '3-example.jpg'],
            ['id' => 24, 'colorType'=>'withe', 'doorType'=> 'interior', 'name' => 'Белая белая сосна', 'vendor' => 'сосновый завод', 'price' => '107 000', 'example' => ['белый', 'черный'], 'alias' => 'sosna', 'image' => '4-example.jpg'],


        ];

        echo json_encode($doorArray);
    }
}