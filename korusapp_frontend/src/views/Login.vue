//Login.vue
<template>
  <div class="login-form">
    <div class="form">
      <h1>Bejelentkezés</h1>
      <form @submit.prevent="handleLogin">
        <div class="form-group">
          <input

            type="email"
            placeholder="email"
          v-model="email"
          autocomplete="email"
          required
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            id="password"
            v-model="password"
            required
            class="form-control"
            autocomplete="current-password"
          />
        </div>
        <button type="submit">Bejelentkezés</button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { login } from "@/utils/http";

export default {
  name: "Login",
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    async handleLogin() {
      try {
        const response = await axios.post("http://localhost:8000/api/login", {
          email: this.email,
          password: this.password,
        });
        if (response.status === 200) {
          login(response.data.token);
          this.$router.push("/"); // Sikeres bejelentkezés után átirányítás
        } else {
          alert("Hibás felhasználónév vagy jelszó!");
        }
      } catch (error) {
        alert("Bejelentkezési hiba: " + error.response.data.message);
      }
    },
  },
};
</script>

<style scoped>
.login-form {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form {
  background-color: #81d0d0;
  padding: 20px;
  border-radius: 5px;
  width: 100%;
  max-width: 400px;
}

.form-group {
  margin-bottom: 15px;
}

input {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #006060;
  color: white;
  cursor: pointer;
}
</style>
