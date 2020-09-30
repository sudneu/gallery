<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(){

        $data = [
            'name' => 'Elon',
            'email'=> 'elon@bitfumes.com',
            'password' => 'password',
            'work' => 'nothing',
        ];

        User::create($data);

        $user = User::all();

        var_dump($user);

        // $newUser = new User();
        // $newUser->name = 'People';
        // $newUser->email = 'royal@tiger.com';
        // $newUser->password = bcrypt('Secretsuperstar$5');
        // $newUser->save();

        // $user = User::all();

        // return $user;

        // User::where('id', 1)->delete();

        // DB::insert('insert into users(name, email,password) values(?,?,?)',
        //                     ['madhav','madhavyo@gmail.com', 'query123']);

        // User::where('id', 3)->update(['name' => 'Rakul']);

        
        // DB::update('update users set email = "justchanged" where id = 1 ');
        // $user = DB::select('select * from users');

        // DB::delete('delete from users where name="Sushant"');
        
        echo('Here I am.');
    }
}
