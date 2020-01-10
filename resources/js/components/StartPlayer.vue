<template>
    <div class="container">
        <h1 class="text-center py-4">Project Blackjack</h1>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 text-center">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quas tempore expedita
                    aliquid autem dolorum iure dolores placeat laboriosam! Illum, adipisci quae? Ratione vel sunt
                    corporis deleniti, assumenda repellendus eos.</p>
                <router-link to="/add" class="nav-item nav-link"><button class="btn btn-success">Start game</button>
                </router-link>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Startplayer mounted.')
        },
        data() {
            return {
                players: []
            }
        },
        created() {
            this.axios
                .get('/api/players')
                .then(response => {
                    this.players = response.data;
                });
        }
    }
</script>