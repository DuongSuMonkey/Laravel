<?php

namespace App\Http\Controllers;

use App\Models\Activitylog;
use App\Repositories\TextRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\text;
use Illuminate\Support\Facades\DB;
use App\Repositories\AudioRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Spatie\Activitylog\Models\Activity;
class Textcontroller extends Controller
{
    protected $textRepository;

    public function __construct(TextRepository $textRepository)
    {
        $this->textRepository = $textRepository;
    }
    public function list()
    {
         $texts = $this->textRepository->getAll();
        return response()->json($texts);
    }
   
    public function details($id)
    {
        $text = $this->textRepository->getById($id);
        return response()->json([$text,
        ]
    );
    }
}
