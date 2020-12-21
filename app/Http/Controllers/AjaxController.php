<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Block;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
        return redirect()->back();
    }

    public function sort(Request $request, Block $block)
    {
        $block->sort($request);
    }

    public function send(Request $request)
    {
        $data = Block::all()->sortBy("order");
        Mail::to($request->mail)->send(new SendMail($data));

        return redirect()->back();
    }

    public function download()
    {
        $data = Block::all()->sortBy("order");
        Storage::disk('public_uploads')->put('mailing.html',
            view('email.template')
                ->with(["list" => $data])
                ->render(), 'public'
        );
        return response()->download(public_path('/uploads/mailing.html'));
    }

    public function destroy(Request $request)
    {
        if (request()->ajax()) {
            Block::find($request->id)->delete();
            return response()->json(['success' => 'Moduł usniety']);
        }
    }
}
