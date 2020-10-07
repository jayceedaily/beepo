<template>
    <div class="container">
        <p>Hello, {{auth.name}}</p>
        <a @click="handleLogout" class="button">Logout</a>
    </div>
</template>

<script>
export default {
    name: 'IndexDashboard',
    props: ['auth'],
    methods: {
        handleLogout: function() {
            this.$inertia.post('/logout');

        }
    }
}
</script>

<style>

</style>
