<template>
  <v-dialog v-model="dialog" max-width="600px">
    <!-- ベント発火するコンポーネント -->
    <template v-slot:activator="{ on, attrs }">
      <transition name="fade">
        <v-btn v-on="on" v-bind="attrs" fixed fab bottom right color="#BDBDBD88" style="bottom: 100px">
          <v-icon color="white">mdi-plus-outline</v-icon>
        </v-btn>
      </transition>
    </template>

    <!-- ダイアログ本体 -->
    <v-card>
      <v-card-text>
        <v-container>
          <v-row>
            <v-col cols="12">
              <v-textarea label="RSS" v-model="rssForm.url" required></v-textarea>
            </v-col>
          </v-row>
        </v-container>
      </v-card-text>

      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn color="blue" text @click="dialog = false">Close</v-btn>
        <v-btn color="blue" text >追加</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>

export default {
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
