<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Worktime;
use App\Models\Employee;

class WorktimePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Employee $employee)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Worktime  $worktime
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Employee $employee, Worktime $worktime)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Employee $employee)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Worktime  $worktime
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Employee $employee, Worktime $worktime)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Worktime  $worktime
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Employee $employee, Worktime $worktime)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Worktime  $worktime
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Employee $employee, Worktime $worktime)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Worktime  $worktime
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Employee $employee, Worktime $worktime)
    {
        //
    }
}
