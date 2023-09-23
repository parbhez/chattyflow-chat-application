<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/vue3';

    const form = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit = () => {
        form.post(route('register'), {
            onFinish: () => form.reset('password', 'password_confirmation'),
        });
    };

</script>





<template>
    <GuestLayout>

        <Head title="Register" />

        <div class="md:flex justify-between">
            <div class=" hidden md:block bg-transparent md:w-3/6 h-screen ">
                <div class="max-w-lg mx-auto justify-center items-center mt-48">
                    <img src="images/app/regi_images.png" alt="">
                </div>
            </div>
            <div class="bg-white  md:w-3/6 container mx-auto py-28 ">

                <div class=" px-5 max-w-lg mx-auto">
                    <div class="">
                        <h2 class=" text-2xl md:text-3xl tracking-tight font-bold text-header">Create an affiliate account</h2>
                        <p class=" text-sm text-text-light font-medium mt-1">Start making money with exoticlead products</p>

                    </div>
                    <div class=" mt-10">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="name" value="Name" />

                                <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required
                                    autofocus autocomplete="name" />

                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="email" value="Email" />

                                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email"
                                    required autocomplete="username" />

                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="password" value="Password" />

                                <TextInput id="password" type="password" class="mt-1 block w-full"
                                    v-model="form.password" required autocomplete="new-password" />

                                <InputError class="mt-2" :message="form.errors.password" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="password_confirmation" value="Confirm Password" />

                                <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                                    v-model="form.password_confirmation" required autocomplete="new-password" />

                                <InputError class="mt-2" :message="form.errors.password_confirmation" />
                            </div>

                            <div class="mt-4">
                                <PrimaryButton class=" w-full text-center" :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing">
                                    Register
                                </PrimaryButton>
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
                        <p>Already have an account? <span class=" text-primary font-semibold underline"> 
                            <Link :href="route('login')">
                                Login
                                </Link></span> </p>
                    </div>
                </div>
 





            </div>

        </div>






    </GuestLayout>
</template>
