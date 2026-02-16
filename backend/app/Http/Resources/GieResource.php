<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            "NINEA"=> $this->NINEA,
            "address"=> $this->address,
            "owner" => $this->whenLoaded("user", function () {
                return [
                    "id"=> $this->id,
                    "firstname"=> $this->firstname,
                    "lastname"=> $this->lastname
                ];
            })

        ];
    }
}
