<?php

namespace App\Repositories;

use App\Models\stories; 

class StoriesRepository implements RepositoryInterface
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
      $story=stories::findOrFail($id);
      return  $story->delete();
    }
    public function update($id, $data)
    {
        $story = stories::findOrFail($id);
        $story->update($data);
        return $story;
    }
}