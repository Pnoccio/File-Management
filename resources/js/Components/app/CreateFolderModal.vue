<template>
  <modal :show="modalValue">
    <div class="p-6">
      <h2 class="text-lg font-medium text-gray-900">
        Create New Folder
      </h2>
      <div class="mt-6">
        <InputLabel for="folderName" value="folderName"/>
        <TextInput 
        type="text" 
        id="folderName" 
        v-model="form.name" 
        class="mt-1 block w-full" 
        :class="form.errors.name ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : ''"
        placeholder="Folder Name"
        @keyup.enter="createFolder"
        />

        <InputError  :message="forms.errors.name" class="mt-2" />
      </div>
      <div class="mt-6 flex justify-end">
        <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
      </div>
    </div> 
  </modal>
</template>

<script setup>
//imports
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "../TextInput.vue";
import InputError from "../InputError.vue";
import { useForm } from "@inertiajs/vue3";
import SecondaryButton from "../SecondaryButton.vue";

//props & emits
const {modalValue} = defineProps({
  modalValue: Boolean
})

const emit = defineEmits(['update:modalValue'])

//methods
function createFolder(){
  console.log("Create Folder")
}

function closeModal(){
  emit('update:modalValue')
  form.clearErrors()
  form.reset()
}

//uses
const form = useForm({
  name: ''
})
</script>