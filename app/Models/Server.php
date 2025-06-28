<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Server
 *
 * @property int $id
 * @property string $name
 * @property string $domain
 * @property string $netbios
 * @property string $os
 * @property string $ip_address
 * @property string $gateway
 * @property string $dns
 * @property string $hostname
 * @property int $data_id
 * @property DataClient $data
 */
class Server extends Model
{
    protected $table = 'servers';

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
        'domain',
        'netbios',
        'os',
        'ip_address',
        'gateway',
        'dns',
        'hostname',
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
            'domain' => 'string',
            'netbios' => 'string',
            'os' => 'string',
            'ip_address' => 'string',
            'gateway' => 'string',
            'dns' => 'string',
            'hostname' => 'string',
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
