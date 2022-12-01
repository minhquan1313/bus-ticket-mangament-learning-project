@extends('layout.client')
@section('title', 'Người dùng')
@section('body_class', 'flex')

@section('master_head')
    @parent
    @vite('resources/js/user.profile.js')
@endsection

@section('body')
    <div class="flex py-6 items-center flex-1">
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
                    <form action="javascript:;" method="POST"
                        class="hidden flex-col p-5 peer-checked:flex peer-checked:min-h-[30rem]">
                        <div class="flex flex-1 gap-5">
                            <div class="w-24 space-y-2">
                                <img src="/images/avatar.jpg" alt=""
                                    class="block w-full aspect-square rounded-full border border-oBlack1">
                                <p class="text-sm">ID: <span class="font-semibold"> 123901820 </span></p>
                            </div>

                            <div class="flex-1 text-oBlack1 space-y-2">
                                <label
                                    class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-xl cursor-text">
                                    <input
                                        class="outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-full"
                                        type="text" value="{{ 'Mai' }}" placeholder="Họ" name="surname">
                                </label>
                                <label
                                    class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-xl cursor-text">
                                    <input
                                        class="outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-full"
                                        type="text" value="{{ 'Binh' }}" placeholder="Tên" name="firstName">
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
                    <form action="javascript:;" method="POST"
                        class="hidden flex-col p-5 peer-checked:flex peer-checked:min-h-[30rem]">
                        <div class="flex flex-1 gap-5">
                            <div class="flex-1 text-oBlack1 space-y-2">
                                <label
                                    class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-xl cursor-text">
                                    <input
                                        class="outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-full"
                                        type="password" value="{{ '' }}" placeholder="Mật khẩu cũ"
                                        name="oldPassword">
                                </label>

                                <label
                                    class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-xl cursor-text">
                                    <input
                                        class="outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-full"
                                        type="password" value="{{ '' }}" placeholder="Mật khẩu mới"
                                        name="newPassword">
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
