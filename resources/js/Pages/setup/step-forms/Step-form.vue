<template>
    <div class="stepper-forms">
        <StepFormOne :current-step="currentStep" />
        <StepFormTwo :current-step="currentStep" />
        <StepFormThree :current-step="currentStep" />
    </div>
</template>

<script setup>

const props = defineProps({
    currentStep: Number,
});

import StepFormOne from "./StepFormOne.vue";
import StepFormTwo from "./StepFormTwo.vue";
import StepFormThree from "./StepFormThree.vue";
</script>
