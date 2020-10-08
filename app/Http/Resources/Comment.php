<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'subject' => $this->subject,
            'ids' => 'localId:' . $this->id . ' foreignId:' . $this->post_id
        ];
    }

    //What is in this function will be attached to the payload but wont be in the data object.
    public function with($request)
    {
        return [
            'version' => '2.0.0',
            'attribution' => url('/terms-of-service'),
            'valid-as-of' => date('D, d M Y H:i:s')
        ];
    }
}
