<template>
<div id="app">
    <div class="container">
        <div class="row justify-content-center">
        <br>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Component</div>

                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br />
                       <!-- <p>{{ catagory.name }}</p> -->
                        <router-link to="/">Go to Home</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
  methods: {
        editecatagory(id){
                 axios.get(`/catagory/${id}/edit`).then(responce => {this.responce.data.name});
            },
  },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
