<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'food_name' => 'required|max:255', 
            'users_id' => 'required|exists:users,id', 
            'food_history' => 'required', 
            'food_desc' => 'required',
            'categories_id' => 'required|exists:categories,id', 
        ];
    }
}