//Home.vue
<template>
  <div>
    <h1>Üdvözlünk az oldalon!</h1>
    <h2 v-if="!loggedIn">Kérjük, jelentkezz be vagy regisztrálj!</h2>
    <h2 v-if="loggedIn">Szia, {{ username }}! Jó böngészést kívánunk!</h2>
  </div>
</template>

<script>
import { isLoggedIn } from "@/utils/http";

export default {
  name: "Home",
  data() {
    return {
      username: localStorage.getItem("username"), // feltételezve, hogy a felhasználónév itt van tárolva
    };
  },
  computed: {
    loggedIn() {
      return isLoggedIn();
    },
  },
};
</script>

<style scoped>
h1,
h2 {
  text-align: center;
}
</style>
