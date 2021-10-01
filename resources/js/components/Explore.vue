<template>
  <div class="p-8">
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
    <div class="flex justify-center text-4xl p-4 items-baseline">
      <span class="text-5xl">E</span><span>xplore</span>
      <span class="text-5xl">F</span><span>etan</span>
      <span class="text-5xl">A</span><span>falagi</span>
    </div>

    <div class="flex justify-center p-7">
      <div
        class="
          flex flex-wrap
          justify-center
          space-x-0.5 space-y-0.5
          w-3/4
          text-2xl
          font-semibold
          text-gray-400
        "
      >
        <a
          href="#"
          class="
            flex
            items-center
            justify-center
            border border-opacity-0 border-black
            hover:border-opacity-100
            bg-gray-100
            space-x-1
            px-52
            mt-0.5
            ml-0.5
            h-28
            w-1/4
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="gray"
            >
              <path
                d="M6 7v-7h13v10h5v14h-23v-17h5zm0 16v-4h-1v4h1zm8-4h-3v4h3v-4zm6 0h-1v4h1v-4zm2-7h-3v6h2v4h1v-10zm-5-10h-9v20h1v-5h7v5h1v-20zm-13 20v-4h2v-9h-3v13h1zm17-6h-1v-2h1v2zm-17-2h1v2h-1v-2zm8 1h-2v-2h2v2zm3 0h-2v-2h2v2zm-10-4v2h-1v-2h1zm7 1h-2v-2h2v2zm3 0h-2v-2h2v2zm-3-3h-2v-2h2v2zm3 0h-2v-2h2v2zm-3-3h-2v-2h2v2zm3 0h-2v-2h2v2z"
              />
            </svg>
          </div>
          <div>Company</div>
        </a>
        <a
          href="#"
          class="
            flex
            items-center
            justify-center
            bg-gray-100
            border border-opacity-0 border-black
            hover:border-opacity-100
            px-52
            h-28
            space-x-1
            w-1/4
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="gray"
            >
              <path
                d="M5.25 17.322l-2.25-1.221 2.234-3.067-2.234-1.96 4.713-2.562c.204.231.41.504.604.807l-3.584 1.948 1.181 1.037 3.058-1.686c.119.314.216.641.282.977l-3.261 1.801 6.018 3.109 5.989-3.105-3.152-1.745c.061-.347.144-.667.248-.968l2.933 1.615 1.234-1.095-3.5-1.855c.183-.275.388-.54.614-.803l4.623 2.449-2.261 2.008.011.006 2.25 3.081-2.25 1.224v3.087l-6.75 3.596-6.75-3.596v-3.082zm7.246-.094v5.377l5.255-2.799v-1.946l-3.501 1.905-1.754-2.537zm-6.247.636v1.942l5.248 2.796v-5.373l-1.747 2.536-3.501-1.901zm-1.772-2.096l4.96 2.692 1.099-1.594-4.983-2.575-1.076 1.477zm8.988 1.107l1.096 1.585 4.961-2.698-1.073-1.471-4.984 2.584zm-1.192-2.915h-.521c-.136 0-.268-.046-.358-.127l-.692-.455h2.621l-.692.455c-.089.081-.221.127-.358.127zm1.075-1.164h-2.655c-.161 0-.291-.129-.291-.29 0-.161.13-.291.291-.291h2.655c.161 0 .291.13.291.291 0 .161-.13.29-.291.29zm.287-1.163h-3.245c0-2.297-1.872-3.291-1.872-5.367 0-2.166 1.746-3.358 3.493-3.358 1.748 0 3.497 1.194 3.497 3.358 0 2.076-1.872 3.038-1.873 5.367zm-.901-.997c.188-.954.624-1.689 1.018-2.356.424-.714.757-1.279.757-2.014 0-1.55-1.257-2.361-2.498-2.361-1.239 0-2.495.811-2.495 2.361 0 .739.337 1.312.763 2.035.392.664.822 1.396 1.012 2.335h1.443zm-5.357-4.321h-1.772v-.997h1.818c-.039.219-.059.445-.059.674l.013.323zm11.043 0h-1.761l.014-.323c0-.229-.02-.455-.06-.674h1.807v.997zm-9.983-3.011c-.227.247-.424.518-.584.809l-1.439-1.021.578-.813 1.445 1.025zm7.159-.005l1.437-1.02.578.813-1.43 1.015c-.161-.29-.358-.561-.585-.808zm-5.3-1.22c-.318.115-.619.261-.899.433l-.772-1.575.897-.438.774 1.58zm3.435-.004l.773-1.576.896.438-.769 1.57c-.28-.172-.581-.318-.9-.432zm-1.219-.271c-.162-.016-.327-.024-.494-.024-.17 0-.339.009-.505.025v-1.805h.999v1.804z"
              />
            </svg>
          </div>
          <div>Product</div>
        </a>
        <a
          href="#"
          class="
            flex
            items-center
            justify-center
            bg-gray-100
            border border-opacity-0 border-black
            hover:border-opacity-100
            px-52
            h-28
            space-x-1
            w-1/4
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="gray"
            >
              <path
                d="M6 12c0 2.206 1.794 4 4 4 1.761 0 3.242-1.151 3.775-2.734l2.224-1.291.001.025c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6c1.084 0 2.098.292 2.975.794l-2.21 1.283c-.248-.048-.503-.077-.765-.077-2.206 0-4 1.794-4 4zm4-2c-1.105 0-2 .896-2 2s.895 2 2 2 2-.896 2-2l-.002-.015 3.36-1.95c.976-.565 2.704-.336 3.711.159l4.931-2.863-3.158-1.569.169-3.632-4.945 2.87c-.07 1.121-.734 2.736-1.705 3.301l-3.383 1.964c-.29-.163-.621-.265-.978-.265zm7.995 1.911l.005.089c0 4.411-3.589 8-8 8s-8-3.589-8-8 3.589-8 8-8c1.475 0 2.853.408 4.041 1.107.334-.586.428-1.544.146-2.18-1.275-.589-2.69-.927-4.187-.927-5.523 0-10 4.477-10 10s4.477 10 10 10c5.233 0 9.521-4.021 9.957-9.142-.301-.483-1.066-1.061-1.962-.947z"
              />
            </svg>
          </div>
          <div>Service</div>
        </a>
        <a
          href="#"
          class="
            flex
            items-center
            justify-center
            bg-gray-100
            border border-opacity-0 border-black
            hover:border-opacity-100
            px-52
            h-28
            space-x-1
            w-1/4
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="gray"
            >
              <path
                d="M17.492 15.432c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zm-10.922-.022c-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.451.122.686.122.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236zm8.67-.783l-1.659-.945.583-1.024 1.66.945-.584 1.024zm-6.455-.02l-.605-1.011 1.639-.981.605 1.011-1.639.981zm3.918-1.408c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.125.708-.188 1.075-.188.42 0 .83.082 1.217.244l-.453 1.086zm7.327-.163c-.534 0-.968.433-.968.968 0 .535.434.968.968.968.535 0 .969-.434.969-.968 0-.535-.434-.968-.969-.968zm-16.061 0c-.535 0-.969.433-.969.968 0 .535.434.968.969.968s.969-.434.969-.968c0-.535-.434-.968-.969-.968zm18.031-.832v6.683l-4 2.479v-4.366h-1v4.141l-4-2.885v-3.256h-2v3.255l-4 2.885v-4.14h-1v4.365l-4-2.479v-13.294l4 2.479v3.929h1v-3.927l4-2.886v4.813h2v-4.813l1.577 1.138c-.339-.701-.577-1.518-.577-2.524l.019-.345-2.019-1.456-5.545 4-6.455-4v18l6.455 4 5.545-4 5.545 4 6.455-4v-11.618l-.039.047c-.831.982-1.614 1.918-1.961 3.775zm2-8.403c0-2.099-1.9-3.801-4-3.801s-4 1.702-4 3.801c0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199zm-5.5.199c0-.829.672-1.5 1.5-1.5s1.5.671 1.5 1.5-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5zm-.548 8c-.212-.992-.547-1.724-.952-2.334v2.334h.952z"
              />
            </svg>
          </div>
          <div>Area</div>
        </a>
        <a
          href="#"
          class="
            flex
            items-center
            justify-center
            bg-gray-100
            border border-opacity-0 border-black
            hover:border-opacity-100
            px-52
            h-28
            space-x-1
            w-1/4
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="gray"
            >
              <path
                d="M12 2h2v2h2v3.702l7 2.618v12.68h1v1h-24v-1h1v-11h6v-8h2v-2h2v-2h1v2zm3 3h-7v18h1v-2h5v2h1v-18zm-2 17h-3v1h3v-1zm8 1h1v-11.987l-6-2.243v14.23h1v-2h4v2zm-14-10h-5v10h1v-2h3v2h1v-10zm-2 9h-1v1h1v-1zm15 0h-2v1h2v-1zm-16-5v2h-1v-2h1zm2 0v2h-1v-2h1zm5-10v12h-1v-12h1zm10 11v1h-4v-1h4zm-8-11v12h-1v-12h1zm8 9v1h-4v-1h4zm-17-2v2h-1v-2h1zm2 0v2h-1v-2h1zm15 0v1h-4v-1h4zm0-2v1h-4v-1h4zm-8-9h-3v1h3v-1z"
              />
            </svg>
          </div>
          <div>City</div>
        </a>
        <a
          href="#"
          class="
            flex
            items-center
            justify-center
            bg-gray-100
            border border-opacity-0 border-black
            hover:border-opacity-100
            px-52
            h-28
            space-x-1
            w-1/4
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="gray"
            >
              <path
                d="M13 9h9l-14 15 3-9h-9l14-15-3 9zm-8.699 5h8.086l-1.987 5.963 9.299-9.963h-8.086l1.987-5.963-9.299 9.963z"
              />
            </svg>
          </div>
          <div>Others</div>
        </a>
      </div>
    </div>
    <!-- second bottom card -->
    <div class="flex justify-center p-7">
      <div class="flex flex-col lg:flex-row justify-around w-10/12 border rounded-md shadow-lg">
        <div class="p-7">
          <div class="text-5xl font-bold">
            <div class="pr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10"
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
            <div>This Weeks Top 10 Searchs</div>
          </div>
          <div class="pt-7 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
            consequuntur earum tenetur id aliquid ea asperiores repudiandae
            ducimus harum cupiditate amet, maiores, quisquam odio reprehenderit
            natus odit repellendus similique numquam!
          </div>
        </div>
        <!-- Right  -->
        <div>
          <div class="flex justify-center p-7 bg-gray-100">
            <div
              class="
                flex flex-wrap
                justify-center
                space-x-2 space-y-2
                w-3/4
                text-sm
                font-semibold
                text-gray-400
              "
            >
              <a
                href="#"
                class="
                  flex
                  items-center
                  justify-center
                  border border-opacity-0 border-black
                  hover:border-opacity-100
                  bg-white
                  space-x-1
                  px-20
                  mt-2
                  ml-2
                  h-16
                  w-1/4
                "
              >
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    viewBox="0 0 24 24"
                    fill="gray"
                  >
                    <path
                      d="M6 7v-7h13v10h5v14h-23v-17h5zm0 16v-4h-1v4h1zm8-4h-3v4h3v-4zm6 0h-1v4h1v-4zm2-7h-3v6h2v4h1v-10zm-5-10h-9v20h1v-5h7v5h1v-20zm-13 20v-4h2v-9h-3v13h1zm17-6h-1v-2h1v2zm-17-2h1v2h-1v-2zm8 1h-2v-2h2v2zm3 0h-2v-2h2v2zm-10-4v2h-1v-2h1zm7 1h-2v-2h2v2zm3 0h-2v-2h2v2zm-3-3h-2v-2h2v2zm3 0h-2v-2h2v2zm-3-3h-2v-2h2v2zm3 0h-2v-2h2v2z"
                    />
                  </svg>
                </div>
                <div>EdnaMall</div>
              </a>
              <a
                href="#"
                class="
                  flex
                  items-center
                  justify-center
                  bg-white
                  border border-opacity-0 border-black
                  hover:border-opacity-100
                  px-20
                  h-16
                  space-x-1
                  w-1/4
                "
                v-for="i in 9"
                :key="i"
              >
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    viewBox="0 0 24 24"
                    fill="gray"
                  >
                    <path
                      d="M5.25 17.322l-2.25-1.221 2.234-3.067-2.234-1.96 4.713-2.562c.204.231.41.504.604.807l-3.584 1.948 1.181 1.037 3.058-1.686c.119.314.216.641.282.977l-3.261 1.801 6.018 3.109 5.989-3.105-3.152-1.745c.061-.347.144-.667.248-.968l2.933 1.615 1.234-1.095-3.5-1.855c.183-.275.388-.54.614-.803l4.623 2.449-2.261 2.008.011.006 2.25 3.081-2.25 1.224v3.087l-6.75 3.596-6.75-3.596v-3.082zm7.246-.094v5.377l5.255-2.799v-1.946l-3.501 1.905-1.754-2.537zm-6.247.636v1.942l5.248 2.796v-5.373l-1.747 2.536-3.501-1.901zm-1.772-2.096l4.96 2.692 1.099-1.594-4.983-2.575-1.076 1.477zm8.988 1.107l1.096 1.585 4.961-2.698-1.073-1.471-4.984 2.584zm-1.192-2.915h-.521c-.136 0-.268-.046-.358-.127l-.692-.455h2.621l-.692.455c-.089.081-.221.127-.358.127zm1.075-1.164h-2.655c-.161 0-.291-.129-.291-.29 0-.161.13-.291.291-.291h2.655c.161 0 .291.13.291.291 0 .161-.13.29-.291.29zm.287-1.163h-3.245c0-2.297-1.872-3.291-1.872-5.367 0-2.166 1.746-3.358 3.493-3.358 1.748 0 3.497 1.194 3.497 3.358 0 2.076-1.872 3.038-1.873 5.367zm-.901-.997c.188-.954.624-1.689 1.018-2.356.424-.714.757-1.279.757-2.014 0-1.55-1.257-2.361-2.498-2.361-1.239 0-2.495.811-2.495 2.361 0 .739.337 1.312.763 2.035.392.664.822 1.396 1.012 2.335h1.443zm-5.357-4.321h-1.772v-.997h1.818c-.039.219-.059.445-.059.674l.013.323zm11.043 0h-1.761l.014-.323c0-.229-.02-.455-.06-.674h1.807v.997zm-9.983-3.011c-.227.247-.424.518-.584.809l-1.439-1.021.578-.813 1.445 1.025zm7.159-.005l1.437-1.02.578.813-1.43 1.015c-.161-.29-.358-.561-.585-.808zm-5.3-1.22c-.318.115-.619.261-.899.433l-.772-1.575.897-.438.774 1.58zm3.435-.004l.773-1.576.896.438-.769 1.57c-.28-.172-.581-.318-.9-.432zm-1.219-.271c-.162-.016-.327-.024-.494-.024-.17 0-.339.009-.505.025v-1.805h.999v1.804z"
                    />
                  </svg>
                </div>
                <div class="flex">Ghion </div>
              </a>
            </div>
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