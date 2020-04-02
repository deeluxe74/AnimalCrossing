<template>
    <div>
        <div class="d-flex justify-content-end">
            <input @keyup="searchInclude()" v-model="search" class="mt-4 form-control mr-sm-2 px-4" type="search" placeholder="Recherche.." aria-label="Search">
        </div>
        <rareter @clicked="rareChild" class="my-4"></rareter>
        <transition-group name="fade">
            <div v-for="(poisson,index) in searchPoissons" class="fade d-flex flex-column"  :key="'poisson' + index">
                <div class="poissons">
                    <div class="poisson d-flex flex-row">
                        <img class="img" v-bind:src="poisson.img" alt="photo illustration">
                        <div class="d-flex flex-column align-self-center w-100">
                            <h1 class="ml-4">{{ poisson.name }}</h1>
                            <div class="d-flex flex-row justify-content-between mx-4"> 
                                <div><div class="badge badge-dark"><i v-for="numb in poisson.rare" :key="numb" class="fas fa-star color-gold py-1"></i></div></div>
                                
                                <div class="d-flex flex-column mb-3 where-when">
                                    <h3><span>Quand ?</span> {{ poisson.when }}</h3>
                                    <h3><span>Ou ?</span> {{ poisson.where }}</h3> </div>   
                            </div>           
                        </div>
                    </div>
                </div>
                <div class="bg-black price align-self-end px-3 py-2 mb-4">{{ poisson.price }} <i class="fas fa-bell"></i></div>
            </div>
        </transition-group>
    </div>
</template>

<script>
import Rareter from '../shares/Rareter';
export default {
    components: {
        Rareter
    },
    data(){
        return {
            poissons:[],
            search: '',
            searchPoissons: [],
            rating: 0
        }
    },
    methods: {
        searchInclude(){
            if(this.search != ''){
                this.searchPoissons = [];
                this.poissons.forEach(poisson => {
                    let name = poisson.name.toLowerCase();
                    if(name.includes(this.search.toLowerCase())){
                        this.searchPoissons.push(poisson);
                    }
                });
            }else {
                this.searchPoissons = this.poissons;
            }
            
        },
        rareChild(value){
            this.rating = value; 
            this.searchPoissons = [];
            if(this.rating > 0){
                this.poissons.forEach(poisson => {
                    let rate = poisson.rare;
                    if(rate == this.rating){
                        this.searchPoissons.push(poisson);
                    }
                })
            }else if (this.rating == 0) {
                this.searchPoissons = this.poissons;
            }

        }
    },
    created(){
        axios.get(`/api/insectes`)
        .then(response => {
            this.poissons = response.data;
            this.searchPoissons = this.poissons;
        });   
    }, 
}
</script>

<style scoped>
h1 {
    font-size: 2.5rem;
    font-weight: 300;
}

h3 {
    font-size: 1.3rem;
}

span {
    font-weight: 100;
}

input {
    padding: 1.5rem 0;
    width: 25vw;
    font-size: 1.1rem;
    background-color: #62AB50;
    border-color: none;
}

.fade {
  opacity: 1;
  transition: all 1s ease-out;
}

.fade-enter, .fade-leave-to
{
  opacity: 0;
  transform: scale(0);
}
.fade-enter-to {
  opacity: 1;
  transform: scale(1);
}
</style>