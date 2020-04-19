<?php

namespace Clean\Domain\Common;

use Illuminate\Support\Collection;

/**
 * Interface RepositoryInterface
 *
 * @package Clean\Domain\Common
 */
interface RepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
