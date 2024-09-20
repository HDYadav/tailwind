<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="../js/tailwindconfig.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
        <div class="w-14per fixed">
             <?php  //include('sidebar.php'); ?>
         </div>
         
    <div class=" h-screen grid md:grid-cols-2 grid-cols-1 justify-items-center items-center place-content-center content-center px-5">
        <div class="flex place-content-center hidden sm:block">
            <div class=" w-full place-content-center px-5   ">
               <div class="flex justify-center"> <img class="flex place-content-center" src="../images/user.webp" alt="user login"></div>
                <div class="text-1D5D9B text-3xl text-center font-bold">Get Paid Like the Pros</div>
                <div class="pb-3 w-11/12 text-center ps-5">Give your customers every way to pay with Wave Payments.</div>
                <div class="grid justify-center">
                    <ul class="list-image-[url(../images/check.webp)] ">
                        <li>Add a secure “Pay now” button to invoices.</li>
                        <li>Accept credit cards, bank transfers, or Apple Pay.</li>
                        <li>Get paid in 1-2 business days.</li>
                    </ul>
                </div>
            </div>
        </div>
        
<div  class="w-full">
        <div class="shadow-[0_3px_10px_rgb(0,0,0,0.2)] 2xl:w-3/5 lg:w-4/5 ssm:w-full container py-5 px-5 rounded-md">
<div class="flex justify-center py-5"><img class="" src="../images/Fondostech-Logo.png" alt="logo"></div>
<div class="text-1D5D9B text-3xl font-bold pb-5 px-5">Sign In</div>

<div class=" space-y-5 px-5">
    <form action="" class="flex flex-col space-y-3" id="loginForm">
    <label class="text-4E535769 text-base font-bold" for="email">Email</label>
    <input class=" border-2 focus:outline-none focus:border-1D5D9B w-full px-1" type="email" id="email" name="email" placeholder=""  required>
    <label class="text-4E535769 text-base font-bold " for="password" required>Password</label>
    <input class=" border-2 focus:outline-none focus:border-1D5D9B w-full px-1" id="password" name="password" type="password" placeholder="">
    <a class="text-red-500">Forgot Password ?</a>
    <button type="submit" class="bg-1D5D9B w-full text-white font-bold py-1 rounded-md">Sign In</button>
    <!-- <div>Don't have an account? <a href="register_page.html">Register</a></div> -->
</form>
<!-- <div class="flex"><div><img src="../images/line_2.webp" alt="line"></div> Or Login With<div><img src="../images/line_2.webp" alt="line"></div></div> -->
<!-- <div><pre>-------------       Or Login with         --------------</pre></div>-->
<!-- <div class="inline-flex items-center justify-center w-full">
    <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">Or Login With</span>
</div> -->

<!-- <hr class="flex-grow border-t border-gray-300"> 
<span class="px-3 text-gray-500"> 
    This is the text inserted between a HR 
</span> 
<hr class="flex-grow border-t border-gray-300">  -->



<div class="flex items-center"> 
    <hr class="flex-grow border-t border-black"> 
    <span class="px-3 "> 
          Or Login With  
      </span> 
    <hr class="flex-grow border-t border-black"> 
</div> 


<button class="flex px-2 py-1 bg-57B5F4 w-full text-white font-bold rounded-md "><img src="../images/glogo.webp" alt="google"><div class="text-center w-full py-1">Sign In With Google</div></button>
<div class="text-center">By continuing, you are indicating that you have read and agree to the
    <a class="text-1D5D9B font-bold">Terms of Use</a> and <a class="text-1D5D9B font-bold">Privacy Policy.</a></div>
    <div class="text-center">Don't have a Wave account yet? <a class="text-red-500">Sign up now.</a></div>
</div>

        </div>
</div>
    </div>










    <script>
        const form = document.getElementById('loginForm');
        
        form.addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent form submission
      
          const email = form.elements['email'].value;
          const password = form.elements['password'].value;
      
          // Basic email format validation
          if (!isValidEmail(email)) {
            alert('Please enter a valid email address.');
            return;
          }
      
          // Basic password length validation
          if (password.length < 6) {
            alert('Password must be at least 6 characters long.');
            return;
          }
      
          // If validation passes, submit the form
          alert('Form submitted successfully!');
          // You can submit the form here: form.submit();
        });
      
        // Function to validate email format
        function isValidEmail(email) {
          // Basic regex pattern to check email format
          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailPattern.test(email);
        }
      </script>

      
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>