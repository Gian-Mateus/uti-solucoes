<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Client
 *
 * @property int $id
 * @property string $name
 * @property string|null $cnpj
 * @property string|null $cpf
 * @property string $zipcode
 * @property string $adress
 * @property string $number
 * @property string $district
 * @property string $city
 * @property string $state
 * @property string $email
 * @property string $phone
 * @property bool $is_whats
 * @property Collection|Ticket[] $tickets
 */
class Client extends Model
{
    protected $table = 'clients';

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
        'zipcode',
        'adress',
        'number',
        'district',
        'city',
        'state',
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
            'zipcode' => 'string',
            'adress' => 'string',
            'number' => 'string',
            'district' => 'string',
            'city' => 'string',
            'state' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'is_whats' => 'boolean',
        ];
    }

    /**
     * @return HasMany<Ticket, $this>
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'client_id', 'id');
    }
}
