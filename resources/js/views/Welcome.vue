<template>
<div>
    <h1>welcome</h1>
    <router-link to="/help">help</router-link>
      <div class="q-ma-md">
    Fork and make your own!
    Do NOT use self-closing tags here on jsFiddle.
  </div>

  <q-btn color="primary" icon="warning" label="Notify" class="q-ma-md"></q-btn>
</div>
</template>

<script>
import { QBtn } from 'quasar';
export default {
    components: {
      QBtn,
    },
    mounted(){
        console.log(this)
    }
}
</script>