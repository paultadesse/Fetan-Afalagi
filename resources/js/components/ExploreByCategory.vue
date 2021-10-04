<template>
  <div class="p-8 font-poppins">
    <div class="flex justify-center">
      <div class="flex justify-end p-4 w-3/4">
        <router-link to="explore" class="flex space-x-1 items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="28"
            height="28"
            viewBox="0 0 24 24"
            fill="gray"
          >
            <path
              d="M20.465 14.646c1.398 1.516-.156 3.949-2.146 3.227 1.462-.311 2.47-1.49 2.146-3.227zm-16.148 3.227c1.99.722 3.545-1.71 2.146-3.227.325 1.737-.683 2.916-2.146 3.227zm12.554-13.561c-.282-.764-1.01-1.312-1.871-1.312-1.298 0-2.313 1.244-1.904 2.582 1.111-.395 2.346-1.103 3.775-1.27zm7.129 11.688c0 2.761-2.238 5-5 5-4.039 0-4.156-4.123-7-4.123s-2.961 4.123-7 4.123c-2.762 0-5-2.239-5-5 0-2.135 1.535-4.567 3.941-8.821 1.908-3.372 4.754-1.26 6.815-.585.781.256 1.654.272 2.486 0 2.062-.674 4.908-2.787 6.815.585 2.408 4.254 3.943 6.686 3.943 8.821zm-16 0c0-1.654-1.346-3-3-3s-3 1.346-3 3 1.346 3 3 3 3-1.346 3-3zm5-2c0-.552-.447-1-1-1s-1 .448-1 1 .447 1 1 1 1-.448 1-1zm9 2c0-1.654-1.346-3-3-3s-3 1.346-3 3 1.346 3 3 3 3-1.346 3-3zm-13-13c-.861 0-1.589.548-1.871 1.312 1.429.168 2.664.875 3.775 1.27.409-1.338-.606-2.582-1.904-2.582z"
            />
          </svg>
          <div class="text-gray-400 hover:text-black text-sm">Explore</div>
        </router-link>
      </div>
    </div>
    <div class="flex justify-center text-4xl p-4 items-baseline">
      <span class="text-5xl">F</span><span>etan</span>
      <span class="text-5xl">A</span><span>falagi</span>
      <span class="text-xl">By Category</span>
    </div>
    <div class="flex justify-center text-sm p-4 items-baseline">
      <div class="w-3/4 flex">
        <div class="flex items-center text-sm bg-gray-100 rounded-md p-2">
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
              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
            />
          </svg>
          <div class="text-gray-600"> You're searching based on <span class="uppercase font-semibold">company</span> category</div>
        </div>
      </div>
    </div>
    <div class="flex justify-center">
      <div
        class="
          w-3/4
          flex
          justify-center
          rounded-full
          items-center
          bg-white
          shadow-lg
          p-4
        "
      >
        <input
          type="text"
          placeholder="Enter Company eg. Medroc Group"
          class="w-full rounded-full px-4 py-3 focus:outline-none"
        />
        <a href="#">
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
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            />
          </svg>
        </a>
      </div>
    </div>

    <!-- search results card  -->
    <div class="flex justify-center pt-8">
      <div
        class="
          flex flex-col
          justify-start
          lg:w-3/4
          w-full
          rounded-md
          shadow-lg
          border-b-2
        "
      >
        <div
          class="
            border-b-2 border-opacity-30
            p-4
            w-full
            uppercase
            text-sm text-gray-500
          "
        >
          Search results
        </div>
        <div class="p-4 overflow-y-auto">
          <router-link
            class="
              flex flex-col
              sm:flex-row
              justify-between
              mt-4
              border-l-4 border-gray-500 border-opacity-0
              hover:bg-gray-50
              hover:border-opacity-100
            "
            v-for="i in 5"
            :key="i"
            to="/detail"
          >
            <div class="flex flex-col sm:flex-row items-center">
              <div class="pr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="gray"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                  />
                </svg>
              </div>
              <div class="flex-col">
                <div class="uppercase text-lg font-bold">Medroc Group</div>
                <div class="text-gray-400 max-w-md truncate">
                  Some description about Medroc and so on...
                </div>
              </div>
            </div>
            <!-- right-side -->
            <div class="flex">
              <div class="justify-center space-y-1 items-center">
                <div class="flex justify-end items-center">
                  <a
                    href="#"
                    class="
                      flex flex-col
                      justify-center
                      items-center
                      rounded-full
                      text-gray-500 text-xs
                      uppercase
                      px-6
                      hover:text-black
                    "
                  >
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
                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"
                      />
                    </svg>
                    <div class="hidden sm:flex">show on Map</div>
                  </a>
                </div>
                <div class="flex space-x-8">
                  <div class="flex items-baseline space-x-1">
                    <div>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="gray"
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
                    </div>
                    <div class="text-sm text-gray-400">
                      Around Sarbet, Addis Ababa
                    </div>
                  </div>
                  <div class="flex items-baseline space-x-1">
                    <div class="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="gray"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                        />
                      </svg>
                    </div>
                    <div class="text-sm text-gray-400 px-2">+251-922744488</div>
                  </div>
                </div>
              </div>
            </div>
          </router-link>
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