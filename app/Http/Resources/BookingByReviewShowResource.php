<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingByReviewShowResource extends JsonResource
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
            'booking_id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'from' => $this->from,
            'to' => $this->to,
            'bookable' => new BookingByBookableReviewShowResource($this->bookable),
        ];
    }
}
