<template>
    <div class="container">
        <router-view></router-view>
        <router-link to="/gamerooms" class="nav-item nav-link">All Gamerooms</router-link>
        <router-link to="/createroom" class="nav-item nav-link">Create Gameroom</router-link>
    </div>
</template>

<script>
    export default {}
</script>