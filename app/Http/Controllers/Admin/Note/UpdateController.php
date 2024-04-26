<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Note\UpdateRequest;
use App\Models\Note;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Note $note)
    {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']); // удаляем массив tag_ids

        $note->update($data);
        $note->tags()->sync($tagIds);
        

        

        return view('admin.note.show', compact('note'));
    }

}
 