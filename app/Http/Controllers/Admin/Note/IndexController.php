<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class IndexController extends Controller
{

    public function __invoke()
    {
        $notes = Note::all();
        return view('admin.note.index', compact('notes'));
    }

}
