<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdatePasswordRequest extends FormRequest
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
            'old_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'same:new_password',
        ];
    }

    /**
     * @return array
     */
    public function inputs()
    {
        $inputs = $this -> except('_token');
        if(!$inputs['new_password']){
            unset($inputs['new_password']);
        }else{
            $inputs['new_password'] = bcrypt($inputs['new_password']);
            unset($inputs['password_confirmation']);
        }
        return $inputs;
    }


}
