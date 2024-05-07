<template>
  <h1>Hiányzásbejelentő űrlap </h1> 
  <div class="absence-form">
    <form @submit.prevent="submitAbsence" class="form">
      <div class="form-group">
        <label for="absenceDate">Melyik próbáról fogsz hiányozni?</label>
        <div class="custom-date-input">
          <input type="date" id="absenceDate" v-model="absence.date" required class="form-control" />
        </div>
      </div>
      <div class="form-group">
        <label for="absenceMessage">Üzenet (nem kötelező):</label>
        <textarea id="absenceMessage" v-model="absence.message" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Bejelentés</button>
    </form>
  </div>
</template>
  
  <script>
export default {
  name: "AbsenceForm",
  data() {
    return {
      // Itt tároljuk a hiányzás adatait
      absence: {
        date: "",
        message: "",
      },
    };
  },
  methods: {
    submitAbsence() {
      // Itt kezeljük a hiányzás bejelentését
    },
  },
};
</script>

<style scoped>

h1{
  text-align: center; 
  margin-bottom: 3%;
  margin-top: 5%;
}
.absence-form {
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

input[type="date"],
textarea {
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