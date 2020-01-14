<template>
    <div>
        <h3 class="text-center">Add gameroom</h3>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-md-6">
                <form @submit.prevent="addgameroom">


                    <!-- dit is de issue -->
                    <div class="form-group">
                        <input type="hidden" v-model="gameroom.player_id" >
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control bg-dark text-white text-center" v-model="gameroom.title">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Add gameroom</button>
                </form> 
            </div>
            <div class="col-sm-3"></div>
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
            addGameroom() {

                this.axios
                    .post('api/gameroom/addgameroom', this.gameroom)
                    .then(response => (
                        this.$router.push({name: 'allgamerooms'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>