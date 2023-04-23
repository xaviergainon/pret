<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class PretFormRequest extends FormRequest
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
    public function rules(): array
    {
        Log::info('PretFormRequest.rules');
        return [
            'typepret'  => ['required'],
            'montant'   => ['required','numeric', 'min:10000'],
            'dureeaa'   => ['required','integer', 'min:1'],
            'dureemm'   => ['required','integer'],
            'taux'      => ['required','numeric','min:0.5']
        ];
    }
}
