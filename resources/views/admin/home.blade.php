@extends('layout.admin')
@section('title', 'admin')

@section('body')
    <h1 class="">
        Đây là admin
    </h1>
@endsection
<form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('Log Out') }}
                    </button>
                </form>