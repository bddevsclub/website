<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $attributePrefix = null;

    protected function validateRequest(Request $request, $rules){
        $validation_rules = [];
        if(empty($this->attributePrefix)){
            $validation_rules = $rules;
        }
        else {
            foreach ($rules as $attr => $value) {
                $validation_rules["{$this->attributePrefix}_{$attr}"] = $value;
            }
        }
        $this->validate($request, $validation_rules);
    }

    protected function requestToAttributes(Request $request){
        $inputs = $request->all();
        if(empty($this->attributePrefix)){
            return $inputs;
        }
        $stripped = [];
        $stripRE = '#^' . preg_quote("{$this->attributePrefix}_") . '#';
        foreach ($inputs as $key => $value) {
            $key = preg_replace($stripRE, '', $key);
            $stripped[$key] = $value;
        }
        return $stripped;
    }

    protected function modelToAttributes(Model $model){
        $attributes = $model->attributesToArray();
        if(empty($this->attributePrefix)){
            return $attributes;
        }

        $prefixed = [];
        foreach ($attributes as $attr => $value) {
            if( $attr == $model->getKeyName() ) {
                $prefixed[$model->getKeyName()] = $value;
            }
            else {
                $prefixed["{$this->attributePrefix}_{$attr}"] = $value;
            }
        }

        return $prefixed;
    }
}