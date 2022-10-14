<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Models\Image;

class ImageController extends Controller
{
    public function __construct(Image $imagem)
    {
        $this->imagem = $imagem;
    }


    public function list()
    {
        return view('dashboard.list_image');
    }
}
