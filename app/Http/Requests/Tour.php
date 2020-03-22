<?php

namespace App\Http\Requests;
use App;
use App\Tour;
use Illuminate\Foundation\Http\FormRequest;

class Tour extends FormRequest
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
        'tour'=>'required',
        'content'=>'required',
        'price'=>'required',
        'image'=>'required',
      ];
    }
    public function messages(){
      return ([
        'tour.required'=>'Поле назва туру є обов`язковим',
        'content.required'=>'Поле опис туру є обов`язковим',
        'price.required'=>'Поле ціни є обов`язковим',
        'image.required'=>'Поле Photo туру є обов`язковим'
      ]);
    }
}
