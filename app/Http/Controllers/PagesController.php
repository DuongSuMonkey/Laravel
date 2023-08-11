<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\page;
use Illuminate\Support\Facades\DB;
use App\Repositories\PagesRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
class PagesController extends Controller
{

    protected $pagesRepository;
    
    public function __construct(PagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }
    public function list()
    {
        $pages = $this->pagesRepository->getAll();
        return response()->json($pages);
    }
    
    public function details($id)
    {
        $page = $this->pagesRepository->getById($id);
        return response()->json([$page,
        ]
    );
    }
    public function create()
    {
        return view('CrudPages\create');
    }
    public function store(Request $request){
       
       $validator = $request->validate([
        'story_id' => 'required|string',
        'name' => 'required|string',
        'title'=>'required|string',
        'background_url'=>'required|string',
        'content'=>'required|string',
        ]);

        if ($validator==false) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();
        $page = $this->pagesRepository->create($data);
        echo"success create page";
        return response()->json($page, 201);
    }
    public function update(Request $request, $id){
        $validator = $request->validate([
            'story_id' => 'required|string',
            'name' => 'required|string',
            'title'=>'required|string',
            'background_url'=>'required|string',
            'content'=>'required|string',
        ]);
    
        if ($validator==false) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
            $data = $request->all();
            $page = $this->pagesRepository->update($id, $data);
            echo"success update page";
            return response()->json($data);
    }
    public function delete($id){
            $this->pagesRepository->delete($id);
            return response()->json([
                'message' => "page with id $id has been deleted.",
        ]);
    }
}
    
