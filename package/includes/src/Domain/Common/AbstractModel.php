<?php

namespace Clean\Domain\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 *
 * @package Clean\Domain\Common
 */
class AbstractModel extends Model implements EntityInterface
{
    /**
     * @return int
     */
    public function identity(): int
    {
        return $this->id;
    }

    /**
     * @return $this|Model
     */
    public function getInternalModel(): Model
    {
        return $this;
    }
}
