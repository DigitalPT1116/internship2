<template>
<v-col
        class="mb-5"
        cols="12"
      >
        <h2 class="headline font-weight-bold mb-3">
          Button
        </h2>

        <v-row justify="center">
          <a
            v-for="(butt, i) in button"
            :key="i"
            :href="butt.href"
            class="subheading mx-3"
            target="_blank"
          >
            {{ butt.text }}
          </a>
        </v-row>
      </v-col>
</template>

<script>
  export default {
    name: 'ButtonCounter',

    data: () => ({
      button: [
        {
          text: 'button',
          href: '#',
        },
      ],
    }),
  }
</script>

