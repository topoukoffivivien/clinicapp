<template>
    <h1>Bienvenu {{ username }}</h1>
</template>

<script setup>
defineProps({
    username: String
});
</script>