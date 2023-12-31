<?php

namespace App\Repositories;

use App\Models\audio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class AudioRepository implements RepositoryInterface
{
    public function getById($id)
    {
        return audio::find($id);
    }

    public function getAll()
    {
        return audio::all();
    }

    public function create($data)
    {
        
        return audio::create($data);
    }
    public function delete($id){
      $audio=audio::findOrFail($id);
      return  $audio->delete();
    }
    public function update($id, $data)
    {
        $audio = audio::findOrFail($id);
        $audio->update($data);
        return $audio;
    }
}