<?php

namespace App\Repositories;

use App\Models\page;
use Illuminate\Support\Facades\Storage;
class PagesReponstory
{
    public function getById($id)
    {
        return page::find($id);
    }

    public function getAll()
    {
        return page::all();
    }

    public function create($data)
    {
        return page::create($data);
    }
    public function delete($id){
      $page=page::findOrFail($id);
      return  $page->delete();
    }
    public function update($id, $data)
    {
        $page = page::findOrFail($id);
        $page->update($data);
        return $page;
    }
}