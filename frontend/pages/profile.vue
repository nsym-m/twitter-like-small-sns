<template>
  <v-app>
    <LogoutUser />
    <Profile />
    <TimeLine />
  </v-app>
</template>

<script>
import TimeLine from '@/components/TimeLine.vue'
import Profile from '@/components/Profile.vue'
import LogoutUser from '@/components/LogoutUser.vue'

export default {
  components: {
    TimeLine,
    LogoutUser,
    Profile
  },
  data: () => ({
    dialog: false,
    rssForm: {
      url: ''
    }
  }),
  methods: {
    addFeed: () => {
      // // 記事を追加
      // const res1 = await this.$axios.$post('/api/v1/feeds', {
      //   feed: this.rssForm
      // })
      // this.dialog = false
      // this.rssForm = ''
    }
  }
}
</script>
