<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class DataClient
 *
 * @property int $id
 * @property string $ip_public
 * @property Collection|Client[] $clients
 * @property Collection|Email[] $emails
 * @property Collection|Gpo[] $gpos
 * @property Collection|Inventory[] $inventories
 * @property Collection|Server[] $servers
 */
class DataClient extends Model
{
    protected $table = 'data_clients';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'ip_public',
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
            'ip_public' => 'string',
        ];
    }

    /**
     * @return HasMany<Client, $this>
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'data_id', 'id');
    }

    /**
     * @return HasMany<Email, $this>
     */
    public function emails(): HasMany
    {
        return $this->hasMany(Email::class, 'data_id', 'id');
    }

    /**
     * @return HasMany<Gpo, $this>
     */
    public function gpos(): HasMany
    {
        return $this->hasMany(Gpo::class, 'data_id', 'id');
    }

    /**
     * @return HasMany<Inventory, $this>
     */
    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class, 'data_id', 'id');
    }

    /**
     * @return HasMany<Server, $this>
     */
    public function servers(): HasMany
    {
        return $this->hasMany(Server::class, 'data_id', 'id');
    }
}
