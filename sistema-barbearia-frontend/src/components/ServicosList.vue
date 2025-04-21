<template>
    <div>
      <h2>Lista de Serviços</h2>
      <ul v-if="servicos.length > 0">
        <li v-for="servico in servicos" :key="servico.id">
          {{ servico.nome }} - R$ {{ servico.preco }} ({{ servico.duracao }} minutos)
        </li>
      </ul>
      <p v-else>Carregando serviços...</p>
      <p v-if="error">{{ error }}</p>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        servicos: [],
        error: null,
      };
    },
    mounted() {
      this.fetchServicos();
    },
    methods: {
      async fetchServicos() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/servicos');
          this.servicos = response.data;
        } catch (error) {
          console.error('Erro ao buscar serviços:', error);
          this.error = 'Erro ao carregar a lista de serviços.';
        }
      },
    },
  };
  </script>
  
  <style scoped>
  h2 {
    margin-bottom: 1rem;
  }
  
  ul {
    list-style: none;
    padding: 0;
  }
  
  li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
  }
  
  li:last-child {
    border-bottom: none;
  }
  
  p {
    margin-top: 1rem;
    color: #777;
  }
  
  .error {
    color: red;
  }
  </style>