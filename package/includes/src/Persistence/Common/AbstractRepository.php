<?php

namespace Clean\Persistence\Common;

use Clean\Domain\Common\RepositoryInterface;
use Clean\Domain\Customer\CustomerModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class AbstractRepository
 *
 * @package Clean\Persistence\Common
 */
abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    protected $internalModelClass = Model::class;

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        if ( method_exists( $this->internalModelClass, 'all' ) ) {
            return call_user_func( "$this->internalModelClass::all" );
        }

        return Collection::make( [] );
    }
}
