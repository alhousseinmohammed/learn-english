<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use App\Models\Learner;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{
    public $users;
    public $status;
    public $nameSearch;
    public $name, $email, $password, $role = 'learner';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'role' => 'required|string',
    ];

    public function addUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
        ]);
        // Reset form fields
        if ($this->role == 'learner') {
            Learner::create([
                'user_id' => $user->id,  // Assuming user_id is the foreign key in the Learner table
                // Add any other learner-specific fields you want to fill
            ]);
        } else {
            Admin::create([
                'user_id' => $user->id,  // Assuming user_id is the foreign key in the Learner table
                // Add any other learner-specific fields you want to fill
            ]);
        }
        $this->reset(['name', 'email', 'password', 'role']);

        session()->flash('message', 'User added successfully.');
    }
    public function mount()
    {
        $this->users = User::where('role', operator: 'learner')->get();
    }

    public function updateName($user_id, $value)
    {
        $users = User::find($user_id);
        $users->name = $value;
        $users->save();
    }
    public function updateEmail($user_id, $value)
    {
        $users = User::find($user_id);
        $users->email = $value;
        $users->save();
    }
    public function loadUsers()
    {
        $query = User::with('learner')->where('role', 'learner')->where('name', 'like', '%' . $this->nameSearch . '%');

        // Apply status filter if selected

        if ($this->status) {
            $query->whereHas('learner.progress', function ($q) {
                $q->whereDate('created_at', today());
            });
        }


        // Apply proficiency filter
        // if ($this->proficiency) {
        //     $query->whereHas('learner', function ($q) {
        //         $q->where('proficiency_level', $this->proficiency);
        //     });
        // }

        $this->users = $query->get();
    }
    // public function updateStatus() {
    //     switch($this->status) {
    //         case ('All'):
    //     $this->users = User::where('role',operator: 'learner')->get();
    //             break;
    //         case ('Adctive'):
    //     $this->users = User::with('learner')->where('leaner.current_streak', '>', 0);
    //             break;


    //     }
    // }
    public function updateStatus()
    {
        $this->loadUsers();
    }
    public function render()
    {
        return view('livewire.users');
    }
}
