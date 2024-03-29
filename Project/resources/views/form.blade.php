<?php

$login_email = $login_password = $errmsg = '';
$err_login_email = $err_login_password = '';

// require 'form_handler.php';
// if (empty($admin_fetch_data_from_db)) {
//     $errmsg = "Please sign up your account";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <h2 class="w-full border text-center bg-green-50 text-slate-800 fixed top-0 shadow z-10">
        <?php
        echo $errmsg;
        ?>
    </h2>
    <div class="flex w-full h-screen ">
        <div class="flex-1 h-full">
            <img src="../../Image/book3.jpg" alt="Main Image" class="w-full h-full object-cover">
        </div>
        <form action="{{url('/')}}/login" method="post" class="grid px-10 py-2 border bg-white shadow-sm text-slate-500 flex-1"
            name="login_form">
            @csrf
            
            <div class="max-w-md space-y-4 px-16">
                <div class="relative">
                    <svg class="w-10 h-10 text-slate-500" xmlns="http://www.w3.org/2000/svg" role="img"
                        viewBox="0 0 24 24" fill="currentColor">
                        <title>UIkit</title>
                        <path
                            d="M17.697 3.292l-4.109 2.489 4.738 2.696v7.077l-6.365 3.538-6.258-3.538v-5.485L1.596 7.956V18l10.219 6 10.589-6V6.002l-4.707-2.71zm-1.904-.989L11.813 0 7.665 2.568l4.032 2.218 4.096-2.483z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="font-semibold text-2xl">Sign in to your account</h2>
                    <p class="text-lg">Not a member? Start a 14 day free trial</p>
                </div>
                <!-- <input type="email" name="email" label="Email" />
                <input type="password" name="password" label="Password" /> -->
                <div class="grid space-y-2 ">
                    <label for="email">Email</label>
                    <input type="email" name="login_email" id="email" placeholder="Enter email"
                        class="border rounded-lg p-2" value="{{old('login_email')}}">
                    <span class="text-red-600 text-sm ">* <small>
                            @error('login_email')
                                {{$message}}
                            @enderror
                        </small></span>
                </div>
                <div class="grid space-y-2">
                    <label for="password">Password</label>
                    <input type="password" name="login_password" id="password" placeholder="Enter password"
                        class="border rounded-lg p-2" value="{{old('login_password')}}">
                    <span class="text-red-600 w-96">* <small>
                            @error('login_password')
                                {{$message}}
                            @enderror
                        </small></span>

                </div>
                <a href="../forget_password/recover_email" class="text-blue-700 px-1">Forget Password?</a>

                <div class="flex items-center justify-center gap-4 w-96 py-2">
                    <div class="flex items-end gap-3 w-full ">
                        <input type="submit" name="user_login" id="user_login"
                            class="bg-indigo-500 text-white px-8 py-2 rounded-lg cursor-pointer" value="Login">
                    </div>
                </div>
            </div>

        </form>
    </div>
</body>

</html>