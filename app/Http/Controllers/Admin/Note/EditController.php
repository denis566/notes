<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use App\Models\Tag;

class EditController extends Controller
{

    public function __invoke(Note $note)
    {
        // dd($category->id);
        $catergories = Category::all();
        $tags = Tag::all();

        // dd($note->tags);

        return view('admin.note.edit', compact('note', 'catergories', 'tags'));
    }

}
 