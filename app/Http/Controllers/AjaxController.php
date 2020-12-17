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
                    'mailing_id'
                ]
            ));
        }
        return view('template.'.$request->template);
    }

    public function update(Request $request)
    {
        $block = Block::find($request->id);

        return view('front.generator.modal-'.$request->modal, [
            'modaltitle'    => 'Dodaj obrazek',
            'modalfilewidth'    => $request->width,
            'modalfileheight'    => $request->height,
            'modalcell'    => $request->cell,
            'modalid'    => $request->id,
            'modalbgcolor'    => $block[$request->cell.'_bgcolor'],
            'modalurl'    =>  $block[$request->cell.'_url'],
            'modaltext'    =>  $block[$request->cell.'_text']
        ])->render();
    }

    public function store(Request $request)
    {

        //  "_token" => "3IRchjOWVFwMFjkgrq8EpUjlQgeOpENxDCq1FJJF"
        //  "url" => null
        //  "file" => "branzino-with-roasted-beets_1400x850.jpg"
        //  "cell" => "cell_2"
        //  "id" => "1"
        //  "width" => "180"
        //  "height" => "180"

        $block = Block::find($request->id);

        if ($request->hasFile('file')) {
            $block->imageUpload($request->file('file'), $request->width, $request->height, $request->cell, $block);
        }

        if ($request->has('url')) {
            $block->update([
                $request->cell.'_url' => $request->url
            ]);
        }

        if ($request->has('bgcolor')) {
            $block->update([
                $request->cell.'_bgcolor' => $request->bgcolor
            ]);
        }

        if ($request->has('text')) {
            $block->update([
                $request->cell.'_text' => $request->text,
                $request->cell => null
            ]);
        }

        //dd($request->all());

        return redirect()->back();
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
