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
            'user_id' => ['required', 'integer'],
            'assignment_id' => ['required', 'integer'],
            'task_completed' => ['required', 'boolean'],
            'task_completed_at' => ['required', 'string'],
            'assignment_category' => ['required', 'string'],
            'assignment_rating' => ['required', 'integer'],
            'assignment_earning' => ['required', 'integer'],
        ];
    }

}
