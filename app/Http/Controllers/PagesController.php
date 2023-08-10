<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\page;
use Illuminate\Support\Facades\DB;
use App\Repositories\PagesReponstory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
class PagesController extends Controller
{

    protected $pagesReponstory;
    
    public function __construct(PagesReponstory $pagesReponstory)
    {
        $this->pagesReponstory = $pagesReponstory;
    }
    public function list()
    {
        $pages = $this->pagesReponstory->getAll();
        return response()->json($pages);
    }
    
    public function details($id)
    {
        $page = $this->pagesReponstory->getById($id);
        return response()->json([$page,
       // 'path'=>  URL::asset('public/audio/'.$audio->file_name)
        ]
    );
    }
    public function create()
    {
        return view('CrudPages\create');
    }
    public function store(Request $request){
        // dd($request);
            $data = $request->all();
             //dd($data);
             $page = $this->pagesReponstory->create($data);
           // User::create($data);
            echo"success create page";
            return response()->json($page, 201);
    }
    public function edit($id){
           $page= $this->pagesReponstory->edit($id);
            return view('CrudPages\Update', compact('page'));
    }
        
    public function update(Request $request, $id){
            $data = $request->all();
            $page = $this->pagesReponstory->update($id, $data);
            echo"success update page";
    }
    public function delete($id){
            $this->pagesReponstory->delete($id);
            return response()->json([
                'message' => "page with id $id has been deleted.",
        ]);
    }
}
    
