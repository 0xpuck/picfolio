<?php

namespace App\Http\Controllers\admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        $datas = User::where('role', '!=', 'admin')->get();
        return $dataTable->render('admin.pages.user-management.users.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {        
        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => 'ggg',
        ]);
        return redirect()->route('admin.user-management.users.index');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $datas = User::where('role', '!=', 'admin')->get();
        $products = Product::where('user_id', $user->id)->get();
        return view('admin.pages.user-management.users.show', compact('user', 'datas', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.pages.user-management.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);
        if($request->user_role == 'aaaaa' || $request->role == 'aaaaa'){
            $sc_status = '';
            if($request->user_role) {
                $user->role = 'xxxxx';
                $sc_status = 'The role has been released successfully.';
            }
            else {
                $user->role = 'client';
                $sc_status = 'Role updated successfully';
            }
            $user->save();
            return redirect()->back()->with('success', $sc_status);
        }
        else{
            // Update the user's information
            $user->name = $request->user_name;
            $user->email = $request->user_email;
            $user->save();
            if($user->role == 'admin')
                return redirect()->route('admin.user-management.users.index');
            else
                return redirect()->back()->with('success', 'Successfully updated');
        }
    }

    public function roleupdate(Request $request, User $user)
    {
        print_r($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // $auth = Auth::user();
        // // Check if the authenticated user is an admin
        // if ($auth->type !== 'admin') {
        //     return response()->json([
        //         'status_code' => 401,
        //         'type' => 'error',
        //         'message' => 'You are not authorized to perform this action.',
        //     ], 401);
        // }

        // Check if the user exists
        if (!$user) {
            return response()->json([
                'status_code' => 404,
                'type' => 'error',
                'message' => 'Sorry! Record not found.',
            ], 404);
        }

        // Delete the user
        $user->delete();
        
        // return redirect()->route('admin/user-management/users');
        return redirect()->route('admin.user-management.users.index');
    }
}
