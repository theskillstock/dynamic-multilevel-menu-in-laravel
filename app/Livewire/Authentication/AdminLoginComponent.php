<?php

namespace App\Livewire\Authentication;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.guest')]
class AdminLoginComponent extends Component
{
    public $username;
    public $password;

    // Validation rules
    protected $rules = [
        'username' => 'required|exists:admins,username',
        'password' => 'required|min:6',
    ];

    // Custom validation messages
    protected $messages = [
        'username.required' => 'Username is required.',
        'username.exists' => 'This username is not registered.',
        'password.required' => 'Password is required.',
        'password.min' => 'Password must be at least 6 characters.',
    ];

    public function updated($propertyName)
    {
        // Validate input as the user types
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        // Validate input before attempting login
        $this->validate();

        if (Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password])) {
            session()->flash('success', 'Login successful!');
            return redirect()->route('dashboard');
        }

        // If authentication fails
        $this->addError('password', 'Invalid username or password.');
    }
    public function render()
    {
        return view('livewire.authentication.admin-login-component');
    }
}
