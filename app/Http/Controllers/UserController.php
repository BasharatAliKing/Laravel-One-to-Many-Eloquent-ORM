<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //  $users=User::all();
      $users = User::with('post')->get();  
   //   $users=User::has('post')->with('post')->get();
    //  $users=User::has('post', '>=',3)->with('post')->get();
     //  $users=User::select(['name','email'])->withCount('post')->get();
    //  $users=User::doesntHave('post')->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          // inverse relationship data add
        //   $post =new Post([
        //     'title'=>'Sardar G',
        //     'description' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptates soluta maiores officiis enim provident dolor ducimus, aspernatur quos. Dolores!',
        //    ]);
        //    $user= User::find(2);
        //    $user->post()->save($pos((t);

        $user=User::find(3);
        $user->post()->create([
            'title'=>'Sardar G',
                'description' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptates soluta maiores officiis enim provident dolor ducimus, aspernatur quos. Dolores!',
        ]);
    //     $user->post()->createMany([
    //         [
    //         'title'=>'Sardar G',
    //             'description' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptates soluta maiores officiis enim provident dolor ducimus, aspernatur quos. Dolores!',
    //     ],
    //         [
    //         'title'=>'Sardar G',
    //             'description' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptates soluta maiores officiis enim provident dolor ducimus, aspernatur quos. Dolores!',
    //     ],
    //         [
    //         'title'=>'Sardar G',
    //             'description' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio voluptates soluta maiores officiis enim provident dolor ducimus, aspernatur quos. Dolores!',
    //     ],
    // ]);    
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
