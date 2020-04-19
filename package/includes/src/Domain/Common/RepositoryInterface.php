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
     * @param int $identity
     *
     * @return EntityInterface
     */
    public function get( int $identity ): ?EntityInterface;

    /**
     * @return Collection
     */
    public function all(): Collection;
}
