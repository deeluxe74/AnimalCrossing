<template>
    <div class="G d-flex flex-row justify-content-between w-100">
        <ul class="nav nav-pills">
            <li class="nav-item bg-black">
                <a @click="rating(3)" class="nav-link color-white py-2" href="#"><i class="fas fa-star color-gold"></i><i class="fas fa-star color-gold"></i><i class="fas fa-star color-gold"></i></a>
            </li>
            <li class="nav-item bg-black">
                <a @click="rating(2)" class="nav-link color-white py-2" href="#"><i class="fas fa-star color-bronze"></i><i class="fas fa-star color-bronze"></i></a>
            </li>
            <li class="nav-item bg-black">
                <a @click="rating(1)" class="nav-link color-white py-2" href="#"><i class="fas fa-star color-commun"></i></a>
            </li>
        </ul>
        <button @click="rating(0)" class="btn btn-warning">Reset</button>
    </div>

</template>

<script>
export default {
    data(){
        return {
           
        }
    },
    methods: {
        rating(numb) {
            this.$emit('clicked', numb);
        }
    }
}
</script>

<style scoped>

.nav-link {
    border-radius: 0;
}
.nav-link:hover {
    color: white;
    opacity: 0.9;
}

.nav-item {
    font-weight: 900;
    width: 8vw;
    font-size: 1.5rem;
    text-align: center;
}

.active {
    color: red;
}

.btn-warning {
    font-size: 1.7rem;
    font-weight: 900;
    color: rgb(31, 31, 31);
}
.btn-warning:hover {
    opacity: 0.7;
}
</style>