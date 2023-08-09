<?php

namespace App\Repositories;

use App\Models\text;
use Illuminate\Support\Facades\Storage;
class TextReponsitory
{
    public function getById($id)
    {
        return text::find($id);
    }

    public function getAll()
    {

        return text::all();
    }
}