<?php

namespace App\Http\Resources;

use App\Models\Attribute as ModelsAttribute;
use App\Models\Value;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        $result = [
            'quantity' => $this->quantity,
        ];

        return $this->getAttributes($result);
    }

    public function getAttributes(array $result)
    {
        $atrributes = json_decode($this->attributes);
        foreach ($atrributes as $stockatrribute) {
            $atrribute = ModelsAttribute::find($stockatrribute->attribute_id);
            $value = Value::find($stockatrribute->value_id);

            $result[$atrribute->name] = $value->getTranslations('name');
        }
        return $result;
    }
}
