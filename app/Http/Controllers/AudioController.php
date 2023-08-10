<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\audio;
use Illuminate\Support\Facades\DB;
use App\Repositories\AudioReponsitory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
class AudioController extends Controller
{
    protected $audioRepository;

    public function __construct(AudioReponsitory $audioRepository)
    {
        $this->audioRepository = $audioRepository;
    }
     public function list()
    {
         $audios = $this->audioRepository->getAll();
        return response()->json($audios);
    }

    public function details($id)
    {
        $audio = $this->audioRepository->getById($id);
        return response()->json([$audio,
       'path'=>  URL::asset('public/audios/'.$audio->file_name)
        ]
    );
    }
    public function create()
    {
        return view('CrudAudio\create');
    }
    public function store(Request $request){
        $validator = $request->validate( [
            'id' => 'required|int|required',
            'name' => 'required|string|min:1|required',
            'file_name' => 'required|string|min:1|required',
            'page_id'=>'required|int|min:1|required'
        ]);

        if ($validator==false) {
            return redirect()->back()->withErrors($validator);
        }else{
        $data = $request->all();
        $audio = $this->audioRepository->create($data);
        echo"success create audio";
        return response()->json($audio, 201);
        }
    }
    public function edit($id){
        $audio=$this->audioRepository->edit($id);
        return view('CrudAudio\Update', compact('audio'));
    }
    
    public function update(Request $request, $id){
        $data = $request->all();
        $audio = $this->audioRepository->update($id, $data);
        echo"success update audio";
    }
    public function delete($id){
        $this->audioRepository->delete($id);
        return response()->json([
            'message' => "User with id $id has been deleted.",
        ]);
    }
}
