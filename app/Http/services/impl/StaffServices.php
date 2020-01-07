<?php


namespace App\Http\services\impl;


use App\Http\Repositories\StaffRepositoryInterface;
use App\Http\services\StaffServicesInterface;
use App\Staff;

class StaffServices implements StaffServicesInterface
{
protected $staffRepository;

public function __construct(StaffRepositoryInterface $staffRepository)
{
    $this->staffRepository = $staffRepository;
}

    function getAll()
    {
        return $this->staffRepository->index();
    }

    public function findById($id)
    {
       return $this->staffRepository->findById($id);
    }

    public function create($request)
    {
       $staff = new Staff();


       $staff->staff_code = $request->staffCode;
       $staff->name = $request->name;
       $staff->day_of_birth = $request->day_of_birth;
       $staff->phone = $request->phone;
       $staff->id_card = $request->id_card;
       $staff->email = $request->email;
       $staff->gender = $request->gender;
       $staff->address = $request->address;
       $staff->role_id = $request->role_id;

       return $this->staffRepository->store($staff);
    }

    public function delete($id)
    {
        $staff = $this->staffRepository->findById($id);
        return $this->staffRepository->destroy($staff);
    }

    public function edit($request, $id)
    {
      $staff = $this->staffRepository->findById($id);
        $staff->staff_code = $request->staffCode;
        $staff->name = $request->name;
        $staff->day_of_birth = $request->day_of_birth;
        $staff->phone = $request->phone;
        $staff->id_card = $request->id_card;
        $staff->email = $request->email;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->role_id = $request->role_id;

        return $this->staffRepository->update($staff);
    }

    public function search($request)
    {
       $keyWord = $request->search;
       return $this->staffRepository->search($keyWord);
    }
}
