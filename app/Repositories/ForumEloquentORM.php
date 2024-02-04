<?php

namespace App\Repositories;

use App\DTO\CreateForumDTO;
use App\DTO\UpdateForumDTO;
use App\Models\Forum;
use App\Repositories\ForumRepositoryInterface;
use stdClass;

class ForumEloquentORM implements ForumRepositoryInterface
{
  
  public function __construct(
    protected Forum $model
  ) {}

  public function getAll(string $filter = null): array
  {
    return $this->model
                ->where(function($query) use ($filter) {
                  if ($filter) {
                      $query->where('subject', $filter);
                      $query->orWhere('body', 'like', "%{$filter}%");
                  }
                })
                ->get()
                ->toArray();
  }

  public function findOne(string $id): stdClass|null
  {
    $forum =  $this->model->find($id);
    if (!$forum) {
      return null;
    }
    return (object) $forum->toArray();
  }

  public function delete(string $id): void
  {
    $this->model->findOrFail($id)->delete();
  }
  
  public function new(CreateForumDTO $dto): stdClass
  {
    $forum = $this->model->create(
      (array) $dto
    );

    return (object) $forum->toArray();
}
  
  public function update(UpdateForumDTO $dto): stdClass|null
  {
    if (!$forum = $this->model->find($dto->id)) {
      return null;
    }

    $forum->update(
      (array) $dto
    );

    return (object) $forum->toArray();
  }
}