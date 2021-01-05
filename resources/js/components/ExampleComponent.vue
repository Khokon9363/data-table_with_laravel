<template>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                users : [],

            }
        },
        created(){
            this.getUsers()
        },
        methods:{
            getUsers(){
                axios.get('/get_users')
                .then(response =>{
                    this.users = response.data
                })
                .catch(error =>{
                    console.log(error);
                })
            }
        }
    }
</script>
