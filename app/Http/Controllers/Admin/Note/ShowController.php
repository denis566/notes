<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class ShowController extends Controller
{

    public function __invoke(Note $note)
    {

        return view('admin.note.show', compact('note'));

    }

}
 