<?php

namespace App\Repositories;

use App\Models\stories;

class StoriesReponsitory
{
    public function getById($id)
    {
        return stories::find($id);
    }

    public function getAll()
    {
        return stories::all();
    }

    public function create($data)
    {
        return stories::create($data);
    }
    public function delete($id){
      $user=stories::findOrFail($id);
      return  $user->delete();
    }
    public function update($id, $data)
    {
        $user = stories::findOrFail($id);
        $user->update($data);
        return $user;
    }
}