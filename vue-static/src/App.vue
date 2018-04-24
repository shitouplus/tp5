<template>
  <div id="app">
    <app-header></app-header>
    <router-view/>
  </div>
</template>

<script>
  import AppHeader from './components/app-header'

  export default {
    name: 'App',
    components: {
      AppHeader
    }
  }
</script>

