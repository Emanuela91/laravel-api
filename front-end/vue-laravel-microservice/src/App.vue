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

      new_movie: {},
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
  <form action="">
    <label for="name">Nome Film</label>
    <input type="text" name="name" v-model="new_movie.name">
    <br>
    <label for="year">Anno</label>
    <input type="number" name="year" v-model="new_movie.year">
    <br>
    <label for="cashOut">Cashout</label>
    <select name="cashOut">
      <option value="1">yes</option>
      <option value="0">no</option>
    </select>
    <br>
    <label for="genre">Genere</label>
    <select name="genre_id">
      <option v-for="genre in genres" :key="genre.id" value="genre.id">{{ genre.name }} </option>
    </select>
    <label>Tag:</label>
    <br>
    <div v-for="tag in tags" :key="tag.id">
      <input type="checkbox" id="'tag-' + {{ tag.id }}" value="{{ tag.id }}" v-model="new_movie.tags_id">
      <label for="'tag-' + {{ tag.id }}">{{ tag.name }}</label>
    </div>
    <button @click="closeForm">Cancella</button>
    <input type="submit" value="Crea Nuovo Film" @click="submitMovie">
  </form>
  <div>
    <ul>
      <li v-for="movie in movies" :key="movie.id">
        Nome Film: {{ movie.name }}
        <ul>
          <li v-for="tag in movie.tags" :key="tag.id">
            Tag: {{ tag.name }}
          </li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<style scoped></style>
