<template>
<div class="flex">
  <div
    class="
      bg-gray-200
      static
      uppercase
      font-semibold
      rounded-lg
      flex
      md:flex-col md:ml-1
      shadow-lg
      border-gray-600
      justify-around
      md:h-screen md:w-16
      w-screen
      bottom-0
    "
  >
    <div
      class="
        md:p-5
        p-3
        delay-75
        duration-500
        ease-in-out
        transform
        hover:scale-125 hover:-rotate-12
      "
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="text-black h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
        />
      </svg>
    </div>
    <div
      class="
        hover:shadow-md
        p-4
        rounded-full
        duration-1000
        ease-in-out
        transform
        hover:scale-125
        delay-200
        hover:rotate-180
        text-3xl
        font-bold
        text-center
        bg-gradient-to-br
        from-purple-400
        to-pink-300
        md:p-5
      "
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="text-black h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          stroke-width="2"
          d="M12 6v6m0 0v6m0-6h6m-6 0H6"
        />
      </svg>
    </div>
    <div
      class="
        md:p-5
        p-3
        delay-75
        duration-500
        ease-in-out
        transform
        hover:scale-125 hover:-rotate-12
      "
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="text-black h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          stroke-width="2"
          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
        />
      </svg>
    </div>

  </div>

    <section class="p-4">
      <slot/>
      </section>
    </div>
</template>

<script setup>
</script>