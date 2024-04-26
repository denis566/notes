<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class DeleteController extends Controller
{

    public function __invoke(Note $note)
    {
        // dd($category->id);

        $note->delete();

        return redirect()->route('admin.note.index');
    }

}
