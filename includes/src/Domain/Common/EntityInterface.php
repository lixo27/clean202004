<?php

namespace Clean\Domain\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface EntityInterface
 *
 * @package Clean\Domain\Common
 */
interface EntityInterface
{
    /**
     * @return int
     */
    public function identity(): int;

    /**
     * @return Model
     */
    public function getInternalModel(): Model;
}
