<template>
  <div id="app">
    <div class="continer">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive table--no-card m-b-40">
            <table name="cart" class="table table-borderless table-striped table-earning">
              <thead>
                <tr>
                  <th colspan="">id</th>
                  <th>Product_code</th>
                  <th>Name</th>

                  <th colspan="">Quantity</th>
                  <th>Price</th>
                  <th>Time_Date</th>
                </tr>
              </thead>

              <tr v-for="catagory in catagorys" :key="catagory.id">
                <td>{{ catagory.id }}</td>
                <td>{{ catagory.name }}</td>
                <td>{{ catagory.slug }}</td>
                <td>{{ catagory.qty }}</td>
                <td>{{ catagory.price }}</td>
                <td>{{ catagory.created_at }}</td>
              </tr>
            </table>
          </div>
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
    return {
      catagorys: [],
    };
  },
  methods: {
    read() {
      axios
        .get(`/api/show_catagory`)
        .then(({ data }) => {
          //console.log(data)
          this.catagorys = data;
        })
        .catch((err) => ocnsole.error(err));
    },
  },

  mounted() {
    this.read();
  },
};
</script>

<!--vuejs end-->
