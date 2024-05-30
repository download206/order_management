<template>
  <div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto">
      <h2 class="text-2xl font-bold mb-4">Login</h2>
      <form @submit.prevent="login">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="email" id="email" v-model="email" class="border-gray-300 rounded-md w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
          <input type="password" id="password" v-model="password" class="border-gray-300 rounded-md w-full py-2 px-3" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600">Login</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    login() {
      // Aqui você pode adicionar lógica de autenticação, por exemplo, uma chamada de API para verificar as credenciais
      console.log('Email:', this.email);
      console.log('Password:', this.password);
      // Após verificar as credenciais, você pode redirecionar o usuário para a página de dashboard ou exibir uma mensagem de sucesso
    }
  }
}
</script>

<style scoped>
/* Estilos específicos para este componente */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
</style>
