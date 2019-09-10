<?php
namespace EBarriosBloonde\CitiesStatesAndNationalities\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'code',
        ];
        foreach ($array_field as $field) {
            $result[$field] = $this->$field;
        }

        return $result;
    }
}