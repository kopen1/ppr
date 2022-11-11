<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepostinganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user();
    }

    public function rules()
    {
        return [
          'judul' => 'required',
          'kategori_id' => 'required',
          'body' => 'required'
        ];
    }
    
    public function messages()
{
    return [
        'judul.required' => 'A title is required',
        'slug.unique' => 'Slug is Aready',
        'kategori_id.required' => 'A Kategori is required',
        'body.required' => 'A message is required',
    ];
}



}
