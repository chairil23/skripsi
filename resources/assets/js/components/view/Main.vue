<template>
    <section>
        
        <slider></slider>
        <side-bar></side-bar>
        <!-- <contents></contents> -->
        
    </section>
</template>

<script>
import SideBar from './partial/Sidebar'
import Contents from './partial/Contents'
import Slider from './partial/Slider'
export default {
  components: {
      Slider,
      SideBar,
      Contents
  }
}
</script>

