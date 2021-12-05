<template>
  <section class="">
    <Create />
    <Index :posts="posts" />
  </section>
</template>

<script setup>
import Create from "./Posts/Create.vue";
import Index from "./Posts/Index.vue";

defineProps({
  posts: Object,
});
</script>
