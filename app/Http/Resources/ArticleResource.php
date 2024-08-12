<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {   return [
        'id' => $this->id,
        'title' => $this->title,
        'caption' => $this->caption,
        'category_id' => $this->category_id,
        'content' => $this->content,
        'image_path' => $this->image_path,
        'comment' => CommentResource::collection($this->whenLoaded('comment')),
    ];
    }
}
