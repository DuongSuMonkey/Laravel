<?php

namespace App\Repositories;

use App\Models\text;
use Illuminate\Support\Facades\Storage;
class TextRepository implements RepositoryInterface
{
    public function getById($id)
    {
        return text::find($id);
    }

    public function getAll()
    {

        return text::all();
    }
    public function delete($id){
     
    }
    public function update($id, $data)
    {
 
    }
    public function create($data){

    }
}