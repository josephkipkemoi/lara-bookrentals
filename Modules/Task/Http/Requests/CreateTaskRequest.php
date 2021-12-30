<?php

namespace Modules\Task\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'task_completed' => ['required', 'boolean'],
            'task_id' => ['required', 'integer'],
            'task_started_at' => ['required', 'string']
        ];
    }

}
