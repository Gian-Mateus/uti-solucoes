<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PreClient
 *
 * @property int $id
 * @property string $name
 * @property string $cnpj-cpf
 * @property string $zipcode
 * @property string $adress
 * @property string $number
 * @property string $district
 * @property string $city
 * @property string $state
 * @property string|null $email
 * @property string $phones
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
        'cnpj-cpf',
        'zipcode',
        'adress',
        'number',
        'district',
        'city',
        'state',
        'email',
        'phones',
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
            'cnpj-cpf' => 'string',
            'zipcode' => 'string',
            'adress' => 'string',
            'number' => 'string',
            'district' => 'string',
            'city' => 'string',
            'state' => 'string',
            'email' => 'string',
            'phones' => 'string',
        ];
    }
}
