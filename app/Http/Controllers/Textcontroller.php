<?php

namespace App\Http\Controllers;

use App\Repositories\TextReponsitory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\text;
use Illuminate\Support\Facades\DB;
use App\Repositories\AudioReponsitory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
class Textcontroller extends Controller
{
    protected $textRepository;

    public function __construct(TextReponsitory $textRepository)
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
