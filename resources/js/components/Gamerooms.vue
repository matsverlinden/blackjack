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
                    <td>{{ gameroom.name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Gamerooms mounted.')
        },
        data() {
            return {
                gamerooms: []
            }
        },
        created() {
            this.axios
                .get('api/gamerooms')
                .then(response => {
                    console.log(response);
                    this.gamerooms = response.data.gamerooms;
                });
        },
    }
</script>