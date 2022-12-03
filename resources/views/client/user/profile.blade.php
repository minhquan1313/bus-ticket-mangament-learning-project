@extends('layout.client')
@section('title', 'Người dùng')
@section('body_class', 'flex')

@section('master_head')
    @parent
    @vite('resources/js/passwordToggler.js')
    @vite('resources/js/user.profile.js')
@endsection

@section('body')
    <div class="flex flex-col justify-center items-center py-6 flex-1">
        <x-jet-validation-errors class="mb-4" />

        <div class="flex mx-auto w-full max-w-4xl rounded-xl overflow-hidden min-h-[30rem] bg-oBlack2">

            <ul class="w-52 bg-oBlack shadow-lg divide-y divide-oBlack1">
                <li>
                    <label for="profile"
                        class="px-2 py-2 block text-sm text-oLightGray cursor-pointer transition hover:bg-oYellow hover:text-oWhite">
                        Thông tin cá nhân
                    </label>
                </li>
                <li>
                    <label for="password"
                        class="px-2 py-1 block text-sm text-oLightGray cursor-pointer transition hover:bg-oYellow hover:text-oWhite">
                        Mật khẩu
                    </label>
                </li>

            </ul>

            <div class="flex-1">
                <div>
                    <input type="radio" name="tab" class="hidden peer" id="profile" checked>
                    <form action="{{ route('user.profile') }}" method="POST"
                        class="hidden flex-col p-5 peer-checked:flex peer-checked:min-h-[30rem]">
                        @csrf
                        <div class="flex flex-1 gap-5">
                            <div class="w-24 space-y-2">
                                <img src="/images/avatar.jpg" alt="Avatar"
                                    class="block w-full aspect-square rounded-full border border-oBlack1">
                                <p class="text-sm">ID: <span class="font-semibold"> {{ $user->id }} </span></p>
                            </div>

                            <div class="flex-1 text-oBlack1 space-y-2">
                                <label
                                    class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-xl cursor-text">
                                    <input
                                        class="outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-full"
                                        type="text" value="{{ $user->surname }}" placeholder="Họ" name="surname">
                                </label>
                                <label
                                    class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-xl cursor-text">
                                    <input
                                        class="outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-full"
                                        type="text" value="{{ $user->name }}" placeholder="Tên" name="name">
                                </label>
                            </div>
                        </div>

                        <div>
                            <button id="saveChangeName" type="submit"
                                class="rounded-xl px-12 h-10 text-oWhite w-full bg-oRed transition duration-500" disabled>
                                Lưu thay đổi
                            </button>
                        </div>
                    </form>
                </div>
                <div>
                    <input type="radio" name="tab" class="hidden peer" id="password">
                    <form action="{{ route('user.profile') }}" method="POST"
                        class="hidden flex-col p-5 peer-checked:flex peer-checked:min-h-[30rem]">
                        @csrf
                        <div class="flex flex-1 gap-5">
                            <div class="flex-1 text-oBlack1 space-y-2">
                                <label class="relative flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
                                    <input
                                        class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                                        type="password" value="" placeholder="Mật khẩu cũ" name="old_password">

                                    <div class="flex items-center cursor-pointer h-full" title='Toggle password'>
                                        <span id="password_toggle1" class="material-symbols-outlined text-oWhite">
                                            visibility_off
                                        </span>
                                    </div>
                                </label>

                                <label class="relative flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
                                    <input
                                        class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                                        type="password" value="" placeholder="Mật khẩu mới" name="new_password">

                                    <div class="flex items-center cursor-pointer h-full" title='Toggle password'>
                                        <span id="password_toggle2" class="material-symbols-outlined text-oWhite">
                                            visibility_off
                                        </span>
                                    </div>
                                </label>

                                <label class="relative flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
                                    <input
                                        class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                                        type="password" value="" placeholder="Nhập lại mật khẩu mới"
                                        name="new_password_confirmation">

                                    <div class="flex items-center cursor-pointer h-full" title='Toggle password'>
                                        <span id="password_toggle3" class="material-symbols-outlined text-oWhite">
                                            visibility_off
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div>
                            <button id="saveChangePass" type="submit"
                                class="rounded-xl px-12 h-10 text-oWhite w-full bg-oRed transition duration-500" disabled>
                                Lưu thay đổi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
