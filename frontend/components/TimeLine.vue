<template>
  <v-list>
    <template v-for="(comment, index) in comments">
      <v-divider :key="`div-${index}`" />
      <v-list-item :key="index">
        <v-list-item-avatar>
          <v-img :src="`{{ comment.profile_image }}`" size="40" />
        </v-list-item-avatar>
        <v-list-item-content>
          <v-list-item-title>{{ comment.content }}</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </template>
  </v-list>
</template>

<script>
export default {
  props: {
    comments: {
      type: Array,
      required: true
    }
  }
  // data: () => ({
  //   questionTypes: QreConstants.questionTypes,
  //   modal_dismiss: null
  // })
}
</script>
