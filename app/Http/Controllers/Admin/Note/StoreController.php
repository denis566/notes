<?php

namespace App\Http\Controllers\Admin\Note;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Note\StoreRequest;
use App\Models\Note;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {

        try{

            $data = $request->validated();

            // dd($data);
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']); // удаляем массив tag_ids
            $note = Note::firstOrCreate($data);
            $note->tags()->attach($tagIds);

            
        } catch ( \Exception $exception ){
            abort(404);
        }
        

        return redirect()->route('admin.note.index');
    }

}
 