<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WordRequest extends Request
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
            'service_words' => 'required',
            'portofolio_words' => 'required',
            'about_words_1' => 'required',
            'about_words_2' => 'required',
            'about_words_3' => 'required',
            'client_words_1' => 'required',
            'client_words_2' => 'required',
            'paket_words_1' => 'required',
            'paket_words_2' => 'required',
            'newsletter_words' => 'required',
            'contact_words' => 'required',
        ];
    }
}
