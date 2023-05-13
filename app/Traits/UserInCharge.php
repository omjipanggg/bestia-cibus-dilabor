<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait UserInCharge
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->created_by = Auth::id();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });

        static::updating(function ($model) {
            try {
                $model->updated_by = Auth::id();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });

        static::deleting(function ($model) {
            try {
                $model->deleted_by = Auth::id();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}