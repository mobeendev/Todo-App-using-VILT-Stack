<template>
  <div class="mx-auto max-w-3xl mt-10 px-4">
    <h1 class="font-light text-3xl">My Todo List</h1>

    <div class="flex flex-col space-y-4 mt-5">
      <div
        v-if="$page.props.flash.message"
        class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert"
      >
        <span class="font-medium">Success alert!</span>
        {{ $page.props.flash.message }}.
      </div>
      <AddTodoForm :errors="$page.props.errors" />
      <Todo v-for="todo in todos" :key="todo.id" :todo="todo" />
    </div>
  </div>
</template>

<script setup>
import Todo from "../Components/Todo.vue";
import AddTodoForm from "../Components/AddTodoForm.vue";
import { Link } from '@inertiajs/vue3'

defineProps([
    'todos',
]);
</script>
