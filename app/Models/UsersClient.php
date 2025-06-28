<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class UsersClient
 *
 * @property int $id
 * @property string $name
 * @property int $gpo_id
 * @property Gpo $gpo
 */
class UsersClient extends Model
{
    protected $table = 'users_client';

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
        'gpo_id',
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
            'gpo_id' => 'integer',
        ];
    }

    /**
     * @return BelongsTo<Gpo, $this>
     */
    public function gpo(): BelongsTo
    {
        return $this->belongsTo(Gpo::class, 'gpo_id');
    }
}
