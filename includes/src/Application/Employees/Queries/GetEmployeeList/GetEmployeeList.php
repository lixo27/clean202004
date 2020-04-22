<?php

namespace Clean\Application\Employees\Queries\GetEmployeeList;

use Clean\Domain\Employees\EmployeeInterface;
use Clean\Domain\Employees\EmployeeRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class GetEmployeeList
 *
 * @package Clean\Application\Employees\Queries\GetEmployeeList
 */
class GetEmployeeList implements GetEmployeeListInterface
{
    /**
     * @var EmployeeRepositoryInterface
     */
    private $employeeRepository;

    /**
     * GetEmployeeList constructor.
     *
     * @param EmployeeRepositoryInterface $employeeRepository
     */
    public function __construct( EmployeeRepositoryInterface $employeeRepository )
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * @return Collection
     */
    public function execute(): Collection
    {
        $employees = $this->employeeRepository->all();
        return $employees->map( function ( EmployeeInterface $employee ) {

            $employeeModel = new \stdClass();
            $employeeModel->id = $employee->identity();
            $employeeModel->name = $employee->getName();

            return $employeeModel;

        } );
    }
}
