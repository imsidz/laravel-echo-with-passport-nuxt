<template>
  <div>
    <input type="text" v-model="form.email" />Email
    <br />
    <input type="password" v-model="form.password" />Password
    <br />
    <button class="btn btn-success" @click="submit">Submit</button>
  </div>
</template>

<script>
export default {
  middleware: "guest",
  data() {
    return {
      form: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    submit() {
      this.$auth
        .loginWith("local", {
          data: this.form
        })
        .then(response => {
          console.log(response);
        });
    }
  }
};
</script>