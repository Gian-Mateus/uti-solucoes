<?php

namespace App\Livewire\Forms\client;

use Livewire\Form;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;

class TicketsCreateForm extends Form
{
    public $title;
    public $description;
    public $attachments = [];
    public $type = "remote";
    public $priority = "medium";
    public $priorityData = [
        ['id' => 'low', 'label' => 'Baixa'],
        ['id' => 'medium', 'label' => 'Média'],
        ['id' => 'high', 'label' => 'Alta'],
        ['id' => 'urgent', 'label' => 'Urgente']
    ];
    public $typeData = [
        ['id' => 'remote', 'label' => 'Remoto'],
        ['id' => 'in_loco', 'label' => 'Em Loco (Presencial)'],
    ];

    public function rules()
    {
        return [
            'title' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:1500',
            'priority' => ['required', Rule::in(['low', 'medium', 'high', 'urgent'])],
            'type' => ['required', Rule::in(['remote', 'in_loco'])],
            'attachments' => [
                'nullable',
                'array',
                'max:10',
                function ($attribute, $value, $fail) {
                    $totalSize = collect($value)->sum(fn($file) => $file->getSize());
                    if ($totalSize > 10 * 1024 * 1024) { // 10MB
                        $fail('O tamanho total dos anexos não pode exceder 10MB.');
                    }
                }
            ],
            'attachments.*' => 'mimes:jpg,jpeg,png,webp,mp4,pdf,doc,docx,xls,xlsx,txt|max:5120', // Max 5MB per file
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatório.',
            'title.min' => 'O campo título deve ter no mínimo :min caracteres.',
            'title.max' => 'O campo título deve ter no máximo :max caracteres.',
            'description.required' => 'O campo descrição é obrigatório.',
            'description.min' => 'O campo descrição deve ter no mínimo :min caracteres.',
            'description.max' => 'O campo descrição deve ter no máximo :max caracteres.',
            'attachments.max' => 'Você pode enviar no máximo :max arquivos.',
            'attachments.*.mimes' => 'Apenas ficheiros do tipo :values são permitidos.',
            'attachments.*.max' => 'O tamanho máximo para cada anexo é de 5MB.',
        ];
    }
}
