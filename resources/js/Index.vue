<template>
  <div>
    <nav-bar></nav-bar>
    <div class="container">
        <poissons v-if="home"></poissons>
        <insectes v-if="insectes"></insectes>
        <fossiles v-if="fossiles"></fossiles>
        <autres v-if="autres"></autres>

        <post v-if="post"></post>
    </div>
  </div>

</template>

<script>
import navBar from './shares/NavBar';
import Poissons from './components/Poissons';
import Insectes from './components/Insectes';
import Fossiles from './components/Fossiles';
import Autres from './components/Autres';
import Post from './components/Post';

export default {
  components: {
    navBar,
    Poissons,
    Insectes,
    Fossiles,
    Autres,
    Post,
  },
  data(){
    return {
      home: true,
      insectes: false,
      fossiles: false,
      autres: false,
      post: false,
    } 
  },
  mounted() {
    let path = window.location.pathname;
    this.home = false;
    this.insectes = false;

    if(path == '/insectes'){
      this.insectes = true;
    }
    else if(path == '/fossiles'){
      this.fossiles = true;
    }
    else if(path == '/autres'){
      this.autres = true;
    }
    else if(path == '/post'){
      this.post = true;
    }
    else {
      this.home = true;
    }
  }
}
</script>

<style>
body {
  margin: 0;
  padding: 0;
  font-family: 'Comic Neue', cursive;
  font-size: 30px;
  box-sizing: border-box;
}

.bg-black {
  background-color: rgb(37, 37, 37)
}

.color-gold {
  color: rgb(251, 255, 0);
}
.color-bronze {
  color: #DAA520;
}
.color-commun {
  color: rgb(109, 79, 4);
}

.color-white {
  color: white;
}


/* FOR COMPONENTS */ 

.form-control:hover {
    background-color: #62AB50;
}

input::placeholder {
    color: black;

}

.img {
    min-width: 20vw;
    height: 140px;
    border-top-left-radius: 13px;
    border-bottom-left-radius: 13px;
}

.poissons {
    max-width: 90%;
}

.poisson {
    border: black 1px solid;
    border-radius: 13px;
    font-family: 'Roboto', sans-serif;
    font-weight: 800;
}
.badge-dark {
    min-width: 60px;
    background-color: #252525;
}

.price {
    background-color: #fbff13;
    color: black;
    margin-top: -15px;
    border-radius: 5px;
    margin-right: 5vw;
    text-align: center;
    font-weight: 700;
    font-family: 'Roboto', sans-serif;
}

.where-when {
  min-width: 15vw;
}

/* Animation */

</style>