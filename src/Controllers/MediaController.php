<?php

namespace Maninderjeet\EmailTemplate\Controllers;

use Illuminate\Http\Request;
use Maninderjeet\EmailTemplate\EmailTemplate;
use Maninderjeet\EmailTemplate\Models\Media;
use Illuminate\Support\Facades\Validator;

class MediaController
{
    public function index()
    {
        try {
            $medias = Media::get();
            return view('email-template::media\list\index', compact('medias'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            dd('upload new media');
            // return view('email-template::template\form\index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'content' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
            Media::create($request->all());
            dd('Stored media');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $emailTemplate = Media::find($id);
            if($emailTemplate){
                $emailTemplate->delete();
            }
            dd('Deleted media');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
