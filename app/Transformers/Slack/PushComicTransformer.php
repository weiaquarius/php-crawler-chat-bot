<?php
namespace App\Transformers\Slack;

use App\Transformers\TransformerInterface;

class PushComicTransformer implements TransformerInterface
{
    public function transform($data)
    {
        return [
            'author_name' => $data['authorName'],
            'author_icon' =>  $data['authorIcon'],
            'title' => $data['label'],
            'title_link' => $data['directUri'],
            'image_url' => $data['imagePath'],
        ];
    }
}
