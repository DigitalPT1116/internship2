
<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <ButtonCounter msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
// @ is an alias to /src
import ButtonCounter from '@/components/ButtonCounter.vue'

export default {
  name: 'ButtonView',
  components: {
    ButtonCounter
  }
}
</script>

