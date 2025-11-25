<template>
    <div class="container" style="height: 100vh">
        <div class="row h-100">
            <div class="col my-auto" style="width: 700px; height: 700px">
                <div class="card h-100">
                    <div class="card-header">
                        <h1 class="card-title">CONFIGURATION DE CLINIC APP</h1>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <StepItems
                            :steps="{
                                currentStep: currentStep,
                                items: stepItems,
                            }"
                        />
                        
                        <StepForm :current-step="currentStep" />
                        
                    </div>
                    <div class="card-footer">
                        <div
                            class="d-flex justify-content-between align-items-center"
                        >
                            <button
                                :disabled="actionState.shouldDisablePrevButton"
                                @click="goToPrev"
                                class="btn btn-default"
                            >
                                Précédent
                            </button>
                            <button
                                :disabled="actionState.shouldDisableNextButton"
                                @click="goToNext"
                                class="btn btn-primary"
                            >
                                Suivant
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { computed, reactive, ref } from "vue";
import StepItems from "./step-items/StepItems.vue";
import StepForm from "./step-forms/Step-form.vue";

const props = defineProps({
    username: String,
});

const currentStep = ref(1);

const stepItems = computed(() => [
    {
        id: 1,
        title: "information générale",
        progress: 0,
    },
    {
        id: 2,
        title: "Identité de l'entreprise",
        progress: 0,
    },
    {
        id: 3,
        title: "Administration",
        progress: 0,
    },
]);

const goToNext = () => {
    if (currentStep.value < stepItems.value?.length) {
        currentStep.value++;
    }
};
const goToPrev = () => {
    if (currentStep.value > 1) {
        currentStep.value--;
    }
};

const actionState = computed(() => ({
    shouldDisablePrevButton: currentStep.value <= 1,
    shouldDisableNextButton: currentStep.value === stepItems.value?.length,
}));
</script>

<style scoped>
.stepper-forms {
    padding-block: 15px;
    flex: 1;
    overflow: auto;
}
</style>
