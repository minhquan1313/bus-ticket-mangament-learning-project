@extends('client.auth.auth_layout')
@section('title', 'Đăng nhập')

@section('auth_form')
    <form action="{{ route('login') }}" method="POST" class="grid gap-2 text-oBlack2">
        <x-jet-validation-errors class="mb-4" />
        @csrf
        <label class="flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
            <span class="material-symbols-outlined text-oWhite">
                event
            </span>

            <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                type="text" value="" placeholder="Số điện thoại" name="tel" autofocus>
        </label>

        <label class="relative flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
            <span class="material-symbols-outlined text-oWhite">
                event
            </span>

            <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                type="password" value="" placeholder="Mật khẩu" name="password">

            <div class="flex items-center cursor-pointer h-full" title='Toggle password'>
                <span id="password_toggle" class="material-symbols-outlined text-oWhite">
                    visibility_off
                </span>
            </div>
        </label>
        <label class="flex items-center px-4 gap-4">
            <input class="rounded-full" type="checkbox" value="" name="remember">
            <p class="text-oBlack3">Ghi nhớ</p>
        </label>

        <div class="grid gap-1">
            <button class="flex items-center justify-center px-5 h-10 bg-oYellow text-oWhite rounded-xl transition"
                type="submit">
                Đăng nhập
            </button>

            <p class="text-xs text-oLightGray text-center">
                Hoặc
            </p>

            <a href="{{ route('auth.sign_up') }}"
                class="flex items-center justify-center px-5 h-10 bg-oGreen text-oWhite rounded-xl">
                Đăng ký
            </a>
        </div>

        {{-- Error --}}
        {{-- <ul class="text-oRed text-sm">
            <li class="">
                abc
            </li>
            <li class="">
                abc
            </li>
        </ul> --}}

    </form>
@endsection
