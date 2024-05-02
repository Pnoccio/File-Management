<?php

namespace App\Http\Requests;

use App\Models\File;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ParentIdBaseRequest extends FormRequest
{
    public ?File $parent = null;

    public function authorize(): bool
    {
        $this->parent = File::query()->where('id', $this->input('parent_id'))->first();
        if($this->parent && $this->parent->isOwnedBy(Auth::id())){
            return false;
        }
        return true;
    }

    public function rules(): array
    {
        return [
            'parent_id' => [
                Rule::exists(File::class, 'id')->where(function ($query) {
                    return $query->where('is_folder', '=', 1)->where('created_by', '=', Auth::id());
                }),
            ]
        ];
    }
}
