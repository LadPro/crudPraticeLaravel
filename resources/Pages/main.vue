<template>
  <v-container class="">
    <v-sheet class="mx-auto" width="300">
    <v-form metod="POST" action="{{ route('store') }}" faast-fail>
      <v-text-field
      name = "name"
      v-model="firstName"
        :rules="firstNameRules"
        label="Nombre de usuario"
      ></v-text-field>
      <!-- {{ comments[0].name }} -->
      <v-text-field
        name = "comment"
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
    comments: {
      type: Object,
      required: false,
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