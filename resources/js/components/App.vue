<template lang="">
  <div>
    <h1>Mensajes bbdd laravel</h1>
    <ul>
      <li v-for="(msgg, index) in mensajes" :key="index">{{ msgg }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      mensajes: []  
    }
  },
  methods: {
    async obtenerMensajes() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/prueba/msg');
        this.mensajes = response.data;  
      } catch (error) {
        console.error('Error al obtener los datos:', error);
      }
    }
  },
  mounted() {
    this.obtenerMensajes();  
  },
}
</script>

<style lang="">
  
</style>
