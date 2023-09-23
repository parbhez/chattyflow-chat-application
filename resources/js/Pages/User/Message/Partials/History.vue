<template>
    <!-- Number area start here -->
    <div class="w-[25%]  h-screen bg-white px-4  overflow-auto">
      <div class="mb-4">
        <img src="/logo-main.png" alt="" class="w-1/2" />
      </div>
      <div class="flex items-center justify-between mb-6">
        <div class="flex flex-col items-start gap-13">
          <h4 class="font-bold text-base">Khandakar Riad</h4>
          <h5 class="font-normal text-sm">+1 (460) 8799 888</h5>
        </div>
        <div class="flex gap-4 items-center justify-end">

            <SimpleLink >
                <svg xmlns="http://www.w3.org/2000/svg"  class="text-secondery hover:text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>

            </SimpleLink>        

</div>
      </div>
  
      <div class="flex flex-col mt-4">
        
        <router-link
          to="/"
          class="flex gap-2 justify-between items-center hover:bg-slate-200 border-b py-5"
        >
          <div class="flex gap-2">
            <img src="images/users/avatar.jpg" alt="" class=" w-10 h-10 rounded-[50%] mt-1" />
            <div>
              <h5 class="font-bold text-base">Marvin McKinney</h5>
              <p class="font-light text-sm text-transparent  bg-clip-text bg-gradient-to-r from-black to-white">Get the most out of your team and customer..</p>
            </div>
          </div>
          <div class="flex flex-col gap-1 items-center">
            <div class="text-xs"><span>12:30</span></div>
            <div
              class="w-5 h-5 rounded-full bg-primary text-xs text-white grid place-items-center"
            >
              <span>3</span>
            </div>
          </div>
        </router-link>

        <router-link
          to="/"
          class="flex gap-2 justify-between items-center hover:bg-slate-200 border-b py-5"
        >
          <div class="flex gap-2">
            <img src="images/app/icon.png" alt="" class=" w-10 h-10 rounded-[50%] mt-1" />
            <div>
              <div class="flex ">
                <h5 class="font-bold text-base">textQuo Support</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-broadcast mt-1 ml-2 text-secondery" viewBox="0 0 16 16"> <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/> </svg>
              </div>

              <p class="font-light text-sm text-transparent  bg-clip-text bg-gradient-to-r from-black to-white">Your account will be active within few hrs</p>
            </div>
          </div>
          <div class="flex flex-col gap-1 items-center">
            <div class="text-xs"><span>12:30</span></div>
            <div
              class="w-5 h-5 rounded-full bg-primary text-xs text-white grid place-items-center"
            >
              <span>3</span>
            </div>
          </div>
        </router-link>

      </div>
    </div>
    <!-- Number area end here -->

  </template>