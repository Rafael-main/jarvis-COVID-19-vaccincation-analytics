<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'type' => 'Address',
            'attributes' => [
                'country' => $this->country,
                'province' => $this->province,
                'city_or_municipality' => $this->city_or_municipality,
                'barangay' => $this->barangay,
                'zipcode' => $this->zipcode,
                'complete_address' => $this->complete_address,
                'complete_provincial_address' => $this->complete_provincial_address,
                'coordinates' => [
                    'longitude' => $this->longitude,
                    'lattitude' => $this->lattitude,
                ]
            ]
        ];
    }
}
