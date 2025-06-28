<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Inventory
 *
 * @property int $id
 * @property string $name_micro
 * @property string $type_os
 * @property string $cpu
 * @property int $ram
 * @property string $memory
 * @property string $sector
 * @property int $data_id
 * @property DataClient $data
 */
class Inventory extends Model
{
    protected $table = 'inventory';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name_micro',
        'type_os',
        'cpu',
        'ram',
        'memory',
        'sector',
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
            'name_micro' => 'string',
            'type_os' => 'string',
            'cpu' => 'string',
            'ram' => 'integer',
            'memory' => 'string',
            'sector' => 'string',
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
