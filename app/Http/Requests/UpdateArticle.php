<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' =>[
                'required',
                'min:4',
                'max:30',
            ],
            'caption' =>[ 
                'max:30',
            ],
            'category_id' =>[
                'required',
                'min:4',
                'max:2048',
            ],
            'content' =>[
                'required',
                'min:5',
            ],
            'imagenew' =>[

                'min:5',
                'max:2048',
                'image',
            ],

        ];
    }
}
