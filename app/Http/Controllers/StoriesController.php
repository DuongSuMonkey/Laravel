<?php
namespace App\Http\Controllers;
use App\Models\audio;
use App\Models\text;
use Illuminate\Http\Request;
use App\Models\stories;
use App\Models\page;
use Illuminate\Support\Facades\DB;
use App\Repositories\StoriesRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StoriesController extends Controller{
    protected $stoiesRepository;

    public function __construct(StoriesRepository $stoiesRepository)
    {
        $this->stoiesRepository = $stoiesRepository;
    }
public function Create(){
    return view('CrudStories\Create');
}
public function show($id)
{
    $story = $this->stoiesRepository->getById($id);
    return response()->json($story);
}
public function store(Request $request){
    $validator = $request->validate([
        'name' => 'required|string',
        'author' => 'required|string',
        'genre'=>'required|string',
        'status'=>'required|string',
        'content'=>'required|string',
    ]);
    if ($validator==false) {
        return redirect()->back()->withErrors($validator);
    }
      $data = $request->all();
      $story = $this->stoiesRepository->create($data);
       echo"success create story";
       return response()->json($story, 201);
    
}
public function update(Request $request, $id){
    $validator = $request->validate([
        'name' => 'required|string',
        'author' => 'required|string',
        'genre'=>'required|string',
        'status'=>'required|string',
        'content'=>'required|string',
    ]);

    if ($validator==false) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $data=$request->all();
        $story = $this->stoiesRepository->update($id, $data);
        echo"success update story";
    return response()->json($story);
 
}
public function delete($id){
    $this->stoiesRepository->delete($id);
    return response()->json([
        'message' => "story with id $id has been deleted.",
    ]);
}
public function index(){
    $stories = $this->stoiesRepository->getAll();
    return response()->json( $stories);
}
public function getFullData(Request $request,$id)
    {

    $story = stories::with('pages')->find($id);
    $pages = Page::with('audios', 'texts')->get();
        return response()->json([
            'story' => $story,
           'pages'=> $pages,
        ]);
    }
}
