<template>
  <div class="bg-gray-100 py-2 px-4 rounded flex flex-row space-x-4">
    <input
      type="checkbox"
      :true-value="1"
      v-model="todoForm.is_done"
      @change="save"
    />
    <p class="w-full py-2 text-grey-darkest">{{todo.task}}</p>
    <button @click="deleteTodo" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
</div>

</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

// This time store a reference to props so we can pull in the defaults in the form
const props = defineProps([
    'todo',
]);

// Populate form defaults based on the prop data
const todoForm = useForm({
    is_done: props.todo.is_done,
});

// Send an update request for the todo
const save = () => {
    todoForm.put(`/todos/${ props.todo.id }`);
};

const deleteTodo = () => {
    todoForm.delete(`/todos/${ props.todo.id }`);
}
</script>
