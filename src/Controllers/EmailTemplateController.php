<?php
namespace Maninderjeet\EmailTemplate\Controllers;

use Illuminate\Http\Request;
use Maninderjeet\EmailTemplate\EmailTemplate;
use Maninderjeet\EmailTemplate\Models\EmailTemplate as ModelsEmailTemplate;

class EmailTemplateController
{
    // public function __invoke(EmailTemplate $EmailTemplate) {
    //     $quote = $EmailTemplate->justDoIt();

    //     return $quote;
    // }

    public function index()
    {
        try {
            // $emailTemplates =  [
            //     (object)['id'=>1,'title'=>'Welcome Email','content'=>'Hello this content is used for welcome email'],
            //     (object)['id'=>2,'title'=>'Reset Password Email','content'=> 'Hello this content is used for Reset Password Email'],
            //     (object)['id'=>3,'title'=>'Changed Password Email','content'=> 'Hello this content is used for Changed Password Email'],
            // ];
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
            dd($request->all());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            dd('Edit Template'.$id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request,$id)
    {
        try {
            dd('Update Email Template',$request->all(), $id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            dd('destroy Template' . $id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }



}
