<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class DestinationValidate extends FormRequest
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
    public function rules(Request $request)
    {
        if ($request->isMethod('POST')) {
            return [
                'name' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'location_id' => 'required',
                'images' => 'required|image|mimes:jpg,jpeg|max:12000|min:6000'
            ];
        } else {
            return [
                'name' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'location_id' => 'required',
                'images' => 'image|mimes:jpg,jpeg|max:12000|min:6000'
            ];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Kolom nama destinasi harus diisi !',
            'category_id.required' => 'Kategori tidak boleh kosong !',
            'description.required' => 'Kolom deskripsi harus diisi !',
            // 'description.min' => 'Jelaskan lebih detail lagi !',
            'location_id.required' => 'Lokasi tidak boleh kosong !',
            'images.required' => 'Gambar harus ada !',
            'images.mimes' => 'Format Gambar harus jpg atau jpeg !',
            'images.min' => 'Gambar tidak sesuai !',
            'images.image' => 'Mohon masukan file yang bertipe image',
        ];
    }
}
