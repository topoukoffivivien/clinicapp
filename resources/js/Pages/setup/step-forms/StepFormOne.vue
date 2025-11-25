<template>
    <div v-if="currentStep === 1">
        <Select label="Langue utilisée" :options="langOprtions" class="w-25"/>
        
        <hr class="divider" />

        <Input type="text" label="Nom de clinique" />
        <Input type="textarea" label="Description" />
        
        <div class="d-flex">
            <Select label="Pays" :options="langOprtions" class="w-50 mr-3"/>
            <Select label="Ville" :options="langOprtions" class="w-50"/>
        </div>

        <div class="d-flex">
            <Input type="text" label="Adresse" class="mr-3" style="width: 35%;"/>
            <Input type="text" label="Code postal" class="mr-3" style="width: 35%;"/>
            <Input type="text" label="Téléphone" style="width: 30%;"/>
        </div>
        <Input type="file" label="Logo" style="width: 30%;"/>
    </div>
</template>

<script setup>
import Input from '../../Components/forms/Input.vue';
import Select from '../../Components/forms/Select.vue';

const props = defineProps({
    currentStep: Number,
})

const langOprtions = [
    { value: 'fr', label: 'Français' },
    { value: 'en', label: 'English' },
];
</script>