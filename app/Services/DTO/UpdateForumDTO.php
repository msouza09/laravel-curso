<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateForum;

class UpdateForumDTO
{
    public function __construct(
      public string $id,
      public string $subject,
      public string $status,
      public string $body,
    ){}

    public static function makeFromRequest(StoreUpdateForum $request): self
    {
      return new self(
        $request->id,
        $request->subject,
        'a',
        $request->body
      );
    }
  }