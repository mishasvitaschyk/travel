<?php

namespace App\Http\Requests;
use App\Marker;
use App;
use Illuminate\Foundation\Http\FormRequest;

class MarkerRequest extends FormRequest
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
           'title'=>'required',
           'content'=>'required',
           'image'=>'required',
           'latlng'=>'required'

        ];
    }
    public function messages(){
        return([
          'title.required'=>'Поле заголовок є обов`язковим!',
          'content.required'=>'Поле додаткової інформації є обов`язковим!',
          'image.required'=>'Поле photo є обов`язковим!',
          'latlng.required'=>'Поле lat є обов`язковим!',
          
        ]);
    }
}
