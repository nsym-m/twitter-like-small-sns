<template>
  <v-app>
    <v-card width="400px" class="mx-auto mt-5">
      <v-card-title>
        <h1 class="display-1">
          ログイン
        </h1>
      </v-card-title>
      <v-card-text>
        <v-form>
          <v-text-field label="ユーザ名" />
          <v-text-field label="パスワード" />
        </v-form>
      </v-card-text>
    </v-card>
  </v-app>
</template>

<script>
export default {
  date: () => {},
  methods: {
    login: async () => {
      try {
        const response = await this.$auth.loginWith('local', { data: this.form })
        console.log(response)
      } catch (error) {
        console.log(error)
      }
    }
  }
}
</script>

<style></style>
