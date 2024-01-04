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
        'sex'                   => 'prohibited_if:sex,null',
        'postcode'              => 'required|integer',
        'support'               => 'prohibited_if:support,null',
        'email'                 => 'required|email:filter,dns|unique:users',
        'password'              => 'required|confirmed',
        'password_confirmation' => 'required',
      ];
    }

    public function messages()
    {
      return [
        'required'    => ':attribute は必須項目です',
        'name.max'    => ':attribute は50文字以下にしてください',
        'prohibited_if' => ':attributeを選択してください。',
        'integer'     => ':attribute は数字で入力してください',
        'email.email' => ':attribute は存在するメールアドレス形式で入力してください',
        'unique'      => '入力した :attribute はすでに登録済みです',
        'confirmed'   => ':attribute はパスワードと同じものを入力してください',
      ];
    }

    public function attributes()
    {
      return [
        'name'                  => '名前',
        'sex'                   => '性別',
        'postcode'              => '郵便番号',
        'support'               => '支持政党',
        'email'                 => 'メールアドレス',
        'password'              => 'パスワード',
        'password_confirmation' => '確認パスワード',
      ];
    }
}
