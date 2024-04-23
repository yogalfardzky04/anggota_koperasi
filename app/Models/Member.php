<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $table = 'members';

    protected $guarded = [];

    public function documents()
	{
		return $this->hasMany(Document::class, 'member_id');
	}
	
}
