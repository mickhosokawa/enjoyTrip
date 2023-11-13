<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    // リダイレクト先があるのであれば、指定する
    //protected $redirect = '/post';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'title' => 'required | max:50',
            'body' => 'required | max:200',
            //'address' => ,
            //'facility' => ,
            'season' => 'integer | min:1 | max:12',
            //'image_path' => ,
        ];
    }
}
