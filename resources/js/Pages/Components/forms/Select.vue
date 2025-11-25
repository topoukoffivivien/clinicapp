<template>
    <div class="form-group" v-bind="$attrs">
        <label for="" v-if="label !== ''">{{ label }}</label>
        <select name="" id="" class="form-control">
            <option 
                :key="option.value"
                v-for="option in options"                 
                :value="option?.value"
                >
                {{ option?.label }}
            </option>
        </select>
    </div>
</template>

<script setup>
defineProps({
    options: {
        required:true,
        type: Array
    },
    label: String,
})
</script>
