<template>
  <div>Welcome, {{ name }}</div>
</template>

<script setup>
const props = defineProps({
  name: {
    type: String,
  },
});
</script>