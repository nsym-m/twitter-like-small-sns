<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'user_code' => 'required|string|max:100',
            'user_name' => 'required|string|max:100',
            'password' => 'required|string|max:255',
            'profile_image' => 'required|mimes:jpg,bmp,png',
        ];
    }
}
