<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name'=>['required', 'string', 'max:255'],
            'sex'=>['required'],
            'email'=>['required', 'email'],
            'tel'=>['required', 'numeric','digits_between:10,11'],
            'address'=>['required', 'string', 'max:255'],
            'contact__type'=>
            ['required'],
            'contact-content'=>['required', 'max:120']
        ];
    }

    public function messages(){
        return [
            'name.required' => '名前を入力してください',
            'sex.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメールアドレス形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'contact__type.required' => 'お問い合わせの種類を選択選択してください',
            'contact-content.required' => 'お問い合わせ内容を入力してください',
            'contact-content.max' => 'お問い合わせ内容は120文字以内入力してください',
        ];
    }
}
