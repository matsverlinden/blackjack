<template>
    <div>
        <h3 class="text-center">Add gameroom</h3>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-md-6">
                <form @submit.prevent="createGameroom">
                    <input type="hidden" v-model="gameroom.player_id">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control bg-dark text-white text-center" v-model="gameroom.name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Create Lobby mounted.')
        },
        data() {
            return {
                gameroom: {}
            }
        },
        methods: {
            createGameroom() {
                this.axios
                    .post('/api/gameroom/createroom', {
                        player_id: this.gameroom.player_id,
                        name: this.gameroom.name
                    })
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