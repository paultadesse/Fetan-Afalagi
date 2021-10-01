<template>
  <div class="p-8 font-poppins">
    <div class="flex justify-center">
      <div class="flex justify-end p-4 w-3/4">
        <router-link to="/" class="flex space-x-1 items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M7 16l-4-4m0 0l4-4m-4 4h18"
            />
          </svg>
          <div class="text-gray-400 hover:text-black text-sm">
            go back to search
          </div>
        </router-link>
      </div>
    </div>
    <div class="flex justify-center pt-10">
      <div
        class="
          flex flex-col
          lg:flex-row
          justify-around
          w-3/4
          border
          rounded-md
          p-7
          shadow-lg
        "
      >
        <!-- left content -->
        <div class="lg:w-1/2 space-y-7">
          <div class="border-b-2 border-r-2 border-opacity-50 pb-6">
            <p class="text-5xl truncate">Edna Mall</p>
            <p class="font-light text-gray-400">Showing detail Information</p>
          </div>
          <div class="space-y-6">
            <div
              class="
                flex flex-col
                lg:flex-row
                space-y-1
                justify-between
                border-b-2
                pb-4
              "
            >
              <div>
                <div class="flex items-center space-x-0.5 text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                    />
                  </svg>
                  <div>Name</div>
                </div>
                <div>Edna mall</div>
              </div>
              <div>
                <div class="flex items-center space-x-0.5 text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                    />
                  </svg>
                  <div>Phone</div>
                </div>
                <div class="flex flex-col">
                  <div class="" v-for="i in 3" :key="i">+251-922744488</div>
                </div>
              </div>
              <div>
                <div class="flex items-center space-x-0.5 text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                  <div>Address</div>
                </div>
                <div>Infront of Medhanealem mall</div>
              </div>
            </div>
            <div
              class="
                flex flex-col
                lg:flex-row
                space-y-1
                justify-between
                border-b-2
                pb-4
              "
            >
              <div>
                <div class="flex items-center space-x-0.5 text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                    />
                  </svg>
                  <div>P.o.box</div>
                </div>
                <div>1097</div>
              </div>
              <div>
                <div class="flex items-center space-x-0.5 text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"
                    />
                  </svg>
                  <div>Fax</div>
                </div>
                <div>069</div>
              </div>
              <div>
                <div class="flex items-center space-x-0.5 text-gray-400">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                  </svg>
                  <div>Email</div>
                </div>
                <div>paultadesse@gmail.com</div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="text-gray-400">About</p>
            <p class="">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A
              obcaecati adipisci pariatur, quis vero mollitia quaerat ipsa atque
              ea incidunt, beatae asperiores laborum! Necessitatibus nisi earum
              omnis aperiam? Quis, laudantium.
            </p>
          </div>
          <div class="bg-gray-200 rounded-md p-2">
            <p class="text-gray-400 uppercase font-bold">Categorized as a</p>
            <div class="flex items-center space-x-0.5">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="green"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
              <p class="">Company</p>
            </div>
          </div>
        </div>
        <!-- right content  -->
        <div class="lg:w-1/2 flex justify-center items-center uppercase">
          <div class="flex flex-col justify-center items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-16 w-16"
              fill="none"
              viewBox="0 0 24 24"
              stroke="gray"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
            <p class="text-gray-400">Map Currently Unavailable</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>