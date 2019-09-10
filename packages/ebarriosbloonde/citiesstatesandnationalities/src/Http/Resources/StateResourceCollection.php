<?php
namespace EBarriosBloonde\CitiesStatesAndNationalities\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
class StateResourceCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $result = [
            'elements' => [],
            'total' => $this->resource['total']
        ];
        foreach ($this->resource['elements'] as $element) {
            $newElement = [];
            $array_field = [
                'id',
                'name',
                'slug',
                'country_id',
                'country_name',
                'country_code',
            ];
            foreach ($array_field as $field) {
                $newElement[$field] = $element->$field;
            }
            array_push($result['elements'], $newElement);
        }
        return $result;
    }
}