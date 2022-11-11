<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StorepostinganRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'judul' => 'required',
          'slug' => 'required|unique:postingans',
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

protected function prepareForValidation()
{
    $this->merge([
        'slug' => Str::slug($this->slug),
    ]);
}


}