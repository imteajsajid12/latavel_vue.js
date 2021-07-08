<template>
  <div id="app">
    <!-- <example-component></example-component> -->
    <div class="continer">
      <div class="row">
        <div class="col-md-8" id="printMe">
          <div class="table-responsive table--no-card m-b-40">
            <table
              name="cart"
              class="table table-borderless table-striped table-earning"
              v-if="show"
            >
              <thead>
                <tr>
                  <th colspan="2">id</th>
                  <th>name</th>
                  <th colspan="0">Quantity</th>
                  <th>Price</th>
                  <th>Item Total</th>
                </tr>
              </thead>
              <tr v-for="catagory in catagorys" :key="catagory.id">
                <td>
                  <a @click="deletecatagory(catagory.slug)" class="btn btn-danger btn-sm"
                    >x</a
                  >
                </td>
                <td>{{ catagory.id }}</td>
                <td>{{ catagory.name }}</td>
                <td>
                  {{ catagory.qty }}
                  <input type="text" v-model="catagory.qty" name="qty" hidden />
                </td>

                <td>${{ catagory.price }}</td>
                <td>${{ itemtotal(catagory) }}</td>
              </tr>

              <tr>
                <td colspan="5">Total</td>
                <td>${{ subtotal }}</td>
              </tr>
            </table>
          </div>
          <div v-if="!show">
            <img src="/image/bercode.gif" alt="Girl in a jacket" style="height: 300pt" />
          </div>
        </div>

        <!-- <div><img src="../image.barcodr.gif" /></div> -->

        <div class="col-md-4">
          <form @submit.prevent="editecatagory">
            <div class="form-grup">
              <label for="">Automatic</label>
              <input
                type="text"
                class="form-control"
                v-model="product.ss"
                autofocus
                required
              />
            </div>
          </form>
          <form @submit.prevent="editecatagory1">
            <div class="form-grup">
              <label for="">Manual</label>
              <input type="text" class="form-control" v-model="product.ss1" required />
            </div>
          </form>

          <div class="form-grup">
            <label for=""> Name</label>
            <input type="text" name="name" class="form-control" v-model="product.name" />
          </div>
          <div class="form-grup">
            <label for="">Quantity</label>
            <input
              type="number"
              name="slug"
              class="form-control"
              v-model="product.qty1"
            />
            <input
              type="number"
              name="slug"
              class="form-control"
              v-model="product.qty"
              hidden
            />
            <label for="">Price</label>
            <input
              type="text"
              name="price"
              class="form-control"
              v-model="product.price"
            />
          </div>

          <br />
          <button class="btn btn-primary" @click="creatcatagory">Save</button>
          <button
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#staticBackdrop"
            style="float: right"
          >
            Refresh
          </button>
          <!-- Button trigger modal -->

          <!-- Modal -->
          <div
            class="modal fade"
            id="staticBackdrop"
            data-backdrop="static"
            data-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Price</h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form @submit.prevent="refresh">
                  <div class="modal-body">
                    <span>Total Price</span>
                    <h3>${{ subtotal }}</h3>
                    <div class="form-grup">
                      <label for="">price</label>
                      <input
                        type="number"
                        class="form-control"
                        v-model="product.total_price"
                        q
                        required
                      />
                    </div>
                    <span>Return Back</span>
                    <h3>${{ Return_back }}</h3>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Payment</button>
                  </div>
                </form>
              </div>
            </div>
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
      user: null,

      product: {
        id: "",
        name: "",
        slug: "",
        qty1: "1",
        total_price: "",
        price: "",
      },

      catagorys: [],
      show: false,
    };
  },
  computed: {
    subtotal: function () {
      return this.catagorys.reduce((total, item) => {
        return total + item.qty * item.price;
      }, 0.0);
    },
    Return_back: function () {
      //   return this.subtotal((total, item) => {
      return this.product.total_price - this.subtotal;
      //   }, 0.0);
    },
  },
  methods: {
    creatcatagory() {
      if (this.product.qty < 1) {
        this.$toast.error({
          title: "waenning",
          message: "out of stock",
        });
      } else {
        axios.post("/api/catagory", {
          name: this.product.name,
          slug: this.product.slug,
          price: this.product.price,
          qty: this.product.qty,
          qty1: this.product.qty1,
        });
        console.log(this.product.name);
        this.read();

        this.clearcart();

        this.$toast.success({
          title: "Success",
          message: "Item add successfully",
        });
      }
    },
    read() {
      axios
        .get(`/api/catagory`)
        .then(({ data }) => {
          //console.log(data)
          this.catagorys = data;
        })
        .catch((err) => ocnsole.error(err));
    },
    editecatagory() {
      var kk = this.product.ss;
      (this.isInsert = false),
        axios.get(`/api/catagory/edit/${kk}`).then(({ data }) => {
          //console.log(data)
          this.product = data;
          if (this.product.qty < 1) {
            this.$toast.error({
              title: "waenning",
              message: "out of stock",
            });
          } else {
            this.creatcatagory();
            this.show = true;
          }
        });
    },
    editecatagory1() {
      var kk = this.product.ss1;
      (this.isInsert = false),
        axios.get(`api/catagory/edit/${kk}`).then(({ data }) => {
          //console.log(data)
          this.product = data;
          //   this.creatcatagory();
        });
    },
    updatecatagory() {
      var id = this.product.id;
      (this.isInsert = true),
        axios.post(`api/catagory/${id}/update`, {
          name: this.product.name,
          slug: this.product.slug,
        });

      this.$toast.success({
        title: "update",
        message: "update successfully",
      });
      this.read();
      this.clearcart();
    },

    deletecatagory(slug) {
      axios.post(`/api/catagory1/${slug}`).then(() => {});
      this.$toast.error({
        title: "waenning",
        message: "Delete Item",
      });
      this.read();
    },

    clearcart: function () {
      this.product.id = "";
      this.product.name = "";
      this.product.qty = "";
      this.product.price = "";
    },

    refresh() {
      axios.post(`api/data`);
      this.read();
      this.clearcart();
      this.print();
    },
    addQty: function (item) {
      Object.assign(item, {
        qty: parseInt(item.qty) + 1,
      });
    },
    removeQty: function (item) {
      Object.assign(item, {
        qty: parseInt(item.qty) - 1,
      });
    },
    itemtotal: function (item) {
      return item.qty * item.price;
    },
    print() {
      // Pass the element id here
      this.$htmlToPaper("printMe");
    },
  },

  mounted() {
    this.read();
  },
};
</script>

<!--vuejs end-->
