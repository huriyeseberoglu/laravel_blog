<?php

namespace App\Http\Controllers\Backend;
use App\Contracts\UserContract;
use App\DataTables\UserDataTable;
use App\Http\Requests\Backend\UserStorageRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

/**
 * Class UserController
 * @package App\Http\Controllers\Backend
 */
class UserController extends Controller
{
    /**
     * @var UserContract
     */
    private $userContract;

    /**
     * UserController constructor.
     * @param UserContract $userContract
     */
    public  function __construct(UserContract  $userContract)
    {
        $this->userContract = $userContract;
    }

    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('Backend.users.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.users.create');
    }

    /**
     * @param UserStorageRequest $request
     * @return mixed
     */
    public function store(UserStorageRequest $request)
    {
        $user = $this->userContract->store($request->all());
        $message=sprintf('%s succesfuly created.' , $user->name);
        return back()->withNotify($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
