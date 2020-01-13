<template>
    <div>
        <h3 class="text-center">Add gameroom</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addgameroom">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="gameroom.player_id">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" v-model="gameroom.title">
                    </div>
                    <button type="submit" class="btn btn-primary">Add gameroom</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                gameroom: {}
            }
        },
        methods: {
            addgameroom() {

                this.axios
                    .post('api/gameroom/addgameroom', this.gameroom)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>