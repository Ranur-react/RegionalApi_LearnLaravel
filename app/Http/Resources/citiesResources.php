<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class citiesResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public $status;
    public $messages;

public function __construct($status,$messages,$resource)
{
    parent::__construct($resource);
    $this->$status=$status;
    $this->$messages=$messages;

    //Do your magic here
}

    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
return [
'success'=>$this->status,
'messages'=>$this->messages,
'data'=>$this->resource,

];
    }
}