<?php

namespace App\Repositories;

use App\DTO\{
  CreateForumDTO,
  UpdateForumDTO
};
use stdClass;

interface ForumRepositoryInterface
{
  public function getAll(string $filter = null): array;
  public function findOne(string $id): stdClass|null;
  public function delete(string $id): void;
  public function new(CreateForumDTO $dto): stdClass;
  public function update(UpdateForumDTO $dto): stdClass|null;
}