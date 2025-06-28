<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Email
 *
 * @property int $id
 * @property string $providers
 * @property int $data_id
 * @property DataClient $data
 */
class Email extends Model
{
    protected $table = 'emails';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'providers',
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
            'providers' => 'string',
            'data_id' => 'integer',
        ];
    }

    /**
     * @return BelongsTo<DataClient, $this>
     */
    public function data(): BelongsTo
    {
        return $this->belongsTo(DataClient::class, 'data_id');
    }
}
