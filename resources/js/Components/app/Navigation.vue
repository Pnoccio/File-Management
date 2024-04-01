<template>
  <nav class="min-w-[200px]">
    <div class="h-[80px] px-3 flex items-center gap-3">
      <Link href="/">
      <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
      </Link>
      BoldStorage
    </div>
    <div class="px-3">
      <CreateNewDropDown />

      <div class="px-3">
        <NavLink href="/">My Files</NavLink>
        <NavLink href="/">Shared with Me</NavLink>
        <NavLink href="/">Shared by Me</NavLink>
        <NavLink href="/">Trash</NavLink>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import CreateNewDropDown from '@/Components/app/CreateNewDropdown.vue';
import NavLink from '@/Components/NavLink.vue';
</script>