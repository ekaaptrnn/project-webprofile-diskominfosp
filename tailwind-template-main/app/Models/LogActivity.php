<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'subject', 'method', 'description', 'ip_address', 'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->created_at)) {
                $model->created_at = now();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    private function logActivity(string $method, string $description): void
{
    LogActivity::create([
        'user_id'     => auth()->id(),
        'subject'     => 'Berita',
        'method'      => $method,
        'ip_address'  => request()->ip(),
        'description' => $description,
        'status'      => 'success',
    ]);

    Log::channel('audit')->info(sprintf(
        'user_id=%s subject=Berita method=%s ip=%s status=success description=%s',
        auth()->id(),
        $method,
        request()->ip(),
        $description
    ));
}
}