<template>
  <v-app>
    <v-list>
      <template v-for="(item, index) in items">
        <v-divider :key="`div-${index}`"></v-divider>
        <v-list-item :key="index">
          <v-list-item-avatar>
            <v-img :src="`https://i.pravatar.cc/180?img=1`" size="40"></v-img>
          </v-list-item-avatar>
          <v-list-item-content>
            <v-list-item-title>aaaa</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </template>
    </v-list>
    <PostComment />
  </v-app>
</template>

<script>

import PostComment from '@/components/PostComment.vue'

export default {
  components: PostComment,
  data: () => ({
    items: {
      title: 'aa'
    },
    dialog: false,
    rssForm: {
      url: ''
    }
  })
}
</script>
