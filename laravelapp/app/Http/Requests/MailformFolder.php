<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MailformFolder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:20',
            'email'=>'required|email|max:100',
            'subject'=>'required|max:30',
            'message'=>'required|max:256',
           
        ];
    }
}
