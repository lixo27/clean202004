<?php

namespace Clean\Interfaces\Employees;

use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeListInterface;
use Illuminate\Routing\Controller;

/**
 * Class IndexEmployeeController
 *
 * @package Clean\Interfaces\Employees
 */
class IndexEmployeeController extends Controller
{
    /**
     * @var GetEmployeeListInterface
     */
    private $employeeList;

    /**
     * IndexEmployeeController constructor.
     *
     * @param GetEmployeeListInterface $employeeList
     */
    public function __construct( GetEmployeeListInterface $employeeList )
    {
        $this->employeeList = $employeeList;
    }

    public function __invoke()
    {
        $employees = $this->employeeList->execute();

        return view( 'clean::employee.index', [
            'employees' => $employees,
        ] );
    }
}
