<template>
  <v-btn color="blue" text @click="logout">
    logout
  </v-btn>
</template>

<script>
export default {
  middleware ({ store, redirect }) {
    if (!store.$auth.loggedIn) {
      redirect('/login')
    }
  },
  computed: {
    user: () => {
      return this.$auth.user
    }
  },
  methods: {
    logout: () => {
      this.$auth.logout()
    }
  }
}
</script>

<style lang="scss">
.container {
  margin: 50px auto;
  width: 300px;
  text-align: center;

  .button {
    margin-top: 30px;
  }
}
</style>
