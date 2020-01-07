<?php


namespace App\Http\Repositories\eloquent;


use App\Http\Repositories\StaffRepositoryInterface;
use App\Staff;

class StaffEloquentRepository implements StaffRepositoryInterface
{
  protected $staff;

  public function __construct( Staff $staff)
  {
      $this->staff = $staff;
  }

    public function index()
    {
        return $this->staff->paginate(5);
    }

    function findById($id)
    {
        return $this->staff->findOrFail($id);
    }

    function store($obj)
    {
        return $obj->save();
    }

    function destroy($obj)
    {
       return $obj->delete();
    }

    function update($obj)
    {
     return $obj->save();
    }

    function search($keyWord)
    {
     return $this->staff->where("name","like","%$keyWord%")->paginate(2);
    }
}
