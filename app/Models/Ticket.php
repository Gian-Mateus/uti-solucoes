<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class Ticket
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property Carbon|null $finished_at
 * @property string|null $resolution
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $ticketable_type
 * @property int $ticketable_id
 */
class Ticket extends Model
{
    protected $table = 'tickets';

    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'title',
        'description',
        'finished_at',
        'resolution',
        'ticketable_type',
        'ticketable_id',
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
            'title' => 'string',
            'description' => 'string',
            'finished_at' => 'datetime',
            'resolution' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'ticketable_type' => 'string',
            'ticketable_id' => 'integer',
        ];
    }

    /**
     * @return MorphTo<Model, $this>
     */
    public function ticketable(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'ticketable_type', 'ticketable_id');
    }

    /**
     * @return MorphMany<Ticket, $this>
     */
    public function tickets(): MorphMany
    {
        return $this->morphMany(Ticket::class, 'ticketable');
    }
}
