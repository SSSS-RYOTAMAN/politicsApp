<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
          'name'                  => 'required|max:50',
          'sex'                   => 'required|integer',
          'year'                  => 'required|integer',
          'month'                 => 'required|integer',
          'day'                   => 'required|integer',
          'support'               => 'required|integer',
          'email'                 => 'required|email:filter,dns|unique:users',
          'password'              => 'required',
          'password_confirmation' => 'required|confirmed',
        ];
    }

    public function messages()
    {
      return [
        'required'    => ':attribute は必須項目です',
        'name.max'    => ':attribute は50文字以下にしてください',
        'integer'     => ':attribute は選択肢の中から選択してください',
        'email.email' => ':attribute は存在するメールアドレス形式で入力してください',
        'unique'       => '入力した :attribute はすでに登録済みです',
        'confirmed'   => ':attribute はパスワードと同じものを入力してください',
      ];
    }

    public function attributes()
    {
      return [
        'name'                  => '名前',
        'sex'                   => '性別',
        'year'                  => '年',
        'month'                 => '月',
        'day'                   => '日',
        'support'               => '支持政党',
        'email'                 => 'メールアドレス',
        'password'              => 'パスワード',
        'password_confirmation' => '確認パスワード',
      ];
    }
}
