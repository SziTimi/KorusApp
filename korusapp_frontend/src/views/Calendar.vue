<template>
    <div class="calendar-container">
      <!-- Naptár fejléc -->
      <div class="calendar-header">
        <h1>{{ currentYear }}</h1>
      </div>
      <!-- Minden hónap -->
      <div
        class="month-container"
        v-for="(month, index) in months"
        :key="`month-${index}`"
      >
        <!-- Hónap címe -->
        <div :class="`month-header month-${index}`">{{ month }}</div>
        <!-- A hét napjai -->
        <div class="week-days">
          <div class="day-name" v-for="day in weekDays" :key="day">{{ day }}</div>
        </div>
        <!-- Napok -->
        <div class="month-days">
          <!-- Üres helyek a hónap elején -->
          <div
            class="day empty"
            v-for="empty in getEmptyDays(index)"
            :key="`empty-${empty}`"
          ></div>
          <!-- Napok -->
          <div
            class="day"
            v-for="day in getDaysInMonth(index)"
            :key="day"
            :class="{ 'special-day': isSpecialDay(day, index) }"
          >
            {{ day }}
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { http } from "@/utils/http.js";
  export default {
    name: "Calendar",
    data() {
      return {
        currentYear: new Date().getFullYear(),
        months: [
          "Január",
          "Február",
          "Március",
          "Április",
          "Május",
          "Június",
          "Július",
          "Augusztus",
          "Szeptember",
          "Október",
          "November",
          "December",
        ],
        weekDays: ["H", "K", "Sz", "Cs", "P", "Sz", "V"],
      };
    },
    methods: {
      getDaysInMonth(monthIndex) {
        const year = this.currentYear;
        return Array.from(
          { length: new Date(year, monthIndex + 1, 0).getDate() },
          (_, i) => i + 1
        );
      },
      getEmptyDays(monthIndex) {
        const year = this.currentYear;
        let firstDay = new Date(year, monthIndex, 1).getDay();
        firstDay = firstDay === 0 ? 6 : firstDay - 1; // Hétfői kezdés
        return Array.from({ length: firstDay }, () => "");
      },
      isSpecialDay(day, monthIndex) {
        const dayOfWeek = new Date(this.currentYear, monthIndex, day).getDay();
        return dayOfWeek === 0 || dayOfWeek === 6; // 0: vasárnap, 6: szombat
      },
    },
  };
  </script>
  
  <style scoped>
  .calendar-container {
  font-family: "Arial", sans-serif;
  max-width: 70%; /* vagy egy másik százalékérték/fix szélesség */
  margin: 0 auto; /* középre igazítás */
}
  
.calendar-header h1 {
  font-size: 1.5rem; /* kisebb címsor */
  text-align: center;
}

.week-days .day-name,
.month-days .day {
  font-size: 0.85rem; /* kisebb betűméret a napokhoz */
  padding: 5px; /* kevesebb padding */
  text-align: center;
}

.month-container {
  margin-bottom: 20px; /* Távolság a hónapok között */
}

.month-header {
  background-color: #6c9f6ceb;
  text-align: center;
  padding: 10px 0;
  margin-bottom: 5px; /* Távolság a hónap fejléce és a napok között */
}

.week-days {
  display: grid; /* Módosítás: grid konténer */
  grid-template-columns: repeat(7, 1fr); /* Minden sor 7 egyenlő részre oszlik */
  background-color: #ddd;
  text-align: center;
}

.day-name {
  padding: 10px 0;
  font-weight: bold;
}

.month-days {
  display: grid; /* Módosítás: grid konténer */
  grid-template-columns: repeat(7, 1fr); /* Minden sor 7 egyenlő részre oszlik */
  text-align: center;
}

.day {
  border: 1px solid #aba5a5;
  padding: 10px 0;
  background-color: rgb(243, 243, 181);
}

.empty {
  background-color: #b9c6d3;
}

.special-day {
  background-color: #ff0000;
}
</style>
  