<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstablishmentResource extends JsonResource
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
            'type' => 'Establishment',
            'attributes' => [
                'establishment_name' => $this->establishment_name,
                'business_permit_number' => $this->business_permit_number,
                'establishment_type' => $this->establishment_type,
            ]
        ];
    }
}
