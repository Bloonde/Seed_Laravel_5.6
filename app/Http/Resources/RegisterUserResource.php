<?php

namespace App\Http\Resources;

use App\Organizer;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisterUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $result = [];
       
        $array_field = [
            'id',
            'name',
            'surname',
            'name',
            'address',
            'city',
            'cp',
            'telephone',
            'email'
        ];
        
        foreach ($array_field as $field) {
            $result[$field] = $this->$field;
        }
        /*$result['start_city'] = [
            'id' => $this->start_city_id,
            'name' => $this->start_city_name,
            'state' => [
                'name' => $this->start_state_name
            ]
        ];
        $result['end_city'] = [
            'id' => $this->end_city_id,
            'name' => $this->end_city_name,
            'state' => [
                'name' => $this->end_state_name
            ]
        ];
        $result['organizer'] = Organizer::find($this->organizer_id);*/
       
        return $result;
    }
}
