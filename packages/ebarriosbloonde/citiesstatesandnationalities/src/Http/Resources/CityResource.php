<?php
namespace EBarriosBloonde\CitiesStatesAndNationalities\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $result = [];
        $array_field = [
            'id',
            'name',
            'slug',
            'latitude',
            'longitude',
            'state_id'

        ];
        foreach ($array_field as $field) {
            $result[$field] = $this->$field;
        }

        return $result;
    }
}