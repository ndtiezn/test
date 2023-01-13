<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // authentication -> xác thực
        // authorize -> phân quyền
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    #[ArrayShape(['product_code' => "string", 'product_name' => "string", 'category_id' => "string", 'supplier_id' => "string"])] public function rules(): array
    {
        return [
            'product_code' => 'required',
            'product_name' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',

        ];
    }

    #[ArrayShape(['product_code.required' => "string"])] public function messages(): array
    {
        return [
            'product_code.required' => 'Vui lòng nhập mã sản phẩm',
        ];
    }
}
