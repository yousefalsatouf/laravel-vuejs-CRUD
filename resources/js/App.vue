// App.vue
<template>
    <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/posts" class="nav-link">Posts</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/create" class="nav-link">Create Post</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'login' }" class="nav-link">Login</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'register' }" class="nav-link">Register</router-link>
                </li>
                <li v-if="$auth.check()" class="pull-right">
                    <a href="#" @click.prevent="$auth.logout()">Logout</a>
                </li>
            </ul>
        </nav><br />
        <div class="container">
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
</style>

<script>

    export default{
    }
</script>
