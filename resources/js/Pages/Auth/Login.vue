<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});


const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};




</script>



<template>
    <div
      class="w-screen min-h-screen md:bg-body grid place-items-center px-[2%] md:px-[10%] md:py-[5%]"
    >
      <div class="w-full flex gap-5 justify-center">
        <div class="bg-white md:px-16 md:py-6 rounded-xl sm:w-4/5 lg:w-3/6 xl:w-2/5">
          <div class="mt-10">
            <img src="images/app/logo.png" alt="" class="mx-auto" />
          </div>
          <div class="text-center mt-7">
            <h5 class="font-bold text-lg">Log In</h5>
            <p class="font-normal text-gray-400 text-sm mt-2">Welcome back please enter your details</p>
          </div>
          <form @submit.prevent="submit">
            <div>
                                <InputLabel for="email" value="Email" />

                                <TextInput
                                    id="email"
                                    type="email"
                                    class=" mt-1 block w-full"
                                    v-model="form.email"
                                    required
                                    autofocus
                                    autocomplete="username"
                                    placeholder="Enter your email"
                                />

                                <InputError class="mt-2" :message="form.errors.email" />
                        </div>
       

            <div class="mb-2 relative mt-5">
              <label class="block text-sm ">Password</label>


              <TextInput
              v-if="!showPassword"
                                    id="password"
                                    type="password"
                                    class=" mt-1 block w-full"
                                    v-model="form.password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Enter your password"
                                />

                <TextInput
                v-if="showPassword"
                                    id="password"
                                    type="password"
                                    class="block w-full"
                                    v-model="form.password"
                                    required
                                    autocomplete="current-password"
                                />
              <img v-if="!showPassword" src="images/app/eye-png.png" alt="" class="absolute right-2 bottom-3 cursor-pointer" @click="togglePasswordVisibility">
              <img v-if="showPassword" src="images/app/eye-png.png" alt="" class="absolute right-2 5 bottom-3 cursor-pointer" @click="togglePasswordVisibility">
              <div v-if="!showPassword" class="w-6 h-[1px] bg-gray-400 -rotate-45 absolute right-2 bottom-6 hidden"></div>
              <div v-if="showPassword" class="w-6 h-[1px] bg-gray-400 -rotate-45 absolute right-2 bottom-6"></div>
            </div>



            <div class="flex items-center justify-between mt-4">


                    <label class="flex items-center">
                        <Checkbox name="remember" v-model:checked="form.remember" />
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>


                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-primary font-semibold hover:text-primary-dark rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-dark"
                    >
                        Forgot your password?
                    </Link>


                    </div>




            <PrimaryButton class="w-full text-center rounded-lg mt-5" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Log in
            </PrimaryButton>


            <div class="w-full h-[1px] bg-gray-400 my-8 relative">
              <p
                class="absolute left-1/2 -translate-x-1/2 -top-[11px] bg-white px-1 text-gray-400"
              >
                Or
              </p>
            </div>
            <div class="flex justify-between gap-6">
              <button
                class="w-full text-gray-600 border-[1px] border-bord py-3 rounded-lg text-xs flex items-center justify-center gap-2"
              >
                <img src="images/app/google.png" alt="" class="w-6 h-6" />
                <span>Log In with Google</span>
              </button>
              <button
                class="w-full text-gray-600 border-[1px] border-bord py-3 rounded-lg text-xs flex items-center justify-center gap-2"
              >
                <img src="images/app/facebook.png" alt="" class="w-6 h-6" />
                <span>Log In with Facebook</span>
              </button>
            </div>
            <div>
              <p class="text-center text-sm my-4">
                Don’t have an account ?

                <Link :href="route('register')" class="text-secondery">
                                Register
                                </Link>


               
              </p>
            </div>
          </form>
        </div>
        <div class="bg-white relative overflow-hidden rounded-lg lg:w-3/6 xl:w-3/5 hidden lg:block">
          <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop>
            <source src="/video/texting-video.mp4" type="video/mp4" />
          </video>
        </div>
      </div>
    </div>
  </template>
  
  <script>
export default {
  data() {
    return {
      showPassword: false, // Initially hiding the password
      password: ''
    };
  },
  methods: {
    togglePasswordVisibility() {
      // Toggle the 'showPassword' variable to switch between password and text input
      this.showPassword = !this.showPassword;
    }
  }

};
</script>




<!-- 


<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>


        <div class="md:flex justify-between">
            <div class=" hidden md:block bg-transparent md:w-3/6 h-screen ">
                <div class="max-w-lg mx-auto justify-center items-center mt-48">
                    <img src="images/app/regi_images.png" alt="">
                </div>
            </div>
            <div class="bg-white  md:w-3/6 container mx-auto py-28 ">

                <div class=" px-5 max-w-lg mx-auto">
                    <div class="">
                        <h2 class=" text-2xl md:text-3xl tracking-tight font-bold text-header">Welcome Back!</h2>
                        <p class=" text-sm text-text-light font-medium mt-1">We're happy to see you again</p>

                    </div>
                    <div class=" mt-10">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="email" value="Email" />

                                <TextInput
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    v-model="form.email"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />

                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="password" value="Password" />

                                <TextInput
                                    id="password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    v-model="form.password"
                                    required
                                    autocomplete="current-password"
                                />

                                <InputError class="mt-2" :message="form.errors.password" />
                            </div>

                            <div class="flex items-center justify-between mt-4">


                                <label class="flex items-center">
                                    <Checkbox name="remember" v-model:checked="form.remember" />
                                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                </label>


                                <Link
                                    v-if="canResetPassword"
                                    :href="route('password.request')"
                                    class="underline text-sm text-primary font-semibold hover:text-primary-dark rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-dark"
                                >
                                    Forgot your password?
                                </Link>


                            </div>


                            <div class="mt-4">
                                <PrimaryButton class="w-full text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Log in
                                </PrimaryButton>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                               

                                
                            </div>
                        </form>
                    </div>


                    <div class="flex justify-between mt-10 px-2">
                        <div class=" border border-primary-light w-3/6 py-2  px-4 text-center mr-2">
                            <a href="#" class="flex justify-center">
                                <div>
                                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
    <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
  </svg>
                                </div>
                                <div class="font-semibold ml-2">
                                    Google
                                </div>



                            </a>
                        </div>
                        <div  class=" border border-primary-light w-3/6 py-2 px-4 text-center ml-2">
                            <a href="#" class="flex justify-center">
                                <div>
                                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
  </svg>
                                </div>
                                <div class="font-semibold ml-2">
                                    Facebook
                                </div>



                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-8 text-text-light font-medium">
                        <p>Don't you have an account? <span class=" text-primary font-semibold underline"> 
                            <Link :href="route('register')">
                                Register
                                </Link></span> </p>
                    </div>
                </div>
 





            </div>

        </div>








        





    </GuestLayout>
</template> -->
