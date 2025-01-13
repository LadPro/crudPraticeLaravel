<template>
  <v-container class="">
    <v-sheet class="mx-auto" width="300">
    <v-form fast-fail @submit.prevent>
      <v-text-field
        v-model="firstName"
        :rules="firstNameRules"
        label="Nombre de usuario"
      ></v-text-field>
      {{ users.user }}
      <v-text-field
        v-model="lastName"
        :rules="commentRules"
        label="Comentario"
      ></v-text-field>

      <v-btn class="mt-2" type="submit" block>Submit</v-btn>
    </v-form>
  </v-sheet>
  </v-container>

  <VueTable/>
</template>

<script setup>
import { comment } from 'postcss';
import { ref } from 'vue';
import VueTable from './vueTable.vue';
import { defineProps } from 'vue';

  defineProps({
    users: {
      type: Object,
      required: true,
    }
});
  const firstName = ref('');
  
  const firstNameRules = [
      value => !!value || 'Debe ingresar un nombre.', // Simplificada con '||'
      value => value.length >= 3 || 'Debe ingresar un nombre de mas de 3 letras.',
    ];
  const commentRules = [
      value => !!value || 'Debe ingresar un comentario.', // Simplificada con '||'
      value => value.length >= 3 || 'Debe ingresar un comentario de mas de 3 letras.',
    ];

  name: "main";



</script>