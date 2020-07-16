<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'order_id' => $this->id,
            'order_num' => $this->num,
            'description' => (string) $this->description,
             'driver' => $this->driver ? $this->driver : null,
        ];
    }
}
