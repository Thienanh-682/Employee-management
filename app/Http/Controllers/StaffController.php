<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Http\services\StaffServicesInterface;
use App\Role;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $staffServices;
    protected $role;

    public function __construct(StaffServicesInterface $staffServices,
                                Role $role)
    {
        $this->staffServices = $staffServices;
        $this->role = $role;
    }

    public function index()
    {
        $staffs = $this->staffServices->getAll();
        return view('index', compact('staffs'));
    }

    public function create()
    {
        $roles = $this->role->all();
        return view('create',compact('roles'));
    }
    public function store(StaffRequest $request)
    {
        $this->staffServices->create($request);
        return redirect()->route('staffs.index');
    }

    public function delete($id)
    {
        $this->staffServices->delete($id);
        return redirect()->route('staffs.index');
    }
    public function edit($id)
    {
        $staff = $this->staffServices->findById($id);
        $roles =Role::all();
        return view('edit',compact('staff','roles'));
    }

    public function update(StaffRequest $request,$id)
    {
        $this->staffServices->edit($request,$id);
        return redirect()->route('staffs.index');
    }
    public function search(Request $request)
    {
        $staffs =$this->staffServices->search($request);
        return view('search',compact('staffs'));
    }
}
