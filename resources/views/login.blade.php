<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">

    <title>Login - Pengaduan Masyarakat</title>
</head>

<body>
    <div class="h-screen">
        <div class="flex flex-row justify-center mt-16">
            <div class="flex flex-col items-center">
                <p class="text-2xl text-primary font-bold mt-3">Login</p>
                <form class="w-full mt-16" action="{{ route('auth') }}" method="post">
                    @csrf
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="username" name="name"
                            class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-primary focus:outline-none focus:ring-0 focus:border-primary peer"
                            placeholder=" " required />
                        <label for="username"
                            class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <div class="flex">
                            <input type="password" name="password" id="password"
                                class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-primary focus:outline-none focus:ring-0 focus:border-primary peer"
                                placeholder=" " required />
                            <span id="input-hide" class="inline-flex items-center px-3 text-sm text-gray-900">
                                <button type="button" id="btn-hide-pass">
                                    <svg id="icon-eye-open" class="w-6 h-6 block text-gray-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                    <svg id="icon-eye-close" class="w-6 h-6 hidden text-gray-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                        </path>
                                    </svg>
                                </button>
                            </span>
                            <label for="password"
                                class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-blue-600 hover:bg-primary focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-primary dark:hover:bg-primary dark:focus:ring-primary">Masuk</button>

                </form>
                <div id="alert-failed"
                    class="mt-6 bg-gray-100 rounded border-2 border-gray-300 p-4 text-center invisible text-md font-bold">
                    <p class="text-red-700">Gagal Masuk</p>
                    <p>Mohon periksa kembali username dan password</p>
                    <p>yang digunakan.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        @if (session('success'))
            $('#alert-failed').toggleClass('invisible');
            setTimeout(function () {
            $('#alert-failed').toggleClass('invisible');
            }, 5000);
        @endif

        $('#btn-hide-pass').click(function(e) {
            const type = $('#password').attr('type') === 'password' ? 'text' : 'password';
            $('#password').attr('type', type);
            if (type === 'password') {
                $('#icon-eye-open').toggleClass('hidden', false);
                return $('#icon-eye-close').toggleClass('hidden', true);
            } else {
                $('#icon-eye-open').toggleClass('block', false);
                $('#icon-eye-open').addClass('hidden');
                return $('#icon-eye-close').toggleClass('hidden', false);
            };
        });
    </script>
</body>

</html>
