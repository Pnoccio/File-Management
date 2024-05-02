<template>
  <modal :show="modalValue">
    Show Modal
  </modal>
</template>

<script setup>
//imports
import Modal from "@/Components/Modal.vue"

//props & emits
const {modalValue} = defineProps({
  modalValue: Boolean
})
</script>