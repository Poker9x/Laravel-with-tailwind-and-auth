@extends('layouts.app')

@section('content')
<div class="fixed h-screen w-screen bg-green-400 flex justify-center items-center">
    <div class="absolute w-60 h-60 rounded-xl bg-green-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
    </div>
    <div class="absolute w-48 h-48 rounded-xl bg-green-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
    </div>
    <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
        <div>
            <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Tạo Tài Khoản</h1>
            <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Tạo tài
                khoản để cùng kết nối với mọi người</p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <input name='name' type="text" placeholder="Tên người dùng ..."
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" value="{{ old('name') }}"
                        required autocomplete="name" autofocus />
                    @error('name')
                    <div class='text-red-600 text-xs mx-2 my-1'>{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <input name='email' type="email" placeholder="Email ..."
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" value="{{ old('name') }}"
                        required autocomplete="name" autofocus />
                    @error('email')
                    <div class='text-red-600 text-xs mx-2 my-1'>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <input name='password' type="password" placeholder="Mật khẩu ..."
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required
                        autocomplete="new-password" />
                    @error('password')
                    <div class='text-red-600 text-xs mx-2 my-1'>{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <input name='password-confirm' type="password" placeholder="Nhập lại mật khẩu ..."
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required
                        autocomplete="new-password" />
                    @error('password-confirm')
                    <div class='text-red-600 text-xs mx-2 my-1'>{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center mt-6">
                <input type='submit' class="py-3 w-64 text-xl text-white bg-green-400 rounded-2xl" value='Đăng Ký' />
                <p class="mt-4 text-sm">Bạn đã có tải khoản ? <span class="underline cursor-pointer"> <a
                            href="/login">Đăng Nhập</a></span>
                </p>
            </div>
        </form>
    </div>
    <div class="w-40 h-40 absolute bg-green-300 rounded-full top-0 right-12 hidden md:block"></div>
    <div class="w-20 h-40 absolute bg-green-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
    </div>
</div>
@endsection