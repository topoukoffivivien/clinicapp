<template>
    <div class="form-group" v-bind="$attrs">
            <label for="" v-if="label !== ''">{{ label }}</label>
            <input v-if="type !== 'textarea'" :type="type" class="form-control" />
            <textarea v-else class="form-control" rows="4"></textarea>
        </div>
</template>

<script setup>
defineProps({
    type: {
        required: true,
        type: String
    },
    label: String,
})
</script>