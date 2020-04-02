<template>
<div class="d-flex flex-column align-items-center">
    <div class="badge badge-primary">Postez un nouvelle article</div>
    <form v-if="post" method="POST" enctype="multipart/form-data" action="api/post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Espèces</label>
                <select name="especes" v-model="especes" class="form-control">
                    <option>Insecte</option>
                    <option>Poisson</option>
                    <option>Fossile</option>
                    <option>Autres</option>
                </select>
        </div>
        <div class="form-row ">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom</label>
                <input v-model="name" name="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Niveau de rareté</label>
                <select name="rare" v-model="rare" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Quand ?</label>
            <input name="where" v-model="where" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ou ?</label>
            <input name="when" v-model="when" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Son prix de revente</label>
            <input name="price" v-model="price" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Votre image en url</label>
            <input name="img" v-model="img" type="text" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Envoyer</button>
    </form>

</div>

</template>

<script>
export default {
    data(){
        return {
            especes: '',
            name: '',
            rare: 0,
            where: '',
            when: '',
            price: '',
            img: '',
            post: true
        }
    }
}
</script>

<style scoped>
input {
    font-size: 1rem;
}
.badge {
    margin: 30px;
    font-size: 2.5rem;
}
.form-group {
    margin: 5px 10px;
    font-size: 1.8rem;
    font-weight: 100;
}
.btn {
    margin: 20px 0;
    font-size: 2.2rem;
}
option {
    font-size: 1.5rem;
    color: black;
}
</style>