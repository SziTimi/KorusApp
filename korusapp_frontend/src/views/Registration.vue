//Registration.vue
<template>
  <div class="registration-form">
    <form @submit.prevent="register" class="form">
      <div class="form-group">
        <label for="username">Felhasználónév:</label>
        <input
          type="text"
          id="username"
          v-model="formData.username"
          required
          class="form-control"
        />
      </div>
      <div class="form-group">
        <label for="email">E-mail cím:</label>
        <input
          type="email"
          id="email"
          v-model="formData.email"
          required
          class="form-control"
          autocomplete="current-email"
        />
      </div>
      <div class="form-group">
        <label for="password">Jelszó:</label>
        <input
          type="password"
          id="password"
          v-model="formData.password"
          required
          class="form-control"
          autocomplete="current-password"
        />
      </div>
      <button type="submit" class="btn btn-primary">Regisztráció</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Registration",
  data() {
    return {
      formData: {
        username: "",
        email: "",
        password: "",
      },
    };
  },
  methods: {
    async register() {
      try {
        // Email ellenőrzése a backend-en
        const emailExists = await this.checkEmailExists(this.formData.email);
        if (emailExists) {
          alert("Az e-mail cím már regisztrálva van.");
          return;
        }

        // Regisztráció küldése a backend-nek
        const response = await axios.post("http://localhost:8000/api/register", this.formData);
        console.log("Regisztrációs válasz:", response.data);
        if (response.data.success) {
          this.$router.push("/login");
        } else {
          console.error("Regisztrációs hiba: ", response.data.message);
          alert("Regisztrációs hiba: " + response.data.message);
        }
      } catch (error) {
        console.error("Regisztrációs kivétel: ", error.response);
        alert(
          "Hiba történt: " + (error.response.data.message || "Ismeretlen hiba")
        );
      }
    },

    async checkEmailExists(email) {
      try {
        const response = await axios.get(`/check-email/${email}`);
        return response.data.exists;
      } catch (error) {
        console.error("Hiba az e-mail ellenőrzésekor: ", error);
        return false;
      }
    },
  },
};
</script>

<style scoped>
.registration-form {
  max-width: 400px;
  margin: 0 auto;
}

.form {
  background-color: #81d0d0;
  padding: 20px;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
</style>
