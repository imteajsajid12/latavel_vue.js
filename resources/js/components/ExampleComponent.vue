<template>
<div id="app">
<h1 style="
    text-align: center;
    color: darkslategrey;
">Single Page Application Vue.js + Laravel</h1>
<hr>
<br>
<br>
    <div class="continer">
        <div class="row">
 <div class="col-md-7">
        <table name="cart" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="2">id</th>
                    <th>First name</th>
                    <th colspan="">Last name</th>

                    <th>Action</th>
                </tr>
            </thead>

                <tr v-for="catagory in catagorys" :key="catagory.id">
                    <td><a  @click="deletecatagory(catagory.id)" class="btn btn-danger btn-sm">x</a></td>
                    <td >{{ catagory.id }}</td>
                    <td>{{ catagory.name }}</td>
                    <td>{{ catagory.slug }}</td>

                    <td>
                           <button class="btn btn-success btn-sm" @click="editecatagory(catagory.id)" >Edite</button>

                        <button  @click="deletecatagory(catagory.id)" class="btn btn-danger btn-sm" >x</button>
                        </td>



                    </tr>
                    </table>

    </div>

            <div class="col-md-4">
               <form v-if="isInsert" @submit.prevent="creatcatagory">

            <div class="form-grup">
            <label for="">First name</label>
            <input type="text" name="name" class="form-control" v-model="product.name" required>
            </div>

                <div class="form-grup">
                <label for="">Last name</label>
                <input type="text" name="slug" class="form-control"  v-model="product.slug" required >
            </div>



                    <br>
                    <button class="btn btn-primary">Save Item</button>
                     <button class="btn btn-primary" style="float: right;"  @click.prevent="refresh">Refresh</button>
        </form>
             <form v-if="!isInsert" @submit.prevent="updatecatagory">

            <div class="form-grup">
            <label for="">First name</label>
            <input type="text" name="name" class="form-control" v-model="product.name" required>
            </div>
              <div class="form-grup">
                <label for="">Last name</label>
                <input type="text" name="slug" class="form-control"  v-model="product.slug" required >
            </div>



                    <br>
                    <button class="btn btn-primary" @submit.prevent="updatecatagory">Update</button>

        </form>

            </div>

        </div>

    </div>

     <!-- <p>{{data.name }}</p> -->

</div>

</template>

<!--vuejs-->
<script>
export default {
data() {
 return{

     product:{
                     id:'',
                       name:'',
                       slug:''
                    },

     catagorys: [],
  isInsert:true,
 countDown : 10


 }

},
methods: {

    creatcatagory(){
        axios.post('api/catagory',{name:this.product.name,
        slug:this.product.slug});
      console.log(this.product.name);
         this.read();

     this.clearcart();

       this.$toast.success({
    title:'Success',
    message:'Item add successfully',

})

    },


         read() {
                axios.get(`/api/catagory`).then(({ data }) => {
                    //console.log(data)
                    this.catagorys= data;

                })
                    .catch((err) => ocnsole.error(err));

            },
            editecatagory(id){
                this.isInsert=false,
                 axios.get(`/api/catagory/${id}/edit`).then(({ data }) => {
                    //console.log(data)
                     this.product= data;
                    console.log(data);
                    this.read();

                });

                //.then(responce => {console.log(responce)});
            },
            updatecatagory(){


                  var id= this.product.id;
                   this.isInsert=true,
             axios.post(`api/catagory/${id}/update`,{name:this.product.name,
        slug:this.product.slug});

       this.$toast.success({
       title:'update',
        message:'update successfully',

          })
        this.read();
        this.clearcart();

            },

            deletecatagory(id){

                  axios.delete(`/api/catagory/${id}`).then(() =>{
                         this.$toast.success({
                          title:'Delete',
                          message:'Delete Successfully.'

                      });
                           this.read();
                           this.clearcart();
                           this.countDownTimer();


                      });

                  },

         clearcart: function(){
               this.product.id = ''
                this.product.name = ''
                 this.product.slug = ''

         },
          countDownTimer() {
       if(this.countDown > 0) {
             this.countDownTimer();
       }
                    setTimeout(() => {
                        this.countDown -= 1
                        this.countDownTimer()
                    }, 1000)

                },
 refresh(){
     this.read();
 },






        },

             mounted() {
            this.read();
            this.deletecatagory();
            this.clearcart();
            this.countDownTimer();
this.deletecatagory();
        },


        }








</script>

<!--vuejs end-->
