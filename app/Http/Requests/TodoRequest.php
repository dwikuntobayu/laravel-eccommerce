<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Todo;
class TodoRequest extends FormRequest
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
            // 'text' => 'required',
            // 'user_id' => 'required',
            // 'completed' => 'required'
        ];
    }
    
    // public function messages() {
        // return [
            // // 'text.required' => 'Jadwal na naun euy?',
            // // 'user_id.unique' => 'Saha nu nyien na jang?',
            // // 'completed' => 'Status na naun? [0 ataw 1]'
        // ];
    // }
}
