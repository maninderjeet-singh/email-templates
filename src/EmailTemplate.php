<?php

namespace Maninderjeet\EmailTemplate;

use Illuminate\Support\Facades\Http;
use Maninderjeet\EmailTemplate\Models\EmailTemplate as ModelsEmailTemplate;

class EmailTemplate
{
    public function justDoIt()
    {
        return 'Maninderjeet\EmailTemplate\EmailTemplate';
    }

    public static function templateContent($id,$parms)
    {
        $template = ModelsEmailTemplate::find($id);
        $content = $template->content;
        foreach ($parms as $key => $value) {
            $content = str_replace("{{{$key}}}", $value, $content);
        }
        return $content;
    }
}
