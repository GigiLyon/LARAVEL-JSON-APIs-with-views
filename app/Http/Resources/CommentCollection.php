<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'name' => $this->name,
        //     'subject' => $this->subject,
        //     'ids' => 'localId:' . $this->id . ' foreignId:' . $this->post_id
        // ];
    }
}
