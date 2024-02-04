<?php

namespace App\Services;

use App\DTO\CreateForumDTO;
use App\DTO\UpdateForumDTO;
use stdClass;

class ForumService 
{
  protected $repository;

    public function __construct()
    {
      
    }
    
    public function getAll(string $filter = null): array
    {
      return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
      return $this->repository->findOne($id);
    }

      public function new(CreateForumDTO $dto): stdClass
    {
      return $this->repository->new($dto);
    }

    public function update(UpdateForumDTO $dto): stdClass|null
    {
      return $this->repository->update($dto);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
}