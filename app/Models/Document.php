<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $table = 'documents';

    protected $guarded = [];

    public function member()
	{
		return $this->belongsTo(Member::class, 'member_id');
	}
	
}
