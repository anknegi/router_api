<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RouteResource extends JsonResource
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
        'id' => $this->id,       
        'hostname' => $this->hostname,
        'loopback' => $this->loopback,
        'mac_address' => $this->mac_address,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
        'user_id' => $this->user_id,
      ];
    }
}