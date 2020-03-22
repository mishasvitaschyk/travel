<?php

namespace App\Http\Requests;
use App\Comment;
use App;
use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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

            'comment'=>'required|min:2'
        ];
    }
    public function messages(){
      return ([
        'user.required'=>'Для додавання коментаря, будь ласка, увійдіть в систему!',
        'comment.required'=>'Введіть будь ласка коментар!',
        'comment.min'=>'Мінімальна калькість символів 2!'
      ]);
    }
}
