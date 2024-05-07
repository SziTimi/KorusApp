<script setup>
import { computed } from 'vue';
import { useRoute } from 'vue-router';
import NavBar from "@/components/layouts/NavBar.vue";

const route = useRoute();
const showNavBar = computed(() => !['/login' ].includes(route.path));
</script>

<template>
  <div class="app-container">
    <NavBar v-if="showNavBar" />
    <div class="content-container">
      <RouterView />
    </div>
  </div>
</template>

<style>
.app-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh; /* Teljes képernyő magasság */
  background-color: aquamarine;
}

.nav-container {
  width: 100%; /* Teljes szélesség */
  position: fixed;
  top: 0; /* Fixen a lap tetején */
  z-index: 1000; /* Biztosítja, hogy a navigációs sáv mindig legfelül legyen 
}

.content-container {
  flex: 1;
  padding-top: 60px; /* Hely biztosítása a navigációs sáv alatt */
  width: 100%;
  box-sizing: border-box; /* A padding is beleértendő a szélességbe */
  padding: 20px; /* Térköz a tartalom körül */
}

@media (max-width: 768px) {
  .nav-container {
    position: static; /* Kis kijelzőkön nem rögzítjük a navigációs sávot */
  }
  .content-container {
    padding-top: 10px; /* Kisebb térköz, ha a navigációs sáv nem rögzített */
  }
}
</style>

