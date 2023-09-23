<script setup>

import SimpleLink from '@/Components/SimpleLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

</script>



<template>
    <div class="w-[75%] h-screen bg-slate-100 pl-3">
    <div class="w-full h-full bg-white px-5">
      <!-- chat header -->
      <div class="flex justify-between py-5 border-b b ">
        <div class="flex gap-2 items-center">
          <img src="images/users/avatar.jpg" alt="" class=" w-10 h-10 rounded-[50%]" />
          <h4 class="font-bold">Wade Warren</h4>
        </div>
        <div class="flex gap-4 items-center">

            <SimpleLink>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondery hover:text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </SimpleLink>
            <SimpleLink>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondery hover:text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c-1.7 0-3 1.2-3 2.6v6.8c0 1.4 1.3 2.6 3 2.6s3-1.2 3-2.6V4.6C15 3.2 13.7 2 12 2z"/><path d="M19 10v1a7 7 0 0 1-14 0v-1M12 18.4v3.3M8 22h8"/></svg>
            </SimpleLink>
            <button  @click="isOpen = !isOpen" >
                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondery hover:text-primary"  width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            </Button>
          
            <div class="relative inline-block text-left">
            
                <div
                v-if="isOpen"
                @click="isOpen = false"
                class="fixed inset-0 h-full w-full z-10"
                >
            </div>
    <div
      v-show="isOpen"
      class="absolute right-5 mt-5 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
    >
      <div class="p-5 flex flex-col">

        <SimpleLink>
            Save
        </SimpleLink>
        <SimpleLink>
            Rename
        </SimpleLink>
        <SimpleLink>
            Delete
        </SimpleLink>

      </div>
    </div>
  </div>


        </div>
      </div>
      <!-- chat header -->
      <div class="flex flex-col">
        <!-- message box -->
        <div class="w-full  overflow-auto">
          <!-- left text -->
          <div class="my-4 flex flex-col items-start">
            <div class="flex">
              <div
                class="bg-primary-gray p-4 inline-block rounded-t-md rounded-r-md"
              >
                <p class="text-sm">Hi good morning</p>
              </div>
              <div><img src="/dots-vertical.png" alt="" class="h-6" /></div>
            </div>
            <div>
              <small class="text-text-light">Today, 06:45 AM</small>
            </div>
          </div>
          <!-- left text -->
          <!-- right text -->
          <div class="my-4 flex flex-col items-end">
            <div class="flex">
              <div>
                <img src="/dots-vertical.png" alt="" class="h-6" /></div>
              <div
                class="bg-primary text-white p-4 inline-block rounded-l-md rounded-t-md"
              >
                <p class="text-sm">
                  Hello!Good morning, how are you? What about our next meeting?
                </p>
               
              </div>
            </div>

            <div>
              <small class="text-text-light">Today, 06:45 AM</small>
            </div>
          </div>



          <div class="my-4 flex flex-col items-end">
            <div class="flex max-w-md">
              <div
                class=" text-white p-1 inline-block rounded-l-md rounded-t-md"
              >
              <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="" srcset="" class="h-auto transition-all duration-300 rounded-lg ">

               
              </div>
            </div>

            <div>
              <small class="text-text-light">Today, 06:45 AM</small>
            </div>
          </div>
          

        </div>
        <!-- message box -->

        <!-- text area -->
        <div class=" max-w-7xl bottom-5 fixed w-full pr-5">
            <div class="w-full py-2 px-3 border-[1px] h-48 mt-1 rounded-md">
          <div class="w-full flex items-center justify-between py-1">
            <div class="flex items-center gap-1 text-sm">
              <SimpleLink class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              </SimpleLink>
              <p class="font-semibold">Reply</p>
              <small>|</small>
              <p class="text-xs">+1 (545) 123548</p>
            </div>
            <SimpleLink>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            </SimpleLink>
            
          </div>
          <div class="w-full mt-2">
            <textarea
              class="py-1 h-16 w-full rounded-md text-sm font-light px-3 border-[1px] border-dashed border-gray-400 focus:outline-none focus:border-purple-400 resize-none"
              placeholder="Text here..."
            ></textarea>
          </div>
          <div class="w-full flex items-center justify-between mt-2">
            <div class="flex items-center gap-1 text-sm">

             <SimpleLink>
                <svg xmlns="http://www.w3.org/2000/svg"  class="text-secondery hover:text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M20.4 14.5L16 10 4 20"/></svg>
             </SimpleLink>
             <SimpleLink>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondery hover:text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c-1.7 0-3 1.2-3 2.6v6.8c0 1.4 1.3 2.6 3 2.6s3-1.2 3-2.6V4.6C15 3.2 13.7 2 12 2z"/><path d="M19 10v1a7 7 0 0 1-14 0v-1M12 18.4v3.3M8 22h8"/></svg>
            </SimpleLink>
           
              

            </div>
            <div>
              <PrimaryButton>
                Send
              </PrimaryButton>
            </div>
          </div>
        </div>





            
        </div>

        <!-- text area -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false,
    };
  },
};
</script>