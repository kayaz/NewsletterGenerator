<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function loadTemplate(Request $request)
    {
        if (request()->ajax()) {
            Block::create($request->merge(['name' => $request->template, 'mailing_id' => 1])->only(
                [
                    'name',
                    'mailing_id',
                    'cell_1',
                    'cell_2',
                    'cell_3'
                ]
            ));
        }
        return view('template.'.$request->template, ['cell_1' =>'', 'cell_2' =>'', 'cell_3' =>'']);
    }

    public function update(Request $request)
    {
        return view('front.generator.modal', [
            'modaltitle'    => 'Dodaj obrazek'
        ])->render();
    }

    public function sort(Request $request, Block $block)
    {
        $block->sort($request);
    }

    public function destroy(Request $request)
    {
        if (request()->ajax()) {
            Block::find($request->id)->delete();
            return response()->json(['success' => 'Moduł usniety']);
        }
    }
}
