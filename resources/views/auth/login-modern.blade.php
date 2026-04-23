<x-guest-layout>
    <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl">
        <div class="absolute inset-x-0 top-0 h-2 bg-gradient-to-r from-cyan-500 via-emerald-500 to-teal-500"></div>

        <div class="grid md:grid-cols-5">
            <section class="hidden md:col-span-2 md:flex md:flex-col md:justify-between bg-slate-900 p-8 text-slate-100">
                <div>
                    <p class="text-xs uppercase tracking-[0.3em] text-cyan-300">Member Access</p>
                    <h2 class="mt-3 text-2xl font-semibold leading-tight">Welcome Back</h2>
                    <p class="mt-3 text-sm text-slate-300">
                        Sign in to continue managing your dashboard and account settings.
                    </p>
                </div>

                <div class="rounded-xl border border-slate-700 bg-slate-800/60 p-4 text-xs text-slate-300">
                    Protected area. Your session is encrypted and secured.
                </div>
            </section>

            <section class="md:col-span-3 p-6 sm:p-8">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <h1 class="text-2xl font-semibold text-slate-900">Login</h1>
                <p class="mt-1 text-sm text-slate-600">Use your registered email and password.</p>

                <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-5">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input
                            id="email"
                            class="mt-1 block w-full border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input
                            id="password"
                            class="mt-1 block w-full border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between gap-3">
                        <label for="remember_me" class="inline-flex items-center text-sm text-slate-700">
                            <input
                                id="remember_me"
                                type="checkbox"
                                class="rounded border-slate-300 text-emerald-600 shadow-sm focus:ring-emerald-500"
                                name="remember"
                            >
                            <span class="ms-2">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                class="text-sm font-medium text-emerald-700 transition hover:text-emerald-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                                href="{{ route('password.request') }}"
                            >
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="pt-1">
                        <x-primary-button class="w-full justify-center bg-slate-900 hover:bg-slate-700 focus:bg-slate-700 active:bg-slate-800 focus:ring-emerald-500">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-guest-layout>
