<template>
  <div id="posts" class="my-5">
    <h2 class="text-2xl text-black mb-3">Posts</h2>
    <ul class="grid grid-cols-4 gap-3">
      <li class="border p-3 rounded shadow" v-for="post in posts?.data" :key="post.id">
        {{ post.content.substr(0, 140)
        }}<span v-if="post.content.length > 140">...</span> <br /><Link
          :href="'/posts/' + post.id"
          prefetch
          target="_blank"
        >
          (Read more)</Link
        >
      </li>
    </ul>
  </div>
</template>

<script setup>
defineProps({
  posts: Object,
});
</script>
