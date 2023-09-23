<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import Navigation from '@/Components/Admin/Navigation.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>


<template>
    <div class="w-screen h-screen flex bg-body">
      <!-- Sidebar area start here -->
      <div class="w-[6%] h-full bg-white py-3 border-r-2">
        <div class="text-center flex justify-center items-center">
          <NavLink  >
            <img src="images/app/icon.png" alt="" class="h-[35px] w-[35px] mx-auto" />
          </NavLink>
        </div>
        <div
          class="h-[calc(100vh-127px)] overflow-auto flex flex-col items-center gap-0 py-4"
        >
         
        <NavLink 
            to="/dashboard/chat"
            class="mb-2 text-white flex justify-center items-center w-full py-3 group relative hover:border-l-2 hover:border-gray-800 hover:bg-gradient-to-r from-[#F5F7FB] to-[#FEFEFE]"
          >
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.3259 5.77772C20 6.78661 20 8.19108 20 11C20 13.8089 20 15.2134 19.3259 16.2223C19.034 16.659 18.659 17.034 18.2223 17.3259C17.3409 17.9148 16.1577 17.9892 14 17.9986V18L12.8944 20.2111C12.5259 20.9482 11.4741 20.9482 11.1056 20.2111L10 18V17.9986C7.8423 17.9892 6.65907 17.9148 5.77772 17.3259C5.34096 17.034 4.96596 16.659 4.67412 16.2223C4 15.2134 4 13.8089 4 11C4 8.19108 4 6.78661 4.67412 5.77772C4.96596 5.34096 5.34096 4.96596 5.77772 4.67412C6.78661 4 8.19108 4 11 4H13C15.8089 4 17.2134 4 18.2223 4.67412C18.659 4.96596 19.034 5.34096 19.3259 5.77772Z"
                stroke="#1F2029"
                stroke-opacity="0.8"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M9 9L15 9"
                stroke="#1F2029"
                stroke-opacity="0.8"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M9 13H12"
                stroke="#1F2029"
                stroke-opacity="0.8"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
  
            <div
              class="absolute px-2 py-1 text-xs tracking-widest text-black uppercase bg-white opacity-0 -bottom-2 rounded-md group-hover:opacity-100 group-hover:duration-300 group-hover:translate-y-2"
            >
              Chat
            </div>
          </NavLink>
          <NavLink  
            to="/dashboard/number-selection"
            class="mb-2 text-white flex justify-center items-center w-full py-3 group relative hover:border-l-2 hover:border-gray-800 hover:bg-gradient-to-r from-[#F5F7FB] to-[#FEFEFE]"
          >
          <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
  
            <div
              class="absolute px-2 py-1 text-xs tracking-widest text-black uppercase bg-white opacity-0 -bottom-2 rounded-md group-hover:opacity-100 group-hover:duration-300 group-hover:translate-y-2"
            >
              User
            </div>
          </NavLink>
          <NavLink  
            to="/about"
            class="mb-2 text-white flex justify-center items-center w-full py-3 group relative hover:border-l-2 hover:border-gray-800 hover:bg-gradient-to-r from-[#F5F7FB] to-[#FEFEFE]"
          >
          <svg xmlns="http://www.w3.org/2000/svg"  class="text-gray-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg>
  
            <div
              class="absolute px-2 py-1 text-xs tracking-widest text-black uppercase bg-white opacity-0 -bottom-2 rounded-md group-hover:opacity-100 group-hover:duration-300 group-hover:translate-y-2"
            >
              Alarm
            </div>
          </NavLink>
          <NavLink 
            to="/about"
            class="mb-2 text-white flex justify-center items-center w-full py-3 group relative hover:border-l-2 hover:border-gray-800 hover:bg-gradient-to-r from-[#F5F7FB] to-[#FEFEFE]"
          >
          <svg xmlns="http://www.w3.org/2000/svg"  class="text-gray-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
  
            <div
              class="absolute px-2 py-1 text-xs tracking-widest text-black uppercase bg-white opacity-0 -bottom-2 rounded-md group-hover:opacity-100 group-hover:duration-300 group-hover:translate-y-2"
            >
              Settings
            </div>
          </NavLink>
          
        </div>
        <div class="h-[80px] overflow-auto flex flex-col items-center gap-0">
            <NavLink  :href="route('logout')" method="post" as="button" >
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>

            <div
            class="absolute px-2 py-1 text-xs tracking-widest text-black uppercase bg-white opacity-0 -bottom-2 rounded-md group-hover:opacity-100 group-hover:duration-300 group-hover:translate-y-2"
          >
            Log Out
          </div>
            </NavLink>
        </div>
      </div>
      <!-- Sidebar area end here -->
      <div class="w-full">

       <main>
        <slot />
       </main>
      </div>
    </div>
  </template>




