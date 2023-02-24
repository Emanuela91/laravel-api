<script>

import axios from 'axios';

const API_URL = 'http://localhost:8000/api/';
const API_VER = 'v1/';
const API = API_URL + API_VER;

export default {

  data() {
    return {
      movies: [],
      genres: [],
      tags: [],
    }
  },

  methods: {
    updateData() {

      axios.get(API + 'movie/all')
        .then(res => {
          const data = res.data;
          const success = data.success;

          const response = data.response;

          const movies = response.movies;
          const genres = response.genres;
          const tags = response.tags;

          if (success) {
            this.movies = movies;
            this.genres = genres;
            this.tags = tags;
          }
        })

        .catch(err => console.error(err));
    }
  },

  mounted() {
    this.updateData();
  }
}
</script>

<template>
  <h1>Hello World!</h1>
  <div>
    <ul>
      <li v-for="movie in movies" :key="movie.id">
        {{ movie.name }}
      </li>
    </ul>
  </div>
</template>

<style scoped></style>
