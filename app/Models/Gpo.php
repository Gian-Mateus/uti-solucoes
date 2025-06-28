<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Gpo
 *
 * @property int $id
 * @property string $name
 * @property string $roles
 * @property int $data_id
 * @property DataClient $data
 * @property Collection|UsersClient[] $usersClients
 */
class Gpo extends Model
{
    protected $table = 'gpos';

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
        'roles',
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
            'roles' => 'string',
            'data_id' => 'integer',
        ];
    }

    /**
     * @return HasMany<UsersClient, $this>
     */
    public function usersClients(): HasMany
    {
        return $this->hasMany(UsersClient::class, 'gpo_id', 'id');
    }

    /**
     * @return BelongsTo<DataClient, $this>
     */
    public function data(): BelongsTo
    {
        return $this->belongsTo(DataClient::class, 'data_id');
    }
}
