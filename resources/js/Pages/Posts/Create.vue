<template>
  <form @submit.prevent="saveContent" class="my-5">
    <textarea
      v-model="form.content"
      name="content"
      cols="30"
      rows="10"
      class="border block w-100 p-2"
    ></textarea>
    <button class="my-3 font-bold bg-purple-700 px-3 py-2 rounded text-white">
      Save Post
    </button>
  </form>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
  content: "",
});

let saveContent = () => {
  console.log(form);
  form.post("/posts");
};
</script>
