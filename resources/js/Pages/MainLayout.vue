<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        
        <div v-if="user" class="flex items-center gap-4">
          <div class="text-sm text-gray-500">{{ user.name }}</div>
          <div>
            <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link :href="route('user-account.create')">Register</Link>
          <Link :href="route('login')">Sign-In</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
    <slot>Default</slot>
  </main>

  </template>
 
  <script setup>
  import { Link, usePage } from '@inertiajs/vue3'
  import { computed } from "vue";

  const page = usePage()

const user = computed(
  () => page.props.user,
)
  </script>