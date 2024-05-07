NavBar.vue
<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item" v-show="!loggedIn">
            <router-link class="nav-link" to="/registration">Regisztráció</router-link>
          </li>
          <li class="nav-item" v-show="!loggedIn">
            <router-link class="nav-link" to="/login">Bejelentkezés</router-link>
          </li>
          <li class="nav-item" v-if="loggedIn">
            <router-link class="nav-link" to="/calendar">Naptár</router-link>
          </li>
          <li class="nav-item" v-if="loggedIn">
            <router-link class="nav-link" to="/absenceform">Hiányzásbejelentő</router-link>
          </li>
          <li class="nav-item" v-if="loggedIn">
            <router-link class="nav-link" to="/musiclibarylink">Kottatár</router-link>
          </li>
          <li class="nav-item" v-if="loggedIn">
            <router-link class="nav-link" to="/news">Hírek</router-link>
          </li>
        </ul>
      </div>
      <button v-if="loggedIn" @click="handleLogout" class="btn btn-danger">
        Kijelentkezés
      </button>
    </div>
  </nav>
</template>

<script>
import { isLoggedIn, logout } from "@/utils/http";

export default {
  name: 'NavBar',
  data() {
    return {
      loggedIn: isLoggedIn()
    };
  },
  watch: {
    '$route': function () {
      this.loggedIn = isLoggedIn();  // Útvonalváltozásnál frissíti a bejelentkezési állapotot
    }
  },
  methods: {
    handleLogout() {
      logout();
      this.loggedIn = false;
      this.$router.push("/home");
    }
  }
};

</script>

<style>
.container {
  background-color: grey;
  padding: 10px;
  text-align: center;
  margin: 0 auto;
  color: white;
  width: 100%;
}

nav ul {
  list-style: none;
  padding: 0;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

nav li {
  display: inline-block;
  margin: 0 10px;
  cursor: pointer;
}

@media (max-width: 768px) {
  nav ul {
    flex-direction: column;
  }

  nav li {
    margin-bottom: 10px;
  }
}
</style>
