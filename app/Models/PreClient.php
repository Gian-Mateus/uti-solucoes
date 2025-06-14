<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PreClient
 *
 * @property int $id
 * @property string $name
 * @property string|null $cnpj
 * @property string|null $cpf
 * @property string|null $email
 * @property string $phone
 * @property bool $is_whats
 */
class PreClient extends Model
{
    protected $table = 'pre-client';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name',
        'cnpj',
        'cpf',
        'email',
        'phone',
        'is_whats',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'name' => 'string',
            'cnpj' => 'string',
            'cpf' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'is_whats' => 'boolean',
        ];
    }
}
