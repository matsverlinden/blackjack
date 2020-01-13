<template>
    <div class="container">
        <router-view></router-view>
        <router-link to="/" class="nav-item nav-link">Home</router-link>
        <router-link to="/allgameroom" class="nav-item nav-link">AllGamerooms</router-link>
        <router-link to="/addgameroom" class="nav-item nav-link">AddGameroom</router-link>
        
    </div>
</template>

<script>
    export default {}
</script>