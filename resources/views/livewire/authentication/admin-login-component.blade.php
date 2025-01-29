<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-4">
                                    <a href="{{ route('login') }}" class="brand-logo">
                                        <img src="https://codewithzubi.com/uploads/settings/logo.png" height="50" width="200" alt="">
                                    </a>
                                </div>
                                <h4 class="text-center mb-4 mt-2">Sign in your account</h4>
                                <form wire:submit.prevent="login">
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Username</strong></label>
                                        <input type="text" wire:model.live="username" class="form-control"
                                            placeholder="Enter your username" required>
                                        @error('username')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" wire:model="password"
                                            placeholder="Enter your password">
                                        @error('password')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                  
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
