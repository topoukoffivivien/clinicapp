<template>
    <div v-if="currentStep === 3">
        <div class="d-flex">
            <Input type="text" label="Nom" class="mr-3" style="width: 50%"/>
            <Input type="text" label="Prénom" class="mr-3" style="width: 50%"/>
            <Select label="Genre" :options="genres" class="w-25"/>
        </div>

        <div class="d-flex">
            <Input type="email" label="Email" class="mr-3" style="width: 35%"/>
            <Input type="text" label="Adresse" class="mr-3" style="width: 35%"/>
            <Input type="number" label="Téléphone" style="width: 35%"/>
        </div>

        <div class="d-flex">
            <Input type="password" label="Mot de passe" class="mr-3" style="width: 50%"/>
            <Input type="password" label="Confirmer le mot de passe" style="width: 50%"/>
        </div>
    </div>
</template>

<script setup>
import Input from '../../Components/forms/Input.vue';
import Select from '../../Components/forms/Select.vue';

const props = defineProps({
    currentStep: Number,
})
const genres = [
    { value: 'M', label: 'Masculin' },
    { value: 'F', label: 'Féminin' },
]
</script>
