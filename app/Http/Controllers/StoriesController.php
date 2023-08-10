<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\stories;
use App\Models\testdb;
use Illuminate\Support\Facades\DB;
use App\Repositories\StoriesReponsitory;
use Illuminate\Support\Facades\Hash;
class StoriesController extends Controller{
    protected $stoiesRepository;

    public function __construct(StoriesReponsitory $stoiesRepository)
    {
        $this->stoiesRepository = $stoiesRepository;
    }
public function Create(){
    return view('CrudStories\Create');
}
public function show($id)
{
    $user = $this->stoiesRepository->getById($id);
    return response()->json($user);
}
public function store(Request $request){
    $data = $request->all();
     $user = $this->stoiesRepository->create($data);
    echo"success create user";
    return response()->json($user, 201);
}
public function edit($id){
   $user=  $this->stoiesRepository->edit($id);
    return view('CrudStories\Update', compact('user'));
}

public function update(Request $request, $id){
    $data = $request->all();
    $user = $this->stoiesRepository->update($id, $data);
    echo"success update user";
}
public function delete($id){
    $this->stoiesRepository->delete($id);
    return response()->json([
        'message' => "User with id $id has been deleted.",
    ]);
}
public function index(){
    $users = $this->stoiesRepository->getAll();
    return response()->json( $users);
}
}


