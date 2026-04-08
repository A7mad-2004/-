<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTrip extends FormRequest
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
            'title' => 'required|string|max:255',
            'destination_id' => 'required|exists:destinations,id',
            'days' => 'required|numeric|min:1|max:365',
            'Adult' => 'required',
            'Child' => 'required',
            'capacity' => 'required|numeric|min:20',
            'price' => 'required|numeric|min:100',
            'summary' => 'required|string',
            'status' => 'required|in:Available,published,Completed',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048',

        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'The trip title is required.',
            'destination_id.required' => 'Please select a destination.',
            'days.required' => 'Please specify the number of days for the trip.',
            'Adult.required' => 'Please provide the price for adults.',
            'Child.required' => 'Please provide the price for children.',
            'capacity.required' => 'Please specify the capacity of the trip.',
            'price.required' => 'Please provide the price for the trip.',
            'summary.required' => 'Please provide a summary of the trip.',
            'status.required' => 'Please select a status for the trip.',
            'image.required' => 'Please upload an image for the trip.',
            'image.max' => 'The image size must not exceed 2MB.',
        ];
    }
}
