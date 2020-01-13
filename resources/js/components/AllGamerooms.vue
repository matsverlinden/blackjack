<template>
    <div>
        <h3 class="text-center">All gamerooms</h3><br />

        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>GameRoomID</th>
                    <th>Host</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="gameroom in gamerooms" :key="gameroom.id">
                    <td>{{ gameroom.id }}</td>
                    <td>{{ gameroom.player_id }}</td>
                    <td>{{ gameroom.title }}</td>
                    <td>{{ gameroom.created_at }}</td>
                    <td>{{ gameroom.updated_at }}</td>
                    <td>
                        <!-- <div class="btn-group" role="group">
                             <router-link :to="{name: 'edit', params: { id: gameroom.id }}" class="btn btn-primary">Edit
                            </router-link>
                            <button class="btn btn-danger" @click="deletegameroom(gameroom.id)">Delete</button> 
                        </div> -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                gamerooms: []
            }
        },
        created() {
            this.axios
                .get('api/gamerooms')
                .then(response => {
                    this.gamerooms = response.data;
                });
        },
    }
</script>