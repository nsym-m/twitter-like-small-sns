<template>
  <v-app>
    <TimeLine :question="comments" />
    <PostComment />
  </v-app>
</template>

<script>
import TimeLine from '@/components/TimeLine.vue'
import PostComment from '@/components/PostComment.vue'

export default {
  components: {
    TimeLine,
    PostComment
  },
  data: () => ({
    comments: [],
    dialog: false,
    rssForm: {
      url: ''
    }
  }),
  async created () {
    await this.getComments()
  },
  methods: {
    async getComments () {
      try {
        const result = await axios.get('/api/v1/comment/all')
        if (result.data) {
          this.comments = result.data
        }
      } catch (err) {
        this.selected_users_error = true
        console.log(err.response.data)
      }
    }
  }
}
</script>
