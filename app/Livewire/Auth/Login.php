<?php

namespace App\Livewire\Auth;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;

class Login extends Component
{
    use PasswordValidationRules;

    public $email;
    public $password;
    public $remember;

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => $this->passwordRules(),
        ];
    }

    public function login(): RedirectResponse|Redirector
    {
        $this->validate();

        if (Auth::attempt($this->only(['email', 'password']))) {
            return redirect()->route('dashboard');
        }
        else {
            $this->addError('email', __('auth.failed'));

            return back()->withInput();
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
