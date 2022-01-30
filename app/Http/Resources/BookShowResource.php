<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'author' => new AuthorResource($this->whenLoaded('author')),
            'publisher' => new PublisherResource($this->whenLoaded('publisher')),
            'date_of_publication' => $this->date_of_publication,
            'isbn' => $this->isbn,
            'price' => $this->price,
            'pages' => $this->pages,
            'language_code' => $this->language_code,
            'tag' => TagResource::collection($this->whenLoaded('tags'))
        ];
    }
}
