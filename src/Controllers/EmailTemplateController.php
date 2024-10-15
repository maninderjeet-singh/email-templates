<?php

namespace Maninderjeet\EmailTemplate\Controllers;

use Illuminate\Http\Request;
use Maninderjeet\EmailTemplate\EmailTemplate;
use Maninderjeet\EmailTemplate\Models\EmailTemplate as ModelsEmailTemplate;
use Illuminate\Support\Facades\Validator;

class EmailTemplateController
{
    public function index()
    {
        try {
            $emailTemplates = ModelsEmailTemplate::get();
            return view('email-template::list\index', compact('emailTemplates'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('email-template::form\index');
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
            ModelsEmailTemplate::create($request->all());
            dd('Stored Email Template');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $emailTemplate = ModelsEmailTemplate::find($id);
            return view('email-template::form\index', compact('emailTemplate'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id)
    {
        try {
            $emailTemplate = ModelsEmailTemplate::find($id);
            return view('email-template::preview\index', compact('emailTemplate'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function update(Request $request, $id)
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
            ModelsEmailTemplate::where('id',$id)->update([
                'title'=>$request->title,
                'content' => $request->content
            ]);
            dd('Updated Email Template');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function duplicate($id)
    {
        try {
            $emailTemplate = ModelsEmailTemplate::find($id);
            $newEmailTemplate = $emailTemplate->replicate()->fill([
                'title' => 'Copy of '.$emailTemplate->title
            ]);
            $newEmailTemplate->save();
            dd('Duplicate Template' );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $emailTemplate = ModelsEmailTemplate::find($id);
            if($emailTemplate){
                $emailTemplate->delete();
            }
            dd('Deleted Template');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
