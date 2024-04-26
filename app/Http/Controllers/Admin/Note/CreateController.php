<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{

    public function __invoke()
    {

        $catergories = Category::all();
        $tags = Tag::all();
        return view('admin.note.create', compact('catergories','tags'));
    }

}
