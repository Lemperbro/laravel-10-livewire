<div>
    <div class="flex md:flex-row min-h-screen ">
        <div class="hidden md:block md:w-[80%] lg:w-full relative">
            <div class="absolute inset-0 bg-white/60 backdrop-blur-[2px] dark:bg-black/80 ">
                <h1 class="text-6xl leading-normal text-center text-gray-600 dark:text-accentDark-5 font-semibold justify-center items-center flex h-full">Dewan Perwakilan Rakyat Daerah Gresik</h1>
            </div>
            <img src="{{ asset('img/dprd.webp') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-full lg:w-[80%] bg-white dark:bg-dark-1 container">
            <div class="p-4 sm:p-7 flex flex-col justify-center h-full">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                        Don't have an account yet?
                        <a class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
                            href="../examples/html/signup.html">
                            Sign up here
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <button type="button"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <path
                                d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                                fill="#4285F4" />
                            <path
                                d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                                fill="#34A853" />
                            <path
                                d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                                fill="#FBBC05" />
                            <path
                                d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                                fill="#EB4335" />
                        </svg>
                        Sign in with Google
                    </button>

                    <div
                        class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                        Or</div>

                    <!-- Form -->
                    <form>
                        <div class="grid gap-y-4">
                            <x-admin.input :label="'Email'" name="email" id="email"></x-admin.input>
                            <div>
                                <x-admin.input-password :label="'Password'" name="password"
                                    id="password"></x-admin.input-password>
                                <a class="text-sm text-blue-600 decoration-2 hover:underline font-medium inline-block mt-4"
                                    href="../examples/html/recover-account.html">Forgot password?</a>
                            </div>


                            <!-- Checkbox -->
                            <div class="flex items-center">
                                <div class="flex">
                                    <input id="remember-me" name="remember-me" type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                </div>
                                <div class="ms-3">
                                    <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                </div>
                            </div>
                            <!-- End Checkbox -->
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                                in</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>


        </div>
    </div>
</div>
