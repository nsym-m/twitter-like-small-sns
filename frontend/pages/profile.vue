<template>
  <LogoutUser />
</template>

<script>
import LogoutUser from '@/components/LogoutUser.vue'

export default {
  components: LogoutUser,
  data () {
    return {
      dialog: false,
      rssForm: {
        url: ''
      }
    }
  },
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
