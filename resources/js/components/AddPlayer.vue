<template>
    <div>
        <h1 class="text-center py-4">Add your name</h1>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-md-6 text-center">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quas tempore expedita
                    aliquid autem dolorum iure dolores placeat laboriosam! Illum, adipisci quae? Ratione vel sunt
                    corporis deleniti, assumenda repellendus eos.</p><br>
                <form @submit.prevent="addPlayer">
                    <div class="form-group">
                        <input type="text" class="form-control bg-dark text-white text-center" v-model="player.name">
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Addplayer mounted.')
        },
        data() {
            return {
                player: {}
            }
        },
        methods: {
            addPlayer() {

                this.axios
                    .post('/api/player/add', this.player)
                    .then(response => (
                        this.$router.push({
                            name: 'gamerooms'
                        })
                        
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>