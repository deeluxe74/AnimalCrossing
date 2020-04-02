<template>
<div>
    <nav class="navbar navbar-light bg-green px-6">
        <div class="d-flex flex-column">
            <a class="title" href="/">Animal Crossing</a>
            <div class="new-horizons align-self-center">New Horizons</div>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <a class="align-self-center" href="/post"><h2>Nouveau</h2></a>
            <i class="fas fa-plus-square ml-3"></i>
        </div>  
    </nav>
    <nav class="navbar navbar-light bg-black-green px-6">
        <div class="bg-morGreen d-flex flex-row justify-content-between w-100">
            <div class="especes"><a href="/">Poissons</a></div>
            <div class="especes"><a href="/insectes">Insectes</a></div>
            <div class="especes"><a href="/fossiles">Fossiles</a></div>
            <div class="especes"><a href="/autres">Autres</a></div>
        </div>
    </nav>
</div>
    
</template>

<script>
export default {

}
</script>

<style scoped>
h2 {
    margin: 0;
    color: white;
}
a {
    line-height: 1;
    color: #FBD34D;
    font-size: 3rem;
}
a:hover {
    text-decoration: none;
    color: none;
    opacity: 0.8;
}
.new-horizons {
    font-size: 2rem;
    color: white;
    line-height: 0.8;
}

.px-6 {
    padding: 1vh 21vw ;
}

.bg-green {
    background-color: #62AB50;
}
.bg-black-green{
    background-color: #406C2B;
}

.fa-plus-square {
    color: #FBD34D;
    font-size: 3rem;
}

.title {
    font-size: 3rem;
}

.especes a {
    font-weight: 900;
    font-size: 2rem;
    color: white;
}

</style>