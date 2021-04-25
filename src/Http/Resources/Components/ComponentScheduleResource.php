<?php

namespace Partymeister\Core\Http\Resources\Components;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *   schema="ComponentScheduleResource",
 *   @OA\Property(
 *     property="id",
 *     type="integer",
 *     example="1"
 *   ),
 *   @OA\Property(
 *     property="schedule_id",
 *     type="integer",
 *     example="1"
 *   ),
 * )
 */
class ComponentScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => (int) $this->id,
            'schedule_id' => (int) $this->schedule_id,
        ];
    }
}
