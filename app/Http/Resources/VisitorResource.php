<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VisitorResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Visitor',
            'attributes' => [
                'first_name' => $this->first_name,
                'middle_name' => $this->middle_name,
                'last_name' => $this->last_name,
                'suffix' => $this->suffix_name,
                'gender' => $this->gender,
                'birth_month' => $this->birth_month,
                'birth_day' => $this->birth_day,
                'birth_year' => $this->birth_year,
                'primary_phone_number' => $this->primary_phone_number,
                'secondary_phone_number' => $this->secondary_phone_number,
                'is_transient' => $this->is_transient,
            ],
        ];
    }
}
