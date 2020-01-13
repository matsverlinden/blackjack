import StartPlayer from './components/StartPlayer.vue';
import AddPlayer from './components/AddPlayer.vue';
import AddGameroom from './components/AddGameroom.vue';
import AllGamerooms from './components/AllGamerooms.vue'; 
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: StartPlayer
    },
    {
        name: 'add',
        path: '/add',
        component: AddPlayer
    },
    {
        name: 'addgameroom',
        path: '/addgameroom',
        component: AddGameroom
    },
    {
        name: 'allgameroom',
        path: '/allgameroom',
        component: AllGamerooms
    }
];