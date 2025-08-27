<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Client
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
 * @property string $emails
 * @property string $phones
 * @property int $data_id
 * @property DataClient $data
 * @property Collection|Backup[] $backups
 * @property Collection|ClientUser[] $clientUsers
 */
class Client extends Model
{
    use HasFactory;
    
    protected $table = 'clients';

    /**
     * @var string
     */
    protected $connection = 'sqlite';

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
        'emails',
        'phones',
        'data_id',
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
            'emails' => 'string',
            'phones' => 'string',
            'data_id' => 'integer',
        ];
    }

    /**
     * @return HasMany<Backup, $this>
     */
    public function backups(): HasMany
    {
        return $this->hasMany(Backup::class, 'client_id', 'id');
    }

    /**
     * @return HasMany<ClientUser, $this>
     */
    public function clientUsers(): HasMany
    {
        return $this->hasMany(ClientUser::class, 'client_id', 'id');
    }

    /**
     * @return BelongsTo<DataClient, $this>
     */
    public function data(): BelongsTo
    {
        return $this->belongsTo(DataClient::class, 'data_id');
    }
}
