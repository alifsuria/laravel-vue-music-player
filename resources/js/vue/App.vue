<script setup lang="ts">
import {RouterView } from 'vue-router'
import {showErrorOverlayEvent} from "@/helpers"

showErrorOverlayEvent();
</script>

<template>
  <RouterView />
</template>
