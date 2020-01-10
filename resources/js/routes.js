import StartPlayer from './components/StartPlayer.vue';
import AddPlayer from './components/AddPlayer.vue';
import Gameroom from './components/Gameroom.vue'; 

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
        name: 'gameroom',
        path: '/gameroom',
        component: Gameroom
    }
];