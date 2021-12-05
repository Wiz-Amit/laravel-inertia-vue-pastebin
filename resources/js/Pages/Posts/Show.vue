<template>
  <div class="max-w-2xl m-auto my-5">
    <h2 class="text-2xl text-black my-3"><Link href="/">Posts</Link>/#{{ post.id }}</h2>

    <p v-text="post?.content" style="white-space: break-spaces"></p>

    <div class="actions my-5 text-center">
      <Link class="font-bold" href="/">View All Posts</Link>
    </div>
  </div>
</template>

<script setup>
defineProps({
  post: {
    type: Object,
    default: null,
  },
});
</script>
