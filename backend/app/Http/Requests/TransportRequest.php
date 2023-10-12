<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class TransportRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }
    public function rules(): array {
        return [
            'plate'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'year' => ['required', 'numeric', 'digits:4']
        ];
    }
    public function messages(): array{
        return [
        'year.digits'=>'Enter a valid year'
        ];
    }
}
