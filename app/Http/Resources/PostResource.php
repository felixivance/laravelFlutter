<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
          'post_id' => $this->id,
            'post_title' => $this->title,
            'post_content' => $this->content,
            'post_type' => $this->post_type,
            'author_id' => $this->author_id,
            'category_id' => $this->category_id,
            'post_meta'=> $this->meta_data,
            'updated_at' => $this->updated_at

        ];
    }
}
