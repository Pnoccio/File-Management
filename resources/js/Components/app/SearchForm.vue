<template>
  <form action="" class="w-[900px] h-[80px] flex items-center">
    <TextInput 
      type="text" 
      class="block w-full mr-2 " 
      v-model="form.search" 
      autocomplete placeholder="Search for files and folders" 
    />
  </form>
</template>

<script setup>
import NavLink from '@/Components/TextInput.vue';
import { useForm} from '@inertiajs/vue3'

// uses 
const form = useForm({
  search: ''
})
</script>