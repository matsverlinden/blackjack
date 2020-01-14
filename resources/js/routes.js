import StartPlayer from './components/StartPlayer.vue';
import AddPlayer from './components/AddPlayer.vue';
import CreateGameroom from './components/CreateGameroom.vue';
import Gamerooms from './components/Gamerooms.vue'; 
import ShowGameroom from './components/ShowGameroom.vue'; 

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
        name: 'createroom',
        path: '/createroom',
        component: CreateGameroom
    },
    {
        name: 'gamerooms',
        path: '/gamerooms',
        component: Gamerooms
    },
    {
        name: 'showroom',
        path: '/showroom/:id',
        component: ShowGameroom
    }
    
];