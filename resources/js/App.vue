<template>

    <router-view />

</template>

<script>

    export default {
        name: "app",
        data(){
            return{
                req: axios.create({
                    baseUrl: BASE_URL
                })
            }
        }
    }
</script>


