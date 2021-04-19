<?php

namespace Modules\Icheckin\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use Modules\Iprofile\Transformers\UserTransformer;

class JobTransformer extends Resource
{
  public function toArray($request)
  {
    $item =  [
      'id' => $this->when($this->id, $this->id),
      'title' => $this->when($this->title, $this->title),
      'status' => $this->when($this->status, $this->status)
    ];
    
    return $item;
  }
}