<template>
    <div>
        <h3 class="text-center">All gamerooms</h3>

        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>GameRoomID</th>
                    <th>Host ID</th>
                    <th>LobbyName</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="gameroom in gamerooms" :key="gameroom.id">
                    <td>{{ gameroom.id }}</td>
                    <td>{{ gameroom.player_id }} </td>
                    <td>{{ gameroom.title }}</td>
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
        methods: {
            deleteGameroom(id) {
                this.axios
                    .delete('api/gamerooms/delete/${id}')
                    .then(response => {
                        let i = this.gamerooms.map(item => item.id).indexOf(id); // find index of your object
                        this.gamerooms.splice(i, 1)
                    });
            }
        }
    }
</script>