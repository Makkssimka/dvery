<?php

namespace App\Controllers;

use App\Models\Door;
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
            <p>Имя: <br/><strong>$name</strong></p>
            <p>Телефон: <br/><strong>$tel</strong></p>
        ";
        $headers  = "Content-type: text/html; charset=utf-8";

        mail($to, $subject, $message, $headers);
    }

    public function sendGuarantee(Request $request){
        $name = $request->input('name');
        $tel = $request->input('telephone');
        $mess = $request->input('message');

        $to = Config::$email;
        $subject = "Гарантийное событие с сайта дверей";
        $message=  "
            <h2>Новое гарантийное событие с сайта дверей</h2>
            <p>Имя: <br/><strong>$name</strong></p>
            <p>Телефон: <br/><strong>$tel</strong></p>
            <p>Сообщение: <br/><strong>$mess</strong></p>
        ";
        $headers  = "Content-type: text/html; charset=utf-8";

        mail($to, $subject, $message, $headers);
    }

    public function getDoorsSite(Request $request){
        //if(!$request->isAjax()) die('Ошибка доступа');

        $doorArray = Door::all();

        echo json_encode($doorArray);
    }
}