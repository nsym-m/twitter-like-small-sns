<template>
  <v-app>
    <v-avatar size="80" class="mb-3 avatar">
      <img
        src="`{{user.profile_image}}`"
        alt="avatarImage"
        class="avatar-image"
      >
    </v-avatar>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    user: {}
  })
}
</script>
