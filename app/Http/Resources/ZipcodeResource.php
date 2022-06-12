<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipcodeResource extends JsonResource
{

    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */

    public static $wrap = 'Settlements';

      /**
     * Transformo mi nested array y lo customizo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function toArray($request)
    {
        return [
           'key' => $this->id_asenta_cpcons,
            'name' => strtoupper($this->d_asenta),
            'zone_type' => strtoupper($this->d_zona),
            'settlement_type' => ['name' => $this->d_tipo_asenta]
         ];
}


}