<?php

namespace App\Controllers;

use App\Models\Accessory;
use App\Models\Door;
use Core\Request;
class AdminAjaxController
{
    public function getAccessories(Request $request){
        $access = Accessory::all();
        $this->colorWrite($access);

        echo json_encode($access);
    }

    public function addAccessories(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $color = $request->input('color');
        $file = $request->input('file');
        $id = $request->input('id');
        $access = [];

        if($id){
            $access = Accessory::find($id);
        }
        else{
            $access = new Accessory();
            $fileName = $this->saveFile($file, '/public/images/handle/');
            $access->file = $fileName;
        }

        $access->name = $name;
        $access->price = $price;
        $access->color = $color;
        $access->save();

        $access = Accessory::all();
        $this->colorWrite($access);

        echo json_encode($access);
    }

    public function removeAccessories(Request $request){
        $id = $request->input('id');
        $access = Accessory::find($id);
        $pathFile = $_SERVER['DOCUMENT_ROOT'].'/public/images/handle/'.$access->file;
        unlink($pathFile);
        $access->delete();

        $access = Accessory::all();
        $this->colorWrite($access);

        echo json_encode($access);
    }

    public function getDoors(Request $request){
        $doors = Door::orderBy('id', 'desc')->get();
        echo $doors;
    }

    public function addDoor(Request $request){

        $id = $request->input('id');
        $name = $request->input('name');
        $newPrice = $request->input('new_price');
        $oldPrice = $request->input('old_price');
        $category = $request->input('category');
        $vendor = $request->input('vendor');
        $color = $request->input('color', false);
        $desc = $request->input('desc', false);
        $images = $request->input('images', false);
        $preview = $request->input('preview');
        $door = [];

        if($id){
            $door = Door::find($id);
        }
        else{
            $door = new Door();
            $door->preview = $this->saveFile($preview, '/public/images/doors/previews/');
        }

        $door->name = $name;
        $door->newprice = $newPrice;
        $door->oldprice = $oldPrice;
        $door->category = $category;
        $door->vendor = $vendor;
        $door->color = $color;
        $door->description = $desc;
        $door->images = $images;

        $door->save();

        $doors = Door::all();
        echo($doors);
    }

    public function removeDoor(Request $request){
        $id = $request->input('id');
        $door = Door::find($id);

        $pathPreview = $_SERVER['DOCUMENT_ROOT'].'/public/images/doors/previews/'.$door->preview;
        unlink($pathPreview);

        $imagesList = json_decode($door->images);

        foreach ($imagesList as $item){
            $image = $_SERVER['DOCUMENT_ROOT'].'/public/images/doors/images/'.$item->name;
            unlink($image);
        }

        $door->delete();

        $doors = Door::all();
        echo($doors);
    }

    public function addImage(Request $request){
        $file = $request->input('file');
        $fileName = $this->saveFile($file, '/public/images/doors/images/');
        echo $fileName;
    }

    public function removeImage(Request $request){
        $name = $request->input('name');
        $pathFile = $_SERVER['DOCUMENT_ROOT'].'/public/images/doors/images/'.$name;
        unlink($pathFile);
    }

    private function saveFile($file, $path){
        $nameArray = explode('.', $file['name']);
        $fileName = "$nameArray[0]_".md5(microtime()).".$nameArray[1]";
        $pathFile = $_SERVER['DOCUMENT_ROOT'].$path.$fileName;

        move_uploaded_file($file['tmp_name'], $pathFile);
        return $fileName;
    }

    private function colorWrite($access){
        foreach ($access as $item){
            $colors = explode(',', $item->color);
            $colorsList = [];
            foreach ($colors as $color){
                switch ($color){
                    case 'mz':
                        $colorsList['Матовое золото'] = '#f5d78e';
                        break;
                    case 'pz':
                        $colorsList['Полированное золото'] = '#f7ca65';
                        break;
                    case 'mh':
                        $colorsList['Матовый хром'] = '#a4a4ac';
                        break;
                    case 'ph':
                        $colorsList['Полированный хром'] = '#e1e5e8';
                        break;
                    case 'mb':
                        $colorsList['Матовая бронза'] = '#a47a52';
                        break;
                    case 'be':
                        $colorsList['Белая эмаль'] = '#e2e2e2';
                        break;
                }
            }
            $item->colors = $colorsList;
        }
        return $access;
    }

}